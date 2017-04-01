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

use App\slides;

Route::get('/', function () {
    return view('welcome');
});
Route::get('login', function() {
    return view('login');
})->name('login');
Route::get('present', function () {
  $slides = slides::all();
    return view('presentation', compact('slides'));
});
Route::get('edit', function()
{
  return view('edit');
});
Route::post('/edit', function (Request $request) {
    $validator = Validator::make($request->all(), [
        'name' => 'required|max:255',
    ]);

    if ($validator->fails()) {
        return redirect('/')
            ->withInput()
            ->withErrors($validator);
    }

    $slide = new Slide;
    $slide->name = $request->name;
    $slide->save();

    return redirect('/');
});
