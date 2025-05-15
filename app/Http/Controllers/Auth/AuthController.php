<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.login');
    }


    public function login(Request $request){

        $credentials = $request->only('email', 'password');
        $user = User::where('email', $credentials['email'])->first();
        // dd(Hash::check($credentials['password'], $user->password));

        // dd(User::where('email', $credentials['email'])->first());

        // dd(vars: Auth::attempt($credentials));
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            $user = Auth::user();

            if ($user->role === 'admin') {
            //     return view('dashboard.admin.admindashboard');
                return redirect('/dashboard/admin');
            } else {
                // return view('dashboard.client.customerspace');
                return redirect('/dashboard/client');
            }
        }
        return back()->withErrors([
            'email' => 'Les identifiants ne sont pas valides.',
            'password' => 'Le mot de passe est incorrect.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

}


// public function login(Request $request)
// {
//     // Validation des informations de connexion
//     $request->validate([
//         'email'    => 'required|email',
//         'password' => 'required|string',
//     ]);

//     // Essayer de connecter l'utilisateur
//     if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
//         // Regénérer la session pour plus de sécurité
//         $request->session()->regenerate();

//         $user = Auth::user(); // Récupérer l'utilisateur connecté

//         // Rediriger vers le dashboard en fonction du rôle
//         if ($user->role === 'admin') {
//             return redirect()->route('dashboard.admin'); // Dashboard admin
//         }

//         return redirect()->route('dashboard.client'); // Dashboard client
//     }

//     // Si les informations sont incorrectes
//     return back()->withErrors([
//         'email' => 'Les identifiants fournis sont incorrects.',
//     ]);
// }
