<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
/**
* 
*/
class IndexController extends Controller {

	public function showIndex() {
		$name = "Loïc";
		return view('index')->with('name', $name);
	}
}

?>