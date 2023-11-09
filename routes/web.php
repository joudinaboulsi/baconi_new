<?php

/********  Frontend  Pages *********/

Route::get('/','PagesController@home')->name('homePage');
Route::get('/about-us','PagesController@about')->name('aboutPage');
Route::get('/services','PagesController@services')->name('servicePage');

Route::get('/blogs','PagesController@blog')->name('blogPage');
Route::get('/blog-details-{id}','PagesController@blogDetail')->name('blogDetailPage');
Route::get('/blogs-search', 'PagesController@search')->name('seacrhBlog');
Route::get('/companies','PagesController@companies')->name('companiesPage');

Route::get('/contact-us','PagesController@contact')->name('contactPage');
Route::post('/send-data','PagesController@send_mail')->name('sendData');
Route::post('/send-career','PagesController@send_career')->name('sendDataCareer');


/********  Frontend  Pages *********/



/********  Cms Pages *********/

Auth::routes();

/*******  Home Page *********/
Route::get('/cms/home', 'HomePageController@index')->name('homeCms');
Route::post('/cms/home-store', 'HomePageController@store')->name('homeStore');
/******* Home Page Ending */

/*******  HomeSliders Page *********/
Route::get('/cms/sliders', 'HomeSliderController@index')->name('homeSliderCms');
Route::get('/cms/slider-create', 'HomeSliderController@create')->name('homeSliderCreate');
Route::post('/cms/slider-store', 'HomeSliderController@store')->name('homeSliderStore');
Route::get('/cms/slider-edit-{id}', 'HomeSliderController@edit')->name('homeSliderEdit');
Route::post('/cms/slider-update-{id}', 'HomeSliderController@update')->name('homeSliderUpdate');
Route::delete('/cms/slider-delete-{id}', 'HomeSliderController@delete')->name('homeSliderDelete');
/*******  HomeSliders Page Ending */


/*******  About Page *********/
Route::get('/cms/about', 'AbouController@index')->name('aboutCms');
Route::post('/cms/about-store', 'AbouController@store')->name('aboutStore');
/******* About Page Ending */

/*******  Principle Page *********/
Route::get('/cms/principles', 'PrincipleController@index')->name('principleCms');
Route::get('/cms/principle-create', 'PrincipleController@create')->name('principleCreate');
Route::post('/cms/principle-store', 'PrincipleController@store')->name('principleStore');
Route::get('/cms/principle-edit-{id}', 'PrincipleController@edit')->name('principleEdit');
Route::post('/cms/principle-update-{id}', 'PrincipleController@update')->name('principleUpdate');
Route::delete('/cms/principle-delete-{id}', 'PrincipleController@delete')->name('principleDelete');
/*******  Principle Page Ending */


/*******  Membership Page *********/
Route::get('/cms/memberships', 'MembershipsController@index')->name('membershipCms');
Route::get('/cms/membership-create', 'MembershipsController@create')->name('membershipCreate');
Route::post('/cms/membership-store', 'MembershipsController@store')->name('membershipStore');
Route::get('/cms/membership-edit-{id}', 'MembershipsController@edit')->name('membershipEdit');
Route::post('/cms/membership-update-{id}', 'MembershipsController@update')->name('membershipUpdate');
Route::delete('/cms/membership-delete-{id}', 'MembershipsController@delete')->name('membershipDelete');
/*******  Membership Page Ending */

/*******  Team Page *********/
Route::get('/cms/team', 'TeamController@index')->name('teamCms');
Route::get('/cms/team-create', 'TeamController@create')->name('teamCreate');
Route::post('/cms/team-store', 'TeamController@store')->name('teamStore');
Route::get('/cms/team-edit-{id}', 'TeamController@edit')->name('teamEdit');
Route::post('/cms/team-update-{id}', 'TeamController@update')->name('teamUpdate');
Route::delete('/cms/team-delete-{id}', 'TeamController@delete')->name('teamDelete');
/*******  Team Page Ending */

/*******  About Sliders Page *********/
Route::get('/cms/about-sliders', 'AboutSliderController@index')->name('aboutSliderCms');
Route::get('/cms/about-slider-create', 'AboutSliderController@create')->name('aboutSliderCreate');
Route::post('/cms/about-slider-store', 'AboutSliderController@store')->name('aboutSliderStore');
Route::get('/cms/about-slider-edit-{id}', 'AboutSliderController@edit')->name('aboutSliderEdit');
Route::post('/cms/about-slider-update-{id}', 'AboutSliderController@update')->name('aboutSliderUpdate');
Route::delete('/cms/about-slider-delete-{id}', 'AboutSliderController@delete')->name('aboutSliderDelete');
/*******  About Sliders Page Ending */

/*******  Service Page *********/
Route::get('/cms/service', 'ServiceController@index')->name('serviceCms');
Route::post('/cms/sservice-store', 'ServiceController@store')->name('serviceStore');
/*******  Service Page Ending */

/*******  Service Tab One Page *********/
Route::get('/cms/tab-one', 'ServiceTabOneController@index')->name('tabOneCms');
Route::get('/cms/tab-one-create', 'ServiceTabOneController@create')->name('tabOneCreate');
Route::post('/cms/tab-one-store', 'ServiceTabOneController@store')->name('tabOneStore');
Route::get('/cms/tab-one-edit-{id}', 'ServiceTabOneController@edit')->name('tabOneEdit');
Route::post('/cms/tab-one-update-{id}', 'ServiceTabOneController@update')->name('tabOneUpdate');
Route::delete('/cms/tab-one-delete-{id}', 'ServiceTabOneController@delete')->name('tabOneDelete');
/*******  Service Tab One Page Ending */


/*******  Company Page *********/
Route::get('/cms/company', 'CompanyController@index')->name('companyCms');
Route::post('/cms/company-store', 'CompanyController@store')->name('companyStore');
/*******  Company Page Ending */

/******* Company Sliders Page *********/
Route::get('/cms/company-sliders', 'SliderCompanyController@index')->name('companySliderCms');
Route::get('/cms/company-slider-create', 'SliderCompanyController@create')->name('companySliderCreate');
Route::post('/cms/company-slider-store', 'SliderCompanyController@store')->name('companySliderStore');
Route::get('/cms/company-slider-edit-{id}', 'SliderCompanyController@edit')->name('companySliderEdit');
Route::post('/cms/company-slider-update-{id}', 'SliderCompanyController@update')->name('companySliderUpdate');
Route::delete('/cms/company-slider-delete-{id}', 'SliderCompanyController@delete')->name('companySliderDelete');
/******* Company Sliders Page Ending */

/*******  Blog Page *********/
Route::get('/cms/blog-page', 'BlogController@index')->name('blogCms');
Route::post('/cms/blog-store', 'BlogController@storePage')->name('blogStore');
Route::post('/cms/related-content-store', 'BlogController@storeRelated')->name('relatedContentStore');
Route::get('/cms/blog-detail-create', 'BlogController@create')->name('blogDetailCreate');
Route::post('/cms/blog-detail-store', 'BlogController@store')->name('blogDetailStore');
Route::get('/cms/blog-detail-edit-{id}', 'BlogController@edit')->name('blogDetailEdit');
Route::post('/cms/blog-detail-update-{id}', 'BlogController@update')->name('blogDetailUpdate');
Route::delete('/cms/blog-detail-delete-{id}', 'BlogController@delete')->name('blogDetailDelete');
/*******  Blog Page Ending */


/*******  Contact Page *********/
Route::get('/cms/contact', 'ContactController@index')->name('contactCms');
Route::post('/cms/contact-store', 'ContactController@store')->name('contactStore');
/*******  Contact Page Ending */

/*******  Seo Pages *********/
Route::get('/cms/seo', 'SeoPagesController@index')->name('seoCms');
Route::get('/cms/seo-edit-{id}', 'SeoPagesController@edit')->name('seoEdit');
Route::post('/cms/seo-update-{id}', 'SeoPagesController@update')->name('seoUpdate');
/*******  Seo Pages Ending */

/*******  Settings Page *********/
Route::get('/cms/settings', 'SettingsController@index')->name('settingsCms');
Route::post('/cms/settings-store', 'SettingsController@store')->name('settingsStore');
/*******  Settings Page Ending */

/********  Cms Pages *********/
