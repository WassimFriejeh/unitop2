{{-- <div class="ml-44 pb-10">
    <h1 class="small-title pb-3">Get In Touch</h1>
    <table class="bg-lightColor border-b">
        <form action="">
            <tr>
                <th>First name*</th>
                <td><input required type="text" name="" id="" placeholder="Enter your first name"></td>
                <th>Last name*</th>
                <td><input type="text" name="" id="" placeholder="Enter your last name"></td>
                <td></td>
                <th></th>
                <td></td>
                <th></th>
            </tr>
            <tr>
                <th>Email address*</th>
                <td><input type="email" name="" id="" placeholder="email@address.com"></td>
            </tr>
            <tr>
                <th>Phone number*</th>
                <td><input type="number" name="" id="" placeholder="Phone Number"></td>
            </tr>
            <tr>
                <th>Company name*</th>
                <td><input type="text" name="" id="" placeholder="Enter the company name"></td>
            </tr>
            <tr>
                <th>Subject*</th>
                <td><input type="text" name="" id="" placeholder="Enter the subject"></td>
            </tr>
            <tr>
                <th>Message*</th>
                <td>
                    <textarea name="" id="" cols="20" rows="4" placeholder="How can we help you?"></textarea>
                </td>
            </tr>
            <tr class="no-border-b ">
                <td class="text-[10px] pb-10 w-[25%]">Our Team Will Be Reaching Out To You Soon Once Your Form Is Submitted.</td>
                <td></td>
                <td></td>
                <th></th>
                <td colspan="4">
                    <div class="overflow-y-hidden">
                        <div class="contentLinkWrapper">
                            <button class="contentLink" href="/about" title="Get To know us">submit</button>
                            <div class="icon"> <i class="absolute fa-solid fa-arrow-up rotate-45"></i></div>
                        </div>
                    </div>
                </td>
            </tr>
        </form>
    </table>
</div> --}}
<div class="lg:ml-44 md:ml-0 sm:ml-0 ml-0 pb-10">
    <h1 class="small-title pb-3">Get In Touch</h1>
    <div class="table-container relative">
        <div class="w-full h-full absolute top-0 left-0 bg-lightColor z-[-999]"></div>
        <form method="POST" id="contact-us">
            @csrf
            <div class="form-row">
                <div class="flex lg:flex-row gap-10 w-full  md:flex-row sm:flex-col flex-col">
                    <div
                        class="form-position lg:border-none md:border-none sm:border-b  border-b border-darkColor border-opacity-50">
                        <label for="first-name">First name*</label>
                        <input required type="text" name="first_name" id="first-name"
                            placeholder="Enter your first name">
                    </div>
                    <div class="form-position">
                        <label for="last-name">Last name*</label>
                        <input required type="text" name="last_name" id="last-name"
                            placeholder="Enter your last name">
                    </div>
                </div>


            </div>
            <div class="form-row">
                <div class="form-position">
                    <label for="email">Email address*</label>
                    <input required type="email" name="email" id="email" placeholder="email@address.com">
                </div>
            </div>
            <div class="form-row">
                <div class="form-position">
                    <label for="phone_number">Phone number*</label>
                    <input required type="number" name="phone_number" id="phone_number" placeholder="Phone Number">
                </div>
            </div>
            <div class="form-row">
                <div class="form-position">
                    <label for="company">Company name*</label>
                    <input required type="text" name="company_name" id="company"
                        placeholder="Enter the company name">
                </div>
            </div>
            <div class="form-row">
                <div class="form-position">
                    <label for="subject">Subject*</label>
                    <input required type="text" name="subject" id="subject" placeholder="Enter the subject">
                </div>
            </div>
            <div class="form-row">
                <div class="form-position">
                    <label for="message">Message*</label>
                    <textarea required name="message" id="message" cols="20" rows="4" placeholder="How can we help you?"></textarea>
                </div>
            </div>
            <div class="form-row no-border-b flex lg:flex-row md:flex-row  sm:flex-col flex-col  items-start justify-between">
                <p class="text-[12px] pb-10 lg:w-[25%] md:w-[25%] sm:w-full w-full">Our Team Will Be Reaching Out To You
                    Soon Once Your Form Is
                    Submitted.</p>
                <div class="overflow-y-hidden">
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
            </div>

        </form>
    </div>
</div>
</div>
