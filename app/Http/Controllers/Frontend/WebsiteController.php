<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\DoneeRequest;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class WebsiteController extends Controller
{
    public function index()
    {
        if (Auth::user()) {
            $query = User::where('role', '=', 2)->where('id', '!=', Auth::user()->id);
        } else {
            $query = User::where('role', '=', 2);
        }

        $users = $query->get();
        $donnars = $query->take(4)->orderBy('id', 'desc')->get();
        return view('frontend.index', compact('users', 'donnars'));
    }

    public function map()
    {
        $googleApiKey = env('GOOGLE_MAPS_API_KEY');
        $users = User::where('role', 2)->where('status', 0)->get();
        return view('frontend.map', compact('googleApiKey', 'users'));
    }

    public function allDonor($blod = null)
    {
        $user = Auth::user();
        if ($user) {
            $query = User::where('role', '=', 2)->where('status', 0)->where('id', '!=', $user->id);
        } else {
            $query = User::where('role', '=', 2)->where('status', 0);
        }
        if ($blod != null) {
            $donars = $query->where('blood_group', '=', $blod)->orderBy('id', 'desc')->paginate(20);
        } else {
            $donars = $query->orderBy('id', 'desc')->paginate(20);
        }
        return view('frontend.alldonar', compact('donars'));
    }

    public function userProfile($id)
    {
        $profile = User::find($id);
        $count = DoneeRequest::where('donor_id', '=', $id)->where('status', '=', '3')->count();
        $currentDatee = date('Y-m-d');
        $currentDate = date('Y-m-d', strtotime($currentDatee));
        $date = date('Y-m-d', strtotime($profile->date ?? '12-2-2021'));
        return view('frontend.profile', compact('profile', 'count', 'currentDate', 'date'));
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function dashboard()
    {
        $user = Auth::user();
        $donneRequest = DoneeRequest::where('donee_id', '=', $user->id)->orderBy('id', 'desc')->paginate(6);
        $donarRequest = DoneeRequest::where('donor_id', '=', $user->id)->orderBy('id', 'desc')->paginate(6);
        return view('frontend.dashboard', compact('user', 'donarRequest', 'donneRequest'));
    }

    public function sendRequest(Request $request)
    {
        $user = Auth::user();
        $check = DoneeRequest::where('donor_id', '=', $request->donor_id)->where('donee_id', '=', $user->id)->where('status', 0)->first();
        if ($check) {
            $notification = array(
                'messege' => ' You cannot send request again. You already send a request please wait for the donor response.',
                'alert-type' => 'info'
            );
            return redirect()->back()
                ->with($notification);
        } else {
            $doneeRequest = new DoneeRequest();
            $doneeRequest->donor_id = $request->donor_id;
            $doneeRequest->donee_id = $user->id;
            $doneeRequest->name = $request->name ?? "";
            $doneeRequest->email = $request->email ?? "";
            $doneeRequest->message = $request->message;
            $doneeRequest->status = 0;
            $doneeRequest->save();
            $notification = array(
                'messege' => '  Request Send successfully ',
                'alert-type' => 'success'
            );
            return redirect()->back()
                ->with($notification);
        }
    }

    public function donorSearch(Request $request)
    {

        $donars = User::where(function ($query) use ($request) {
            $query->orWhere('blood_group', '=', $request->blood_id)
                ->orWhere('city', '=', $request->city)
                ->orWhere('gender', '=', $request->gender);
        })
            ->where('role', 2)->where('status', 0)
            ->paginate(10);
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

    public function donnerAccept($id, $status)
    {
        $request = DoneeRequest::find($id);
        $request->status = $status;
        $request->update();
        if ($status == 3) {
            $user = User::find($request->donor_id);
            $user->date = Carbon::now()->addDays(90);
            $user->update();
            DoneeRequest::where('donor_id', '=', $id)->where('status', '=', 0)->update(['status' => 3]);
        }
        if ($status == 1) {
            $notification = array(
                'messege' => '  Request Accept  successfully ',
                'alert-type' => 'success'
            );
        } else {
            $notification = array(
                'messege' => '  Request Reject  successfully ',
                'alert-type' => 'success'
            );
        }
        return redirect()->back()
            ->with($notification);

    }

    public function eligibility()
    {
        return view('frontend.egli');
    }
}
