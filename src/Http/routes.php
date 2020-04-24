<?php

Route::group(['prefix' => 'api/exponent/devices', 'middleware' => ['jwt.verify', 'bindings']], function () {
    Route::post('subscribe', [
        'as'    =>  'register-interest',
        'uses'  =>  'NotificationChannels\ExpoPushNotifications\Http\ExpoController@subscribe',
    ]);

    Route::post('unsubscribe', [
        'as'    =>  'remove-interest',
        'uses'  =>  'NotificationChannels\ExpoPushNotifications\Http\ExpoController@unsubscribe',
    ]);
});
