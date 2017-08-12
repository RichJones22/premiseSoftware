<?php

Route::get('/', function () {
    return view('pages.splash');
});

Route::post('/contactUsEmail', 'ContactUsEmailController@contactUsEmail');
