<div>
    <div>
        <div class="mt-10">
            <form action="" class="caret-pink-500">
                <div class="flex flex-col md:flex-row justify-between gap-4">
                    <div class="w-full ">
                        {{-- yourname --}}
                        <div class="mb-4 form-control ">
                     
                            <label for="yourname" class="text-xs font-normal">Your name <span class="text-red-500">*</span></label>
                            <input type="text" wire:model="name" id="yourname" class="pl-2 mt-2 w-full bg-[#F3F3F3] h-10 rounded-lg ring-0 focus:ring-2 focus:ring-purple-800 shadow-none focus:shadow-none focus:outline-none border-none focus:border-none placeholder:text-xs placeholder:font-normal placeholder:p-2 focus:transition ">
                        </div>
                        </div>
                    <div class="w-full">
                        {{-- mail --}}
                        <div class="text-xs mb-2">Send greeting with </div>
                        <div >  
                            <ul class="lg:flex md:grid md:grid-cols-2 md:w-full gap-2  ">
                                <li >
                                    <input type="checkbox" id="whatsapp" value="" class="hidden peer" required="">
                                    <label for="whatsapp" class="btn inline-flex justify-between items-center  w-full lg:w-auto text-gray-500 bg-white rounded-lg border-2 border-gray-200 cursor-pointer  peer-checked:border-blue-600 hover:text-gray-600  peer-checked:text-gray-600 hover:bg-gray-5 hover:bg-white">                           
                                        <div class="flex items-center gap-2">
                                            <svg class="" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 48 48" width="48px" height="48px" fill-rule="evenodd" clip-rule="evenodd"><path fill="#fff" d="M4.868,43.303l2.694-9.835C5.9,30.59,5.026,27.324,5.027,23.979C5.032,13.514,13.548,5,24.014,5c5.079,0.002,9.845,1.979,13.43,5.566c3.584,3.588,5.558,8.356,5.556,13.428c-0.004,10.465-8.522,18.98-18.986,18.98c-0.001,0,0,0,0,0h-0.008c-3.177-0.001-6.3-0.798-9.073-2.311L4.868,43.303z"/><path fill="#fff" d="M4.868,43.803c-0.132,0-0.26-0.052-0.355-0.148c-0.125-0.127-0.174-0.312-0.127-0.483l2.639-9.636c-1.636-2.906-2.499-6.206-2.497-9.556C4.532,13.238,13.273,4.5,24.014,4.5c5.21,0.002,10.105,2.031,13.784,5.713c3.679,3.683,5.704,8.577,5.702,13.781c-0.004,10.741-8.746,19.48-19.486,19.48c-3.189-0.001-6.344-0.788-9.144-2.277l-9.875,2.589C4.953,43.798,4.911,43.803,4.868,43.803z"/><path fill="#cfd8dc" d="M24.014,5c5.079,0.002,9.845,1.979,13.43,5.566c3.584,3.588,5.558,8.356,5.556,13.428c-0.004,10.465-8.522,18.98-18.986,18.98h-0.008c-3.177-0.001-6.3-0.798-9.073-2.311L4.868,43.303l2.694-9.835C5.9,30.59,5.026,27.324,5.027,23.979C5.032,13.514,13.548,5,24.014,5 M24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974 M24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974 M24.014,4C24.014,4,24.014,4,24.014,4C12.998,4,4.032,12.962,4.027,23.979c-0.001,3.367,0.849,6.685,2.461,9.622l-2.585,9.439c-0.094,0.345,0.002,0.713,0.254,0.967c0.19,0.192,0.447,0.297,0.711,0.297c0.085,0,0.17-0.011,0.254-0.033l9.687-2.54c2.828,1.468,5.998,2.243,9.197,2.244c11.024,0,19.99-8.963,19.995-19.98c0.002-5.339-2.075-10.359-5.848-14.135C34.378,6.083,29.357,4.002,24.014,4L24.014,4z"/><path fill="#40c351" d="M35.176,12.832c-2.98-2.982-6.941-4.625-11.157-4.626c-8.704,0-15.783,7.076-15.787,15.774c-0.001,2.981,0.833,5.883,2.413,8.396l0.376,0.597l-1.595,5.821l5.973-1.566l0.577,0.342c2.422,1.438,5.2,2.198,8.032,2.199h0.006c8.698,0,15.777-7.077,15.78-15.776C39.795,19.778,38.156,15.814,35.176,12.832z"/><path fill="#fff" fill-rule="evenodd" d="M19.268,16.045c-0.355-0.79-0.729-0.806-1.068-0.82c-0.277-0.012-0.593-0.011-0.909-0.011c-0.316,0-0.83,0.119-1.265,0.594c-0.435,0.475-1.661,1.622-1.661,3.956c0,2.334,1.7,4.59,1.937,4.906c0.237,0.316,3.282,5.259,8.104,7.161c4.007,1.58,4.823,1.266,5.693,1.187c0.87-0.079,2.807-1.147,3.202-2.255c0.395-1.108,0.395-2.057,0.277-2.255c-0.119-0.198-0.435-0.316-0.909-0.554s-2.807-1.385-3.242-1.543c-0.435-0.158-0.751-0.237-1.068,0.238c-0.316,0.474-1.225,1.543-1.502,1.859c-0.277,0.317-0.554,0.357-1.028,0.119c-0.474-0.238-2.002-0.738-3.815-2.354c-1.41-1.257-2.362-2.81-2.639-3.285c-0.277-0.474-0.03-0.731,0.208-0.968c0.213-0.213,0.474-0.554,0.712-0.831c0.237-0.277,0.316-0.475,0.474-0.791c0.158-0.317,0.079-0.594-0.04-0.831C20.612,19.329,19.69,16.983,19.268,16.045z" clip-rule="evenodd"/></svg>
                                            <div class="w-full text-sm font-semibold">Whatsapp</div>
                                        </div>
                                    </label>
                                </li>
                                <li >
                                    <input type="checkbox" id="gmail" value="" class="hidden peer" required="">
                                    <label for="gmail" class="btn inline-flex justify-between items-center  w-full lg:w-auto text-gray-500 bg-white rounded-lg border-2 border-gray-200 cursor-pointer  peer-checked:border-blue-600 hover:text-gray-600  peer-checked:text-gray-600 hover:bg-gray-5 hover:bg-white">                           
                                        <div class="flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 48 48" width="48px" height="48px"><path fill="#e0e0e0" d="M5.5,40.5h37c1.933,0,3.5-1.567,3.5-3.5V11c0-1.933-1.567-3.5-3.5-3.5h-37C3.567,7.5,2,9.067,2,11v26C2,38.933,3.567,40.5,5.5,40.5z"/><path fill="#d9d9d9" d="M26,40.5h16.5c1.933,0,3.5-1.567,3.5-3.5V11c0-1.933-1.567-3.5-3.5-3.5h-37C3.567,7.5,2,9.067,2,11L26,40.5z"/><path fill="#eee" d="M6.745,40.5H42.5c1.933,0,3.5-1.567,3.5-3.5V11.5L6.745,40.5z"/><path fill="#e0e0e0" d="M25.745,40.5H42.5c1.933,0,3.5-1.567,3.5-3.5V11.5L18.771,31.616L25.745,40.5z"/><path fill="#ca3737" d="M42.5,9.5h-37C3.567,9.5,2,9.067,2,11v26c0,1.933,1.567,3.5,3.5,3.5H7V12h34v28.5h1.5c1.933,0,3.5-1.567,3.5-3.5V11C46,9.067,44.433,9.5,42.5,9.5z"/><path fill="#f5f5f5" d="M42.5,7.5H24H5.5C3.567,7.5,2,9.036,2,11c0,1.206,1.518,2.258,1.518,2.258L24,27.756l20.482-14.497c0,0,1.518-1.053,1.518-2.258C46,9.036,44.433,7.5,42.5,7.5z"/><path fill="#e84f4b" d="M43.246,7.582L24,21L4.754,7.582C3.18,7.919,2,9.297,2,11c0,1.206,1.518,2.258,1.518,2.258L24,27.756l20.482-14.497c0,0,1.518-1.053,1.518-2.258C46,9.297,44.82,7.919,43.246,7.582z"/></svg>
                                            <div class="w-full text-sm font-semibold">Gmail</div>
                                        </div>
                                    </label>
                                </li>
                                <li >
                                    <input type="checkbox" id="telegram" value="" class="hidden peer" required="">
                                    <label for="telegram" class="btn inline-flex justify-between items-center  w-full lg:w-auto text-gray-500 bg-white rounded-lg border-2 border-gray-200 cursor-pointer  peer-checked:border-blue-600 hover:text-gray-600  peer-checked:text-gray-600 hover:bg-gray-5 hover:bg-white">                           
                                        <div class="flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 48 48" width="48px" height="48px"><path fill="#29b6f6" d="M24 4A20 20 0 1 0 24 44A20 20 0 1 0 24 4Z"/><path fill="#fff" d="M33.95,15l-3.746,19.126c0,0-0.161,0.874-1.245,0.874c-0.576,0-0.873-0.274-0.873-0.274l-8.114-6.733 l-3.97-2.001l-5.095-1.355c0,0-0.907-0.262-0.907-1.012c0-0.625,0.933-0.923,0.933-0.923l21.316-8.468 c-0.001-0.001,0.651-0.235,1.126-0.234C33.667,14,34,14.125,34,14.5C34,14.75,33.95,15,33.95,15z"/><path fill="#b0bec5" d="M23,30.505l-3.426,3.374c0,0-0.149,0.115-0.348,0.12c-0.069,0.002-0.143-0.009-0.219-0.043 l0.964-5.965L23,30.505z"/><path fill="#cfd8dc" d="M29.897,18.196c-0.169-0.22-0.481-0.26-0.701-0.093L16,26c0,0,2.106,5.892,2.427,6.912 c0.322,1.021,0.58,1.045,0.58,1.045l0.964-5.965l9.832-9.096C30.023,18.729,30.064,18.416,29.897,18.196z"/></svg>
                                            <div class="w-full text-sm font-semibold">Telegram</div>
                                        </div>
                                    </label>
                                </li>
                                <li >
                                    <input type="checkbox" id="instagram" value="" class="hidden peer" required="">
                                    <label for="instagram" class="btn inline-flex justify-between items-center  w-full lg:w-auto text-gray-500 bg-white rounded-lg border-2 border-gray-200 cursor-pointer  peer-checked:border-blue-600 hover:text-gray-600  peer-checked:text-gray-600 hover:bg-gray-5 hover:bg-white">                           
                                        <div class="flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 30 30" width="30px" height="30px"><path fill="#8d8dd8" d="M22.5,1.5h-15c-3.3,0-6,2.7-6,6v15c0,3.3,2.7,6,6,6h15c3.3,0,6-2.7,6-6v-15 C28.5,4.2,25.8,1.5,22.5,1.5z"/><path fill="#8585cc" d="M27.9,5c-0.9-2.1-3-3.5-5.4-3.5h-4.1C21.8,2.1,25,3.3,27.9,5z"/><path fill="#bd82f4" d="M1.5,7.5v15c0,3.3,2.7,6,6,6h15c3.3,0,6-2.7,6-6V8.9C24.1,5.8,18.8,4,13,4C8.8,4,4.8,5,1.3,6.7 C1.4,6.9,1.5,7.2,1.5,7.5z"/><path fill="#ed73f4" d="M1.5,22.5c0,3.3,2.7,6,6,6h15c3.3,0,6-2.7,6-6v-9.8C24.3,9.1,18.9,7,13,7C8.8,7,4.9,8.1,1.5,9.9V22.5 z"/><path fill="#f97dcd" d="M1.5,22.5c0,3.3,2.7,6,6,6h15c3.3,0,6-2.7,6-6v-5.6C24.7,12.7,19.1,10,13,10c-4.2,0-8.2,1.3-11.5,3.4 V22.5z"/><path fill="#fc9c95" d="M1.5,22.5c0,3.3,2.7,6,6,6h15c3.3,0,6-2.7,6-6v-0.6C25.4,16.6,19.6,13,13,13 c-4.4,0-8.4,1.6-11.5,4.2V22.5z"/><path fill="#ffac99" d="M1.5,22.5c0,3.3,2.7,6,6,6h15c1.9,0,3.6-0.9,4.7-2.3C25.2,20.3,19.6,16,13,16 c-4.6,0-8.7,2.1-11.5,5.4V22.5z"/><path fill="#ffc49c" d="M7.5,28.5h15c0.8,0,1.5-0.1,2.1-0.4c-1.3-5.2-6-9.1-11.6-9.1c-4.7,0-8.7,2.7-10.7,6.5 C3.4,27.3,5.3,28.5,7.5,28.5z"/><path fill="#ffde8d" d="M7.5,28.5h14.1C20.6,24.7,17.1,22,13,22c-3.8,0-7.1,2.4-8.4,5.8C5.5,28.2,6.5,28.5,7.5,28.5z"/><path fill="#fff69f" d="M18.4,28.5c-0.9-2.1-3-3.5-5.4-3.5s-4.5,1.4-5.4,3.5H18.4z"/><path fill="#8b75a1" d="M23,2c2.8,0,5,2.2,5,5v16c0,2.8-2.2,5-5,5H7c-2.8,0-5-2.2-5-5V7c0-2.8,2.2-5,5-5H23 M23,1H7 C3.7,1,1,3.7,1,7v16c0,3.3,2.7,6,6,6h16c3.3,0,6-2.7,6-6V7C29,3.7,26.3,1,23,1L23,1z"/><path fill="#fff" d="M19,25h-8c-3.3,0-6-2.7-6-6v-8c0-3.3,2.7-6,6-6h8c3.3,0,6,2.7,6,6v8C25,22.3,22.3,25,19,25z M11,7 c-2.2,0-4,1.8-4,4v8c0,2.2,1.8,4,4,4h8c2.2,0,4-1.8,4-4v-8c0-2.2-1.8-4-4-4H11z"/><path fill="#fff" d="M15 20c-2.8 0-5-2.2-5-5s2.2-5 5-5 5 2.2 5 5S17.8 20 15 20zM15 12c-1.7 0-3 1.3-3 3s1.3 3 3 3 3-1.3 3-3S16.7 12 15 12zM20 9A1 1 0 1 0 20 11 1 1 0 1 0 20 9z"/></svg>
                                            <div class="w-full text-sm font-semibold">Instagram</div>
                                        </div>
                                    </label>
                                </li>
                                
                                
                            </ul>
                            <li>
                            {{-- datepicker --}}
                        </li>
                    </div>
                </div>
            </div>
            <div class="flex items-center gap-2 pr-16 ">               
                <label for="datepicker" class="btn btn-secondary text-white">
                    <svg aria-hidden="true" class="w-5 h-5 text-white dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                </label>
            <input datepicker="" id="datepicker" type="text" class="btn bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-purple-500 focus:border-none focus:outline-none focus:ring-2 w-full  hover:bg-white datepicker-input" placeholder="Select date">
                            
            </div>
           
                <div class="font-semibold">
                    <label for="greeting" class="text-xs font-normal">Birthday greeting<span class="text-red-500">*</span></label>
                    <textarea name="" id="greeting" class="pl-2 mt-2 w-full bg-[#F3F3F3] h-20 rounded-lg ring-0 focus:ring-2 focus:ring-purple-800 shadow-none focus:shadow-none focus:outline-none border-none focus:border-none placeholder:text-xs placeholder:font-normal placeholder:p-2 focus:transition " placeholder="Hi babe..."></textarea>
                </div>
    
                <div class="md:flex gap-4 mt-3">
                    <button  class="btn btn-active btn-primary  mb-2 w-full md:w-auto">
                       <div class="flex items-center text-white gap-2">
                           <svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                               <path d="M17.4918 1.02378C17.0417 0.561738 16.3754 0.389603 15.7541 0.570798L1.2672 4.78357C0.611729 4.96567 0.147138 5.48842 0.0219871 6.1525C-0.105865 6.82835 0.340718 7.68631 0.924156 8.04507L5.45391 10.8291C5.9185 11.1145 6.51815 11.0429 6.9026 10.6552L12.0896 5.43587C12.3507 5.16408 12.7829 5.16408 13.044 5.43587C13.3051 5.6986 13.3051 6.12441 13.044 6.3962L7.84799 11.6164C7.46263 12.0033 7.3906 12.6057 7.67422 13.0732L10.442 17.6484C10.7661 18.192 11.3243 18.5 11.9366 18.5C12.0086 18.5 12.0896 18.5 12.1617 18.4909C12.8639 18.4003 13.4222 17.9202 13.6293 17.2407L17.924 2.77231C18.1131 2.15625 17.942 1.48583 17.4918 1.02378Z" fill="white"/>
                               </svg>
                           <span>Send  to #my self</span>
                          
                       </div>
                       </button>
                    <button  class="btn btn-active btn-secondary w-full md:w-auto">
                       <div class="flex items-center gap-2 text-white">
                           <svg width="19" height="21" viewBox="0 0 19 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                               <path d="M16.5533 7.14279C16.756 7.14279 16.9399 7.23123 17.0852 7.38064C17.2206 7.54022 17.2888 7.73843 17.2691 7.94782C17.2691 8.01693 16.7273 14.8678 16.4179 17.7514C16.2242 19.521 15.0834 20.5954 13.3722 20.6249C12.0564 20.6544 10.7703 20.6645 9.50397 20.6645C8.15954 20.6645 6.84477 20.6544 5.56855 20.6249C3.9147 20.5852 2.77292 19.4915 2.58905 17.7514C2.27073 14.8576 1.73889 8.01693 1.72901 7.94782C1.71912 7.73843 1.78634 7.54022 1.92276 7.38064C2.05721 7.23123 2.25096 7.14279 2.4546 7.14279H16.5533ZM11.5988 0.33548C12.4974 0.33548 13.3001 0.962624 13.5324 1.85709L13.6985 2.5991C13.8329 3.20388 14.3569 3.6318 14.9599 3.6318H17.9236C18.319 3.6318 18.6482 3.96011 18.6482 4.37787V4.76412C18.6482 5.17171 18.319 5.51019 17.9236 5.51019H1.07765C0.681239 5.51019 0.352051 5.17171 0.352051 4.76412V4.37787C0.352051 3.96011 0.681239 3.6318 1.07765 3.6318H4.04133C4.64336 3.6318 5.16729 3.20388 5.30272 2.60011L5.45793 1.9069C5.69913 0.962624 6.49294 0.33548 7.40142 0.33548H11.5988Z" fill="white"/>
                               </svg>
                           <span> Reset all</span>
                       </div>
                      </button>
                </div>
            </form>
        </div>
    </div>
    
</div>
