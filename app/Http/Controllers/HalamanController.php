<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Models\Kelas;
use Carbon\Carbon;
use DataTables;

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
    return view('halaman', [
      'sesi' => $kelas = Kelas::latest()->get(),
      'iter' => 1,
      'title' => 'SEEnglish'
    ]);
  }

  // public function getKelas(Request $request)
  // {
  //   if ($request->ajax()) {
  //     $data = Kelas::latest()->get();
  //     return Datatables::of($data)->make(true);
  //   }
  // }
}
