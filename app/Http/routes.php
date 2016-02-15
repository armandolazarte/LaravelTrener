<?php
use Illuminate\Support\Facades\Mail;


/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/
Route::group(['middleware' => ['web']], function () {


    Route::auth();

    Route::controllers([
        'auth' => 'Auth\AuthController',
        'password' => 'Auth\PasswordController',
    ]);


    Route::get('druga', function(){
      $pdf = App::make('dompdf.wrapper');
        $pdf->loadHTML('<h1>Test</h1><p>Ta suli škafec, spuščćđž.</p>');
        return $pdf->stream();
    });

    Route::get('/email', function(){

        Mail::send('email.test', ['name'	=> 'Novice'], function($message)
        {
            $message->to('gorankrajnc@gmail.com', 'TestiranjeLaravel')->subject("Testiranje");
        });
    });



    /*prijavljena grupa-*/

    Route::group(['middleware' => 'auth'], function () {

        /******************************Testiranje***********************/

        Route::get('test', function() {return view('test'); });

        Route::get('prva', function(){

        });






        /*******************************Produkcija *******************/

        Route::get('/', 'HomeController@index');


        /*
         * Coach je vsi podatki o učitelju
         */
        Route::resource('coach', 'CoachController');

        Route::resource('ucenec', 'UcenecController');

        Route::resource('selekcije', 'SelekcijeController');

        Route::resource('tekociracun', 'TekociracunController');

        Route::resource('ucenecposebnosti', 'UcenecposebnostiController');



    });


});
