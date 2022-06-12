

@extends('layout')

@section('page')
    <div class="container">
        <div class="heading">
                    <h5 class="mb-5 bg-light text-center text-dark">Best Selling Now</h5>
                </div>
                <h3 class="text-center font-weight-bold bg-light"><b class="h5 text-success" > {{ Session:: get('success') }}</b> </h3>
        <div class="row pt-4">
           


                <div class="col-sm-3">
                    <div class="listimg listimg_2_of_1">
                        <a href="preview.html"> <img style="height:160px" src="images/pic4.png" alt="" /></a>
                    </div>
                    <div class="text list_2_of_1">
                        <h2>Iphone</h2>
                        <p style="height:50px">Lorem ipsum dolor sit amet sed do eiusmod.</p>
                       
                        <form class="d-inline-block" action="{{url('add-cart/25')}}" method="post"> @csrf
                             <input hidden type="number" max="10" min="0" class="buyfield" name="quantity" value="1"/>
                             
                        <input type="submit" class="btn btn-info my-2 d-inline" name="add_cart" value="Add To Cart"/> </form>

                    </div>
                </div>


                <div class="col-sm-3">
                    <div class="listimg listimg_2_of_1">
                        <a href="preview.html"><img style="height:160px" src="images/pic3.png" alt="" / ></a>
                    </div>
                    <div class="text list_2_of_1">
                        <h2>Samsung</h2>
                        <p style="height:50px">Lorem ipsum dolor sit amet, sed do eiusmod.</p>

                        <form class="d-inline-block" action="{{url('add-cart/11')}}" method="post"> @csrf
                             <input hidden type="number" max="10" min="0" class="buyfield" name="quantity" value="1"/>

                        <input type="submit" class="btn btn-info my-2 d-inline" name="add_cart" value="Add To Cart"/> </form>
                    </div>
                </div>
          


            <div class="col-sm-3">
                
                    <div class="listimg listimg_2_of_1">
                        <a href="preview.html"> <img style="height:160px" src="images/pic3.jpg" alt="" /></a>
                    </div>
                    <div class="text list_2_of_1">
                        <h2>Acer</h2>
                        <p style="height:50px">Lorem ipsum dolor sit amet, sed do eiusmod.</p>
                        
                        <form class="d-inline-block" action="{{url('add-cart/24')}}" method="post"> @csrf
                             <input hidden type="number" max="10" min="0" class="buyfield" name="quantity" value="1"/>

                        <input type="submit" class="btn btn-info my-2 d-inline" name="add_cart" value="Add To Cart"/> </form>
                    </div>
                </div>
                <div class="col-sm-3">
                  
                        <a href="preview.html"><img style="height:160px" src="images/moto.jpg" alt="" /></a>
                    

                    <div class="text list_2_of_1">
                        <h2>New Motorola E5</h2>
                        <p style="height:50px">Lorem ipsum dolor sit amet, sed do eiusmod.</p>
                        
                        <form class="d-inline-block" action="{{url('add-cart/22')}}" method="post"> @csrf
                            <input hidden type="number" max="10" min="0" class="buyfield" name="quantity" value="1"/>

                        <input type="submit" class="btn btn-info my-2 d-inline" name="add_cart" value="Add To Cart"/> </form>
                    </div>
                </div>
            </div>


            <div class="clear"></div>
        </div>


       
        <div class="clear"></div>
    </div>

    <div class="main">
        <div class="container">
            <div class="content_top">
                <div class="heading">
                   <h5 class="my-5 bg-light text-center text-dark">Feature Products</h5>
                </div>
                <div class="clear"></div>
            </div>

            <div class="">
             <div class="row mt-4">

                @foreach($product as $product)
                <div class="col-sm-3 my-5">
                    <a href="preview-3.html">@foreach($images as $image) @if($product->id == $image->product_id) <img style="width:180 px; height:150px" src="{{ asset('../'.$image->image_name) }}" alt="" /> @break @endif @endforeach </a>

                    <h2 >{{ $product->pro_name }} </h2>
                    <p class="mt-3">{{ $product->description }}</p>

                    <p ><span class=
                    "bg-dark px-4 py-2 mt-3 text-light font-weight-bold rounded price">${{$product->price }}</span></p>
                    <div class="mt-3"><span><a href="{{url('details/'.$product->id)}}" class="btn btn-success py-1 w-100">Details</a></span></div>
                </div>
                @endforeach
               
            </div>



            <div class="content_bottom">
                <div class="heading">
                     <h5 class="my-5 bg-light text-center text-dark">New Produts</h5>
                </div>
                <div class="clear"></div>
            </div>

              <div class="container">
         <div class="row mt-5">

                @foreach($newproduct as $pro)
                <div class="col-sm-3 my-5">
                    <a href="preview-3.html">@foreach($images as $image) @if($pro->id == $image->product_id) <img style="width:180; height:150px" src="{{ asset('../'.$image->image_name) }}" alt="" /> @break @endif @endforeach </a>

                    <h2>{{ $pro->pro_name }} </h2>
                    <p class="mt-3">{{ $pro->description }}</p>
                    <p><span class="bg-dark px-4 mt-3 py-2 text-light font-weight-bold rounded ">${{$pro->price }}</span></p>
                    <div class="mt-3"><span><a href="{{url('details/'.$product->id)}}" class="btn btn-success py-1 w-100">Details</a></span></div>
                </div>
                @endforeach
               
            </div>
        </div>   </div>
    </div>
    </div>
@endsection


@section('title')
   Home

@endsection
