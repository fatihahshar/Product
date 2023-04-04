@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Show Product') }}</div>

                <div class="card-body">
                    <div class="form-group">
                        <label> Product Name : </label>
                        <input type="text" value="{{$product->productname}}" name="productname" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label> Description : </label>
                        <textarea name="description" class="form-control" readonly>{{$product->productdesc}}</textarea>
                    </div>
                    <div class="form-group">
                        <label> Quantity : </label>
                        <input type="number" value="{{$product->quantity}}" name="quantity" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        @if($product->image)
                        <a target="_blank" href="{{ $product->image_url}}" class="btn btn-link">
                            Open Image
                        </a>
                        @endif
                    </div><br>
                    <a href="{{route('products.index')}}" class="btn btn-primary">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
