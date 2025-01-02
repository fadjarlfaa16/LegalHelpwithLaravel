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
        $userEmail = Auth::user()->email;
        $schedule = Schedule::where('consultant_email', $userEmail)->get();
        return view('consultant.workspace', compact('schedule'));
    }

    public function ForumView()
    {
        $forum = Forum::all();
        return view('consultant.forum', compact('forum'));
    }

    public function AddForum(Request $request)
    {
        $request->validate([
            'content' => 'required'
        ]);
        $user = Auth::user();

        Forum::create([
            'username' => $user->name,
            'email' => $user->email,
            'content' => $request->input('content'),
            'profile' => $user->profile_path,
        ]);
        return redirect('/consultant/forum');
    }
    public function DeleteForum($id)
    {
        $forum = Forum::findOrFail($id);
        $forum->delete();
        return redirect('/consultant/forum');
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

            // menyimpan file dengan nama aslinya ke storage/public/profile
            $request->file('profile_path')->storeAs('profile', $originalFileName, 'public');
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
