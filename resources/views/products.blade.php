@extends('layout')

@section('page')
    <div class="main">
        <div class="container">
            <div class="content_top">
                <div class="heading">
                    <h2 class="my-5 bg-light text-warning py-3 text-center">All Products</h2>
                </div>
                <div class="clear"></div>
            </div>
            <div class="row mt-4">

                @foreach($product as $product)
                <div class="col-sm-3 my-5">
                    <a href="preview-3.html">@foreach($images as $image) @if($product->id == $image->product_id) <img style="width:180; height:150px" src="{{ asset('../'.$image->image_name) }}" alt="" /> @break  @endif @endforeach </a>

                    <h2>{{ $product->pro_name }} </h2>
                    <p class="mt-3">{{ $product->description }}</p>
                    <p><span class="bg-dark mt-3 px-4 py-2 text-light font-weight-bold rounded ">${{$product->price }}</span></p>
                    <div class="mt-3"><span><a href="{{url('details/'.$product->id)}}" class="btn btn-success py-1 w-100">Details</a></span></div>
                </div>
                @endforeach
               
            </div>


           
            
              
            </div>
        </div>
    

@endsection
