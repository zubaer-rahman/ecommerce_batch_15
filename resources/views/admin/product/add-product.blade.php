@extends('admin.master')
@section('title')
    Admin - Add Product
@endsection
@section('content')
    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header"><h3 class="text-center font-weight-light my-4">Add product</h3></div>
                        <div class="card-body">
                            <form action="{{ route('new.product') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-floating mb-3">
                                    <input class="form-control" name="name" type="text" placeholder="Name" />
                                    <label> Name </label>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                            <input class="form-control" name="category_name" type="text" placeholder="Category Name" />
                                            <label> Category Name </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input class="form-control" name="brand_name" type="text" placeholder="Brand Name" />
                                            <label> Brand Name </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" name="price" type="text" placeholder="Price" />
                                    <label> Price </label>
                                </div>
                                <div class="form-floating mb-3">
                                    <textarea class="form-control" name="description" type="text" placeholder="Description"> </textarea>
                                    <label> Description </label>
                                </div>
                                <div class="mb-3">
                                    <label class="mb-1" >Image</label>
                                    <input class="form-control" name="image" type="file"/>
                                </div>
                                <div class="mt-4 mb-0">
                                    <div class="d-grid"><button type="submit" class="btn btn-primary btn-block"> Submit </button></div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
