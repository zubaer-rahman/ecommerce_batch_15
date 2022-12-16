@extends('admin.master')
@section('title')
    admin- Manage Product
@endsection
@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4"> Manage Products </h1>
            <div class="card mb-4">
                <div class="card-body">
                     <a href="{{ route('add.product') }}" class="btn btn-success"> Add Product </a>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    All Products
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                        <tr>
                            <th>Sl</th>
                            <th>Name</th>
                            <th>Category Name</th>
                            <th>Brand Name</th>
                            <th>Price</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>Action</th>

                        </tr>
                        </thead>
                        <tbody>
                            @php $i=1 @endphp
                            @foreach($products as $product)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->category_name }}</td>
                                    <td>{{ $product->brand_name }}</td>
                                    <td>{{ $product->price }}</td>
                                    <td>{{ $product->description }}</td>
                                    <td>
                                        <img src="{{ asset($product->image) }}" alt="product image" height="35" width="75">
                                    </td>
                                    <td>{{ $product->status == 1? 'published' : 'unpublished' }}</td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="#" class="btn btn-primary"> Edit </a>
                                            @if($product->status == 1)
                                                <a href="{{ route('status', ['id'=>$product->id]) }}" class="btn btn-warning ms-1 me-1"> Unpublish </a>
                                            @else
                                                <a href="{{ route('status', ['id'=>$product->id]) }}" class="btn btn-success ms-1 me-1"> Publish </a>
                                            @endif
                                            <a href="#" class="btn btn-danger"> Delete </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
@endsection
