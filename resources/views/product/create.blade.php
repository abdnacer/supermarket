@extends('product.layout')

@section('content')

<section class="get_in_touch">
    <form action="{{route('product.store')}}" method="POST">
        @csrf
        <h1 class="title">Formulaires Create</h1>
        <div class="container">
            <div class="contact-form row">
                <div class="form-field col-lg-12">
                    <label for="name" class="label">Name : </label>
                    <input id="name_product" class="input-text" type="text" name="name_product">
                </div>
                <div class="form-field col-lg-12">
                    <label for="name" class="label">Price : </label>
                    <input id="price" class="input-text" type="number" name="price">
                </div>
                <div class="form-field col-lg-12">
                    <label for="detail" class="label">Detail : </label>
                    <textarea class="input-text" name="detail" rows="3"></textarea>
                    <!-- <input id="detail" class="input-text" type="text" name=""> -->
                </div>
                <div class="form-field col-lg-12">
                    <input class="submit-btn" type="submit" value="SAVE" name="create"> 
                </div>
            </div>
        </div>
        </form>
    </section>
@endsection