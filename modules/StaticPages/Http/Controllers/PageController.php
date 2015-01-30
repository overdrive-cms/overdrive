<?php

namespace Modules\StaticPages\Http\Controllers;
use Illuminate\Routing\Controller;

/**
 * Class PageController
 * @package Modules\StaticPages\Http\Controllers
 */
class PageController extends Controller {

	/**
	 * @param $slug
	 * @return mixed Page to be displayed or 404 Error
	 */
	public function showPage($slug) {
		$page = \Modules\StaticPages\StaticPage::where('url', $slug)->first();

		// If the Result is empty (false) or the page isn't marked as 'live' throw a 404 error.
		if(!$page || $page->status != 'live') {
			abort(404);
		}

		return $page;
	}

	/**
	 * @param string $filter whether to show only live pages or drafts too.
	 * @return array all pages
	 */
	public function index($filter = 'live') {
		//
	}

	/**
	 * @return mixed all page drafts
	 */
	public function showDrafts() {
		//
	}

	/**
	 * @return mixed all live pages
	 */
	public function showLive() {
		//
	}

	public function delete($id) {
		//
	}

	public function store($data) {
		//
	}

	public function edit($id, $data) {
		//
	}
}