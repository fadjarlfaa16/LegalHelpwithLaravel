<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Forum;
use App\Models\TopArticle;
use App\Models\TopConsultant;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    // Tampilan utama setelah login
    function AdminMainView()
    {
        $users = User::all();
        $userCount = User::where('role', 'user')->count();
        $consultantCount = User::where('role', 'consultant')->count() - 1;
        $forumCount = Forum::count();
        $articleCount = Article::count();
        return view('admin.dashboard', compact('users', 'userCount', 'consultantCount', 'forumCount', 'articleCount'));
    }

    function DeleteUser($id)
    {
        $user = User::findOrFail($id);
        $target = $user->name;
        $user->delete();
        return redirect()->route('admin.dashboard')->with('success', $target . ' Successfully removed from sistem');
    }

    // RECOMMENDED VIEW

    // Tampilan Rekomendasi untuk Konsultan dan Artikel
    public function RecommendedView()
    {
        $topConsultants = TopConsultant::with('user')->get();
        $topArticle = TopArticle::with(('article'))->get();


        return view('admin.recommended', compact('topConsultants', 'topArticle'));
    }

    // Tampilan untuk membuat Top Consultant
    public function CreateTopConsultant()
    {
        $users = User::where('role', 'consultant')->get();
        return view('admin.create-top-consultant', compact('users'));
    }

    // Validasi tambah data Top Konsultan
    public function AddTopConsultant(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'position' => 'required|in:1,2,3|unique:topconsultant,position',
        ]);

        TopConsultant::create($request->only(['user_id', 'position']));

        return redirect()->route('admin.recommended.view')->with('success', 'Top Consultant successfully updated!');
    }

    // Membuka Tampilan Edit Top Consultant
    public function EditTopConsultant($id)
    {
        $topConsultant = TopConsultant::findOrFail($id);
        $users = User::where('role', 'consultant')->get();

        return view('admin.edit-top-consultant', compact('topConsultant', 'users'));
    }
    // Validasi Untuk Update Top Consultant
    public function UpdateTopConsultant(Request $request, TopConsultant $topConsultant, $id)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id'
        ]);

        $topConsultant = TopConsultant::findOrFail($id);
        $topConsultant->update($request->only(['user_id', 'position']));
        return redirect()->route('admin.recommended.view')->with('success', 'Top Consultant successfully updated!');
    }

    // Menghapus Top Consultant
    public function DeleteTopConsultant($id)
    {
        $topConsultant = TopConsultant::findOrFail($id);
        $topConsultant->delete();

        return redirect()->route('admin.recommended.view')->with('success', 'Top Article successfully deleted!');
    }

    // Tampilan untuk membuat Top Article
    public function CreateTopArticle()
    {
        $article = Article::all();
        return view('admin.create-toparticle', compact('article'));
    }

    // Validasi tambah data Top Article
    public function AddTopArticle(Request $request)
    {
        $request->validate([
            'article_id' => 'required|exists:article,id',
            'position' => 'required|in:1,2,3,4|unique:toparticle,position',
        ]);

        TopArticle::create($request->only(['article_id', 'position']));

        return redirect()->route('admin.recommended.view')->with('success', 'Top Article successfully updated!');
    }


    // Membuka Tampilan Edit Article
    public function EditTopArticle($id)
    {
        $topArticle = TopArticle::findOrFail($id);
        $article = Article::all();

        return view('admin.edit-toparticle', compact('topArticle', 'article'));
    }

    // Validasi untuk Update Top Article
    public function UpdateTopArticle(Request $request, TopArticle $topArticle, $id)
    {
        $request->validate([
            'article_id' => 'required|exists:article,id'
        ]);

        $topArticle = TopArticle::findOrFail($id);
        $topArticle->update($request->only(['article_id', 'position']));
        return redirect()->route('admin.recommended.view')->with('success', 'Top Article successfully updated!');
    }


    // Menghapus Top Article
    public function DeleteTopArticle($id)
    {
        $topArticle = TopArticle::findOrFail($id);
        $topArticle->delete();

        return redirect()->route('admin.recommended.view')->with('success', 'Top Article successfully deleted!');
    }


    // FORUM  

    // Tampilan Forum di Admin
    public function ForumView()
    {
        $forum = Forum::all();
        return view('admin.forum', compact('forum'));
    }

    // Menghapus Forum dari database
    public function DeleteForum($id)
    {
        $forum = Forum::findOrFail($id);
        $forum->delete();

        return redirect()->route('admin.forum.view')->with('success', ' Successfully removed from sistem');
    }

    // Article on LegalPedia

    // Tampilan Legalpedia
    public function LegalpediaView()
    {
        $article = Article::all();
        return view('admin.legalpedia', compact('article'));
    }

    // Membuka tampilan untuk membuat article
    public function CreateArticle()
    {
        return view('admin.create-legalpedia');
    }

    // Menambah Artikel
    public function AddArticle(Request $request)
    {
        $picturePath = null;
        if ($request->hasFile('picture_path')) {
            // Ambil nama asli file
            $originalFileName = $request->file('picture_path')->getClientOriginalName();

            // Simpan file ke storage/app/public/images dengan nama asli
            $request->file('picture_path')->storeAs('article_images', $originalFileName, 'public');

            // Simpan nama file asli ke database
            $picturePath = $originalFileName;
        }

        // Simpan data artikel ke database
        Article::create([
            'headline' => $request->input('headline'),
            'content' => $request->input('content'),
            'picture_path' => $picturePath, // Simpan nama asli file
        ]);

        return redirect()->route('admin.legalpedia.view')->with('success', 'Article succesfully added!');
    }

    // Membuka Tampilan edit Artikel
    public function EditArticle($id)
    {
        $article = Article::findOrFail($id);
        return view('admin.edit-legalpedia', compact('article'));
    }


    // Update Artikel
    public function UpdateArticle(Request $request, $id)
    {
        $article = Article::findOrFail($id);

        if ($request->hasFile('picture_path')) {
            if ($article->picture_path) {
                Storage::disk('public')->delete($article->picture_path);
            }
            $originalFileName = $request->file('picture_path')->getClientOriginalName();
            $path = $request->file('picture_path')->storeAs('article_images', $originalFileName, 'public');
            $article->picture_path = $originalFileName;
        }

        $article->update($request->only(['headline', 'content']));
        $article->save();
        return redirect()->route('admin.legalpedia.view')->with('success', 'Article succesfully updated!');
    }

    public function DeleteArticle($id)
    {
        $article = Article::findOrFail($id);
        $article->delete();

        return redirect()->route('admin.legalpedia.view')->with('success', 'Article succesfully removed from system!');
    }
}
