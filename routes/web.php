<?php



//         Front-End Route
//=====================================

//homepage
Route::get('/index','HomepageController@index')->name('homepage');


//aboutpage
Route::get('/about-us','AboutController@index')->name('aboutpage');


//serivepage
Route::get('/service','ServicepageController@index')->name('servicepage');


//servicehouseholdpage
Route::get('/service-household','ServicehouseholdpageController@servicehousehold')->name('servicehouseholdpage');


//serviceinteriorpage
Route::get('/service-interior','ServiceinteriorpageController@serviceinterior')->name('serviceinteriorpage');


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


//Reservation
Route::get('/reservation', 'ReservationpageController@index')->name('reservation');



//Registration Pages
Route::get('/customer/registration','CustomerregistrationController@index')->name('customer_registration');

Route::post('/customer/registration/create','CustomerregistrationController@create')->name('registration_create');


Route::get('/customer/login','HomepageController@customer_login')->name('customer_login');







//               Back-End Route
//=====================================

//Dashboard Home
Route::get('/admin/dashboard','DashboardController@index')->name('dashboard');

//Users
Route::get('/admin/user','UserController@index')->name('user');


//Order
Route::get('/admin/order','OrderController@index')->name('order');

//About Us
Route::get('/admin/about-us','AboutusController@index')->name('about_us');

//About Us Create
Route::post('/admin/about-us/create','AboutusController@create')->name('create');


//Status
Route::get('/admin/status','StatusController@index')->name('status_index');

//Status
Route::post('/admin/status/create','StatusController@create')->name('status_create');



//team_member
Route::get('/admin/team_member','TeamMemberController@index')->name('team_member');

//team_member
Route::post('/admin/team_member/create','TeamMemberController@create')->name('team_member_create');








//.........................................
//Previous HomePage


/*<!-- Route::get('/', function () {
    return view('welcome');
});*/


//New Homepage
Route::get('/', function () {
    return view('frontendpages/homepage/index');
});

Auth::routes(['verify'=>true]);

Route::get('/home', 'HomeController@index')->name('home');
