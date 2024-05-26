<?php

namespace App\Http\Controllers\Rua;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\{User,Family,Student,Location1,Location2,School,Work,Round,BI,Hide};
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class RuaController extends Controller
{
    //Register API (POST)
      public function register(Request $request)
 {
    //Data validation User
    $request->validate([
        "name"       =>"required|string|max:100",
        "email"      =>"required|email|unique:users,email",
        "password"   =>"required|string|min:5|max:50|confirmed",
        "name1"      =>"required|string|max:20",
        "name2"      =>"string|max:20",
        "lastn1"     =>"required|string|max:20",
        "lastn2"     =>"required|string|max:20",
        "name1"      =>"required|string|max:20",
        "name2"      =>"string|max:20",
        "lastn1"     =>"required|string|max:20",
        "lastn2"     =>"string|max:20",
        "phone"      =>"required|string|max:12",
        "gender"     =>"required",
        "name_f1"    =>"required|string|max:20",
        "name_f2"    =>"string|max:20",
        "lastn_f1"   =>"required|string|max:20",
        "lastn_f2"   =>"string|max:20",
        "name_m1"    =>"required|string|max:20",
        "name_m2"    =>"string|max:20",
        "lastn_m1"   =>"required|string|max:20",
        "lastn_m2"   =>"string|max:20",
        "country_id" => "required",
        "state_id"   => "required",
        "city_id"    => "required",
        "birthdate"  => "required",
        "status"     => "required",
        "type_sch"   => "required",
        "level_sch"  => "required",
        "name_sch"   => "required",
        "midd_sch_c" => "required|max:2|numeric",
        "state_sch"  => "required",
        "midd_sign_g"=> "required",
        "finac_sch"  => "required",
        "graduat_sch"=> "required",
        "situat"     => "required",
        "f_school"   => "required_if:situat,s",
        "work"       => "string",
        "work_p"     => "string",
        "work_n"     => "string",
        "profes"     => "string",
        "round"      => "required|max:5|numeric",
    ]);
    DB::transaction(function() use ($request) {

    $user = User::create([
        "name"    => $request->name,
        "email"   => $request->email,
        "password"=> Hash::make($request->password),
    ]); 

    Student::create([
        "name1"    => $request->name1,
        "name2"    => $request->name2,
        "lastn1"   => $request->lastn1,
        "lastn2"   => $request->lastn2,
        "user_id"  => $user->id
    ]);

    Family::create([
        "gender"   => $request->gender,
        "name_f1"  => $request->name_f1,
        "name_f2"  => $request->name_f2,
        "lastn_f1" => $request->lastn_f1,
        "lastn_f2" => $request->lastn_f2,
        "name_m1"  => $request->name_m1,
        "name_m2"  => $request->name_m2,
        "lastn_m1" => $request->lastn_m1,
        "lastn_m2" => $request->lastn_m2,
        "user_id"  => $user->id
    ]);
    
    Location1::create([
        "country_id" => $request->country_id,
        "state_id"   => $request->state_id,
        "city_id"    => $request->city_id,
        "birthdate"  => $request->birthdate,
        "age"        => $request->age,
        "g_age"      => $request->g_age,
        "status"     => $request->status,
        "phone"    => $request->phone,
        "user_id"    => $user->id
    ]);

    Location2::create([
        "state_re" => $request->state_re,
        "city_re"  => $request->city_re,
        "address"  => $request->address,
        "phone"    => $request->phone,
        "user_id"  => $user->id
    ]);

    School::create([
        "type_sch"     => $request->type_sch,
        "level_sch"    => $request->level_sch,
        "name_sch"     => $request->name_sch,
        "midd_sch_c"   => $request->midd_sch_c,
        "state_sch"    => $request->state_sch,
        "midd_sign_g"  => $request->midd_sign_g,
        "finac_sch"    => $request->finac_sch,
        "graduat_sch"  => $request->graduat_sch,
        "situat"       => $request->situat,//campo foto formato(PDF)
        "user_id"      => $user->id
        
    ]);

    Work::create([
        "work"       => $request->work,
        "work_p"     => $request->work_p,
        "work_n"     => $request->work_n,
        "profes"     => $request->profes,
        "f_work"     => $request->f_work,//campo foto formato(PDF)
        "user_id"    => $user->id
    ]);

    Round::create([
        "round"     => $request->round,
        "user_id"   => $user->id
    ]);

    BI::create([
        "bi"        => $request->bi,
        "f_bi"      => $request->f_bi,//campo foto formato(PDF)
        "user_id"   => $user->id
    ]);

    Hide::create([
        "unite_o"   => $request->unite_o,
        "espec"     => $request->espec,
        "periodo"   => $request->periodo,
        "time"      => $request->time,
        "sp_educ"   => $request->sp_educ,
        "user_id"   => $user->id
    ]);
});
    //Data Response
    return response()->json([
        "status"  => true,
        "message" => "usuário Criado com Sucesso!" ], 200); 

    
    }


    //Loguin API (POST)
    public function login(Request $request){

        //Data validation1
    $request->validate([
        "email"   =>"required|email",
        "password"=>"required|string|min:5|max:50",
       ]);

        //Check user login
    if(Auth::attempt([
        "email"   => $request->email,
        "password"=> $request->password,
      ])){
    
        $user  = Auth::user();
        $token = $user->createToken("myToken")->accessToken;

    return response()->json([
        "status" => true,
        "message"=> "Usuário Validado com Sucesso!",  
        "token"  => $token
        ]);    

    } else {
    
    return response()->json([
        "status" => false,
        "message"=> "Usuário não Validado!",  
        ]);
            }
    }

    //Profile API (GET)
    public function profile(){

        $user = Auth::user();
        
        return response()->json([
            "status" => true,
            "message"=> "Dados do Perfil",  
            "data" => $user], 200);
    }

    //Logout API (GET)
    public function logout(){
        
        auth()->user()->token()->revoke();
        
        return response()->json([
            "status" => true,
            "message"=> "Usuário Desconectado Corretamente"  
           ]);

    }
}
