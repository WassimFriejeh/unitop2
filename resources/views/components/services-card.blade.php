 <div id="dynamic-grid"
     class="lg:grid md:grid sm:flex flex flex-col grid-cols-12 lg:gap-20 md:gap-20 sm:gap-0 w-full pt-10 ">
     @foreach ($services as $service)
         <a href="/" class="slide-dow ">
             <div class="grid-item ">
                 <hr class="border-2 border-primaryColor">
                 <div class="flex justify-between px-5 items-center pt-5 w-[95%]">
                     <h1 class="font-semibold text-[18px]">{{ $service->service_title }}<span> <i
                                 class="fa-solid fa-arrow-right"></i></span></h1>


                     <img src={{ $service->icon_image['image'] }} alt="" class="w-10 hover-image">


                 </div>
                 <div class="text-[12px] px-5 pb-5 pt-5 w-[95%]">{!! $service->service_paragraph !!}
                 </div>
             </div>
         </a>
     @endforeach
     {{-- <a href="/" class="slide-dow">

         <div class="grid-item ">
             <hr class="border-2 border-primaryColor">
             <div class="flex justify-between px-5 items-center pt-5 w-[95%]">
                 <h1 class="font-semibold text-[18px]">Equipment Leasing <span> <i
                             class="fa-solid fa-arrow-right"></i></span></h1>


                 <svg xmlns="http://www.w3.org/2000/svg" width="40" height="55" viewBox="0 0 63.921 64.395">
                     <path id="Path_134" data-name="Path 134"
                         d="M66.532,24.54a1.8,1.8,0,0,0,1.133-2.99c-5.021-5.5-8.785-5.535-9.2-5.536a1.152,1.152,0,0,0-1,.645c-1.579,3.23-1.021,7.814-.547,10.259a1.785,1.785,0,0,0,3.091.824.208.208,0,0,1,.234-.065c.668,2.246.233,6.041-1.333,9.834a18.978,18.978,0,0,1-5.457,7.057,1.131,1.131,0,0,1-1.479-.062L29.912,24.4a1.157,1.157,0,0,1-.042-1.661l6.274-6.324a4.057,4.057,0,1,0-5.728-5.747l-6.331,6.382a1.18,1.18,0,0,1-1.634,0l-1.607-1.62a1.189,1.189,0,0,1-.281-1.13,8.324,8.324,0,0,0-2.887-8.514c-5.2-4.3-13.614-.288-13.471,6.5A8.337,8.337,0,0,0,14.4,20.456a1.222,1.222,0,0,1,1.164.284l1.625,1.639a1.152,1.152,0,0,1,0,1.62l-6.273,6.323a4.058,4.058,0,0,0,5.644,5.832l6.247-6.3a1.165,1.165,0,0,1,1.674.043L44.426,52.136a1.138,1.138,0,0,1,.061,1.467,18.382,18.382,0,0,1-16.534,7.026.249.249,0,0,1-.111-.457,1.792,1.792,0,0,0-.858-3.06c-2.432-.475-6.988-1.036-10.192.55a1.151,1.151,0,0,0-.639.994c-.013.417.027,4.216,5.477,9.268a1.79,1.79,0,0,0,3-1.234.229.229,0,0,1,.318-.191c8.773,3.608,18.157.2,26.018-3.524a17.471,17.471,0,0,1,6.495-1.8,3.923,3.923,0,0,0,3.615-3.682,17.96,17.96,0,0,1,.347-2.821,17,17,0,0,1,1.348-3.607c3.69-7.934,7.062-17.37,3.472-26.2-.026-.222,0-.279.289-.323ZM65.366,35.779a53.844,53.844,0,0,1-4.673,14.3,19.023,19.023,0,0,0-1.5,4.047c-.536,1.253.238,4.616-1.881,4.756a20.242,20.242,0,0,0-7.395,2.048,52.983,52.983,0,0,1-14.158,4.7,21.214,21.214,0,0,1-10.021-1.292,2.534,2.534,0,0,0-3.163,1.305,13.644,13.644,0,0,1-4.012-6.228,16.249,16.249,0,0,1,7.142-.2,2.549,2.549,0,0,0,2.016,3.7A20.691,20.691,0,0,0,46.3,55.024a3.435,3.435,0,0,0-.157-4.425L26.193,28.363a3.468,3.468,0,0,0-2.483-1.146,3.358,3.358,0,0,0-2.536,1.02l-6.246,6.3a1.759,1.759,0,1,1-2.378-2.592l6.273-6.322a3.459,3.459,0,0,0,0-4.861L17.2,19.12a3.485,3.485,0,0,0-3.336-.9,6.082,6.082,0,1,1,4.467-4.463,3.471,3.471,0,0,0,.884,3.288l1.607,1.62a3.534,3.534,0,0,0,4.9,0l6.332-6.382a1.757,1.757,0,1,1,2.461,2.508l-6.274,6.324a3.467,3.467,0,0,0,.125,4.981L50.427,46.206a3.421,3.421,0,0,0,4.468.156,21.014,21.014,0,0,0,7.8-18.711,2.515,2.515,0,0,0-1.735-2.16,2.486,2.486,0,0,0-1.931.152,16.585,16.585,0,0,1,.193-7.213,13.582,13.582,0,0,1,6.16,4.053,2.539,2.539,0,0,0-1.306,3.163A21.529,21.529,0,0,1,65.366,35.779Z"
                         transform="translate(-4.205 -4.001)" fill="#ec4115" />
                 </svg>

             </div>
             <p class="text-[12px] px-5 pb-5 pt-5 w-[95%]">Options tailored to meet the needs of oil firms and service
                 companies. Our offerings encompass essential equipment like forklifts, tractors, and portacabins,
                 ensuring you have the tools you need to excel.
             </p>
         </div>
     </a>
     <a href="/" class="slide-dow">

         <div class="grid-item ">
             <hr class="border-2 border-primaryColor">
             <div class="flex justify-between px-5 items-center pt-5 w-[95%]">
                 <h1 class="font-semibold text-[18px]">Equipment Fabrication & Maintenance <span> <i
                             class="fa-solid fa-arrow-right"></i></span></h1>

                 <svg xmlns="http://www.w3.org/2000/svg" width="40" height="55" viewBox="0 0 71.029 70.445">
                     <path id="Path_131" data-name="Path 131"
                         d="M68.742,53.953l-15.88-15.9a1.417,1.417,0,0,0-1.952,0L47.761,41.2l-3.708-3.7L53,28.5c3.74-.2,8.723-.181,8.944-.213.929-.142,2.708-1.575,8.731-9.676a1.393,1.393,0,0,0,.268-.787V14.179a1.386,1.386,0,0,0-.693-1.2,1.362,1.362,0,0,0-1.386,0L62.5,16.762c-.543.173-2.929.732-4.968-2.173-2.2-3.149-1.22-4.661.173-5.85a70.293,70.293,0,0,1,6.471-4.11,1.4,1.4,0,0,0,.693-1.142,1.378,1.378,0,0,0-.6-1.189c-.2-.134-4.991-3.338-13.226-.15-6.361,2.456-7.251,5.692-7.33,6.054L42.36,17.769l-9.007,9.014-8.046-8.07a7.566,7.566,0,0,0,.535-2.755,7.416,7.416,0,0,0-2.189-5.275,1.173,1.173,0,0,0-.22-.181L9.806,1.638a1.37,1.37,0,0,0-1.724.173L2.422,7.472A1.37,1.37,0,0,0,2.248,9.2l8.888,13.6a1.575,1.575,0,0,0,.181.22,7.467,7.467,0,0,0,8.03,1.653l8.046,8.07L17.537,42.6,8.09,43.939h-.1c-.362.087-3.59.968-6.054,7.337-3.149,8.235,0,13.022.157,13.226a1.393,1.393,0,0,0,1.173.606A1.362,1.362,0,0,0,4.4,64.424a70.9,70.9,0,0,1,4.11-6.471c1.189-1.393,2.724-2.362,5.857-.181,2.913,2.055,2.362,4.456,2.173,4.968l-3.779,6.369a1.37,1.37,0,0,0,1.181,2.078h3.645a1.331,1.331,0,0,0,.787-.276c8.266-6.109,9.581-7.873,9.691-8.762,0-.189,0-5.172.2-8.9l9.833-9.786,3.747,3.692L38.692,50.3a1.386,1.386,0,0,0,0,1.952l15.9,15.9a9.526,9.526,0,0,0,13.463,0l.716-.716a9.5,9.5,0,0,0,0-13.463ZM44.636,19.4a1.409,1.409,0,0,0,.386-.787l1.393-9.794c.087-.22,1.008-2.275,5.621-4.062a14.825,14.825,0,0,1,8.29-1.039A42.647,42.647,0,0,0,55.91,6.653c-3.787,3.244-2.433,6.967-.638,9.526,2.811,3.992,6.684,3.795,8.329,3.149.063,0,4.59-2.7,4.59-2.7v.787a73.331,73.331,0,0,1-6.747,8.164c-1.811-.094-6.849.15-9.109.276a1.37,1.37,0,0,0-.905.4L42.108,35.53l-2.362-2.362,8.991-9.03A1.378,1.378,0,1,0,46.793,22.2l-9.014,9.007-2.472-2.48ZM16.561,22.446a4.645,4.645,0,0,1-3.22-1.275L5.161,8.629,9.239,4.551l12.541,8.2a4.724,4.724,0,0,1-.094,6.55l-1.8,1.8a4.669,4.669,0,0,1-3.322,1.37Zm9.4,29.232a1.338,1.338,0,0,0-.4.9c-.126,2.267-.37,7.3-.268,9.109a75.012,75.012,0,0,1-8.172,6.755h-.787l2.724-4.59c.669-1.653.874-5.511-3.149-8.329-2.559-1.8-6.3-3.149-9.534.638a43.063,43.063,0,0,0-2.937,4.417,14.769,14.769,0,0,1,1.047-8.29c1.8-4.653,3.858-5.511,4.062-5.629l9.833-1.393a1.362,1.362,0,0,0,.787-.386L29.339,34.688l2.48,2.472-9.943,9.951a1.375,1.375,0,1,0,1.945,1.945l9.943-9.943,2.362,2.362ZM21.694,23.146l.142-.126,1.8-1.8.126-.142L45.8,43.128,43.738,45.19ZM66.8,65.5l-.716.724a6.786,6.786,0,0,1-9.573,0L41.589,51.268l3.149-3.149,4.015-4.007L51.9,40.963,66.861,55.921A6.755,6.755,0,0,1,66.8,65.5Z"
                         transform="translate(-0.54 -0.741)" fill="#ec4115" />
                 </svg>


             </div>
             <p class="text-[12px] px-5 pb-5 pt-5 w-[95%]">Leveraging expertise, manufacturing, modifying, and
                 conducting maintenance and repairs for various production and distribution facility equipment. ??
             </p>
         </div>
     </a>
     <a href="/" class="slide-dow">

         <div class="grid-item ">
             <hr class="border-2 border-primaryColor">
             <div class="flex justify-between px-5 items-center pt-5 w-[95%]">
                 <h1 class="font-semibold text-[18px]">Logistics Support<span> <i
                             class="fa-solid fa-arrow-right"></i></span></h1>


                 <svg xmlns="http://www.w3.org/2000/svg" width="40" height="55" viewBox="0 0 87.72 62.866">
                     <g id="Group_169" data-name="Group 169" transform="translate(0 -72.533)">
                         <g id="Group_144" data-name="Group 144" transform="translate(11.696 117.855)">
                             <g id="Group_143" data-name="Group 143" transform="translate(0 0)">
                                 <path id="Path_135" data-name="Path 135"
                                     d="M77.039,337.067a8.772,8.772,0,1,0,8.772,8.772A8.781,8.781,0,0,0,77.039,337.067Zm0,14.62a5.848,5.848,0,1,1,5.848-5.848A5.854,5.854,0,0,1,77.039,351.687Z"
                                     transform="translate(-68.267 -337.067)" fill="#ec4115" />
                             </g>
                         </g>
                         <g id="Group_146" data-name="Group 146" transform="translate(61.404 117.855)">
                             <g id="Group_145" data-name="Group 145" transform="translate(0 0)">
                                 <path id="Path_136" data-name="Path 136"
                                     d="M367.172,337.067a8.772,8.772,0,1,0,8.772,8.772A8.781,8.781,0,0,0,367.172,337.067Zm0,14.62a5.848,5.848,0,1,1,5.848-5.848A5.854,5.854,0,0,1,367.172,351.687Z"
                                     transform="translate(-358.4 -337.067)" fill="#ec4115" />
                             </g>
                         </g>
                         <g id="Group_148" data-name="Group 148" transform="translate(55.556 88.615)">
                             <g id="Group_147" data-name="Group 147" transform="translate(0 0)">
                                 <path id="Path_137" data-name="Path 137"
                                     d="M356.2,187.539,343.04,167.071a1.462,1.462,0,0,0-1.23-.671H325.729a1.462,1.462,0,0,0-1.462,1.462v36.55a1.461,1.461,0,0,0,1.462,1.462h5.848V202.95h-4.386V169.324h13.822l12.494,19.436v14.19H346.2v2.924h8.772a1.461,1.461,0,0,0,1.462-1.462V188.33A1.458,1.458,0,0,0,356.2,187.539Z"
                                     transform="translate(-324.267 -166.4)" fill="#ec4115" />
                             </g>
                         </g>
                         <g id="Group_150" data-name="Group 150" transform="translate(61.404 94.463)">
                             <g id="Group_149" data-name="Group 149" transform="translate(0 0)">
                                 <path id="Path_138" data-name="Path 138"
                                     d="M361.325,213.691V203.457h11.7v-2.924H359.863a1.462,1.462,0,0,0-1.462,1.462v13.158a1.461,1.461,0,0,0,1.462,1.462h21.93v-2.924H361.325Z"
                                     transform="translate(-358.401 -200.533)" fill="#ec4115" />
                             </g>
                         </g>
                         <g id="Group_152" data-name="Group 152" transform="translate(0 78.381)">
                             <g id="Group_151" data-name="Group 151" transform="translate(0 0)">
                                 <path id="Path_139" data-name="Path 139"
                                     d="M57.018,106.667H1.462A1.463,1.463,0,0,0,0,108.129v46.784a1.462,1.462,0,0,0,1.462,1.462h11.7v-2.924H2.924v-43.86H55.556v43.86H27.778v2.924h29.24a1.461,1.461,0,0,0,1.462-1.462V108.129A1.462,1.462,0,0,0,57.018,106.667Z"
                                     transform="translate(0 -106.667)" fill="#ec4115" />
                             </g>
                         </g>
                         <g id="Group_154" data-name="Group 154" transform="translate(1.462 119.317)">
                             <g id="Group_153" data-name="Group 153">
                                 <rect id="Rectangle_121" data-name="Rectangle 121" width="8.772" height="2.924"
                                     fill="#ec4115" />
                             </g>
                         </g>
                         <g id="Group_156" data-name="Group 156" transform="translate(30.702 119.317)">
                             <g id="Group_155" data-name="Group 155">
                                 <rect id="Rectangle_122" data-name="Rectangle 122" width="24.854" height="2.924"
                                     transform="translate(1.453 -4.549) rotate(22)" fill="#ec4115" />
                             </g>
                         </g>
                         <g id="Group_158" data-name="Group 158" transform="translate(80.41 119.317)">
                             <g id="Group_157" data-name="Group 157">
                                 <rect id="Rectangle_123" data-name="Rectangle 123" width="5.848" height="2.924"
                                     fill="#ec4115" />
                             </g>
                         </g>
                         <g id="Group_160" data-name="Group 160" transform="translate(5.848 84.229)">
                             <g id="Group_159" data-name="Group 159">
                                 <rect id="Rectangle_124" data-name="Rectangle 124" width="51.17" height="2.924"
                                     fill="#ec4115" />
                             </g>
                         </g>
                         <g id="Group_162" data-name="Group 162" transform="translate(19.006 125.165)">
                             <g id="Group_161" data-name="Group 161">
                                 <rect id="Rectangle_125" data-name="Rectangle 125" width="2.924" height="2.924"
                                     fill="#ec4115" />
                             </g>
                         </g>
                         <g id="Group_164" data-name="Group 164" transform="translate(68.714 125.165)">
                             <g id="Group_163" data-name="Group 163">
                                 <rect id="Rectangle_126" data-name="Rectangle 126" width="2.924" height="2.924"
                                     fill="#ec4115" />
                             </g>
                         </g>
                         <g id="Group_166" data-name="Group 166" transform="translate(5.848 72.533)">
                             <g id="Group_165" data-name="Group 165" transform="translate(0 0)">
                                 <rect id="Rectangle_127" data-name="Rectangle 127" width="20.468" height="2.924"
                                     fill="#ec4115" />
                             </g>
                         </g>
                         <g id="Group_168" data-name="Group 168" transform="translate(0 72.533)">
                             <g id="Group_167" data-name="Group 167" transform="translate(0 0)">
                                 <rect id="Rectangle_128" data-name="Rectangle 128" width="2.924" height="2.924"
                                     fill="#ec4115" />
                             </g>
                         </g>
                     </g>
                 </svg>

             </div>
             <p class="text-[12px] px-5 pb-5 pt-5 w-[95%]">Leveraging expertise, manufacturing, modifying, and
                 conducting maintenance and repairs for various production and distribution facility equipment.
             </p>
         </div>
     </a>
     <a href="/" class="slide-dow">

         <div class="grid-item ">
             <hr class="border-2 border-primaryColor">
             <div class="flex justify-between px-5 items-center pt-5 w-[95%]">
                 <h1 class="font-semibold text-[18px]">Procurement & Manpower Supply <span> <i
                             class="fa-solid fa-arrow-right"></i></span></h1>

                 <svg xmlns="http://www.w3.org/2000/svg" width="40" height="55" viewBox="0 0 76.521 75.11">
                     <path id="Path_140" data-name="Path 140"
                         d="M74.653,65.368H71.231V59.763a1.121,1.121,0,1,0-2.242,0v5.605H48.08V62.157c.282.026.568.041.857.041a9.3,9.3,0,0,0,8.674-5.978h6.773a1.9,1.9,0,0,0,1.893-1.893v-7.48h2.711v7.685a1.121,1.121,0,1,0,2.242,0V46.473a1.87,1.87,0,0,0-1.868-1.868H66.277V13.237a1.9,1.9,0,0,0-1.893-1.893H43.074q-.146-.3-.31-.6a1.121,1.121,0,1,0-1.959,1.089,9.465,9.465,0,1,1-3.213-3.4,1.121,1.121,0,1,0,1.2-1.893,11.695,11.695,0,1,0-7.2,21.536v1.368h-16.2V18.89a4.114,4.114,0,0,0-4.11-4.11H1.868A1.87,1.87,0,0,0,0,16.649v3.3a1.87,1.87,0,0,0,1.868,1.868H8.746v50.5a2.619,2.619,0,0,0,2.615,2.615h6.444a5.23,5.23,0,0,0,10.439,0h2.544a1.121,1.121,0,0,0,0-2.242H27.893a5.229,5.229,0,0,0-9.737,0H15.395V67.61H74.279v5.081H66.025a5.229,5.229,0,0,0-9.737,0H36.019a1.121,1.121,0,0,0,0,2.242H55.938a5.23,5.23,0,0,0,10.439,0h8.277a1.87,1.87,0,0,0,1.868-1.868V67.236a1.87,1.87,0,0,0-1.868-1.868Zm-61.5,7.323H11.361a.374.374,0,0,1-.374-.374V20.692a1.121,1.121,0,0,0-1.121-1.121H2.242V17.023h9.043a1.87,1.87,0,0,1,1.868,1.868Zm9.872-1.079A2.989,2.989,0,1,1,20.036,74.6,2.993,2.993,0,0,1,23.025,71.612ZM48.937,59.956a7.043,7.043,0,1,1,7.043-7.043A7.051,7.051,0,0,1,48.937,59.956Zm15.1-46.37v3.937H44.18c.034-.364.054-.732.054-1.1a11.711,11.711,0,0,0-.35-2.833Zm-30.2,14.455a11.627,11.627,0,0,0,5.474-2.1H50.441a1.121,1.121,0,0,0,0-2.242H41.677a11.674,11.674,0,0,0,2.066-3.937H64.035V53.978H58.159a9.285,9.285,0,1,0-18.444,0H33.838ZM40.263,56.22a9.33,9.33,0,0,0,5.575,5.444v3.7H15.395V46.847H25.423V52.1a1.571,1.571,0,0,0,1.569,1.569h4.6v.654A1.9,1.9,0,0,0,33.49,56.22Zm-12.6-9.373H31.6v4.584H27.665ZM22.826,31.684H27.1v3.623H22.826Zm-2.242,0v4.3a1.571,1.571,0,0,0,1.569,1.569H27.77a1.571,1.571,0,0,0,1.569-1.569v-4.3H31.6V44.605h-16.2V31.684ZM61.157,77.59A2.989,2.989,0,1,1,64.146,74.6,2.992,2.992,0,0,1,61.157,77.59Z"
                         transform="translate(0 -4.722)" fill="#ec4115" />
                 </svg>



             </div>
             <p class="text-[12px] px-5 pb-5 pt-5 w-[95%]">Manpower Supply <br>Our specialist training and personnel
                 development services address challenging roles within the oil and gas sector, covering the entire value
                 chain, from recruitment of project managers, supervisors, and skilled personnel to deployment in the
                 energy sector to meet specific service requirements.
                 <br><br>Procurement Supply
                 <br>Positioned as procurement specialists, we excel in cost-cutting through efficient processes,
                 offering OEM-based specific solutions to navigate sector volatility. Clients trust us for our robust
                 supply chain management, reliable supplies, single-point control across projects, established supplier
                 relationships, and a balanced, strategic procurement approach.
             </p>
         </div>
     </a> --}}

 </div>
