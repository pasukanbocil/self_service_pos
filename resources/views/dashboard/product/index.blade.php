@extends('dashboard.main')
@section('maincontent')
    <section class="section">
        <div class="section-header">
            <h1>Data Product</h1>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <a href="/dashboard/products/create" class="btn btn-primary">Crate Data Products</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped" id="table-1">
                                <thead>
                                    <tr>
                                        <th class="text-center">
                                            No.
                                        </th>
                                        <th>Name </th>
                                        <th>Description</th>
                                        <th>Image</th>
                                        <th>Price</th>
                                        <th>Stock</th>
                                        <th>Category</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($products as $product)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $product->name }}</td>
                                            <td>{{ $product->descriptions }}</td>
                                            <td><img src="{{ asset('storage/' . $product->image) }}"
                                                    alt="Product Image"style="width: 250px; height: 250px;"></td>
                                            <td>{{ $product->price }}</td>
                                            <td>{{ $product->stock }}</td>
                                            <td>{{ $product->category->category_name }}</td>
                                            <td>
                                                <a href="/dashboard/food/{{ $product->id }}/edit"
                                                    class="btn btn-warning">Edit</a>
                                                <a href="/dashboard/food/{{ $product->id }}/delete"
                                                    class="btn btn-danger">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
