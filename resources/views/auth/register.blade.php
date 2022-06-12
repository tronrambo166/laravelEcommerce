<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">


<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

       {{--  <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>  --}}


                        <div class="container col-lg-8" style="min-height:1000px">
            
            <div>
                <h3 class="font-arial bg-primary text-center font-italic font-weight-bold"><b>Registration Form</b></h3>
                
                
<div class="text-center bg-success mb-5">
    <b class="bg-success font-italic " > </b>

</div>  

        </div>
            
     <form action="{{ route('register') }}"  method="post" enctype="multipart/form-data">
        @csrf
            
                <div class="row form-group">
                    <div class="col-sm-1"><label for="name"><strong>Name</strong></label></div>
                    
                    <div class="col-sm-7"> 
                    <input class="form-control form-group" type="text" name="name" id="name" placeholder="Enter Name"  /> 
                    
                    </div>
                    <div class="col-sm-4"> </div>

                    
                </div>
                
             
                
                
                <div class="row form-group">
                    <div class="col-sm-1"><label for="email"><strong>Email</strong></label></div>
                    
                    <div class="col-sm-7"> 
                    <input class="form-control form-group" type="email" name="email" id="email" placeholder="Enter Name"  /> 

                    </div>
                    
                        <div class="col-sm-4"> </div>
                
                </div>
                
                
                <div class="row form-group">
                    <div class="col-sm-1"><label for="password"><strong>Password</strong></label></div>
                    
                    <div class="col-sm-7"> 
                    <input class="form-control form-group" type="password" name="password" id="password" placeholder="Enter Password" /> 

                    
                    </div>
                    
                    <div class="col-sm-4"> </div>
                    
                </div>



                <div class="row form-group">
                    <div class="col-sm-1"><label for="password"><strong>Confirm Password</strong></label></div>
                    
                    <div class="col-sm-7"> 
                    <input class="form-control form-group" type="password" name="password_confirmation" id="password" placeholder="Confirm Password" /> 

                    
                    </div>
                    
                    <div class="col-sm-4"> </div>
                    
                </div>
                
              
                <div class="clearfix"></div>
                
                <div class="row">
                    <div class="col-sm-6"></div>
                <input type="submit" name="register" value="Register" class="mt-3 px-3 py-2 btn btn-dark  font-weight-bold font-italic" />
                </div>

                 <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>
                
            </form>
            
            
            </div>




    </x-auth-card>
</x-guest-layout>

<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
       

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
