@extends('layout')

@section('page')
    <div class="main">
        <div class="container">
          

                @foreach($brands as $brand)
                <div class="heading ">
                    <h3 class="my-5 bg-info text-center">{{ $brand->brand_name }}</h3>
                </div>
                <div class="clear"></div>
           
            <div class="row mt-4">  

                @foreach($products as $product) @if($brand->id == $product->brand_id)
                <div class="col-sm-3 my-5">
                    <a href="preview-3.html">@foreach($images as $image) @if($product->id == $image->product_id) <img style="width:180; height:150px" src="{{ asset('../'.$image->image_name) }}" alt="" /> @break @endif @endforeach </a>

                    <h2>{{ $product->pro_name }} </h2>
                    <p class="mt-3">{{ $product->description }}</p>
                    <p><span class="bg-dark px-4 mt-3 py-2 text-light font-weight-bold rounded ">${{$product->price }}</span></p>
                   <div class="mt-3"><span><a href="{{url('details/'.$product->id)}}" class="btn btn-success py-1 w-100">Details</a></span></div>
                </div>

                @endif
                  @endforeach
                
               
            </div>
            @endforeach

               
            
               
             </div>
              </div>

@endsection
