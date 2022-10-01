<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\DoneeRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class WebsiteController extends Controller
{
    public function index()
    {
        $users = User::where('role', '=', 2)->get();
        $donnars = User::where('role', '=', 2)->take(10)->orderBy('id', 'desc')->get();
        return view('frontend.index', compact('users', 'donnars'));
    }

    public function allDonor($blod = null)
    {
        if ($blod != null) {
            $donars = User::where('role', '=', 2)->where('blood_group', '=', $blod)->orderBy('id', 'desc')->paginate(20);
        } else {
            $donars = User::where('role', '=', 2)->orderBy('id', 'desc')->paginate(20);
        }

        return view('frontend.alldonar', compact('donars'));
    }

    public function userProfile($id)
    {
        $profile = User::find($id);
        return view('frontend.profile', compact('profile'));
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function dashboard()
    {
        $user = Auth::user();
        return view('frontend.dashboard', compact('user'));
    }

    public function sendRequest(Request $request)
    {
        $user = Auth::user();
        $doneeRequest = new DoneeRequest();
        $doneeRequest->donor_id = $request->donor_id;
        $doneeRequest->donee_id = $user->id;
        $doneeRequest->name = $request->name;
        $doneeRequest->email = $request->email;
        $doneeRequest->message = $request->message;
        $doneeRequest->save();
        $notification = array(
            'messege' => '  Request Send successfully ',
            'alert-type' => 'success'
        );
        return redirect()->back()
            ->with($notification);

    }

    public function donorSearch(Request $request)
    {
        if ($request->gender != 3) {
            $donars = User::where('role', '=', 2)->where('city', 'like', '%' . $request->city . '%')->where('blood_group', 'like', '%' . $request->blood_id . '%')->where('gender', '=', $request->gender)->orderBy('id', 'desc')->paginate(20);
        }
        $donars = User::where('role', '=', 2)->where('city', 'like', '%' . $request->city . '%')->where('blood_group', 'like', '%' . $request->blood_id . '%')->orderBy('id', 'desc')->paginate(20);
        return view('frontend.alldonar', compact('donars'));
    }

    public function updateProfile(Request $request)
    {
        $user = Auth::user();
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->dob = $request->dob;
        $user->about = $request->about;
        if ($request->city) {
            $user->city = $request->city;
        }
        if ($user->role == 2) {
            $user->e_time = $request->e_time;
            $user->s_time = $request->s_time;
        }
        if ($request->password) {
            $user->password = Hash::make($request->password);
        }

        if ($request->hasfile('img')) {

            $image1 = $request->file('img');
            $name = time() . 'img' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'img/';
            $image1->move($destinationPath, $name);
            $user->img = 'img/' . $name;
        }
        $user->update();
        $notification = array(
            'messege' => '  Profile Update successfully ',
            'alert-type' => 'success'
        );
        return redirect()->back()
            ->with($notification);
    }
}
