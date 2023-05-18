<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view('/admin/user/list-users', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('/admin/user/add-user');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'string|required',
            'email' => 'email|required',
            'password' => 'string|min:6|required',
            'tipo' => 'numeric|required',            
        ]);
        
        
        $user = new User();
        $user->name = $request->name; 
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        switch($request->tipo){           
            case "1":
                $user->isEmpleado = true;
                break;
            case "2":
                $user->isAdmin = true;
                break;
        }
        $user->save();

        
        return redirect()->route('user.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return view('user/showProducto', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('/admin/user/edit-user', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'string|required',
            'tipo' => 'numeric|required',            
        ]);
        
        $user->name = $request->name; 
        switch($request->tipo){           
            case "1":
                $user->isAdmin = false;
                $user->isEmpleado = true;
                break;
            case "2":
                $user->isAdmin = true;
                $user->isEmpleado = false;
                break;
            default:
                $user->isAdmin = false;
                $user->isEmpleado = false;
                break;
        }
        $user->save();

        
        return redirect()->route('user.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        $categoria->delete();
        return redirect()->route('categoria.index');
    }
}
