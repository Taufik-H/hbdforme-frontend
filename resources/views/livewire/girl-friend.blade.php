<div>
    <div class="w-full h-full bg-gray-200">
        
         <div class=" w-full">
             {{-- image logo center --}}
             <div class="w-full mx-auto">
                 <div class="bg-white w-14 rounded-full mx-auto shadow-lg shadow-gray-300 relative -mb-7">
                     <img src="{{ Vite::asset('resources/images/logo.png') }}" class="mx-auto p-3">
                 </div>
             </div>
             {{-- content --}}
                <div class=" bg-white rounded-lg w-full">
                 <div class="p-5 ">
                     {{-- btn back --}}
                     <div class="flex justify-between items-center">
                         <a href={{url('/')}} class="btn border-2 border-gray-200 gap-2 rounded-2xl">
                             <svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M0.492288 6.492C0.567625 6.41467 0.852086 6.084 1.11706 5.812C2.67056 4.10133 6.72317 1.30133 8.84429 0.446667C9.16642 0.309333 9.98084 0.0186667 10.416 0C10.8329 0 11.2304 0.096 11.6097 0.290667C12.0825 0.562667 12.4618 0.990667 12.6696 1.496C12.8034 1.84667 13.0112 2.896 13.0112 2.91467C13.219 4.06267 13.3333 5.928 13.3333 7.98933C13.3333 9.95333 13.219 11.7427 13.0489 12.908C13.0294 12.9267 12.8216 14.2307 12.5943 14.6773C12.1773 15.4933 11.3629 16 10.4913 16H10.416C9.84835 15.98 8.65465 15.4733 8.65465 15.4547C6.64783 14.5987 2.68875 11.936 1.09758 10.1667C1.09758 10.1667 0.649456 9.712 0.454619 9.428C0.150674 9.02 0 8.51467 0 8.00933C0 7.44533 0.170157 6.92 0.492288 6.492Z" fill="#5A5A5A"/>
                             </svg>
                             <span>Back</span>
                         </a>
                         <h2 class="font-semibold">HBDF.ME</h2>
                     </div>
                     <h1 class="text-center mt-5 text-xl font-semibold">Say happy birth day for <span class="text-gray-300">#girlfriend</span> </h1>
                     {{-- divider --}}
                     <div class="w-full border-b opacity-75 mt-10"></div>
                     <livewire:form-girl-friend></livewire:form-girl-friend>
                 </div>
                </div>
         </div>
            
       
    </div>
</div>
