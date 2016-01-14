<?php 

namespace jobposting\Providers;

use Collective\Html\HtmlServiceProvider as CollectiveHtmlServiceProvider;
use jobposting\Components\HtmlBuilder;


class HtmlServiceProvider extends CollectiveHtmlServiceProvider
{

	protected function registerHtmlBuilder()
	{
		$this->app->bindShared('html', function($app)
		{	
			return new HtmlBuilder($app['url']);
		});
	}

}