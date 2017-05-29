<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Request;
use App\Http\Controllers;

class teamController extends Controller
{
	
	public function index()
	{
		return view('team');
	}
}