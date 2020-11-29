<?php 

namespace App\Http\Controllers;



class HomeController extends Controller{
		function showUser(){
			return view('admin\index');
		}
		function showBeranda(){
			return view('admin\product2');
		}
		
}