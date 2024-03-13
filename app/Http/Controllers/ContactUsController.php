<?php

namespace App\Http\Controllers;

use App\GeneratedModels\ContactUsInfoModel;
use App\GeneratedModels\EmailModel;
use App\GeneratedModels\InfoModel;
use App\Mail\ContactUs;
use App\Models\ContactUsInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactUsController extends Controller
{
    public function send(Request $request)
    {
       try{
            $email = EmailModel::where('cancelled', 0)->first();
            $request->validate([
                'first_name' => 'required',
                'last_name' => 'required',
                'email' => 'required|email',
                'phone_number' => 'required',
                'company_name' => 'required',  
                'subject' => 'required',
                'message' => 'required'
            ]);


            $lastRequest = ContactUsInfo::create($request->all());

            Mail::to($email['email'])->send(new ContactUs($lastRequest));
            $notification = getter('notifications')->condition('id', 52)->get();
            return  redirect()->route('contactUs',  ["title" => $notification->label, 'message' => $notification->text]);

            return  redirect()->route('contactUs');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Something went wrong. Please try again later.');
        }
    }
    public function render()
    {
        $rows = InfoModel::where('cancelled', 0)->orderby('orders')->first();

        if (!$rows) {
            return abort(404);
        }
        //        @dd($rows);
        return view('pages.contact-us', compact('rows'));
    }
}
