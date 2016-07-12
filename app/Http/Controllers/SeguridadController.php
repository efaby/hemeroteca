<?php

namespace Hemeroteca\Http\Controllers;

use Illuminate\Http\Request;

use Hemeroteca\Http\Requests;
use Hemeroteca\Http\Controllers\Controller;
use Auth;
use Redirect;

class SeguridadController extends Controller
{
	public function postLogin(Request $request)
	{
		$userdata = array(
				'username' => $request->get('username'),
				'password'=> $request->get('password')
		);	
		
		if(Auth::attempt($userdata)){			
			return response()->json( array('msg' => route('principal.index'),'bandera'=>0));
		}
		return response()->json( array('msg' => 'Credenciales Inválidas!', 'bandera' => 1) );
	}
	
	public function logOut()
	{
		Auth::logout();
		return Redirect::to('/')
		->with('mensaje_error', 'Tu sesión ha sido cerrada.');
	}

}
