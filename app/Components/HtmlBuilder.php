<?php
namespace jobposting\Components;

use Collective\Html\HtmlBuilder as CollectiveHtmlBuilder;


Class HtmlBuilder extends CollectiveHtmlBuilder {

	public function menu()
	{
		return view('partials/menu');
	}
}