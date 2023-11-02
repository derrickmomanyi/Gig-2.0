<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>
 <div class="mt-20">
  <form method="POST" action="{{url('##')}}">
    @csrf
    <div class="container relative flex flex-col mx-auto w-1/2 my-20px">
      <div class="absolute right-0">
        <img src="{{{URL::asset("images/cancel.png")}}}" alt="">
      </div>
        <div class="p-1">
            <img src="{{{URL::asset('images/logo.png')}}}" alt="logo" />
          </div>
        <div class="p-2">
            <h5   class="text-solidBlack ">Create Account</h5>
            <p class="text-tegre">Create an account to proceed with your purchase.</p>
        </div>
        {{-- input groups --}}
        <div class="container p-2 flex space-x-3 w-full mx-auto ">
            <div class="w-1/2" >
                <label class="ml-2 mb-2" for="email">Email</label><br>
                <input  class=" border-2 outline-tegre text-inputblack p-3 border-tegre rounded-md w-full "   type="text" name="email" placeholder="Email Address">
            </div>
            <div class="w-1/2">
                <label for="password">Phone Number</label><br>
                <input  class="border-2 text-inputblack p-3 border-tegre rounded-md w-full "   type="password" name="number" placeholder="Phone Number ">
            </div>
        </div>
        {{-- input groups --}}
        <div class="container p-2 flex space-x-3 w-full mx-auto ">
          <div class="w-1/2" >
              <label class="ml-2 mb-2" for="text"></label><br>
              <input  class=" border-2 outline-tegre text-inputblack p-3 border-tegre rounded-md w-full "   type="text" name="firstName" placeholder="First Name">
          </div>
          <div class="w-1/2">
              <label for="text"></label><br>
              <input  class="border-2 text-inputblack p-3 border-tegre rounded-md w-full "   type="text" name="lastName" placeholder="Last Name">
          </div>
      </div>
      {{-- input groups --}}
      <div class="container p-2 flex space-x-3 w-full mx-auto ">
        <div class="w-1/2" >
            <label class="ml-2 mb-2" for="password"></label><br>
            <input  class=" border-2 outline-tegre text-inputblack p-3 border-tegre rounded-md w-full"  type="password" name="password" placeholder="Password">
        </div>
        <div class="w-1/2">
            <label for="password"></label><br>
            <input  class="border-2 text-inputblack p-3 border-tegre rounded-md w-full "   type="password" name="password" placeholder="password">
        </div>
    </div>
       
         <button  class="font-bold border-none  p-4 rounded-full text-whiteBg bg-orangeDm hover:bg-greenTag ease-in duration-300 w-full ">
        Proceed
    </button>
    <p class="">Already have an account ? <span><a class="text-orangeDm font-bold" href="{{url("##")}}">Sign in</a></span> </p>
        
       
    </div>
   


  </form>
 </div>

</body>
</html>