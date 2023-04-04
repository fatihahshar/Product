@extends('layouts.app') 


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            @if (session()->has('alert'))
                    <div class="alert {{ session()->get('alert-type')}}" role="alert">
                        {{session()->get('alert')}}
                    </div>
                @endif
                <div class="card-header">{{ __('PRODUCT LIST') }}
                <form action="" method="">
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <input type="text" class="form-control mb-2"  name="keyword" value="{{ request()->get('keyword')}}">
                                </div>
                                <div class="col-sm-3">
                                    <button type="submit" class="btn btn-primary">Search</button>
                                </div>
                        </div>
                        </form>
                </div>
                
                    <div class="card-body">
                        <a href="{{route('products.create')}}" class="btn btn-dark">Add New Product</a>
                        <table class="table">
                            <thead>
                                <tr style="text-align:center;">
                                    <th>ID</th>
                                    <th>Product Name</th>
                                    <th>Product Description</th>
                                    <th>Product Quantity</th>
                                    <th colspan='3'>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($products as $product)
                                <tr>
                                    <td>{{ $product->id }}</td>
                                    <td>{{ $product->productname }}</td>
                                    <td>{{ $product->productdesc }}</td>
                                    <td>{{ $product->quantity}}</td>
                                    <td ><a href="{{route('products.show',$product)}}" class="btn btn-secondary">Show</a></td>
                                    <td><a href="{{route('products.edit',$product)}}" class="btn btn-warning">Edit</a></td>
                                    <td><a  onclick="return confirm('Are you sure?')" href="{{route('products.delete', $product)}}" class="btn btn-danger">Delete</a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $products->links()}}
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection