<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <title>Login</title> --}}
    @vite('resources/css/app.css')
</head>
<body>
    <div class="mt-20">
        <form method="POST" action="{{url('##')}}">
            @csrf
            <div class="container relative flex flex-col mx-auto w-1/4 space-y-3">
              <div class="absolute right-0">
                <img src="{{{URL::asset("images/cancel.png")}}}" alt="">
              </div>
                <div class="p-1">
                    <img src="{{{URL::asset('images/logo.png')}}}" alt="logo" />
                  </div>
                <div class="p-2">
                    <h5   class="text-solidBlack ">You need to be logged in first</h5>
                    <p class="text-tegre">Please log in or create an account to proceed with your purchase.</p>
                </div>
                <div class="m-2 relative" >
                    <label class="ml-2 mb-2" for="email">email</label>
                    <input  class=" border-2 outline-tegre text-inputblack p-3 border-tegre rounded-md min-w-full"   type="text" name="email" placeholder="Email Address">
                </div>
                <div class="m-2">
                    <label for="email">password</label>
                    <input  class="border-2 text-inputblack p-3 border-tegre rounded-md min-w-full"   type="text" name="password" placeholder="password">
                </div>
                <p class="text-tegre">Your password must contain at least 8 Characters</p>
                <button  class="font-bold border-none  p-4 rounded-full text-whiteBg bg-orangeDm hover:bg-greenTag ease-in duration-300">
                    Proceed
                </button>
                <p>Do you have an account ? <span><a class="text-orangeDm font-bold" href="{{url("##")}}">Create Account</a></span> </p>
                  
        
        
        
            </div>
        
        
          </form>

    </div>
    
</body>
</html>