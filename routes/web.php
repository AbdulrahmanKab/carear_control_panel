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

Auth::routes(['register'=>false]);

Route::get('/',function (){
    return redirect("/".app()->getLocale());
});
Route::get("/ar","IndexController@index");

Route::post('/login','Admin\LoginController@login');


Route::group(['prefix'=>'admin','middleware'=>'auth:web'],function (){
    Route::get('/','Admin\IndexController@index');
    /*****************Slider*************************/

        Route::get('/slider','Admin\SliderContentController@index')->middleware("permission:view_slider");
        Route::post('/save/slider','Admin\SliderContentController@create')->middleware("permission:add_slider");
        Route::post("/slider/{id}/update",'Admin\SliderContentController@update')->middleware("permission:edit_slider");
        Route::post("/slider/{id}/delete",'Admin\SliderContentController@delete')->middleware("permission:delete_slider");
        Route::post("/slider/{id}",'Admin\SliderContentController@show')->middleware("permission:edit_slider");


    /******************Services **********************/

        Route::get('/services','Admin\ServicesController@index')->middleware("permission:view_services");
        Route::post('/save/services','Admin\ServicesController@create')->middleware("permission:add_service");
        Route::post("/service/{id}/delete",'Admin\ServicesController@delete')->middleware("permission:delete_service");
        Route::post("/service/{id}",'Admin\ServicesController@edit')->middleware("permission:edit_service");
        Route::post("/service/{id}/update","Admin\ServicesController@update")->middleware("permission:edit_service");

    /***************************News************************/
        Route::get('/news',"Admin\NewsController@index")->middleware("permission:view_news");
        Route::post('/save/news','Admin\NewsController@create')->middleware("permission:add_news");
        Route::post("/news/{id}/delete",'Admin\NewsController@delete')->middleware("permission:delete_news");
        Route::post("/news/{id}",'Admin\NewsController@edit')->middleware("permission:edit_news");
        Route::post("/news/{id}/update","Admin\NewsController@update")->middleware("permission:edit_news");


    /**********************Messages************************/
       Route::get('/messages','Admin\MessageController@index')->middleware("permission:view_messages");
       Route::post("/message/{id}/delete",'Admin\MessageController@delete')->middleware("permission:delete_message");

    /********************Permission*************/
        Route::get("/permissions",'Admin\PermssionController@index')->middleware("permission:super_admin");
        Route::get('/permission/{id}',['uses'=>'Admin\PermssionController@getPermission'])->middleware("permission:super_admin");
        Route::post('/permission/set',['uses'=>'Admin\PermssionController@setPermission'])->middleware("permission:super_admin");

    /******************System constant*******************/

        Route::get('/system/constant',"Admin\SystemController@index")->middleware("permission:system_constant");
        Route::post('/system/constant/all',"Admin\SystemController@getConstant")->middleware("permission:system_constant");
        Route::post('/system/save',"Admin\SystemController@saveConstant")->middleware("permission:system_constant");


    /*********************Courses**********************/
        Route::get('/courses','Admin\CoursesController@index')->middleware("permission:view_courses");
        Route::post("/save/courses",'Admin\CoursesController@create')->middleware("permission:add_course");
        Route::post("/course/{id}","Admin\CoursesController@edit")->middleware("permission:edit_course");
        Route::post("/course/{id}/update","Admin\CoursesController@update")->middleware("permission:edit_course");
        Route::post("/course/{id}/delete","Admin\CoursesController@delete")->middleware("permission:delete_course");


    /***********************Orders************************/
        Route::get('/orders','Admin\OrdersController@index')->middleware("permission:view_courses");
        Route::post('/orders/{id}/delete',"Admin\OrdersController@delete")->middleware("permission:view_courses");

   /****************profile********************/
    Route::get("/profile","admin\profileController@index");
    Route::post('/profile/update',"admin\profileController@update");
    /*****************************************/
    Route::post("/courses/type","Admin\SystemController@getType")->middleware("permission:system_constant");

    /***************Partner***************/
    Route::get('/partners','Admin\PartnerController@index');
    Route::post("/save/partner",'Admin\PartnerController@create');
    Route::get("/partner/edit",'Admin\PartnerController@edit');
    Route::post("/partner/update",'Admin\PartnerController@update');
    Route::post("/partner/delete",'Admin\PartnerController@delete');
});
