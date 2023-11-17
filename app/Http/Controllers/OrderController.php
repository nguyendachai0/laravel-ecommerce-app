<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\CartItem;
use App\Models\OrderItem;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class OrderController extends Controller
{
    public function index()
    {

        // Get the authenticated user
        // Get the authenticated user
        $user = Auth::user();

        // Get the user's orders with order items and product details
        $orders = Order::with('items.product', 'orderDetails')
            ->where('user_id', $user->id) // Assuming your Order model has a 'user_id' column
            ->get();


        // Return the order history view with the user's orders

        return view('orders.index', compact('orders'));
    }

    /**
     * Show the form for creating a new order.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Retrieve the items the user wants to order (you need to implement this)
        $cartItems = (new CartItem)->getCartById(auth()->id());

        // Calculate the total amount based on cart items
        $totalPrice = (new CartItem)->getTotalPriceInCart(auth()->id());

        // Create a new order record in the database
        $order = Order::create([
            'user_id' => Auth::id(),
            'total_price' => $totalPrice,
            'status' => 'pending', // You can set the initial status here
        ]);

        // Add order items to the order
        foreach ($cartItems as $cartItem) {
            OrderItem::create([

                'order_id' => $order->id,
                'product_id' => $cartItem['product_id'],
                'quantity' => $cartItem['quantity'],
                'unit_price' => $cartItem['product']['price'],
            ]);
        }
        $orderDetails = OrderDetail::create([
            'first_name' => $request->input('first_name'),
            'order_id' => $order->id,
            'last_name' => $request->input('last_name'),
            'phone' => $request->input('phone'),
            'address1' => $request->input('address1'),
            'address2' => $request->input('address2'),
            'city' => $request->input('city'),
            'state' => $request->input('state'),
            'zipcode' => $request->input('zipcode'),
            'country_code' => $request->input('country_code'),
        ]);

        // Clear the user's cart (you need to implement this)

        // Redirect to the order confirmation page
        return redirect()->route('orders.show', ['order' => $order->id]);
    }

    /**
     * Display the specified order.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        if (Gate::denies('view-order', $order)) {
            abort(403, 'Unauthorized action.');
        }
        // Ensure the authenticated user can only view their own orders

        // Load the order details with order items and products
        $order->load('items.product');

        // Return the order details view
        return view('orders.show', compact('order'));
    }
}
