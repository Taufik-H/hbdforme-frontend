<div>
    <div class="mt-10">
        <form action="" class="caret-pink-500">
            <div class="flex flex-col md:flex-row justify-between gap-4">
                <div class="w-full ">
                    {{-- yourname --}}
                    <div class="mb-4 form-control ">
                        {{$name}}
                        <label for="yourname" class="text-xs font-normal">Your name <span class="text-red-500">*</span></label>
                        <input type="text" wire:model="name" id="yourname" class="pl-2 mt-2 w-full bg-[#F3F3F3] h-10 rounded-lg ring-0 focus:ring-2 focus:ring-purple-800 shadow-none focus:shadow-none focus:outline-none border-none focus:border-none placeholder:text-xs placeholder:font-normal placeholder:p-2 focus:transition ">
                    </div>
                        {{-- yourname --}}
                    <div class="mb-4 form-control ">
                        <label for="girlfriend" class="text-xs font-normal">Girlfriend name <span class="text-red-500">*</span></label>
                        <input type="text" id="girlfriend" class="pl-2 mt-2 w-full bg-[#F3F3F3] h-10 rounded-lg ring-0 focus:ring-2 focus:ring-purple-800 shadow-none focus:shadow-none focus:outline-none border-none focus:border-none placeholder:text-xs placeholder:font-normal placeholder:p-2 focus:transition">
                </div>
            </div>
                <div class="w-full">
                    <div class="mb-4 form-control ">
                        <label for="yourname" class="text-xs font-normal">Your name <span class="text-red-500">*</span></label>
                        <input type="text" id="yourname" class="pl-2 mt-2 w-full bg-[#F3F3F3] h-10 rounded-lg ring-0 focus:ring-2 focus:ring-purple-800 shadow-none focus:shadow-none focus:outline-none border-none focus:border-none placeholder:text-xs placeholder:font-normal placeholder:p-2 focus:transition ">
                    </div>
                        {{-- yourname --}}
                    <div class="mb-4 form-control">
                        <label for="yourname" class="text-xs font-normal">Your name <span class="text-red-500">*</span></label>
                        <input type="text" id="yourname" class="pl-2 mt-2 w-full bg-[#F3F3F3] h-10 rounded-lg ring-0 focus:ring-2 focus:ring-purple-800 shadow-none focus:shadow-none focus:outline-none border-none focus:border-none placeholder:text-xs placeholder:font-normal placeholder:p-2 focus:transition ">
                </div>
            </div>
            </div>
            <div class="font-semibold">
                <label for="greeting" class="text-xs font-normal">Birthday greeting<span class="text-red-500">*</span></label>
                <textarea name="" id="greeting" class="pl-2 mt-2 w-full bg-[#F3F3F3] h-20 rounded-lg ring-0 focus:ring-2 focus:ring-purple-800 shadow-none focus:shadow-none focus:outline-none border-none focus:border-none placeholder:text-xs placeholder:font-normal placeholder:p-2 focus:transition " placeholder="Hi babe..."></textarea>
            </div>
        </form>
    </div>
</div>
