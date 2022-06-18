<?php

use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
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
Route::get('/lk', 'UserAreaController@index')->name('lk')->middleware('verified');
Route::get('/lk/edit_request/{id}', 'form\ProjectController@edit')->name('edit_ind');
Route::get('/lk/edit_request/{id}', 'form\ProjectController@update')->name('update_ind');
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

Route::get('logout', 'Auth\LogoutController@logout')->name('user_logout');

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

Route::get('/email/verify', function () {
    return view('auth.verify');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect('/');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::get('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    session()->put('resent', true);

    return back()->with('message', 'Письмо с подтверждением отправлено!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');
