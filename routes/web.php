<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/
$app->post('/fetch', [
    'middleware' => 'csrf',
    'as' => 'fetchInfo', 'uses' => 'App\Http\Controllers\AppController@fetchInfo'
]);

//for function user
$app->get('/', function () use ($app) {
    return redirect('login');
});

$app->post('/login', 'LoginController@index');
$app->get('/login',function(){
  return view('auth.login');
});
$app->post('/register', 'UserController@register');
$app->get('/register',function(){
  return view('auth.register');
});
$app->get('/user/{id}', ['middleware' => 'auth', 'uses' =>  'UserController@get_user']);
//------------------------------------------------------------------------------------------------------------------

$app->get('dashboard',function(){
  return view('dashboard');
});

//for function customer
$app->get('/customer', 'CustomerController@index');
$app->get('/customer/show' , 'CustomerController@show');
$app->post('/customer/create/post', 'CustomerController@create');
$app->get('/customer/create','CustomerController@form');
$app->get('/customer/edit', 'CustomerController@form');
$app->post('/customer/edit/post', 'CustomerController@create');
$app->get('/customer/id/{id}','CustomerController@read');
$app->get('/customer/delete/{id}', 'CustomerController@delete');
//------------------------------------------------------------------------------------------------------------------


//for function material

$app->get('/all', 'MaterialController@index');

$app->get('/material', 'MaterialController@index');
$app->get('/material/show' , 'MaterialController@show');
$app->get('/material/id/{id}', 'MaterialController@read');
$app->get('/material/delete/{id}', 'MaterialController@delete');
$app->post('/material/create/post', 'MaterialController@create');
$app->get('/material/create','MaterialController@form');
$app->post('/material/update/{id}', 'MaterialController@update');
$app->get('/material/update/{id}', function () use ($app) {
    // return $app->app->version();
    $res['success'] = false;
    $res['result'] = 'Not Allowed Method!';
    return response($res);
});
$app->get('/material/{id}', ['middleware' => 'auth', 'uses' => 'MaterialController@get_material']);
//------------------------------------------------------------------------------------------------------------------


//for function plantsloc

$app->get('/all', 'PlantslocController@index');

$app->get('/plantsloc', 'PlantslocController@index');
$app->get('/plantsloc/show' , 'PlantslocController@show');
$app->get('/plantsloc/id/{id}', 'PlantslocController@read');
$app->get('/plantsloc/delete/{id}', 'PlantslocController@delete');
$app->post('/plantsloc/create/post', 'PlantslocController@create');
$app->get('/plantsloc/create','PlantslocController@form');
$app->post('/plantsloc/update/{id}', 'PlantslocController@update');
$app->get('/plantsloc/update/{id}', function () use ($app) {
    // return $app->app->version();
    $res['success'] = false;
    $res['result'] = 'Not Allowed Method!';
    return response($res);
});
$app->get('/plantsloc/{id}', ['middleware' => 'auth', 'uses' => 'PlantslocController@get_plantsloc']);
//------------------------------------------------------------------------------------------------------------------


//for function wilayah

$app->get('/all', 'WilayahController@index');

$app->get('/wilayah', 'WilayahController@index');
$app->get('/wilayah/show' , 'WilayahController@show');
$app->get('/wilayah/id/{id}', 'WilayahController@read');
$app->get('/wilayah/delete/{id}', 'WilayahController@delete');
$app->post('/wilayah/create/post', 'WilayahController@create');
$app->get('/wilayah/create','WilayahController@form');
$app->post('/wilayah/update/{id}', 'WilayahController@update');
$app->get('/wilayah/update/{id}', function () use ($app) {
    // return $app->app->version();
    $res['success'] = false;
    $res['result'] = 'Not Allowed Method!';
    return response($res);
});
$app->get('/wilayah/{id}', ['middleware' => 'auth', 'uses' => 'WilayahController@get_wilayah']);
//------------------------------------------------------------------------------------------------------------------
