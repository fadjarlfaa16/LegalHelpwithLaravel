<?php

namespace App\Http\Controllers;

use App\Models\Forum;
use App\Models\Schedule;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ConsultantController extends Controller
{
    public function WorkspaceView()
    {
        $schedule = Schedule::all();
        return view('consultant.workspace', compact('schedule'));
    }

    public function ForumView()
    {
        $forum = Forum::all();
        return view('consultant.forum', compact('forum'));
    }

    public function ProfileView()
    {
        return view('consultant.consultantprofile');
    }

    public function UpdateProfile(Request $request)
    {
        $user = User::findOrFail(Auth::user()->id);

        if ($request->hasFile('profile_path')) {
            if ($user->profile_path) {
                Storage::disk('public')->delete($user->profile_path);
            }
            $originalFileName = $request->file('profile_path')->getClientOriginalName();

            // Simpan file dengan nama aslinya ke storage/public/profile
            $path = $request->file('profile_path')->storeAs('profile', $originalFileName, 'public');

            $user->profile_path = $originalFileName;
        }

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->bio = $request->input('bio');
        $user->address = $request->input('address');
        $user->mobile_number = $request->input('mobile_number');
        $user->price = $request->input('price');
        $user->save();
        return back();
    }
}
