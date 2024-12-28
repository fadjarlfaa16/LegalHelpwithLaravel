<?php



use App\Http\Controllers\AdminController;
use App\Http\Controllers\ConsultantController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// View Awal

Route::get('/', function () {
    return view('components/index-App');
});


// Cegah akses sebelum login
Route::middleware(['guest'])->group(function () {
    Route::get('/login', [SessionController::class, 'showLogin'])->name('login');
    Route::post('/login', [SessionController::class, 'login']);
    Route::get('/register', [SessionController::class, 'showRegister'])->name('register');
    Route::post('/register', [SessionController::class, 'register']);
});


// Akses Setelah Login
Route::middleware(['auth'])->group(function () {
    // Rute Role Admin
    Route::prefix('admin')->middleware('UserAccess:admin')->group(function () {

        // Tampilan Utama Dashboard Admin
        Route::get('/dashboard', [AdminController::class, 'AdminMainView'])->name('admin.dashboard');


        // Tampilan Rekomendasi
        Route::get('recommended', [AdminController::class, 'RecommendedView'])->name('admin.recommended.view');

        // Rekomendasi Consultant
        Route::get('topconsultant/create', [AdminController::class, 'CreateTopConsultant'])->name('admin.recommended.topconsultant.create');
        Route::post('/top-consultant', [AdminController::class, 'AddTopConsultant'])->name('admin.recommended.topconsultant.add');
        Route::get('/top-consultant/{id}/edit', [AdminController::class, 'EditTopConsultant'])->name('admin.recommended.topconsultant.edit');
        Route::put('/top-consultant/{id}/update', [AdminController::class, 'UpdateTopConsultant'])->name('admin.recommended.topconsultant.update');
        Route::get('/top-consultant/{id}/delete', [AdminController::class, 'DeleteTopConsultant'])->name('admin.recommended.topconsultant.delete');

        // Rekomendasi Article
        Route::get('toparticle/create', [AdminController::class, 'CreateTopArticle'])->name('admin.recommended.toparticle.create');
        Route::post('/top-article', [AdminController::class, 'AddTopArticle'])->name('admin.recommended.toparticle.add');
        Route::get('/top-article/{id}/edit', [AdminController::class, 'EditTopArticle'])->name('admin.recommended.toparticle.edit');
        Route::put('/top-article/{id}/update', [AdminController::class, 'UpdateTopArticle'])->name('admin.recommended.toparticle.update');
        Route::get('/top-article/{id}/delete', [AdminController::class, 'DeleteTopArticle'])->name('admin.recommended.toparticle.delete');

        // Manipulasi Forum
        Route::get('/forum', [AdminController::class, 'ForumView'])->name('admin.forum.view');
        Route::delete('/forum/{id}/delete', [AdminController::class, 'DeDeleteForum'])->name('admin.forum.delete');


        // // Manipulasi LegalPedia
        Route::get('legalpedia', [AdminController::class, 'LegalpediaView'])->name('admin.legalpedia.view');
        Route::get('legalpedia/create-legalpedia', [AdminController::class, 'CreateArticle'])->name('admin.legalpedia.create');
        Route::post('legalpedia/create-legalpedia', [AdminController::class, 'AddArticle'])->name('admin.legalpedia.add');
        Route::get('legalpedia/{id}/edit-legalpedia', [AdminController::class, 'EditArticle'])->name('admin.legalpedia.edit');
        Route::put('legalpedia/{id}', [AdminController::class, 'UpdateArticle'])->name('admin.legalpedia.update');
        Route::delete('legalpedia/{id}', [AdminController::class, 'DeleteArticle'])->name('admin.legalpedia.delete');
    });


    // Rute Role Consultant
    Route::prefix('consultant')->middleware('UserAccess:consultant')->group(function () {
        Route::get('/workspace', [ConsultantController::class, 'WorkspaceView'])->name('consultant.workspace.view');

        Route::get('/forum', [ConsultantController::class, 'ForumView'])->name('consultant.forum.view');


        //Profile
        Route::get('profile', [ConsultantController::class, 'ProfileView'])->name('consultant.profile.view');
        Route::put('profile', [ConsultantController::class, 'UpdateProfile'])->name('consultant.profile.update');
    });


    // User routes

    Route::prefix('users')->middleware('UserAccess:user')->group(function () {


        // Navigasi ke Home
        Route::get('/', [UserController::class, 'HomeView'])->name('users.home.view');

        // Navigasi ke Consult
        Route::get('consult', [UserController::class, 'ConsultView'])->name('users.consult.view');
        Route::get('detailofconsultant={id}', [UserController::class, 'DetailOfConsultant'])->name('users.consultant.detailofconsultant');
        Route::post('detailofconsultant={id}', [UserController::class, 'Reserve'])->name('user.consultant.reserve');

        //Navigasi ke Forum
        Route::get('forum', [UserController::class, 'ForumView'])->name('users.forum.view');
        Route::post('forum', [UserController::class, 'AddForum'])->name('users.forum.add');
        Route::delete('forum/{id}', [UserController::class, 'DeleteForum'])->name('users.forum.delete');

        // Navigasi ke Legalpedia
        Route::get('legalpedia', [UserController::class, 'LegalpediaView'])->name('users.legalpedia.view');

        // Navigasi ke Profile
        Route::get('profile', [UserController::class, 'ProfileView'])->name('users.profile.view');
        Route::put('profile', [UserController::class, 'UpdateProfile'])->name('users.profile.update');
    });

    // Logout route
    Route::get('/logout', [SessionController::class, 'logout'])->name('logout');
});

Route::get('/home', function () {
    return redirect('admin');
});
Route::fallback(function () {
    return redirect()->back()->with('error', 'Halaman yang Anda cari tidak ditemukan.');
});
