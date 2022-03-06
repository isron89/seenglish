<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use Carbon\Carbon;

Carbon::setLocale('id');

class HalamanController extends Controller
{

  /**
  * Show the application dashboard.
  *
  * @return \Illuminate\Http\Response
  */
  public function index()
  {
    return view('halaman',[
      'title' => 'SEEnglish'
    ]);
  }

}
