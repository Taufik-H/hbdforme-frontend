<div>
    <div class="w-full h-full bg-gray-200">
        <div class="md:flex md:justify-between">
         <div class=" md:w-9/12">
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
                         <button  class="btn border-2 border-gray-200 gap-2 rounded-2xl">
                             <svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M0.492288 6.492C0.567625 6.41467 0.852086 6.084 1.11706 5.812C2.67056 4.10133 6.72317 1.30133 8.84429 0.446667C9.16642 0.309333 9.98084 0.0186667 10.416 0C10.8329 0 11.2304 0.096 11.6097 0.290667C12.0825 0.562667 12.4618 0.990667 12.6696 1.496C12.8034 1.84667 13.0112 2.896 13.0112 2.91467C13.219 4.06267 13.3333 5.928 13.3333 7.98933C13.3333 9.95333 13.219 11.7427 13.0489 12.908C13.0294 12.9267 12.8216 14.2307 12.5943 14.6773C12.1773 15.4933 11.3629 16 10.4913 16H10.416C9.84835 15.98 8.65465 15.4733 8.65465 15.4547C6.64783 14.5987 2.68875 11.936 1.09758 10.1667C1.09758 10.1667 0.649456 9.712 0.454619 9.428C0.150674 9.02 0 8.51467 0 8.00933C0 7.44533 0.170157 6.92 0.492288 6.492Z" fill="#5A5A5A"/>
                             </svg>
                             <span>Back</span>
                         </button>
                         <h2 class="font-semibold">HBDF.ME</h2>
                     </div>
                     <h1 class="text-center mt-5 text-xl font-semibold">Say happy birth day for <span class="text-gray-300">#girlfriend</span> </h1>
                     {{-- divider --}}
                     <div class="w-full border-b opacity-75 mt-10"></div>
                     <livewire:form-girl-friend></livewire:form-girl-friend>
                 </div>
                </div>
         </div>
            <div class="py-8 md:pl-5">
             <button  class="btn btn-active btn-primary w-full mb-2">
                <div class="flex items-center text-white gap-2">
                    <svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.4918 1.02378C17.0417 0.561738 16.3754 0.389603 15.7541 0.570798L1.2672 4.78357C0.611729 4.96567 0.147138 5.48842 0.0219871 6.1525C-0.105865 6.82835 0.340718 7.68631 0.924156 8.04507L5.45391 10.8291C5.9185 11.1145 6.51815 11.0429 6.9026 10.6552L12.0896 5.43587C12.3507 5.16408 12.7829 5.16408 13.044 5.43587C13.3051 5.6986 13.3051 6.12441 13.044 6.3962L7.84799 11.6164C7.46263 12.0033 7.3906 12.6057 7.67422 13.0732L10.442 17.6484C10.7661 18.192 11.3243 18.5 11.9366 18.5C12.0086 18.5 12.0896 18.5 12.1617 18.4909C12.8639 18.4003 13.4222 17.9202 13.6293 17.2407L17.924 2.77231C18.1131 2.15625 17.942 1.48583 17.4918 1.02378Z" fill="white"/>
                        </svg>
                    <span>Send  to #girlfriend</span>
                   
                </div>
                </button>
             <button wire:click="$emit('resetForm')" class="btn btn-active btn-secondary w-full">
                <div class="flex items-center gap-2 text-white">
                    <svg width="19" height="21" viewBox="0 0 19 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16.5533 7.14279C16.756 7.14279 16.9399 7.23123 17.0852 7.38064C17.2206 7.54022 17.2888 7.73843 17.2691 7.94782C17.2691 8.01693 16.7273 14.8678 16.4179 17.7514C16.2242 19.521 15.0834 20.5954 13.3722 20.6249C12.0564 20.6544 10.7703 20.6645 9.50397 20.6645C8.15954 20.6645 6.84477 20.6544 5.56855 20.6249C3.9147 20.5852 2.77292 19.4915 2.58905 17.7514C2.27073 14.8576 1.73889 8.01693 1.72901 7.94782C1.71912 7.73843 1.78634 7.54022 1.92276 7.38064C2.05721 7.23123 2.25096 7.14279 2.4546 7.14279H16.5533ZM11.5988 0.33548C12.4974 0.33548 13.3001 0.962624 13.5324 1.85709L13.6985 2.5991C13.8329 3.20388 14.3569 3.6318 14.9599 3.6318H17.9236C18.319 3.6318 18.6482 3.96011 18.6482 4.37787V4.76412C18.6482 5.17171 18.319 5.51019 17.9236 5.51019H1.07765C0.681239 5.51019 0.352051 5.17171 0.352051 4.76412V4.37787C0.352051 3.96011 0.681239 3.6318 1.07765 3.6318H4.04133C4.64336 3.6318 5.16729 3.20388 5.30272 2.60011L5.45793 1.9069C5.69913 0.962624 6.49294 0.33548 7.40142 0.33548H11.5988Z" fill="white"/>
                        </svg>
                    <span> Reset all</span>
                </div>
               </button>
         </div>
        </div>
    </div>
</div>
