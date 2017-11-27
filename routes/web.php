<?php

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


Route::get('testing', function(){
		return view('home');
});

Route::get('contact', [
		'uses' => 'frontend\ContactController@show',
		'as'   => 'contact.us'
]);

Route::get('user/registration', [
    'uses' => 'frontend\RegistrationController@show',
		'as'   => 'user.registration'
]);

Route::post('user/registration', [
    'uses' => 'frontend\RegistrationController@postRegister',
    'as'   => 'user.registration.post'
]);

Route::get('user/registration/update/{userid}', [
    'uses' => 'frontend\RegistrationController@showRegistrationUpdate',
    'as'   => 'user.registration.update'
]);

Route::get('user/login', [
    'uses' => 'frontend\UserLoginController@show',
		'as'   => 'user.login'
]);

Route::post('user/login', [
    'uses' => 'frontend\UserLoginController@postLogin',
		'as' => 'user.login.post'
]);

Route::get('/', function () {
    return view('frontend.home');
})->name('home');

Auth::routes();

Route::group(['prefix' => 'user'], function () {

		Route::post('logout', [
	      'uses' => 'frontend\UserLoginController@postLogout',
	      'as'   => 'user.logout'
	  ]);

});

// FRONT-END ROUTES

Route::group(['prefix' => 'admin'], function() {

		Route::get('/', [
				'uses' => 'frontend\AdminController@show',
				'as'   => 'admin.show'
		]);

		Route::post('/upload-programservices', [
				'uses' => 'frontend\AdminController@postUploadProgramServices',
				'as'   => 'admin.programservices.post'
		]);
});

Route::group(['prefix' => 'myaccount'], function () {

    Route::get('/', [
        'uses' => 'frontend\UserAccountController@show',
        'as'   => 'user.myaccount.show'
    ]);

    Route::get('/edit-profile', [
        'uses' => 'frontend\UserAccountController@edit',
        'as'   => 'user.myaccount.edit'
    ]);

    Route::post('/update-aboutme', [
        'uses' => 'frontend\UserAccountController@updateAboutMe',
        'as'   => 'user.myaccount.update.aboutme'
    ]);

    Route::post('/update-workdetails', [
        'uses' => 'frontend\UserAccountController@updateWorkDetails',
        'as'   => 'user.myaccount.update.workdetails'
    ]);

    Route::post('/update-collegedetails', [
        'uses' => 'frontend\UserAccountController@updateCollegeDetails',
        'as'   => 'user.myaccount.update.collegedetails'
    ]);

    Route::post('/update-schooldetails', [
        'uses' => 'frontend\UserAccountController@updateSchoolDetails',
        'as'   => 'user.myaccount.update.schooldetails'
    ]);

    Route::post('/update-organization', [
        'uses' => 'frontend\UserAccountController@updateOrganization',
        'as'   => 'user.myaccount.update.organization'
    ]);

    Route::get('/remove/profile-photo', [
        'uses' => 'frontend\UserAccountController@removeProfilePhoto',
        'as'   => 'user.myaccount.remove.profilephoto'
    ]);

    Route::get('/remove/cover-photo', [
        'uses' => 'frontend\UserAccountController@removeCoverPhoto',
        'as'   => 'user.myaccount.remove.coverphoto'
    ]);

    Route::get('/remove/organization/{key}', [
        'uses' => 'frontend\UserAccountController@removeOrganization',
        'as'   => 'user.myaccount.remove.organization'
    ]);
});

Route::group(['prefix' => 'programs-services'], function() {

    Route::get('/', [
        'uses' => 'frontend\ProgramServicesController@show',
        'as'   => 'programs.services.show'
    ]);

		Route::get('/filter/{searchby}/{searchkey}', [
				'uses' => 'frontend\ProgramServicesController@filter',
				'as'   => 'programs.services.filter'
		]);

    Route::get('/view', [
        'uses' => 'frontend\ProgramServicesController@showSingle',
        'as'   => 'programs.services.single'
    ]);

});

Route::group(['prefix' => 'job/postings'], function (){

    Route::get('/', [
        'uses' => 'frontend\JobPostingsController@show',
        'as'   => 'user.jobpostings.show'
    ]);

    Route::get('/view/{postid}', [
        'uses' => 'frontend\JobPostingsController@showSingle',
        'as'   => 'user.jobpostings.single'
    ]);

    Route::get('/create', [
        'uses' => 'frontend\JobPostingsController@create',
        'as'   => 'user.jobpostings.create'
    ]);

    Route::post('/create', [
        'uses' => 'frontend\JobPostingsController@postCreate',
        'as'   => 'user.jobpostings.create.post'
    ]);

		Route::get('/edit/{jobid}', [
        'uses' => 'frontend\JobPostingsController@edit',
        'as'   => 'user.jobpostings.edit'
    ]);

		Route::post('/edit', [
        'uses' => 'frontend\JobPostingsController@postEdit',
        'as'   => 'user.jobpostings.edit.post'
    ]);

});

Route::group(['prefix' => 'blogs'], function() {

    Route::get('/', [
        'uses' => 'frontend\BlogController@show',
        'as'   => 'user.blogs.show'
    ]);

    Route::get('/view/{blogid}', [
        'uses' => 'frontend\BlogController@showSingle',
        'as'   => 'user.blogs.single'
    ]);

    Route::get('/create', [
        'uses' => 'frontend\BlogController@create',
        'as'   => 'user.blogs.create'
    ]);

    Route::post('/create', [
        'uses' => 'frontend\BlogController@postCreate',
        'as'   => 'user.blogs.create.post'
    ]);
});

Route::group(['prefix' => 'paper-thesis'], function() {

    Route::get('/', [
        'uses' => 'frontend\PaperThesisController@show',
        'as'   => 'paper.thesis.show'
    ]);

});

Route::group(['prefix' => 'continuing-professional-education'], function() {

    Route::get('/', [
        'uses' => 'frontend\ProfessionalEducationController@show',
        'as'   => 'professional.education.show'
    ]);

    Route::get('/view', [
        'uses' => 'frontend\ProfessionalEducationController@showSingle',
        'as'   => 'professional.education.single'
    ]);

});

Route::group(['prefix' => 'socialwork-and-law'], function() {

    Route::get('/', [
        'uses' => 'frontend\SocialWorkLawController@show',
        'as'   => 'socialwork.law.show'
    ]);

});


// FORUM Routes

Route::group(['prefix' => 'forum'], function(){

		Route::get('/',[
				'uses' => 'forum\IndexController@show',
				'as'   => 'forum.index'
		]);

		Route::get('/p',[
				'uses' => 'forum\IndexController@single',
				'as'   => 'forum.single'
		]);

});

// CMS Routes

Route::group(['prefix' => 'content-management'], function(){

		Route::get('/setting', [
				'uses' => 'cms\SettingController@show',
				'as' => 'setting.show'
		]);
});
