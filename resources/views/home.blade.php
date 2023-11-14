@extends ('layouts.home')
@section('content')
<!-- End Mobile Header -->
@include('layouts.header')
<!-- End Header Area -->


<!-- Start Main Area -->

@include('layouts.main')

<!-- End Main Area -->

<!-- Start Footer Section -->
@include('layouts.footer')
<!-- End Footer Section -->

<!-- material-scrolltop button -->
<button class="material-scrolltop" type="button"></button>

<!-- Start Modal Add cart -->
@include('layouts.modalAddCart');
<!-- End Modal Add cart -->

<!-- Start Modal Quickview cart -->
@include('layouts.modalQuickviewCart');

<!-- End Modal Quickview cart -->
@endsection