<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/homepage", function () {
    return "<h1>This is home page</h1>";
});

Route::get("/blog/{id}", function($id) {
    return "<h1>This is blog page : {$id} </h1>" ;
});

Route::get("/hello", function () {	
    return view("hello");
    });


    Route::get('/greeting', function () {

        $name = 'James';
    $last_name = 'Mars';
    
    return view('greeting', compact('name','last_name') );
    });
    

    Route::get('/bootstrap-example', function () {
        return view('bootstrap-example');
    });

    Route::get( "/gallery" , function(){
        $ant = "https://cdn3.movieweb.com/i/article/Oi0Q2edcVVhs4p1UivwyyseezFkHsq/1107:50/Ant-Man-3-Talks-Michael-Douglas-Update.jpg";
    $bird = "https://images.indianexpress.com/2021/03/falcon-anthony-mackie-1200.jpg"; 
    $cat = "http://www.onyxtruth.com/wp-content/uploads/2017/06/black-panther-movie-onyx-truth.jpg";
    $god = "https://www.blackoutx.com/wp-content/uploads/2021/04/Thor.jpg"; 
    $spider = "https://icdn5.digitaltrends.com/image/spiderman-far-from-home-poster-2-720x720.jpg"; 
    
    return view("test/index", compact("ant","bird","cat","god","spider") );
    });
    
    Route::get("/gallery/ant", function () {
        $ant = "https://cdn3.movieweb.com/i/article/Oi0Q2edcVVhs4p1UivwyyseezFkHsq/1107:50/Ant-Man-3-Talks-Michael-Douglas-Update.jpg";
        return view("test/ant", compact("ant"));
    });
    
    Route::get("/gallery/bird", function () {
        $bird = "https://images.indianexpress.com/2021/03/falcon-anthony-mackie-1200.jpg";
        return view("test/bird", compact("bird"));
    });
    
    Route::get("/gallery/cat", function () {
        $cat = "http://www.onyxtruth.com/wp-content/uploads/2017/06/black-panther-movie-onyx-truth.jpg";
        return view("test/cat", compact("cat"));
    });
    

    Route::get("/teacher" , function (){
        return view("teacher");
        });
        Route::get("/student" , function (){
        return view("student");
        });
        Route::get("/theme" , function (){
        return view("theme");
        });        

        // Route Template Component
Route::get("/teacher", function () {
    return view("teacher");
   });
   Route::get("/student", function () {
    return view("student");
   });
   

   Route::get("/active/index", function () {
    return view("active/index");
   })->name("index");
   

   Route::get("/active/index" , function (){
    return view("active/index");
    });
    Route::get("/components/active-bootstrap" , function (){
    return view("components/active-bootstrap");
    });        

    Route::get( "/active/about" , function () {
        return view("active/about");
       })->name("about");
       Route::get( "/active/services" , function () {
        return view("active/services");
       })->name("services");
       Route::get( "/active/index" , function () {
        return view("active/index");
       })->name("index");