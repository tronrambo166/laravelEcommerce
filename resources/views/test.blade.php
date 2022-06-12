





@extends('layout')

@section('page')
    <div class="container">
        <div class="row pt-4 "> 
          <b>NAME:: <b> @isset($name) {{$name}} <br> @endisset
            <b>AGE:: <b> <br>
                <b>Country:: <b> <br><br>
                    
                    @foreach($users as $user)
                    <h2> Users ID={{$user->id}}</h2> <br>
                        
                     <b>NAME:: <b>  {{$user->name}} <br>
                     <b>Email:: <b>  {{$user->email}} <br>

                        @endforeach





    </div>  </div>
    @endsection

   








<script type="text/javascript">
    $(document).ready(function() {
        /*
        var defaults = {
              containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
         };
        */

        $().UItoTop({ easingType: 'easeOutQuart' });

    });
</script>
<a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>
<link href="{{asset('assets/css/flexslider.css')}}" rel='stylesheet' type='text/css' />
<script defer src="{{asset('assets/js/jquery.flexslider.js')}}"></script>
<script type="text/javascript">
    $(function(){
        SyntaxHighlighter.all();
    });
    $(window).load(function(){
        $('.flexslider').flexslider({
            animation: "slide",
            start: function(slider){
                $('body').removeClass('loading');
            }
        });
    });
</script>
</body>
</html>
