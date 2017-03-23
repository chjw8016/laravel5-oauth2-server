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

Route::get('/', function () {
    return view('welcome');
});

Route::post('oauth/access_token', function() {
    return Response::json(Authorizer::issueAccessToken());
});
Route::get('api', ['before' => 'oauth', function() {
    // return the protected resource
    //echo “success authentication”;
    $user_id=Authorizer::getResourceOwnerId(); // the token user_id
    $user=\App\User::find($user_id);// get the user data from database
    return Response::json($user);
}]);