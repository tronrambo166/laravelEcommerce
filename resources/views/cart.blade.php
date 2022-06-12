
@extends('layout')

@section('page')
    <div class="content-fluid">
         <h2 class="bg-warning py-1 text-center my-4 ">Your Cart </h2>

         <h3 class="text-center font-weight-bold bg-light"><b class="h5 text-success" > {{ Session:: get('success') }}</b> </h3>

        <div class="content">
            <div class="cartoption">
                <div class="row px-4">
                   
                    <table class="tblone " width="62%">
                        <tr>
                            <th width="20%">Product Name</th>
                            <th width="15%">Image</th>
                            <th width="15%">Price</th>
                            <th width="30%">Quantity</th>
                            <th width="15%">Total Price</th>
                            <th width="5%">Action</th>
                        </tr>

                     @php $iq_all=''; $c=0;  $sub=0; $vat= 1.10; $t_pro=0; $t_quan=0; @endphp
                       @if(count($cart)>0) @foreach($cart as $product)  @php $c++; @endphp
                        <tr>
                            <td>{{ $product->pro_name }}</td>

                            
                            @foreach($images as $image)
                            @if($product->id == $image->product_id)
                            <td><img width="110px" height="70px" src="{{ asset('../'.$image->image_name) }}" alt=""/></td> @break  @endif @endforeach 

                            <td>${{$product->price }}</td>
                            <td >
                                <form action="{{url('up_quantity/'.$product->id)}}" method="post"> @csrf

                                <input  type="number" name="quantity" value="{{ $product->quantity }}"/>
                                    <input type="submit" name="submit" value="Update"/>
                                </form>
                            </td> @php $t_price= $product->price*$product->quantity @endphp
                            <td>${{$t_price}}</td>
                            <td> <a onclick="return confirm('Remove from cart ?');"
                 href="{{url('delete_cart/'.$product->id)}}"><b class="text-danger ml-2 btn btn-dark">X</b></a></td>
                      
                   @php $sub=$sub+$t_price; $grand=$sub*$vat;  $t_pro++; $t_quan=($t_quan+$product->quantity); 
                   $iq_all=$iq_all.$product->id.','.$product->quantity.'-' @endphp        
  </tr>@endforeach
                    </table>
                    

                    <table class="ml-auto" style="float:right;text-align:left;" width="30%">
                        <tr>
                            <th>Sub Total : </th>
                            <td>${{$sub}}</td>
                        </tr>
                        <tr>
                            <th>VAT(10%) : </th>
                            <td>${{$sub*.10}}</td>
                        </tr>
                        <tr>
                            <th>Grand Total :</th>
                            <td>${{$grand}} </td>
                        </tr>
                    </table>
                </div>

                 <div class="py-5 my-5"></div>

                <div class="shopping float-right">
                    <div class="shopleft">
                        <a href="{{route('home')}}"> <img src="images/shop.png" alt="" /></a>
                    </div>
                    <div class="shopright"> @php $grand=Crypt:: encrypt($grand);
                        $t_pro=Crypt:: encrypt($t_pro);
                        $t_quan=Crypt:: encrypt($t_quan);
                     @endphp

                        <a href="{{url('payments/'.$grand.'/'.$t_pro.'/'.$t_quan.'/'.$iq_all)}}"> <img src="images/check.png" alt="" /></a>
                    </div> @else

                     <h4 class="my-5 w-100 bg-light text-center text-danger">Cart is Empty!</h4>

                    @endif
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    </div>

@endsection
