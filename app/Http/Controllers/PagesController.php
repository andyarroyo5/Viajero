<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Controllers\TripsController;

class PagesController extends Controller
{


      public function __construct()
    {
        $this->middleware('auth');
    }

      public function index()
      {
         // $TripsController=new TripsController();
          //return $TripsController->index();
          //return Redirect::action('TripsController@index');
          return view('home');
      }

      public function planning() {
          return view('planning');
      }
}
