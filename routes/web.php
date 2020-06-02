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


Route::get('/', 'PublicController@index')->name('index');
Route::get('/sk', 'PublicController@indexSK')->name('indexSK');
Route::get('/de', 'PublicController@indexDE')->name('indexDE');
Route::get('/nl', 'PublicController@indexNL')->name('indexNL');
Route::get('/holiday', 'PublicController@holiday')->name('holiday');
Route::get('/taborisko', 'PublicController@taborisko')->name('taborisko');
Route::get('/taborisko/{lang}', 'PublicController@taboriskoLang')->name('taborisko.lang');
Route::get('/holiday/sk', 'PublicController@holidaySK')->name('holidaySK');
Route::get('/privacy-policy/{lang?}', 'PublicController@pp')->name('pp');
Route::get('/glamping', 'PublicController@glamping')->name('sirava-park');

//Dočasná verzia odstránenei realese dropdow apratmánov
Route::prefix('/apartments')->name('re.apartments.')->group(function() {
    Route::get('/', 'REController@apartments')->name('index');
    Route::get('/ground', 'REController@apartments_ground')->name('ground');
    Route::get('/first-floor', 'REController@apartments_first')->name('first');
    Route::get('/penthouse', 'REController@apartments_penthouse')->name('penthouse');
});


Route::prefix('/real-estate')->name('re.')->group(function() {
    Route::get('/', 'REController@index')->name('index');
    Route::get('/sk', 'REController@indexSK')->name('indexSK');


//    Pôvodná verzia
//    Route::get('/terraced-houses', 'REController@terraced')->name('terraced');
//    Route::get('/semi-detached-houses', 'REController@semi')->name('semi');
//    Route::get('/standard-houses', 'REController@standard')->name('standard');
//    Route::get('/villas', 'REController@villas')->name('villas');
});

Route::get('/boulevard', 'PublicController@boulevard')->name('beachClub');
Route::get('/boulevard/sk', 'PublicController@boulevardSK');
Route::get('/thermal-spa', 'PublicController@spa')->name('spa');
Route::get('/thermal-spa/sk', 'PublicController@spaSK')->name('spaSK');
Route::get('/location', 'PublicController@location')->name('location');
Route::get('/contact', 'PublicController@contact')->name('contact');
//Route::get('/lang/{lang}', 'PublicController@lang')->name('lang');

Route::post('/holiday', 'PublicPostController@holiday')->name('holiday');
Route::post('/sign-up', 'PublicPostController@sign_up')->name('sign-up');
Route::post('/contact', 'PublicPostController@contact')->name('contactPost');

Route::get('/test', 'PublicController@test');



// Public area
Route::name('public.')->group(function() {

// Robilo chybu Route::get('/lang/{lang}', 'PublicController@lang')->name('lang');
    Route::get('/', 'PublicController@index')->name('home');
    Route::get('/lang/{lang}', 'PublicController@lang')->name('lang');

    Route::name('certification.')->prefix('/certification')->group(function() {
        Route::get('/', 'CertificationController@index')->name('index');
        Route::get('/hnwi', 'CertificationController@hnwi')->name('hnwi');
        Route::get('/si', 'CertificationController@si')->name('si');
        Route::get('/ri', 'CertificationController@ri')->name('ri');

        Route::post('/submit', 'CertificationPostController@submit')->name('submit');
    });

    Auth::routes();
    Route::get('/login', 'PublicController@login')->name('login');
    Route::get('/login/sk', 'PublicController@loginSK')->name('loginSK');
    Route::get('/sign-up/{lang?}', 'PublicController@sign_up')->name('signUp');

});

// Member area
Route::name('member.')->middleware(['auth'])->prefix('/member')->group(function() {
    Route::get('/', 'MemberController@index')->name('home');
    Route::get('/contact', 'MemberController@contact')->name('contact');
    Route::get('/invest', 'MemberController@invest')->name('invest');

    Route::name('sirava.')->prefix('/sirava')->group(function() {
        Route::get('/why-invest', 'Member\SiravaController@why_invest')->name('why_invest');
        Route::get('/master-plan', 'Member\SiravaController@master_plan')->name('master_plan');
        Route::get('/beach-club', 'Member\SiravaController@beach_club_mp')->name('beach_mp');
        Route::get('/business-plan', 'Member\SiravaController@business_plan')->name('business_plan');
        Route::get('/location', 'Member\SiravaController@location')->name('location');
        Route::get('/news', 'Member\SiravaController@news')->name('news');
        Route::get('/how-to-invest', 'Member\SiravaController@how_to_invest')->name('how_to_invest');
    });

    Route::name('realized.')->prefix('/realized-projects')->group(function() {
//        Route::get('/', 'Member\RealizedController@index')->name('home');
        Route::get('/renovation-project-house-1', 'Member\RealizedController@renovation_project_house1')->name('renovation_project_house1');
        Route::get('/renovation-project-house-3', 'Member\RealizedController@renovation_project_house3')->name('renovation_project_house3');
        Route::get('/recreational-new-development-project', 'Member\RealizedController@recreational_new_development_project')->name('recreational_new_development_project');
        Route::get('/renovation-project-house-2', 'Member\RealizedController@renovation_project_house2')->name('renovation_project_house2');
    });

    Route::name('projects.')->prefix('/projects')->group(function() {
        Route::get('/', 'Member\ProjectsController@index')->name('index');
        Route::get('/renovations', 'Member\ProjectsController@renovations')->name('renovations');
        Route::get('/wellness-resort-renovation-project', 'Member\ProjectsController@wrrp')->name('wrrp');
        Route::get('/first-line-lake-development-project', 'Member\ProjectsController@flldp')->name('flldp');
        Route::get('/city-center-renovation-project', 'Member\ProjectsController@ccrp')->name('ccrp');
    });

    Route::name('orders.')->prefix('/orders')->group(function() {
        Route::get('/{id}', 'Member\OrderController@order')->name('order');
        Route::get('/{id}/annex/{number}', 'Member\OrderController@annex')->name('annex');
    });

    Route::name('news.')->prefix('/news')->group(function() {
        Route::get('/{id}', 'Member\NewsController@article')->name('article');
    });

    Route::name('partner.')->prefix('/partner-program')->group(function() {
        Route::get('/', 'Member\PartnerController@index')->name('home');

        Route::name('marketing-materials.')->prefix('/marketing-materials')->group(function() {
            Route::get('/', 'Member\PartnerController@marketing_materials')->name('home');
            Route::get('/html-banners', 'Member\PartnerController@html_banners')->name('html-banners');
            Route::get('/facebook-banners', 'Member\PartnerController@fb_banners')->name('fb-banners');
        });

        Route::get('/your-signups', 'Member\PartnerController@your_signups')->name('your-signups');
        Route::get('/email-banner/{id}', 'Member\PartnerController@email_banner')->name('email-banner');

        Route::name('users.')->prefix('/users')->group(function() {
            Route::get('/{id}', 'Member\UserController@user')->name('user');
            Route::get('/{id}/activity', 'Member\UserController@activity')->name('userActivity');

            Route::post('/status', 'Member\UserPostController@status')->name('userStatusPost');
            Route::post('/comment', 'Member\CommentPostController@add')->name('commentPost');
        });

        Route::post('/partner', 'MemberPostController@partner')->name('partnerPost');
    });

    Route::get('/my-investments', 'MemberController@my_investments')->name('investments');
    Route::get('/account', 'MemberController@account')->name('account');
    Route::get('/leaveImpersonation', 'MemberController@leave_impersonation')->name('leaveImpersonation');
    Route::get('/step1', 'MemberController@step1')->name('step1');
    Route::get('/step2', 'MemberController@step2')->name('step2');
    Route::get('/step3', 'MemberController@step3')->name('step3');

    Route::post('/step1', 'Member\OrderPostController@step1')->name('step1Post');
    Route::post('/step2', 'Member\OrderPostController@step2')->name('step2Post');
    Route::post('/step3', 'Member\OrderPostController@step3')->name('step3Post');
    Route::post('/pep', 'MemberPostController@pep')->name('pepPost');
    Route::post('/document-upload', 'Member\DocumentPostController@upload')->name('documentUploadPost');
    Route::post('/account', 'MemberPostController@account')->name('accountPost');
    Route::post('/bank-details', 'MemberPostController@bank_details')->name('bankDetailsPost');
    Route::post('/contact', 'MemberPostController@contact')->name('contactPost');
});

// Admin area
Route::name('admin.')->middleware(['auth', 'checkAdmin'])->prefix('/admin')->group(function() {
    Route::get('/', 'admin\AdminController@index')->name('home');

    Route::name('users.')->prefix('/users')->group(function() {
        Route::get('/', 'Admin\UserController@index')->name('home');
        Route::get('/new', 'Admin\UserController@new')->name('new');
        Route::get('/by-role/{name?}', 'Admin\UserController@by_role')->name('byRole');
        Route::get('/by-status/{id?}', 'Admin\UserController@by_status')->name('byStatus');
        Route::get('/agents', 'Admin\UserController@agents')->name('agents');
        Route::get('/{user}', 'Admin\UserController@user')->name('user');
        Route::get('/{id}/edit', 'Admin\UserController@edit')->name('userEdit');
        Route::get('/{id}/pep', 'Admin\UserController@pep')->name('userPep');
        Route::get('/{id}/activity', 'Admin\UserController@activity')->name('userActivity');
        Route::get('/{id}/impersonate', 'Admin\UserController@impersonate')->name('userImpersonate');
        Route::get('/{id}/roles', 'Admin\UserController@roles')->name('userRoles');
        Route::get('/{id}/agent', 'Admin\UserController@agent')->name('userAgent');
        Route::get('/{id}/partner', 'Admin\UserController@partner')->name('userPartner');
        Route::get('/{id}/documents', 'Admin\UserController@documents')->name('userDocuments');
        Route::get('/{id}/bank-details', 'Admin\UserController@bank_details')->name('userBankDetails');
        Route::get('/{id}/orders', 'Admin\UserController@orders')->name('userOrders');

        Route::post('/new', 'Admin\UserPostController@new')->name('userPost');
        Route::post('/user/edit', 'Admin\UserPostController@edit')->name('userEditPost');
        Route::post('/bank-details', 'Admin\UserPostController@bank_details')->name('userBankDetailsPost');
        Route::post('/status', 'Admin\UserPostController@status')->name('userStatusPost');
        Route::post('/roles', 'Admin\RolePostController@user_roles')->name('userRolesPost');
        Route::post('/assignedRoles', 'Admin\RolePostController@agent_roles')->name('userAgentRolesPost');
    });

});


// Order area
Route::name('order.')->prefix('/order')->group(function() {
//Route::name('order.')->middleware(['auth'])->prefix('/order')->group(function() {

    Route::get('/home', 'OrderController@home')->name('home');
    Route::post('/store', 'OrderController@store')->name('store');


});

