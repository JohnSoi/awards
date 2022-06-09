<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', 'IndexController@index')->name('index');
Route::post('/register', 'RegisterController@showRegistrationForm')->name('register');
Route::post('/register_process', 'RegisterController@register')->name('register_process');
//Route::get('/lk', 'UserAreaController@showRequests')->name('showRequests');
Route::get('/lk', 'UserAreaController@index')->name('lk');
Route::post('/lk/edit_individual/{id}', 'UserAreaController@edit')->name('edit_ind');
Route::post('/lk/update_ind/{id}', 'UserAreaController@update')->name('update_ind');
Route::get('/individual', 'IndividualController@index')->name('individual');
Route::post('/individual', 'IndividualController@create')->name('individual_create');
Route::post('/entity', 'EntityController@index')->name('entity');
Route::get('/awards2021', 'Awards2021Controller@index')->name('Awards2021');
Route::get('/competition', 'CompetitionController@competition')->name('competition');
Route::get('post', 'PostController@index')->name('post.index');
Route::get('post/{id}', 'PostController@show')->name('post.show');
Route::post('debug', 'DebugController@telegram')->middleware('throttle:60,1');
Route::post('notify', 'NotifyController@telegram')->middleware('throttle:60,1');

Route::group([
    'namespace' => '\App\Http\Controllers\Auth'], function () {
    Route::post('/register_process', 'RegisterController@register')->name('register_process');
});


Route::group([
    'prefix' => 'evaluation',
    'as' => 'evaluation.',
], function () {
    Route::group([
        'middleware' => 'role:expert,jury,admin'
    ], function () {
        Route::get('/', 'EvaluationController@index')->name('index');
        Route::get('process', 'EvaluationController@process')->name('process');
        Route::post('update/{id}', 'EvaluationController@update')->name('update');
        Route::post('photoChange', 'EvaluationController@photoChange')->name('photoChange');
    });

    Route::get('projects', 'EvaluationController@projects')->name('projects')->middleware('role:expert,jury,manager,admin');
    Route::get('project/{id}', 'EvaluationController@show')->name('project.show')->middleware('role:manager,admin');
    Route::post('project_top_toggle/{id}', 'EvaluationController@top_toggle')->name('project.top_toggle')->middleware('role:manager,admin');
    Route::post('project_accept_toggle/{id}', 'EvaluationController@accept_toggle')->name('project.accept_toggle')->middleware('role:manager,admin');
    Route::post('project_delete/{id}', 'EvaluationController@delete')->name('project.delete')->middleware('role:manager,admin');
});

Route::group([
    'prefix' => 'form',
    'as' => 'form.',
], function () {
    Route::post('subscribe', 'Form\SubscribeController@store')->name('subscribe.store');
    Route::post('gildia', 'Form\ProjectController@gildia')->name('gildia.store');
    Route::post('organization', 'Form\ProjectController@organization')->name('organization.store');
});

Auth::routes();

Route::post('logout', 'Auth\LogoutController@logout')->name('user_logout');

Route::get('photos', 'PhotoController@index')->name('photos.index');

Route::get('errors/404', function () {
    return view('/errors/404');
})->name('errors.404');

Route::get('errors/500', function () {
    return view('/errors/500');
})->name('errors.500');

Route::get('mailing/welcome', function () {
    return view('/mailing/welcome');
})->name('mailing.welcome');

Route::get('mailing/thanks', function () {
    return view('/mailing/thanks');
})->name('mailing.thanks');

// test

Route::get('faq', function () {
    return view('/faq/index');
})->name('faq');

Route::get('agreement', function () {
    return view('agreement/index');
})->name('agreement.index');

Route::get('agreement/privacy', function () {
    return view('agreement/privacy');
})->name('agreement.privacy');

Route::get('agreement/accord', function () {
    return view('agreement/accord');
})->name('agreement.accord');

Route::get('nomination/{id}', 'NominationController@show')->name('nomination.show');

Route::get('expert', 'ExpertController@index')->name('expert.index');
Route::get('expert/{id}', 'ExpertController@show')->name('expert.show');
