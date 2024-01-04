@extends('dashboard.main')
@section('maincontent')
    <section class="section">
        <div class="section-header">
            <h1>Cart Detail</h1>
        </div>
        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible show fade">
                <div class="alert-body">
                    <button class="close" data-dismiss="alert">
                        <span>&times;</span>
                    </button>
                    {{ session('success') }}
                </div>
            </div>
        @endif

        <div class="section-body">
            @php
                $total = 0;
            @endphp
            @foreach ($carts as $cart)
                @php
                    $total += $cart->qty * $cart->product->price;
                @endphp
                <div>
                    <h4>Product Name: {{ $cart->product->name }}</h4>
                    <p>Quantity: {{ $cart->qty }}</p>
                    <p>Price: Rp.{{ number_format($cart->product->price) }}</p>
                    <p>Total Price: Rp.{{ number_format($cart->qty * $cart->product->price) }}</p>
                </div>
            @endforeach
            <h4>All Total: Rp.{{ number_format($total) }}</h4>
            <form action="#" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Remove All</button>
            </form>
        </div>
    </section>
@endsection
