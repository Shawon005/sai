<?php
use App\Http\Controllers as Admin;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/admin', function () {
    return view('Admin/index2');
});
// Route::get('/login', function () {
//     return view('login');
// });
Route::get('/from', function () {
    return view('Admin/from');
});
Route::get('/table', function () {
    return view('Admin/table');
});

Route::get('/table', function () {
    return view('Admin/table');
});
Route::get('/password', function () {
    return view('Admin/change_password');
})->name('password');
Route::group(['prefix' => 'admin', 'as' => 'admin.'], function (){
   
    Route::resource('auth', ADMIN\AdminController::class);
    Route::get('/',[ADMIN\AdminController::class, 'index'])->name('login');
    Route::get('/dashboard',[ADMIN\AdminController::class, 'create'])->name('dashbord');
    Route::get('/logout',[ADMIN\AdminController::class, 'logout'])->name('logout');
    Route::get('/profile',[ADMIN\AdminController::class, 'edit1'])->name('profile');
    Route::POST('/password',[ADMIN\AdminController::class, 'password'])->name('password');
    Route::resource('blog', ADMIN\BlogController::class);
    Route::get('blog/destroy/{id}',[ADMIN\BlogController::class, 'destroy'])->name('blogs.destroy');
    
    Route::resource('news', ADMIN\NewsController::class);
    Route::get('news/destroy/{id}',[ADMIN\NewsController::class, 'destroy'])->name('news.delete');
    Route::resource('faq', ADMIN\FaqController::class);
    Route::get('faq/destroy/{id}',[ADMIN\FaqController::class, 'destroy'])->name('faq.delete');
    
    Route::resource('user', ADMIN\UserController::class);
    Route::get('user/destroy/{id}',[ADMIN\UserController::class, 'destroy'])->name('user.delete');
    Route::get('UserStatusById/{id}',[ADMIN\UserController::class, 'Status']);
    Route::get('NewsStatusById/{id}',[ADMIN\NewsController::class, 'Status']);
    Route::get('BlogStatusById/{id}',[ADMIN\BlogController::class, 'Status']);
    Route::get('FaqStatusById/{id}',[ADMIN\FaqController::class, 'Status']);
   
    Route::resource('activices', ADMIN\ActivicesController::class);
    
    Route::resource('slider', ADMIN\SliderController::class);
    Route::get('SliderStatusById/{id}',[ADMIN\SliderController::class, 'Status']);
    Route::get('slider/destroy/{id}',[ADMIN\SliderController::class, 'destroy'])->name('slider.delete');
    
    Route::resource('setting', ADMIN\SettingController::class);
    
    Route::resource('link', ADMIN\LinkLayoutController::class);
    Route::get('link/destroy/{id}',[ADMIN\LinkLayoutController::class, 'destroy'])->name('link.delete');
    
    Route::resource('client', ADMIN\ClicntController::class);
    Route::get('client/destroy/{id}',[ADMIN\ClicntController::class, 'destroy'])->name('client.delete');
    Route::get('ClientStatusById/{id}',[ADMIN\ClicntController::class, 'Status']);
    
    Route::resource('review', ADMIN\ReviewController::class);
    Route::get('review/destroy/{id}',[ADMIN\ReviewController::class, 'destroy'])->name('review.delete');
    Route::get('ReviewStatusById/{id}',[ADMIN\ReviewController::class, 'Status']);
    Route::resource('spelansvar',ADMIN\SpelansvarController::class);
    
    Route::resource('poolspel', ADMIN\PoolspelController::class);
    Route::get('poolspel/destroy/{id}',[ADMIN\PoolspelController::class, 'destroy'])->name('poolspel.delete');
    Route::get('PoolStatusById/{id}',[ADMIN\PoolspelController::class, 'Status']);
    
    Route::resource('table', ADMIN\TableController::class);
    Route::get('table/destroy/{id}',[ADMIN\TableController::class, 'destroy'])->name('table.delete');
    Route::get('TableStatusById/{id}',[ADMIN\TableController::class, 'Status']);

    Route::resource('tipspel', ADMIN\TipspleController::class);
    Route::get('tipspel/destroy/{id}',[ADMIN\TipspleController::class, 'destroy'])->name('tipspel.delete');
    Route::get('TipsterStatusById/{id}',[ADMIN\TipspleController::class, 'Status']);

    Route::resource('andelar', ADMIN\AndelarController::class);
    Route::get('andelar/destroy/{id}',[ADMIN\AndelarController::class, 'destroy'])->name('andelar.delete');
    Route::get('AndelarStatusById/{id}',[ADMIN\AndelarController::class, 'Status']);

    Route::resource('andelar_sub', ADMIN\AndelarSubController::class);
    Route::get('andelar_sub/destroy/{id}',[ADMIN\AndelarSubController::class, 'destroy'])->name('andelar_sub.delete');
    Route::get('AndelarSubStatusById/{id}',[ADMIN\AndelarSubController::class, 'Status']);

    Route::resource('ads', ADMIN\AdsController::class);
    Route::get('ads/destroy/{id}',[ADMIN\AdsController::class, 'destroy'])->name('ads.delete');
    Route::get('AdsStatusById/{id}',[ADMIN\AdsController::class, 'Status']);

    Route::resource('speltip', ADMIN\SpelTipController::class);
    Route::get('speltip/destroy/{id}',[ADMIN\SpelTipController::class, 'destroy'])->name('speltip.delete');
    Route::get('SpeltipsStatusById/{id}',[ADMIN\SpelTipController::class, 'Status']);

    Route::resource('category', ADMIN\MatchEventCategoryController::class);
    Route::get('category/destroy/{id}',[ADMIN\MatchEventCategoryController::class, 'destroy'])->name('category.delete');

    Route::resource('match', ADMIN\MatchEventController::class);
    Route::get('match/destroy/{id}',[ADMIN\MatchEventController::class, 'destroy'])->name('match.delete');
    Route::get('MatchStatusById/{id}',[ADMIN\MatchEventController::class, 'Status']);

    Route::resource('match2', ADMIN\MatchEvent2Controller::class);
    Route::get('Match2StatusById/{id}',[ADMIN\MatchEvent2Controller::class, 'Status']);

    Route::resource('news_category', ADMIN\NewsCategoryController::class);
    Route::get('news_category/destroy/{id}',[ADMIN\NewsCategoryController::class, 'destroy'])->name('news_category.delete');

    Route::resource('game', ADMIN\GameTypeController::class);
    Route::get('game/destroy/{id}',[ADMIN\GameTypeController::class, 'destroy'])->name('game.delete');

});
 // ForntEnd
 Route::group(['as' => 'home.'], function (){
 Route::get('/',[ADMIN\HomePageController::class, 'index'])->name('index');
 Route::get('about',[ADMIN\HomePageController::class, 'about'])->name('about');
 Route::get('faq',[ADMIN\HomePageController::class, 'faq'])->name('faq');
 Route::get('contact',[ADMIN\HomePageController::class, 'contact'])->name('contact');
 Route::get('news',[ADMIN\HomePageController::class, 'news'])->name('news');
 Route::get('blogs/{slug}',[ADMIN\HomePageController::class, 'blog'])->name('blog');
 Route::get('news/{slug}',[ADMIN\HomePageController::class, 'news_post'])->name('newses');
 Route::get('blogs',[ADMIN\HomePageController::class, 'all_blog'])->name('blogs');
 Route::get('blogs_cat-{name}',[ADMIN\HomePageController::class, 'blog_cat'])->name('blog_cat');
 Route::get('news_cat-{name}',[ADMIN\HomePageController::class, 'news_cat'])->name('news_cat');
 Route::get('spelansvar',[ADMIN\HomePageController::class, 'spelansvar'])->name('spelansvar');
 Route::get('poolspel',[ADMIN\HomePageController::class, 'poolspel'])->name('poolspel');
 Route::get('table',[ADMIN\HomePageController::class, 'table'])->name('table');
 Route::get('speltruppen',[ADMIN\HomePageController::class, 'tipspel'])->name('tipspel');
 Route::get('tipspel/{slug}',[ADMIN\HomePageController::class, 'tipspel_details'])->name('tipspel.details');
 Route::get('andelar',[ADMIN\HomePageController::class, 'andelar'])->name('andelar');
 Route::get('poolspel-analys',[ADMIN\HomePageController::class, 'speltip'])->name('speltip');
 Route::get('match_event/{slug}',[ADMIN\HomePageController::class, 'match_event'])->name('match_event');
 Route::get('speltips/{id}/{name?}',[ADMIN\HomePageController::class, 'speltip_cat'])->name('category_fileter');
 Route::get('reduce',[ADMIN\HomePageController::class, 'red'])->name('reduce');
 Route::get('speltip',[ADMIN\HomePageController::class, 'speltips_g'])->name('speltips_g');

 Route::get('speltips_details/{id}',[ADMIN\HomePageController::class, 'speltips_details'])->name('speltips_details');
 Route::get('Villkor',[ADMIN\HomePageController::class, 'Villkor'])->name('Villkor');
 Route::get('Spelregler',[ADMIN\HomePageController::class, 'Spelregler'])->name('Spelregler');
 Route::get('Integritetspolicy',[ADMIN\HomePageController::class, 'Integritetspolicy'])->name('Integritetspolicy');
 Route::get('Cookie_policy',[ADMIN\HomePageController::class, 'Cookie'])->name('Cookie');
 Route::get('Spelmissbruk',[ADMIN\HomePageController::class, 'Spelmissbruk'])->name('Spelmissbruk');
});

Route::get('/sai-page', function () {
            return view('frontend/poolspel');
        });

Route::match(['get','post'],'/botman',[ADMIN\BotManController::class, 'handle']);        