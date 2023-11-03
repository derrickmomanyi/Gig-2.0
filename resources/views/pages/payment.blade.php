<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>
  <div class="container flex mx-auto bg-whiteBg w-full">
    {{-- right wing --}}
    <div class="p-2 flex flex-col w-1/2 ">    
        <div class="space-y-3">
            <div class="p-2">
                <h5 class="text-solidBlack  font-bold">Payment</h5>
                <p class="text-tegre">Logged in as reubenkihiu@gmail.com. Not you?</p>
            </div>
            <div class="p-2">
                <h5 class="text-solidBlack font-bold">Choose a payment method and pay</h5>
                <p class="text-tegre">These will be used to verify your business account for quick setup?</p>
            </div>
        </div>
        <div class="space-y-3 mt-3">
            <form action="##" method="POST">
                {{-- mpesa --}}
                <div class="space-y-3 flex flex-col">
                    <div class="p-2 flex h-auto" >
                        <input type="radio" id="mpesa" name="mpesa" value="">
                        <label class="flex h-fit" for="mpesa"><img src="{{{URL::asset("images/mpesa.png")}}}">Mpesa</label>
                    </div>
                    .bg-
                </div>
            </form>
        </div>

    </div>
    {{-- left wing --}}
    <div class="p-2 bg-greyBg flex flex-col w-1/2">

    </div>
  </div>


 


 
</body>
</html>