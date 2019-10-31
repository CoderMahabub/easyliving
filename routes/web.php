<?php



//         Front-End Route
//=====================================

//homepage
Route::get('/index','HomepageController@index')->name('homepage');

//aboutpage
Route::get('/about-us','AboutController@index')->name('aboutpage');


//===========Service Pages===============
//serivepage
Route::get('/service','ServicepageController@index')->name('servicepage');

//serviceinteriorpage
Route::get('/service-interior','ServiceinteriorpageController@serviceinterior')->name('serviceinteriorpage');

//servicehouseholdpage
Route::get('/service-household','ServicehouseholdpageController@servicehousehold')->name('servicehouseholdpage');



//servicedesignpage
Route::get('/service-design','ServicedesignpageController@servicedesign')->name('servicedesignpage');

//servicetilingpage
Route::get('/service-tiling','ServicetilingpageController@servicetiling')->name('servicetilingpage');

//servicepavergpage
Route::get('/service-paver','ServicepaverController@servicepaver')->name('servicepavergpage');

//servicesolargpage
Route::get('/service-solar','ServicesolarpageCotroller@servicesolar')->name('servicesolargpage');



//faqpage
Route::get('/faq','FaqpageController@index')->name('faqpage');

//contactpage
Route::get('/contact','ContactpageController@index')->name('contactpage');


//teampage
Route::get('/team-member','TeammemberpageController@index')->name('teampage');



//reservation
Route::get('/reservation', 'ReservationpageController@index')->name('reservation');
Route::post('/reservation/create', 'ReservationpageController@create')->name('reservation_create');






//customer_registration
Route::get('/customer/registration','CustomerregistrationController@index')->name('customer_registration');
//registration_create
Route::post('/customer/registration/create','CustomerregistrationController@create')->name('registration_create');


Route::get('/customer/login','HomepageController@customer_login')->name('customer_login');

  





//               Back-End Route
//=====================================

//Dashboard Home
Route::get('/admin/dashboard','DashboardController@index')->name('dashboard');

//user
Route::get('/admin/user','UserController@index')->name('user');


//about_us
Route::get('/admin/order','OrderController@index')->name('order');

//about_us
Route::get('/admin/about-us','AboutusController@index')->name('about_us');

//create
Route::post('/admin/about-us/create','AboutusController@create')->name('create');

//status_index
Route::get('/admin/status','StatusController@index')->name('status_index');

//status_create
Route::post('/admin/status/create','StatusController@create')->name('status_create');

//team_member
Route::get('/admin/team_member','TeamMemberController@index')->name('team_member');

//team_member_create
Route::post('/admin/team_member/create','TeamMemberController@create')->name('team_member_create');


//role_index
Route::get('/admin/role','RoleController@index')->name('role_index');
//role_create
Route::post('/admin/role/create','RoleController@create')->name('role_create');






//.........................................
//Previous HomePage


// Route::get('/', function () {
//     return view('welcome');
// });


//New Homepage
Route::get('/', function () {
    return view('frontendpages/homepage/index');
});

Auth::routes(['verify'=>true]);

Route::get('/home', 'HomeController@index')->name('home');
