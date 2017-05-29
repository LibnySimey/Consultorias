<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Request;
use App\Http\Controllers;

class nosotrosController extends Controller
{
	
	public function index()
	{
		return view('nosotros');
	}
}