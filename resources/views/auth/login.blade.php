
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">



<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
               
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

     {{--   <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ml-3">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
--}}


                             <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow border-0 rounded-lg mt-5">
                                    <div class="card-header bg-light"><h3 class="text-center font-weight-light my-4"><b>Online Store (Log In)</h3></div>
                                    <div class="text-center text-primary "><b class=" font-italic  " >
                                      </b> </div>

                                    <div class="card-body bg-dark shadow">


                                        <form  method="post" action="{{ route('login') }}">
                                            @csrf
                                            <div class="form-group"><label class="small text-light mb-1" for="inputEmailAddress">Email</label>
                                            
                                            <input class=" ml-5 px-5 my-2" type="email" name="email" id="inputEmailAddress" placeholder="Enter email address"
                                            value=""  /></div>
                                            
                                                <span class="text-danger font-italic">  </span>

                                                                                        
                                                                                        
                                            <div class="form-group"><label class=" text-light small mb-1" for="inputPassword">Password</label>
                                            
                                            <input class=" ml-4 my-2 px-5" name="password" id="inputPassword" type="password" placeholder="Enter password"
                                            value=""            /></div>
                                            
                                            <span class="text-danger font-italic"></span>
                                            
                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox">
                                                
                                                <input class="custom-control-input  text-light" value="1" name="remember" id="rememberPasswordCheck" type="checkbox" /><label class="custom-control-label text-light
                                                
                                                " for="rememberPasswordCheck">Remember password</label></div>
                                            
                                             
                                            </div>
                                            <div class="form-group d-flex align-items-center justify-content-between mt-5 mb-0">
                                            @if (Route::has('password.request')) 
                                            <a href="{{ route('password.request') }}" class="text">Forgot password ?</a> @endif
                                            
                                            <input type="submit"class="btn btn-dark text-light ml-auto font-weight-bold " href="" name="Login" value="Login" /></div>
                                        </form>

                                        </div> 
                                        </div> 
                                        </div> 
                                        </div> 
                                        </div> 

    </x-auth-card>
</x-guest-layout>


<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
       

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
