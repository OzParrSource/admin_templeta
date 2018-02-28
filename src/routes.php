<?php

Route::group(['middleware' => ['web','auth']], function() {
        Route::get('admin',[
            'uses' => 'Ozparr\AdminTempleta\Controllers\HomeController@index',
            'as' => 'admin.index'
        ]);
});