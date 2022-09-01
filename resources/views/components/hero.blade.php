<div>
    <div class="w-full text-center lg:text-left lg:flex items-center lg:justify-between">
        <div class="p-5 lg:pl-10">
            <div class="flex text-sm font-semibold uppercase text-rose-500 items-center lg:justify-start justify-center">
                <div class="tracking-widest lg:text-left">special day reminder</div>
                <img src="{{ Vite::asset('resources/images/notifhero.png') }}">
            </div>
            <h1 class="text-2xl lg:text-4xl font-bold w-auto text-gray-700 mt-10">With hbdfor.me wish you a happy
                <span class="text-rose-500">birthday</span>
                to be
                <span class="text-teal-500">cool.</span>
            </h1>
            <p class="w-full text-center lg:text-left lg:w-7/12 mt-7 text-gray-700">Hbdforme can send you set notifications via email, whatsapp, website, etc.</p>
            <div class="mt-10 flex justify-center lg:justify-start lg:items-start gap-4">
                {{-- this is the button --}}
                <a href={{url('/gf')}} class="btn btn-primary rounded-full font-semibold normal-case px-7" >Girl friend</a>
                <a href="#" class="btn btn-outline btn-secondary font-semibold rounded-full normal-case px-7">Your self</a>
            </div>
            <div class="mt-5 text-gray-900">
                <p>support us :</p>
                {{-- support --}}
                <a href="#"class="flex gap-2 mt-4 text-gray-900">

                    <img src="{{ Vite::asset('resources/images/github.png') }}">
                    <p>GitHub</p>
                </a>
            </div>
        </div>
        <div class="w-full overflow-hidden -mt-32 py-10 lg:py-0">
            <div class="absolute lg:relative w-ull float-right">
                <div class=" lg:-mr-52 lg:-mt-40 mt-10 -z-10">
                    <img src="{{ Vite::asset('resources/images/space.png') }}">
                </div>
            </div>
        </div>
        </div>
    </div>
      
    </div>
</div>