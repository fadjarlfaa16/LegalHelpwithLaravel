<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Forum;
use App\Models\Schedule;
use App\Models\TopArticle;
use App\Models\TopConsultant;
use App\Models\TopForum;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function HomeView()
    {
        // first berguna untuk se
        $topConsultant1 = TopConsultant::with('user')->where('position', 1)->first();
        $topConsultant2 = TopConsultant::with('user')->where('position', 2)->first();
        $topConsultant3 = TopConsultant::with('user')->where('position', 3)->first();
        $toparticle1 = TopArticle::with('article')->where('position', 1)->first();
        $toparticle2 = TopArticle::with('article')->where('position', 2)->first();
        $toparticle3 = TopArticle::with('article')->where('position', 3)->first();
        $toparticle4 = TopArticle::with('article')->where('position', 4)->first();
        $forum = Forum::orderBy('id', 'desc')->take(4)->get();

        return view('users.home', compact('forum', 'topConsultant1', 'topConsultant2', 'topConsultant3', 'toparticle1', 'toparticle2', 'toparticle3', 'toparticle4'));
    }

    public function ConsultView()
    {
        $users = User::all();
        return view('users.consult', compact('users'));
    }

    public function ForumView()
    {
        $forum = Forum::all();
        return view('users.forum', compact('forum'));
    }

    public function LegalpediaView()

    {
        $article = Article::all();
        return view('users.legalpedia', compact('article'));
    }

    public function ProfileView()
    {
        return view('users.profile');
    }


    // Consult 
    public function DetailOfConsultant($id)
    {
        $reserve = User::findOrFail($id);
        return view('users.detailofconsultant', compact('reserve'));
    }

    public function Reserve(Request $request, $id)
    {
        $reserve = User::findOrFail($id);
        // dd($reserve->name);
        $user = Auth::user();
        Schedule::create([
            'username' => $user->name,
            'user_email' => $user->email,
            'consultant_name' => $reserve->name,
            'consultant_email' => $reserve->email,
            'reserved_time' => $request->input('reserved_time')
        ]);

        return redirect()->route('users.consult.view');
    }



    //Forum
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
            'profile' => $user->profile_path
        ]);
        return redirect('/users/forum');
    }

    public function DeleteForum($id)
    {
        $forum = Forum::findOrFail($id);
        $forum->delete();
        return redirect('/users/forum');
    }

    //Legalpedia

    public function LegalpediaDetailView($id)
    {
        $article = Article::findOrFail($id);
        return view('users.detailoflegalpedia', compact('article'));
    }

    //Profile

    public function UpdateProfile(Request $request)
    {
        $user = User::findOrFail(Auth::user()->id);

        if ($request->hasFile('profile_path')) {
            if ($user->profile_path) {
                Storage::disk('public')->delete($user->profile_path);
            }
            $originalFileName = $request->file('profile_path')->getClientOriginalName();
            // Simpan file dengan nama aslinya ke storage/public/profile
            $request->file('profile_path')->storeAs('profile', $originalFileName, 'public');
            $user->profile_path = $originalFileName;
        }

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->bio = $request->input('bio');
        $user->address = $request->input('address');
        $user->mobile_number = $request->input('mobile_number');
        $user->save();
        return back();
    }
}
