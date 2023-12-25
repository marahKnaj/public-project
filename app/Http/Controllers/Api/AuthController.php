<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\jobs;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
class AuthController extends Controller
{
 public function createUser(Request $request){

$validateUser = Validator::make($request->all(),
[
    'name' =>'required',
    'email'=>'required|email|unique:users,email',
    'password'=>'required',
    'bank' => 'required',
    'city'=>'string',
    'bank_account'=>'required',
]);
if($validateUser->fails()){
    return response()->json([
        'status'=>false,
        'message'=>'validation error',
        'errors' =>$validateUser->errors()
    ],401);
}
// $user = User::create([
//     'name'=>$request->name,
//     'email'=>$request->email,
//     'password'=>Hash::make($request->password),
//     'bank'=>$request->bank,
//     'photo'=>$request->photo,
//     'phone'=>$request->phone,
//     'bank_account'=>$request->bank_account,
//     'city'=>$request->city,
//     'lng'=>$request->lng,
//     'lat'=>$request->lat,
// ]);

$user = new User();
$user->name=$request->input('name');
$user->email=$request->input('email');
$user->password=Hash::make($request->input('password'));
$user->bank=$request->input('bank');
$user->photo=$request->input('photo');
$user->phone=$request->input('phone');
$user->bank_account=$request->input('bank_account');
$user->city=$request->input('city');
$user->lng=$request->input('lng');
$user->lat=$request->input('lat');
$user->save();

$jobs = new jobs();
$jobs->category_id = $request->input('category_id');
$jobs->subcategory_id = $request->input('subcategory_id');
$jobs->user_id = $user->id;
$jobs->save();

return response()->json([
    'status'=>true,
    'message'=>'الرجاء الانتظار حتا تتم الموافقة على تفعيل الحساب ',
    'token' =>$user->createToken("API TOKEN")->plainTextToken
],200);

}
// public function loginUser(Request $request){
// $validateUser = Validator::make($request->all(),
// [
//     'email'=>'required|email',
//     'password'=>'required'
// ]);
// if($validateUser->fails()){
//     return response()->json([
//         'status'=>false,
//         'message'=>'validation error',
//         'errors' =>$validateUser->errors()
//     ],401);}
// if(!Auth::attempt($request->only(['email','password']))){
//     return response()->json([
//         'status'=>false,
//         'message'=>'Email and password doesn not match our record',
//         'errors' =>$validateUser->errors()
//     ],401);
// }
// $user= User::where('email',$request->email)->first();
// return response()->json([
//     'status'=>true,
//     'message'=>'User logged successfuly',
//     'token' =>$user->createToken("API TOKEN")->plainTextToken
// ],200);
public function loginUser(Request $request)
{
    $data = $request->validate([
        'email' => 'required|string',
        'password' => 'required|string'
    ]);

    $user = User::where('email', $data['email'])->first();

if (!$user || !Hash::check($data['password'], $user->password)) {
        return response([
            'msg' => 'incorrect username or password'
        ], 401);
    }

    $token = $user->createToken('apiToken')->plainTextToken;

    $res = [
        'user' => $user,
        'token' => $token
    ];

    return response($res, 201);
}




public function store(Request $request){
    $request->validate([
        'email'=>'required|email',
        'password'=>'required',
        'device_name' =>'string|max:255',
    ]);
    $user= User::where('email',$request->email)->first();
    if($user && Hash::check($request->password,$user->password)){
        $device_name = $request->post('device_name',$request->userArgent());
        $token = $user->createToken($device_name);
        return Responce::json([
            'token' =>plainTextToken,
            'user' =>$user,
        ],201);
    }
    return Responce::json([

        'message' =>'Invalid credentials',
    ],401);

}

public function logout(Request $request)
    {
        // Auth::user()->tokens()->delete();
    //    $user= $request->user;
       auth()->user()->tokens()->delete();

    //    $user->tokens()->delete();
       return response()->json([
        'status'=>false,
        'message'=>'you are logout',

       ],200);
    }

}
