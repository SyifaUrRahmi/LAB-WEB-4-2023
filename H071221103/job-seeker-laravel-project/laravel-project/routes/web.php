<?php

use App\Models\Listing;
use Illuminate\Http\Response;
use PhpParser\Node\Expr\FuncCall;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|*/
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;
use GuzzleHttp\Middleware;

class User {
    private string $id;
    private string $name;

    public function __construct($id, $name) {
        $this->id = $id;
        $this->name = $name;
    }

    public function toArray() {
        return [
            'id' => $this->id,
            'name' => $this->name,
        ];
    }
}

/* Route::get('/user', function () {
    return response()->json([
        'id'=>'1',
        'name'=>'ahmed'
    ])->header('content-type','text/plain');
}); */
Route::get('/',function(){
    return view('welcome',[
        'heading'=>'testing',
        'listings'=>[
            ['id'=>1,
            'title'=>'title 1',
            'description'=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum laudantium, consequuntur dolores accusamus asperiores voluptatum? Ad dolorum ex facere cupiditate provident repellendus error, iste dicta debitis in sint eligendi beatae."
            ,
        ],
        [
            'id'=>2,
            'title'=>'title 2',
            'description'=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum laudantium, consequuntur dolores accusamus asperiores voluptatum? Ad dolorum ex facere cupiditate provident repellendus error, iste dicta debitis in sint eligendi beatae."

        ]
        ]
    ]);
});
Route::get('/admin',function(){
    return view('admin.pages.dashboard-general-dashboard');
});
Route::get('/first',function(){
    return response("<h1>hey chiheb</h1>")->header('Content-type',"text/plain");
});
Route::get('user/{id}',function($id){
    return response('<h1>hey'.$id);
})->where('id','[0-9]');
Route::get('profile',[UserController::class,'profile']);
Route::post("listings",[ListingController::class,'store']);
Route::post('users',[UserController::class,'store']);
Route::post('usersedit',[UserController::class,'save']);
Route::post('/logout',[UserController::class,'logout']);
Route::post('users/authenticate',[UserController::class,'authenticate']);
Route::put("listings/{listing}",[ListingController::class,'update']);
Route::delete("listings/{listing}",[ListingController::class,'destroy']);
Route::get('/',[ListingController::class,'index']);
Route::get("listing/{id}",[ListingController::class,'show']);
Route::get("listings/create",[ListingController::class,'create'])->
middleware('auth');
Route::get("listings/{listing}/edit",[ListingController::class,'edit']);
Route::get('register',[UserController::class,'create'])->middleware('guest');
Route::get('login',[UserController::class,'login'])->name('login');
Route::get("listings/manage",[ListingController::class,'manage'])->
middleware('auth');
