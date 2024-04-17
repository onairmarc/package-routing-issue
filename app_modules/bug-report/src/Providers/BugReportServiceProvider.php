<?php

namespace Modules\BugReport\Providers;

use Illuminate\Support\ServiceProvider;

class BugReportServiceProvider extends ServiceProvider
{
	public function register(): void
	{
	}

	public function boot(): void
	{
        $this->loadRoutesFrom(__DIR__ . '/../../routes/web.php');
	}
}
