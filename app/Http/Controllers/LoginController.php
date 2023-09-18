<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\User;

class LoginController extends Controller
{
   public function index(Request $request){
    
       $data = [
          'data'=> null,
           'meta' => [],
       ];

    

    return response()->json($data);

       
    //    return $response->json();
       
    //  $user=User::get();
    //    return $user->json();
   }
 
}
