<?php namespace Modules\Pages\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\View;

class PagesController extends Controller {

	public function index()
	{
		return View::make('pages::index');
	}
	
}