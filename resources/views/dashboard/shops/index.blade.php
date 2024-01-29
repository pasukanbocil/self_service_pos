@extends('dashboard.main')
@section('maincontent')
    <section class="section">
        <div class="section-header">
            <h1>Products Shops</h1>
        </div>
        <div class="section-body">
            <div class="row">
                @foreach ($products as $product)
                    <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                        <article class="article">
                            <div class="article-header">
                                <div class="article-image" data-background="{{ asset('storage/' . $product->image) }}">
                                </div>
                                <div class="article-title">
                                    <h2 class="text-white">{{ $product->name }}</h2>
                                </div>
                            </div>
                            <div class="article-details">
                                <p>Rp. {{ number_format($product->price, 0, ',', '.') }}</p>
                                <p>Stock : {{ $product->stock }}</p>
                                <div class="article-cta">
                                    <form action="/carts" method="POST">
                                        @csrf
                                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                                        <button type="submit" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>
                                            Add To Cart</button>
                                    </form>
                                </div>
                            </div>
                        </article>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
