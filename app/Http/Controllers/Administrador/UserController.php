<?php

namespace App\Http\Controllers\Administrador;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use  Exception;
use RealRashid\SweetAlert\Facades\Alert;
class UserController extends Controller

{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();

       return view('administrador.users.index', compact('users')); //Metodo compact envia variable a la vista
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('administrador.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
                User::create($request->all());
                toast('Registro guardado con exito!','success');
                return redirect()->route('administrador.users.index');
            }

               catch (Exception $e)
                {
                    return  "Ha ocurrido un error";
                 }

    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('administrador.users.edit', compact('user'));
    }


    public function update(Request $request, User $user)
    {
        try
        {
            $user->update($request->all());
            Alert::toast('Usuario editado con exito','success');
            return redirect()->route('administrador.users.index');
        }

        catch (\Exception $e)
        {

        }

    }

    public function destroy(User $user)
    {

    }
}
