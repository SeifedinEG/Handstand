<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BackgroundController;
use App\Http\Controllers\ClasseController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\InscriptionController;
use App\Http\Controllers\LogoController;
use App\Http\Controllers\NavController;
use App\Http\Controllers\PricingController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\MapController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\TitreController;
use App\Http\Controllers\TrainerController;
use App\Models\About;
use App\Models\Background;
use App\Models\Classe;
use App\Models\Event;
use App\Models\Footer;
use App\Models\Gallery;
use App\Models\Inscription;
use App\Models\Logo;
use App\Models\Map;
use App\Models\Nav;
use App\Models\Pricing;
use App\Models\Testimonial;
use App\Models\Titre;
use App\Models\Trainer;
use App\Models\User;
use Database\Seeders\LogoSeeder;
use Database\Seeders\RoleSeeder;
use Illuminate\Support\Facades\Route;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/', function(){
    $titres = Titre::all();
    $navitems = Nav::all();
    $backgrounds = Background::all();
    $about = About::all();
    $classes = Classe::all();
    $trainers = Trainer::all();
    $trainers2 = Trainer::inRandomOrder()->limit(1)->get();
    $trainers3 = Trainer::inRandomOrder()->limit(1)->get();
    $galleries = Gallery::inRandomOrder()->limit(6)->get();
    $events = Event::all();
    $pricing = Pricing::all();
    $map = Map::first();
    $testimonials = Testimonial::inRandomOrder()->limit(5)->get();
    $footer = Footer::all();
    $logo = Logo::all();


    return view("site.home", compact("trainers2", "trainers3", "titres", "map","logo", "navitems", "backgrounds", "about", "classes", "trainers", "galleries", "events", "pricing", "testimonials", "footer"));
})->name("home");

Route::get('/aboutus', function(){
    $navitems = Nav::all();
    $about = About::all();
    $events = Event::all();
    $testimonials = Testimonial::inRandomOrder()->limit(5)->get();
    $footer = Footer::all();
    $map = Map::first();
    $logo = Logo::all();
    $titres = Titre::all();
    return view("site.about", compact("navitems", "about", "events", "testimonials", "footer", "map", "logo", "titres"));
});

Route::get('/classes', function(){
    $titres = Titre::all();
    $navitems = Nav::all();
    $backgrounds = Background::all();
    $about = About::all();
    $classes = Classe::all();
    $trainers = Trainer::all();
    $trainers2 = Trainer::inRandomOrder()->limit(3)->get();
    $trainers3 = Trainer::inRandomOrder()->limit(3)->get();
    $galleries = Gallery::inRandomOrder()->limit(6)->get();
    $events = Event::all();
    $pricing = Pricing::all();
    $map = Map::first();
    $testimonials = Testimonial::inRandomOrder()->limit(5)->get();
    $footer = Footer::all();
    $logo = Logo::all();
    return view("site.classes", compact("trainers2", "trainers3", "titres", "map","logo", "navitems", "backgrounds", "about", "classes", "trainers", "galleries", "events", "pricing", "testimonials", "footer"));
});



Route::get('/contact', function(){
    $navitems = Nav::all();
    $footer = Footer::all();
    $map = Map::first();
    $logo = Logo::all();
    $titres = Titre::all();
    return view("site.contact", compact("navitems", "footer", "map", "logo", "titres"));
});

Route::get('/gallery', function(){
    $navitems = Nav::all();
    $footer = Footer::all();
    $galleries = Gallery::all();
    $map = Map::first();
    $logo = Logo::all();
    $titres = Titre::all();
    return view("site.gallery", compact("navitems","galleries", "footer", "map", "logo", "titres"));
});













Route::get('/back', function () {
    $user = User::all();
    return view("backoffice.back", compact("user"));
})->middleware(['auth']);


Route::resource('/back/nav', NavController::class)->middleware(["auth", "manager"]);
Route::resource('/back/background', BackgroundController::class)->middleware(["auth", "manager"]);
Route::resource('/back/classe', ClasseController::class)->middleware(["auth","coach"]);
Route::resource('/back/event', EventController::class)->middleware(["auth", "manager"]);
Route::resource('/back/footer', FooterController::class)->middleware(["auth", "manager"]);
Route::resource('/back/map', MapController::class)->middleware(["auth", "manager"]);
Route::resource('/back/gallery', GalleryController::class)->middleware(["auth", "manager"]);
Route::resource('/back/pricing', PricingController::class)->middleware(["auth", "manager"]);
Route::resource('/back/role', RoleSeeder::class)->middleware(["auth", "manager"]);
Route::resource('/back/logo', LogoController::class)->middleware(["auth", "manager"]);
Route::resource('/back/schedule', ScheduleController::class)->middleware(["auth", "manager"]);
Route::resource('/back/testimonial', TestimonialController::class)->middleware(["auth", "manager"]);
Route::resource('/back/titre', TitreController::class)->middleware(["auth", "manager"]);
Route::resource('/back/trainer', TrainerController::class)->middleware(["auth", "manager"]);
Route::resource('/back/about', AboutController::class)->middleware(["auth", "manager"]);
Route::resource('/back/user', UserController::class)->middleware(["auth", "manager"]);
Route::resource('/back/mail', MailController::class)->middleware(["auth", "manager"]);
Route::resource('/back/newsletter', NewsletterController::class)->middleware(["auth", "admin"]);
Route::resource('/inscription', InscriptionController::class);