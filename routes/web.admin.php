<?php

use Illuminate\Support\Facades\Route;

Route::group([
    'prefix' => 'admin',
    'namespace' => '\App\Http\Controllers\Admin',
    'as' => 'admin.',
    'middleware' => 'role:admin,manager,expert.checker'
], function () {
    Route::get('/', function () {
        return view('admin');
    });
    Route::post('delete', 'DeleteController@delete');
    Route::resource('project', 'ProjectController');
    Route::resource('form2', 'Form2Controller');
    Route::resource('gildia', 'GildiaController');
    Route::resource('organization', 'OrganizationController');
    Route::resource('post', 'PostController');
    Route::resource('user', 'UserController');
    Route::resource('mailing', 'MailingController');
    Route::resource('block_user', 'Block_userController');
    Route::resource('expert', 'ExpertController');
    Route::resource('evaluation', 'EvaluationController');
    Route::resource('photo', 'PhotoController');
    Route::resource('nomination', 'NominationController');
});
