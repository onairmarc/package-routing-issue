<?php

namespace Modules\BugReport\Http\Controllers;

use Illuminate\Http\Request;

class BugReportController
{
    public function index(Request $request)
    {
        return "The Route is Working!";
    }
}
