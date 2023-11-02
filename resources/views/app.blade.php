<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>GiG 2.0</title>
</head>
<body>
    <nav class="relative container mx-auto p-3">
        <div class="relative flex  items-center justify-between container mx-auto p-3 border-b-2">
            {{-- logo --}}
            <div class="pt-1">
                <img src="{{{URL::asset('images/logo.png')}}}" alt="logo">
            </div>
            {{-- other links buttons --}}
            <div class="flex justify-evenly p-2 items-center space-x-12">
                <a  class="font-bold" href="##">FAQ</a> 
                <button  class=" hidden md:block font-bold border-2 border-orangeDm p-4 rounded-full text-orangeDm   hover:border-greenTag ease-in duration-300  "  >
                    Support
                </button>
                <button class=" hidden md:block font-bold border-none  p-4 rounded-full text-whiteBg bg-orangeDm hover:bg-greenTag ease-in duration-300" >
                    Sign In
                </button>
            </div>
        </div>       
    </nav>

    {{-- hero section --}}

    <section id="hero">
        {{-- hero container --}}
        <div class="container flex justify-between mx-auto bd-whiteBg p-10">
            {{-- text --}}
            <div class="container flex flex-col w-1/2 justify-center p-5  space-y-3">
                <div class="p-2">
                    <h4 class="text-8xl">Devolution <br> <span class="font-bold ">CONFERENCE</span><br> <span class="text-orangeDm font-bold text-md ">2023</span></h4>
                </div>
                <div class="p2 flex space-x-4">
                    <div class="p1 flex items-center">
                      <img src="{{{URL::asset("images/cal.png")}}}">
                      <div class=" flex flex-col">
                        <p class="font-bold">Date&Time</p>
                        <p class="text-tegre">August 25 -August 28</p>
                      </div>
                    </div>
                    <div class="p-1 flex items-center">
                      <img src="{{{URL::asset("images/loc.png")}}}">
                      <div class="flex flex-col">
                        <p class="font-bold">Location</p>
                        <p  class="text-tegre" >Wote,Makueni County Kenya.</p>
                      </div>            
                    </div>
                </div>
            </div>

            {{-- image --}}
            <div class="w-1/2">
                <img src="{{{URL::asset('images/himage.png')}}}" alt="">
            </div>
            
        </div>
    </section>
    <section id="spot">
        <div class="container flex bg-greyBg justify-center items-start p-12 space-x-3  ">
            <div class="p-2 w-2/5  space-y-3">
                <h2 class="font-bold text-5xl">Book Your Spot</h2>
                <p>Welcome to the Devolution Conference 2023, which promises you an unforgettable experience!</p>
                <p> The conference will feature renowned speakers, thought-provoking discussions, and a chance to connect with like-minded individuals from around the country. </p >
                <p> your spot today by purchasing your tickets either as a delegate, or to showcase as an exhibitor.</p>      
            </div>
            <div class="flex cards w-3/5 gap-x-3">
                {{-- cards --}}
                <div class="p-1 mx-auto">
                    {{-- text --}}
                    <div class="p-2 space-y-2">
                        <h2 class="text-3xl font-bold">KES 25,000</h2>
                        <p class="text-orangeDm ml-3 font-bold">DELEGATE TICKET</p>
                    </div>
                    {{-- list --}}
                    <div class="p-1 ">
                        <ul class="space-y-3">
                          <li class="flex flex-row gap-x-5"><span><img src="{{{URL::asset('images/check.png')}}}" alt=""></span><span class="text-orangeDm">3 day Pass</span></li>
                          <li class="flex flex-row gap-x-5"><span><img src="{{{URL::asset('images/check.png')}}}" alt=""></span><span class="text-orangeDm">Exhibition Booth Access</span></li>
                          <li class="flex flex-row gap-x-5"><span><img src="{{{URL::asset('images/check.png')}}}" alt=""></span><span class="text-orangeDm">Entertaiment</span></li>
                          </ul>
                    </div>
                    {{-- button --}}
                    <button class="bg-orangeDm rounded-full p-2 text-whiteBg font-bold mt-3 ml-6">
                        Reserve a Spot
                    </button>
                </div>
                 {{-- card --}}
                 <div class="p-1 mx-auto">
                    {{-- text --}}
                    <div class="p-2 space-y-2">
                        <h2 class="text-3xl font-bold">KES 25,000</h2>
                        <p class="text-orangeDm ml-3 font-bold">DELEGATE TICKET</p>
                    </div>
                    {{-- list --}}
                    <div class="p-1 ">
                        <ul class="space-y-3">
                          <li class="flex flex-row gap-x-5"><span><img src="{{{URL::asset('images/check.png')}}}" alt=""></span><span class="text-orangeDm">3 day Pass</span></li>
                          <li class="flex flex-row gap-x-5"><span><img src="{{{URL::asset('images/check.png')}}}" alt=""></span><span class="text-orangeDm">1 Exhibition Booth</span></li>
                          <li class="flex flex-row gap-x-5"><span><img src="{{{URL::asset('images/check.png')}}}" alt=""></span><span class="text-orangeDm">Setup Support</span></li>
                          </ul>
                    </div>
                    {{-- button --}}
                    <button class="bg-orangeDm rounded-full p-2 text-whiteBg font-bold mt-3 ml-6">
                        Reserve Booth
                    </button>
                </div>
            </div>
        </div>
        
    </section>

    <footer>
        <div class="contaier mx-auto flex space-x-10 justify-evenly p-6 bg-foot">
            {{-- first group --}}
            <div class="p-4 space-y-3">
                <img src="{{{URL::asset('images/logo.png')}}}" alt="logo">
                <p class="text-whiteBg">COG Offices Nairobi</p>
                <p class="text-whiteBg" >Kenya</p>
            </div>
            {{-- second group --}}
            <div class="p-4 space-y-3">
                <p class="text-whiteBg" >Terms Of Service</p>
            </div>
            {{-- third group --}}
            <div class="p-4 space-y-3">
                
                <p class="text-whiteBg" >Privacy Policy</p>
            </div>
            {{-- fourth group --}}
            <div class="p-4 space-y-3">
                <p class="text-whiteBg" >Copyright © 2022 - Safaricom - All Rights Reserved.</p>
                {{-- socials --}}
                <div class="container  flex justify-end space-x-3">
                <img src="{{{URL::asset("images/fb.png")}}}" alt="logo">
                <img src="{{{URL::asset("images/yt.png")}}}" alt="logo">
                <img src="{{{URL::asset('images/twt.png')}}}" alt="logo">
                <img src="{{{URL::asset('images/in.png')}}}" alt="logo">
                <img src="{{{URL::asset('images/ig.png')}}}" alt="logo">


                </div>
            </div>
        </div>
    </footer>
    
</body>
</html>