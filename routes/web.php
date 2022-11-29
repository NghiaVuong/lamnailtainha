<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubscriberController;
use App\Models\Subscriber;
use App\Http\Controllers\BannerController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// auth
Route::get('/login', [AuthController::class, 'loginShow'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');


// Route::get('/', function () {
//     return view('index',['title' => 'Trang chủ']);
// })->name('home');

Route::get('master', function () {
    return view('auth.master');
})->name('master');

Route::get('services', function () {
    return view('services',['title' => 'Dịch vụ']);
})->name('services');

Route::get('about-us', function () {
    return view('about',['title' => 'Về chúng tôi']);
})->name('about');

Route::get('portfolio', function () {
    return view('portfolio',['title' => 'Danh mục']);
})->name('portfolio');

Route::get('portfolio/details', function () {
    return view('portfolio-details');
})->name('portfolio/details');


Route::get('blog/details', function () {
    return view('blog-details');
})->name('blog/details');

Route::get('contact', function () {
    return view('contact',['title' => 'Liên hệ']);
})->name('contact');
Route::get('/', [BannerController::class, 'showAllBanner'])->name('home');

Route::get('/blog', [BlogController::class, 'showAllBlog'])->name('blog');
Route::get('/blog-details/{slug}', [BlogController::class, 'detailsBlog'])->name('blogDetails');
Route::get('/category/{slug}', [BlogController::class, 'showAllBlog'])->name('category.slug');
Route::get('/search', [BlogController::class, 'blogSearch'])->name('blog.search');

// trang dich vu
Route::get('outsourcing-frontend-development', function () {
    return view('view-service.outSourceFrontend');
})->name('outsourcing-frontend-development');

Route::get('java-systems-development', function () {
    return view('view-service.java-systems-development');
})->name('java-systems-development');

Route::get('cobol-systems-development', function () {
    return view('view-service.cobol-systems-development');
})->name('cobol-systems-development');

Route::get('service-of-human-resources', function () {
    return view('view-service.service-of-human-resources');
})->name('service-of-human-resources');

Route::get('smartphone-application-development', function () {
    return view('view-service.smartphone-application-development');
})->name('smartphone-application-development');


Route::get('net-systems-development', function () {
    return view('view-service.net-systems-development');
})->name('net-systems-development');
//end -trang dich vu
//subcriber
Route::post('subcriber', [SubscriberController::class, 'store'])->name('subcriber.post');
Route::post('storeSubscriber', [SubscriberController::class, 'storeSubscriber'])->name('subcriber.postSub');

Route::middleware(['auth'])->group(function () {
    // must change to Controller Call later
    Route::get('admin/dashboard', [BlogController::class, 'index'])->name('admin.dashboard');
    Route::get('admin/list-blog/add-blog', [BlogController::class, 'showAddBlog'])->name('add-blog.get');
    Route::post('admin/list-blog/add-blog', [BlogController::class, 'addBlog'])->name('add-blog.post');
    Route::get('admin/blog/{id}/edit', [BlogController::class, 'show'])->name('edit-blog.get');
    Route::post('admin/blog/{id}/edit', [BlogController::class, 'update'])->name('edit-blog.post');
    Route::post('admin/blog/changeStatus', [BlogController::class, 'changeStatus'])->name('changeStatus.post');
    Route::delete('admin/blog/delete/{id}', [BlogController::class, 'deleteBlog'])->name('delete-blog.get');

    //category
    Route::get('admin/list-blog', [BlogController::class, 'showBlog'])->name('list-blog');
    Route::get('admin/category', [CategoryController::class, 'index'])->name('category.get');
    Route::get('admin/all', [CategoryController::class, 'getAll'])->name('category.all');
    Route::post('admin/category', [CategoryController::class, 'StoreCategory'])->name('category.post');
    Route::get('admin/category/{id}/edit', [CategoryController::class, 'EditCategory'])->name('category.edit');
    Route::put('admin/category/{id}', [CategoryController::class, 'UpdateCategory'])->name('category.update');
    Route::get('admin/category/status', [CategoryController::class, 'UpdateStatusCategory'])->name('category.updateStatus');
    Route::delete('admin/category/{id}', [CategoryController::class, 'DeleteCategory'])->name('category.delete');

    //subcriber
    Route::get('admin/list-subcriber', [SubscriberController::class, 'index'])->name('subcriber.get');
    //Banner
    Route::get('admin/list-banner', [BannerController::class, 'showBanner'])->name('list-banner');
    Route::get('admin/dashboard', [BannerController::class, 'index'])->name('admin.dashboard');

    Route::get('admin/list-banner/add-banner', [BannerController::class, 'showAddBanner'])->name('add-banner.get');
    Route::post('admin/list-banner/add-banner', [BannerController::class, 'addBanner'])->name('add-banner.post');
    Route::get('admin/banner/{id}/edit', [BannerController::class, 'show'])->name('edit-banner.get');
    Route::post('admin/banner/{id}/edit', [BannerController::class, 'update'])->name('edit-banner.post');
    Route::delete('admin/banner/delete/{id}', [BannerController::class, 'deleteBanner'])->name('delete-banner.get');
    Route::post('admin/banner/changeStatus', [BannerController::class, 'changeStatus'])->name('changeStatus1.post');

});
