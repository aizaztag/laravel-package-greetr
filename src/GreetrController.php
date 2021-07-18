<?php

namespace Aizaz\Greetr;

use App\Http\Controllers\Controller;

class GreetrController extends Controller
{
    public function index(String $sName)
    {
        return 'Hi ' . $sName . '! How are you doing today?';
    }
}