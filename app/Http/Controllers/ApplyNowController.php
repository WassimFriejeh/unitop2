<?php

namespace App\Http\Controllers;

use App\GeneratedModels\EmailModel;
use App\Mail\JobApplications;
use App\Models\JobApplication;
use App\Models\JobsOpeningsModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ApplyNowController extends Controller
{
    public function send(Request $request)
    {
        try {
            $email = EmailModel::where('cancelled', 0)->first();
        
            $request->validate([
                'first_name' => 'required',
                'last_name' => 'required',
                'email' => 'required|email',
                'phone_number' => 'required',
                'attached_cv' => 'required',
                'position' => 'required',
                'message' => 'required'
            ]);

            $file = null;
            $inputs = $request->all();

            if (request()->hasFile('attached_cv')) {
                $file = request()->file('attached_cv');
                $extension = $file->extension();
                if (is_array($inputs)) {
                    $inputs['extension_attached_cv'] = $extension;
                }
            }


            $lastRequest = JobApplication::create($inputs);

            if ($file) {
                $fileName =  $lastRequest->id . '.' . $extension;
                $file->storeAs('/data/attached_cv', $fileName, 'public');
            }

            Mail::to($email['email'])->send(new JobApplications($lastRequest));
            // $notification = getter('notifications')->condition('id', 52)->get();
            // return  redirect()->route('A',  ["title" => $notification->label, 'message' => $notification->text]);

            return  redirect()->route('applyNow');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Something went wrong. Please try again later.');
        }
    }
    public function render()
    {
        $positions = JobsOpeningsModel::query()
            ->where('cancelled', 0)
            ->get();

        return view('pages.apply-now', compact('positions'));
    }
}
