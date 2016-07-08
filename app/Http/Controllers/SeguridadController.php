<?php

namespace Hemeroteca\Http\Controllers;

use Illuminate\Http\Request;

use Hemeroteca\Http\Requests;
use Hemeroteca\Http\Controllers\Controller;

class SeguridadController extends Controller
{
	public function postLogin()
	{
		$userdata = array(
				'username' => Input::get('username'),
				'password'=> Input::get('password')
		);		
		if(Auth::attempt($userdata)){			
			return redirect()->route('principal');
		}
		return response()->json( 'Credenciales Inválidas!' );
	}

}
