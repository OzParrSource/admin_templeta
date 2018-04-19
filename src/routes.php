<?php

Route::group(['middleware' => ['web','auth']], function() {
        Route::get('admin/example',[
            'uses' => 'Ozparr\AdminTempleta\Controllers\HomeController@example',
            'as' => 'admin.example'
        ]);
});