@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Update Product Details') }}</div>

                <div class="card-body"> 
                    <form method="POST" action="{{route('products.update',$product)}}">
                        @csrf
                    <div class="form-group">
                        <label> Product Name : </label>
                        <input type="text" value="{{$product->productname}}" name="productname" class="form-control">
                    </div>
                    <div class="form-group">
                        <label> Description : </label>
                        <textarea name="productdesc" class="form-control">{{$product->productdesc}}</textarea>
                    </div>
                    <div class="form-group">
                        <label> Quantity : </label>
                        <input type="number" value="{{$product->quantity}}" name="quantity" class="form-control">
                    </div><br>
                    <div class="form-group">
                      <button type='submit' class="btn btn-primary">Update</button>&nbsp;
                      <a href="{{route('products.index')}}" class="btn btn-primary">Cancel</a>
                    </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
