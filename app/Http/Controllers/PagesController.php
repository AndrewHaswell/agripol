<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PagesController extends Controller
{

  /**
   * Show the application welcome screen to the user.
   *
   * @return Response
   */
  public function index()
  {
    return view('home');
  }

  public function test()
  {
    return view('pages.broadleaf_p4');
  }

  public function contact()
  {

    exit('andy');

  }
}
