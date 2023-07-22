<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\contactus;
use App\Models\Upload;
use App\Models\Exchange;
use Illuminate\support\Facades\Auth;
use Illuminate\support\Facades\DB;

class FeatureController extends Controller
{   

    public function index(){
        return view('home');
    }

    public function prohibited(){
        return view('feature.prohibited');
    }

    public function contact(){
        return view('feature.contactus');
    }

    protected function storeContact(Request $request){
        $request->validate([
            'name'=>'required',
            'message'=>'required',
        ]);

        $rev = new contactus;
        $rev->name = $request->name;
        $rev->message = $request->message;
        $rev->user_id = Auth::id();
        if ($rev->save())
        {
            return redirect('home/contact')->with('status', 'Feedback Accepted');
        } else {
            return redirect('home/contact')->with('status', 'Feedback Denied');

        }
    }

    public function myprofile($id)
    {
        $user = User::findorfail($id);
        return view ('feature.myprofile', compact('user'));
    }

    //Edit Profile
    public function editProfile($id)
        {
            $edit = User::findorfail($id);
            return view('feature.editProfile', compact('edit'));
        }

        public function updateProfile (Request $request, $id)
        {
            $edit = User::findorfail($id);
            $edit->update($request->all());
            if ($edit->save() && $request->hasFile('image'))
            {
                $request->image->storeAs('uploads/images',$filename,'public');
                Auth()->user()->update(['image'=>$filename]);
                return redirect('index')->with('status', 'Update Success');
            } else {
                return redirect('index')->with('status', 'Update Denied');
            }
        }
}


