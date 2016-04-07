<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

/* Load sample data, an array of associative arrays. */
require "models/pms.php";


// Display search form
Route::get('/', function()
{
	return View::make('pms.query');
});

// Perform search and display results
Route::get('search', function()
{
  $param = Input::get('param');
  $results = search($param);

	return View::make('pms.results')->withPms($results)->with('paramater',$param);
});

function search($param) {
  $pms = getPms();

  // Filter $pms by $name
  if (!empty($param)) {
    $results = array();
    foreach ($pms as $pm) {
      if (stripos($pm['name'], $param) !== FALSE || stripos($pm['address'], $param) !== FALSE || stripos($pm['phone'], $param) !== FALSE || stripos($pm['email'], $param) !== FALSE) {
        $results[] = $pm;
      }
    }
    $pms = $results;
  }
  else {
    return [];
  }
  return $pms;
}