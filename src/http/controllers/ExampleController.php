<?php
namespace Lbstr\Example\Http\Controllers;

use Illuminate\Routing\Controller;

class ExampleController extends Controller {

    public function index() {

        return view('example::index');

    }

}