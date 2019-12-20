<?php



//         Front-End Route
//=====================================

//homepage
Route::get('/index','HomepageController@index')->name('homepage');

//aboutpage
Route::get('/about-us','AboutController@index')->name('aboutpage');


//========SERVICE PAGES===========
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
Route::get('/contact','ContactusController@index')->name('contactpage');
Route::post('/contact/create','ContactusController@create')->name('contact_create');





//teampage
Route::get('/team-member','TeammemberpageController@index')->name('teampage');


//========RESERVATION===========
Route::get('/reservation', 'ReservationpageController@index')->name('reservation');
Route::post('/reservation/create', 'ReservationpageController@create')->name('reservation_create');


//========CUSTOMER REGISTRATION===========
Route::get('/customer/registration','CustomerregistrationController@index')->name('customer_registration');
Route::post('/customer/registration/create','CustomerregistrationController@create')->name('registration_create');


//========CUSTOMER LOGIN===========
Route::get('/customer/login','HomepageController@customer_login')->name('customer_login');

  





//               Back-End Route
//=====================================

//Dashboard Home
Route::get('/dashboard','DashboardController@index')->name('dashboard');
Route::get('/MyProfile','DashboardController@profile')->name('profile');

Route::get('/employee/orders','DashboardController@employee_orders')->name('employee_orders');
Route::get('/customer/orders','DashboardController@customer_orders')->name('customer_orders');

//user
Route::get('/users','UserController@index')->name('user');
Route::get('/users/delete/{user_id}','UserController@delete')->name('user_delete');



//========RESERVATION EDIT===========
Route::get('/admin/reservation','reservationController@reservation')->name('reservation_view');
Route::get('/admin/reservation/edit/{reservation_id}','reservationController@edit')->name('reservation_edit');
Route::post('/admin/reservation/update','reservationController@update')->name('reservation_update');
Route::get('/admin/reservation/delete/{reservation_id}','reservationController@delete')->name('reservation_delete');
Route::get('/admin/reservation/restore/{reservation_id}','reservationController@restore')->name('reservation_restore');



//========ABOUT US===========
Route::get('/admin/about-us','AboutusController@index')->name('about_us');
Route::post('/admin/about-us/create','AboutusController@create')->name('create');


//========STATUS(insert,edit,update,delete)===========
Route::get('/admin/status','StatusController@index')->name('status_index');
Route::post('/admin/status/create','StatusController@create')->name('status_create');
Route::get('/admin/status/{status_id}','StatusController@edit')->name('status_edit');
Route::post('/admin/status/update','StatusController@update')->name('status_update');
Route::get('/admin/status/delete/{status_id}','StatusController@delete')->name('status_delete');
Route::get('/admin/status/restore/{status_id}','StatusController@restore')->name('status_restore');


//========TEAM MEMBER===========
Route::get('/admin/team_member','TeamMemberController@index')->name('team_member');
Route::post('/admin/team_member/create','TeamMemberController@create')->name('team_member_create');


//========ROLE===========
Route::get('/admin/role','RoleController@index')->name('role_index');
Route::post('/admin/role/create','RoleController@create')->name('role_create');

//========CONTACT US VIEW===========
Route::get('/admin/messages','ContactusController@messages')->name('contact_messages');



//========ROLE===========
Route::get('/admin/assign-order','AssignOrderController@index')->name('assign_order');
Route::post('/admin/assign-order/create','AssignOrderController@create')->name('assign_order_create');




//======== ADD PRICE FORM ===========
Route::get('/admin/add-price','PricelistController@index')->name('add_price');
//======== ADD PRICE CREATE ===========
Route::post('/admin/service-price/create','PricelistController@create')->name('price_create');
//======== ADD PRICE EDIT ===========
Route::get('/admin/service-price/edit/{price_id}','PricelistController@edit')->name('price_edit');
//======== ADD PRICE UPDATE ===========
Route::post('/admin/service-price/update','PricelistController@update')->name('price_update');
//======== ADD PRICE DELETE ===========
Route::get('/admin/service-price/delete/{price_id}','PricelistController@delete')->name('price_delete');















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

//Route::get('/home', 'HomeController@index')->name('home');
