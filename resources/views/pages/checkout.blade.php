<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>
    <div class="container flex mx-auto justify-center align-middle mt-20 w-">
        <div class="container flex flex-col bg-whiteBg">
            <div class="p-2 ">
                <h4 class="font-bold text-xl">Checkout</h4>
                <p>Logged in as reubenkihiu@gmail.com. Not you?</p>
            </div>
            <div class="p-2">
                    <p class="font-bold">Upload a clear picture of your face to be printed on your badge</p>
                    <p>Maximum Upload File <span class="text-orangeDm font-bold">4MB</span></p>
                <form method="POST" action="{{url('#')}}">
                    <div class="mx-auto flex flex-col border-2 border-greyBg  outline-dashed  rounded-lg m-3 w-full  h-52 justify-center items-center">
                        <div class="p2">
                            <img src="{{{URL::asset('images/xpt.png')}}}" alt="upload image" class="h-12">
                        </div>
                        <p>Drag Your Image Here or <span class="text-orangeDm font-bold">Browse</span></p>
                    </div>
                    <div class="pt-2">
                          {{-- input groups --}}
        <div class="container  flex space-x-3 w-full mx-auto ">
            <div class="w-1/2" >
                <label class="ml-2 mb-2" for="email">email</label><br>
                <input  class=" border-2 outline-tegre text-inputblack p-3 border-tegre rounded-md w-full "   type="text" name="email" placeholder="Email Address">
            </div>
            <div class="w-1/2">
                <label for="email">password</label><br>
                <input  class="border-2 text-inputblack p-3 border-tegre rounded-md w-full "   type="text" name="password" placeholder="password">
            </div>
        </div>
        {{-- input groups --}}
        <div class="container  flex space-x-3 w-full mx-auto ">
          <div class="w-1/2" >
              <label class="ml-2 mb-2" for="email">email</label><br>
              <input  class=" border-2 outline-tegre text-inputblack p-3 border-tegre rounded-md w-full "   type="text" name="email" placeholder="Email Address">
          </div>
          <div class="w-1/2">
              <label for="email">password</label><br>
              <input  class="border-2 text-inputblack p-3 border-tegre rounded-md w-full "   type="text" name="password" placeholder="password">
          </div>
      </div>
      {{-- input groups --}}
      <div class="w-full">
        <label for="email">Company /County Name </label><br>
        <input  class="border-2 text-inputblack p-3 border-tegre rounded-md w-full "   type="text" name="password" placeholder="password">
      </div>
       {{-- input groups --}}
       <div class="w-full">
        <label for="email">Company /County Name </label><br>
        <input  class="border-2 text-inputblack p-3 border-tegre rounded-md w-full "   type="text" name="password" placeholder="password">
      </div>
      {{-- dropdown select --}}
        <div class="container  flex space-x-3 w-full mx-auto ">
            {{-- groups --}}
            <div class="w-1/2">
            <label for="dropdown">Select an option:</label><br>
            <select id="dropdown" class="p-3 outline-4 border-2 rounded-md w-full" name="gender">
                <option value="male">Option 1</option>
                <option value="female">Option 2</option>
             </select>
            </div>
            <div class="w-1/2">
                <label for="dropdown">Select an option:</label><br>
                <select id="dropdown" class="p-3 outline-4 border-2 rounded-md w-full " name="gender">
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                 </select>
                </div>

        </div>

        {{-- button --}}
        <button  class="font-bold border-none  p-4 rounded-full text-whiteBg bg-orangeDm hover:bg-greenTag ease-in duration-300">
            Proceed
        </button>








                    </div>
                </form>
            </div>
        </div>
        <div class="container flex  flex-col bg-greyBg">
            <div class="p-2 absolute right-0 m-2">
                <img src="{{{URL::asset('images/cancel.png')}}}">
            </div>
            <div class="p-2">
                <h4  class="text-solidBlack font-bold">Order Summary</h4>
                <p>Logged in as reubenkihiu@gmail.com. Not you?</p>
            </div>
            <div class="flex p-2 justify-between">
                <p class="text-solidBlack font-bold">1x Delegate Ticket</p>
                <p class="text-solidBlack font-bold">KES 25,0x00</p>
            </div>
            <div class="p-2">
               <div class="p-1 flex">
                   <img src="{{{URL::asset('images/tick.png')}}}"><li class="list-none">3 Day Booth</li>
               </div>
               <div class="p-1 flex">
                <img src="{{{URL::asset('images/tick.png')}}}"><li class="list-none" >3 Day Booth</li>
               </div>
               <div class="p-1 flex">
                <img src="{{{URL::asset('images/tick.png')}}}"><li class="list-none" >3 Day Booth</li>
               </div>    
            </div>
            <div class="flex p-2 justify-between">
                <p class="text-solidBlack font-bold">Sub - Total</p>
                <p class="text-solidBlack font-bold">KES 25,000</p>
            </div>
            <div class="m-2">
                <div class="b-t border-t-2 border-b-2 border-solid flex flex-col p-6">
                    <form action="{{url('#')}}" method="POST">
                        <input type="text" name="coupon" placeholder="Insert coupon code" class="w-full mx-6 p-4 rounded-xl">

                        <button  class="bg-orangeDm p-3 font-bold text-white  rounded-full my-3">
                          Verify Coupon
                        </button>

                    </form>

                </div>
            </div>
            <div class="b-t border-t-2 border-b-2 border-solid flex justify-between p-6">
                <p class="text-solidBlack font-bold">Total Price</p>
                <p class="text-solidBlack font-bold">KES 25,000</p>
            </div>
            <button  class="bg-white p-3 font-bold text-orangeDm  my-3  w-fit rounded-full border-2 border-orangeDm">
                Verify Coupon
            </button>
        </div>
         
    </div>


 


 
</body>
</html>