@extends('layouts.main')
@section('content')
    <div class="main-container w-full main-spacing "> @include('components.inline-title', [
        'label' => 'Apply Now',
        'width' => 'lg:w-[60%] md:w-[73%] sm:w-full w-full',
    ])
        <div class="lg:ml-44 md:ml-44 sm:ml-0 ml-0 pb-10">

            <div class="table-container relative">
                <div class="w-full h-full absolute top-0 left-0 bg-lightColor z-[-999]"></div>
                <form method="POST" id="apply-now" enctype="multipart/form-data">
                    @csrf
                    <div>
                        <div
                            class="flex flex-col sm:flex-col border-b align-top border-darkColor border-opacity-50  md:flex-row lg:flex-row gap-x-10">

                            <div
                                class="pt-6  flex lg:gap-x-10 md:gap-x-10 sm:gap-x-2  gap-x-2  mb-[10px] sm:border-b border-b lg:border-none md:border-none  border-darkColor border-opacity-50 ">
                                <label for="first_name"
                                    class="text-primaryColor w-fit lg:min-w-[150px] md:min-w-[150px] sm:min-w-[100px] min-w-[100px] font-semibold lg:text-[15px] md:text-[16px] sm:text-[12px] text-[12px] text-left">First
                                    name*</label>
                                <input type="text" name="first_name" id="first-name" placeholder="Enter your first name">
                            </div>
                            <div class="pt-6  flex lg:gap-x-10 md:gap-x-10 sm:gap-x-2  gap-x-2  mb-[10px]">
                                <label for="last_name"
                                    class="text-primaryColor w-fit lg:min-w-[150px] md:min-w-[150px] sm:min-w-[100px] min-w-[100px] font-semibold lg:text-[15px] md:text-[16px] sm:text-[12px] text-[12px] text-left">Last
                                    name*</label>
                                <input type="text" name="last_name" id="last-name" placeholder="Enter your last name">

                            </div>

                        </div>
                    </div>
                    <div class="form-row">

                        <label for="email">Email address*</label>
                        <input type="email" name="email" id="email" placeholder="email@address.com">
                    </div>
                    <div class="form-row">

                        <label for="phone">Phone number*</label>
                        <input type="number" name="phone_number" id="phone" placeholder="Phone Number">
                    </div>
                    <div class="form-row">

                        <label for="position">Position*</label>
                        <div style="position: relative;" class="w-full">
                            <select name="position" id="position"
                                class="w-full  text-black opacity-30 text-[13px] font-medium">
                                <option value="" class="">select your position</option>
                                @foreach ($positions as $position)
                                    <option class="" value="{{ $position->label }}">{{ $position->label }}</option>
                                @endforeach
                            </select>
                            <!-- Custom arrow icon -->
                            <i
                                class="custom-arrow pointer-events-none text-primaryColor fa-solid fa-arrow-down rotate-45"></i>
                        </div>

                    </div>
                    <div class="form-row">
                      
                            <label class="">Attach CV*</label>
                            <div class="file-input-container">
                                <input type="file" name="attached_cv" id="file-input" placeholder="Attach"
                                    accept=".pdf, .doc, .docx" class="">
                                <span class="file-input-text">Attach</span>
                                <i class="file-input-icon fa-solid text-primaryColor fa-paperclip"></i>
                            </div>
                      
                    </div>

                        <div class="form-row">

                            <label for="message">Message*</label>
                            <textarea name="message" id="message" cols="20" rows="4" placeholder="How can we help you?"></textarea>
                        </div>
                        <div
                            class=" no-border-b pb-10 flex lg:flex-row md:flex-row  sm:flex-col flex-col items-start justify-between">
                            <p class="text-[12px] pb-3 lg:w-[25%] md:w-[25%] sm:w-full w-full">Our Team Will Be Reaching Out
                                To
                                You Soon Once Your Form Is
                                Submitted.</p>


                            <div class="hover-btn ">
                                <button type="submit">

                                    <div class="hover-bg  "></div>
                                    <div class="bg !bg-lightColor"></div>
                                    <button type="submit" class="contentLink !text-[15px]"
                                        title="Get To know us">submit</button>
                                    <button type="submit" class="icon !bg-primaryColor"> <i
                                            class="fa-solid fa-arrow-up rotate-45"></i></button>

                                </button>
                            </div>
                        </div>

                </form>

            </div>
        </div>
    </div>
@endsection
