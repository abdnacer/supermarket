@extends('product.layout')

@section('content')

<div class="container" >
        <!-- <div class="table-wrapper"> -->
            <div class="table-title" style="padding-top:5%;">
                <div class="row">
                    <div class="col-sm-6">
                        <h2>Table User </h2>
                    </div>
                    <div class="col-sm6">
                        <a href="{{route('product.create')}}" class="btn btn-success" role="button">Add</a>
                        <!-- <a href="dddEmployeeModal" class="btn btn-danger ed-de" role="button">Delete</a> -->
                    </div>
                </div>
            </div>

            <div class="container">
                @if($message = Session::get('success'))
            <div class="alert alert-primary" role="alert">
                {{$message }}
            </div>
            @endif
            </div>

            <table class="table table-striped table-hover" >
                <thead>
                    <tr>
                        <th>
                            
                        </th>
                        <th>#</th>
                        <th>Name Product</th>
                        <th>Price</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    
                    @foreach ($products as $item)
                         <tr>
                         <td>
                            <span clas="custopm-checkbox">
                                <input type="checkbox" id="checkbox1" name="option[]" value="1">
                                <label for="checkbox1"></label>
                            </span>
                        </td>
                             <th scope="row">{{$item->id}}</th>
                             <td>{{$item->name_product}}</td>
                             <td>{{$item->price}} DH</td>
                             <td>
                             <div class="row">
                                    <div class="col-sm">
                                 <a class="btn btn-success ed-de" href="{{route('product.edit',$item->id)}}">Edit</a>
                                    </div>
                                    <div class="col-sm">
                                 <a class="btn btn-primary ed-de" href="{{route('product.show',$item->id)}}">Show</a>
                                    </div>
                                    <div class="col-sm">
                                 <a class="btn btn-danger ed-de" href="{{route('soft.delete',$item->id)}}">Delete</a>
                                    </div>
                                    <div class="col-sm">
                                 
                                 </div>
                                 </div>

                             </td>
                         </tr>
                    @endforeach
                   
                </tbody>
                </table>
                {!!$products->links()!!}
    </div>

@endsection

