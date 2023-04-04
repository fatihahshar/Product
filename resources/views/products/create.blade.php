@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Add New Product') }}</div>

                <div class="card-body">
                <form method="POST" action="{{route('products.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label> Product Name : </label>
                        <input type="text" class="form-control" name="productname" placeholder="Enter product name here">
                    </div>
                    <div class="form-group">
                        <label> Product Description : </label>
                        <textarea class="form-control" name="productdesc" placeholder="Enter product description here"></textarea>
                    </div>
                    <div class="form-group">
                        <label> Quantity : </label>
                        <input type="number" id="quantity" name="quantity" min="0" max="10" class="form-control"  placeholder="Enter product quantity here">
                    </div>
                    <div class="form-group">
                        <label> Upload Image :</label>
                        <input type="file" class="form-control" name="attachment">
                    </div><br>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Save</button>&nbsp;
                        <a href="{{route('products.index')}}" class="btn btn-primary">Back</a>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
