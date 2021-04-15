<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::post('register', 'UserController@register');
// users route
Route::prefix('users')
    ->group(function () {
        Route::get('/', function () {
            $response = array (
                'user' => array (
                    'first_name' => 'John',
                    'last_name' => 'Doe',
                    'email' => 'johndoe@gmail.com'
                ),
                'code' => 200,
            );
            return response()->json($response, $response['code']);
        });
    });

Route::group(['middleware' => ['auth:api']], function () {

    // // users route
    // Route::prefix('users')
    //     ->group(function () {
    //         Route::get('/', function () {
    //             $this->response['data'] = [
    //                 'first_name' => 'John',
    //                 'last_name' => 'Doe',
    //                 'email' => 'johndoe@gmail.com'
    //             ];
    //             $this->response = [
    //                 'code' => 200,
    //             ];
    //             return response()->json($this->response, $this->response['code']);
    //         });
    //     });

});
