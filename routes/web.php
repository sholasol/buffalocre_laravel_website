<?php

use App\Http\Livewire\Kerbs;
use App\Http\Livewire\Blocks;
use App\Http\Livewire\Clamps;
use App\Http\Livewire\Mixers;
use App\Http\Livewire\Pavers;
use App\Http\Livewire\Carbins;
use App\Http\Livewire\Cements;
use App\Http\Livewire\HiJacks;
use App\Http\Livewire\BigJohns;
use App\Http\Livewire\BlogEdit;
use App\Http\Livewire\Granites;
use App\Http\Livewire\Moulders;
use App\Http\Livewire\LongJohns;
use App\Http\Livewire\BiWheelers;
use App\Http\Livewire\EditProduct;
use App\Http\Livewire\ProductEdit;
use App\Http\Livewire\BlogComponent;
use App\Http\Livewire\CreateProduct;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\ProductDetail;
use App\Http\Livewire\ShopComponent;
use App\Http\Livewire\AboutComponent;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\ProductCategory;
use App\Http\Livewire\ContactComponent;
use App\Http\Livewire\ProductComponent;
use App\Http\Livewire\ServicesComponent;
use App\Http\Livewire\EditProductCategory;
use App\Http\Livewire\NewProductComponent;
use App\Http\Livewire\AdminCreateComponent;
use App\Http\Livewire\DashboardComponent;//AdminCreateComponent

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', HomeComponent::class);
Route::get('/about', AboutComponent::class)->name('about');
Route::get('/services', ServicesComponent::class)->name('services');
Route::get('/blog', BlogComponent::class)->name('blog');
Route::get('/contact', ContactComponent::class)->name('contact');
Route::get('/shop', ShopComponent::class)->name('shop');
Route::get('/new-product', NewProductComponent::class)->name('new-product');
Route::get('/products', ProductComponent::class)->name('products');


Route::get('/moulders', Moulders::class)->name('moulders'); //
Route::get('/clamps', Clamps::class)->name('clamps');
Route::get('/mixers', Mixers::class)->name('mixers');
Route::get('/blocks', Blocks::class)->name('blocks');

Route::get('/pavers', Pavers::class)->name('pavers');
Route::get('/kerbs', Kerbs::class)->name('kerbs');
Route::get('/cements', Cements::class)->name('cements');
Route::get('/granites', Granites::class)->name('granites');
Route::get('/carbins', Carbins::class)->name('carbins');

Route::get('/hi-jacks', HiJacks::class)->name('hi-jacks'); //hi-jacks
Route::get('/long-johns', LongJohns::class)->name('long-johns'); //long-johns
Route::get('/big-johns', BigJohns::class)->name('big-johns'); //big-johns
Route::get('/bi-wheelers', BiWheelers::class)->name('bi-wheelers'); //ProductDetail
Route::get('/details/{prod_id}', ProductDetail::class)->name('details'); //

//Route::get('/redirect', Redirect::class)->name('redirect'); //NewProductComponent

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->group(function() {
    Route::get('/admin/dashboard', DashboardComponent::class)->name('admin.dashboard');
    Route::get('/admin/create-blog', AdminCreateComponent::class)->name('admin.create-blog');
    Route::get('/admin/create-product', CreateProduct::class)->name('admin.create-product');
    Route::get('/admin/product-edit/{prod_id}', ProductEdit::class)->name('admin.product-edit');
    Route::get('/admin/blog-edit/{blog_id}', BlogEdit::class)->name('admin.blog-edit');//
    Route::get('/admin/edit-product/{prod_id}', EditProduct::class)->name('admin.edit-product');//EditProductCategory
    Route::get('/admin/product-categories', ProductCategory::class)->name('admin.product-categories');
    Route::get('/admin/edit-category/{cat_id}', EditProductCategory::class)->name('admin.edit-category');//
});
