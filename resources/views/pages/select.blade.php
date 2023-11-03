<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>
  <nav class="relative container mx-auto p-3">

    <div class="relative flex  items-center justify-between  container mx-auto p-3 border-b-2">
      {{-- logo --}}
      <div class="pt-1">
        <img src="{{{URL::asset('images/logo.png')}}}" alt="logo" />
      </div>
      {{-- other links buttons --}}
      <div class="flex justify-evenly p-2 items-center space-x-12 ">
        <a  class="font-bold" href="##">FAQ</a>
        <button  class="  hidden md:block font-bold border-2 border-orangeDm p-4 rounded-full text-orangeDm   hover:border-greenTag ease-in duration-300  "  >
          Support
        </button>
        <button class=" hidden md:block font-bold border-none  p-4 rounded-full text-whiteBg bg-orangeDm hover:bg-greenTag ease-in duration-300" >
          Sign In
        </button>
      </div>
      
    </div>
  </nav>

{{-- booth --}}
<div class="container flex flex-col">
    <div class="p-3">
        <p>Select Booth</p>
        <p>Logged in as reubenkihiu@gmail.com. Not you?</p>
        <div class="m-2 flex justify-between">
            <p>Selected Booths(1)</p>
            <div class="flex">
                <div class="bg-greenTag"></div>
                <div class="bg-solidBlack"></div>
            </div>

        </div>
    </div>
    <div class="p-3 ">
        <div class="p-1 flex flex-col">
         <div class="container flex">
            <div class="flex space-x-3 text-center rounded-xl flex-col gap-4 justify-center">
                  
                <div class="h-6 w-6 bg-greenTag rounded-md ">1</div>    
                <div class="h-6 w-6 bg-greenTag rounded-md ">1</div>    
                <div class="h-6 w-6 bg-greenTag rounded-md ">1</div>    
                <div class="h-6 w-6 bg-greenTag rounded-md ">1</div>    
                <div class="h-6 w-6 bg-greenTag rounded-md ">1</div>    
                <div class="h-6 w-6 bg-greenTag rounded-md ">1</div>    
                <div class="h-6 w-6 bg-greenTag rounded-md ">1</div>    
                <div class="h-6 w-6 bg-greenTag rounded-md ">1</div>    
                <div class="h-6 w-6 bg-greenTag rounded-md ">1</div>    
                <div class="h-6 w-6 bg-greenTag rounded-md ">1</div>    
                <div class="h-6 w-6 bg-greenTag rounded-md ">1</div>    
                <div class="h-6 w-6 bg-greenTag rounded-md ">1</div>    
                 
            </div>

            <div class="flex space-x-3 text-center rounded-xl flex-col gap-4 justify-center">
                  
                <div class="flex gap-2 m-4">
                    <div class="h-6 w-6 bg-greenTag rounded-md ">1</div>    
                    <div class="h-6 w-6 bg-greenTag rounded-md ">1</div> 
                </div>   
                  
                 
            </div>

         </div>
        </div>

    </div>
    
    
</div>

 
</body>
</html>