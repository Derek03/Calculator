<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Controllers\Controller;

class CalculateController extends Controller
{
    public function index() {

    }

    public function calculate() {
        $screen = $_POST['screen'];
        $value = eval('return ' . $screen. ';');
        echo $value;
    }
}
