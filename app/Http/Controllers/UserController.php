<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function showUser(){
           $user = DB::table('users')->get();
//        $user = DB::table('users')->where('id', 2)->get();
//        $user = DB::table('users')->find(5);
        return view('alluser', ['data' => $user]);
//        dd($user);

//        foreach ($user as $u){
//            echo $u->name . "<br>";
//        }
    }

    public function singleUser(string $id){
     $user = DB::table('users')->where('id', $id)->get();
     return view('userprofile', ['data' => $user]);
    }

//    public function addUser()
//    {
//        $user = DB::table('users')->insertOrIgnore(
//            [
//               'name' => 'Madhav Jha',
//               'email' => 'madhav@mil.com',
//               'age'=> 27,
//                'city' => 'Nagpur',
//                'created_at' => now(),
//                'updated_at' => now()
//            ]);
//        if ($user){
//            echo "<h1>Data Successfully Added </h1>";
//        }else{
//            echo "<h1>Data not Added </h1>";
//        }
//    }

  public function updateUser(string $id){
//        $user = DB::table('users')->where('id', $id)->get();
      $user = DB::table('users')->find($id);
        return view('updateUser', ['data' => $user]);
  }

public function updatingUser( Request $request, $id){
   $user = DB::table('users')->where('id', $id)->update(
       [
           'name' => $request->name,
           'email' => $request->email,
           'age'=> $request->age,
           'city' => $request->city
       ]
   );
    if ($user){
        return redirect()->route('alluser');
    }else{
        echo "<h1>Data not Added </h1>";
    }
}


    public function addUser(Request $request)
    {
     $user = DB::table('users')->insert(
         [
             'name' => $request->name,
             'email' => $request->email,
              'age'=> $request->age,
             'city' => $request->city
         ]
     );
        if ($user){
            return redirect()->route('alluser');
       }else{
          echo "<h1>Data not Added </h1>";
      }
}
    public function deleteUser(string $id)
    {
        $user = DB::table('users')->where('id', $id) ->delete();
        if ($user){
            return redirect()->route('alluser');
        }
    }

}
