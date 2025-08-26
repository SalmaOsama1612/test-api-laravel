<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ApiLoginRequest;

class AuthController extends Controller
{
    //________________________________________________________________________________________________

    //login function
    public function login(ApiLoginRequest $request)
    {
return response()->json([
    'email' => $request->get('email'),
    'password' => $request->get('password'),
     'status' => 'success'

]);
    }
//________________________________________________________________________________________________
//register function    
    public function register(ApiLoginRequest $request){
      return response()->json([
    'message' => 'register',
    'status' => 'success'
]);

    }
    //________________________________________________________________________________________________

}

