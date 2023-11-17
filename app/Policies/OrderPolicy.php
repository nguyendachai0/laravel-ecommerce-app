<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Order;

class OrderPolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }
    public function viewOrder(User $user, Order $order)
    {
        return $user->id === $order->user_id;
    }
}
