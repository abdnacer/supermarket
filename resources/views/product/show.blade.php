@extends('product.layout')

@section('content')
<!-- jhjhjhjj -->
<div class="container">
    <div class="card">
        <div class="card-body">
            <p class="card-text"> 
            <span><a href="{{route('product.index')}}" class="btn btn-success" role="button">Back</a>
            </span>Product Name : {{$product->name_product}} </p>
        </div>
    </div>
</div>

<section class="get_in_touch">
    <form action="{{route('product.update', $product->id)}}" method="POST">
        @csrf
        @method('PUT')
        <h1 class="title">Formulaires Show</h1>
        <div class="container">
            <div class="contact-form row">
                <div class="form-field col-lg-12">
                    <label for="name" class="input-text">Name Product : {{$product->name_product}} </label>
                    <!-- <input id="name_product" class="input-text" value="{{$product->name_product}}" type="text" name="name_product"> -->
                </div>
                <div class="form-field col-lg-12">
                    <label for="name" class="input-text">Price : {{$product->price}}</label>
                    <!-- <input id="price" class="input-text" value="{{$product->price}}" type="number" name="price"> -->
                </div>
                <div class="form-field col-lg-12">
                    <label for="detail" class="input-text">Detail : {!!$product->detail!!}</label>
                    <!-- <textarea class="input-text" name="detail" rows="3">{!!$product->detail!!}
                    </textarea> -->
                    <!-- <input id="detail" class="input-text" type="text" name=""> -->
                </div>
                <!-- <div class="form-field col-lg-12">
                    <input class="submit-btn" type="submit" value="Update" name="update"> 
                </div> -->
            </div>
        </div>
        </form>
    </section>
@endsection