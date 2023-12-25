<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    public function index()
    {
      $user= User::get();
      $msg = ["ok"];
      return response ($user,200,$msg);
    // return response()->json( 'hello',200) ;
     
    }
    public function store(Request $request)
    {
   $user = User::create($request->all());
   if($user){
    $array = [
        'key'=>$user,
        'message'=>'ok',
        'status'=>201,

    ];
    return response($array,200);
   }
    return response(null,400);
  }
     
    
  public function show($id)
  {
      $user = User::find($id);
   if( $user){
    $array = [
        'key'=>$user,
        'message'=>'ok',
        'status'=>200,

    ];
    return response($array,200);
   } 
   return response(null,400);
  }

  public function statuShow(){
    $user = User::where('status','0')->get();
    
    return view ('user',compact('user'));
  }
public function updateStatus($id){
$user =User::where('id',$id)->first();
$user->status = '1';
$user->save();
return redirect()->route('statuShow1');

}
public function statuShow1(){
  $user = User::where('status','1')->get();
  
  return view ('backend.status1',compact('user'));
}
}
