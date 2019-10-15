<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    //
    public function index()
    {
       // return 'Usuarios';
        // $users=User::all();

        if(request()->has('empty')){
         $users=[];

        }else{
            $users=[
                'Carlos',
                'Antonio',
                'Belen',
                'Anabel',
                'Sebas',
                '<script>alert("Clicker")</script>'
            ];

        }
         

         $title='Listado de usuarios';

        //dd(compact('title','users'));
//funcion compact devuelve un array asociativo
        return view('users',compact('title','users'));

    /*    return view('users',[
           'users'=>$users,
           'title'=>'Listado de usuarios'
       ]);
       */

    /*    return view('users')->with([
        'users'=>$users,
        'title'=>'Listado de usuarios'
        ]);
    */
}
     //
     public function show($id)
     {
        return "Mostrando detalle del usuario: {$id}";
     }
     public function create()
     {
        return 'Crear nuevo usuario';
     }
    

}
