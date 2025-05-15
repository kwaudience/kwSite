<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\Client;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ClientController extends Controller
{

    /**
     * Affiche le formulaire d'inscription.
     */
    public function index()
    {
        return view('dashboard.client.registers');
    }

    /**
     * Affiche le formulaire d'inscription.
     */
    public function create()
    {
        //
    }


    public function customerspace()
    {
        // Logique de la page d'espace client
        return view('dashboard.client.customerspace');
    }
        /**
         * Enregistre un nouveau client.
         */

    public function store(Request $request)
    {
        try {
            // Validation manuelle avec messages personnalisés (optionnel)
            $validator = Validator::make($request->all(), [
                'name'     => 'required|string|max:255',
                'email'    => 'required|email|unique:clients,email',
                'password' => 'required|string|min:4|confirmed',
                'phone'    => 'required|string|max:15',
                'address'  => 'required|string|max:255',
                'city'     => 'required|string|max:100',
                'country'  => 'required|string|max:100',
                'postal_code' => 'required|string|max:10',
            ], [
                'name.required' => 'Le nom est obligatoire.',
                'email.required' => 'L\'email est obligatoire.',
                'email.unique' => 'Cet email est déjà utilisé.',
                'password.required' => 'Le mot de passe est obligatoire.',
                'password.confirmed' => 'La confirmation du mot de passe ne correspond pas.',
                'phone.required' => 'Le numéro de téléphone est obligatoire.',
                'address.required' => 'L\'adresse est obligatoire.',
                'city.required' => 'La ville est obligatoire.',
                'country.required' => 'Le pays est obligatoire.',
                'postal_code.required' => 'Le code postal est obligatoire.',
                'postal_code.max' => 'Le code postal ne doit pas dépasser 10 caractères.',
            ]);

            if ($validator->fails()) {
                return redirect()->back()
                ->withErrors($validator)
                ->withInput(); // pour garder les champs remplis
            }
            // dd('ok');
            
            // Création du client
            User::create([
                'name'     => $request->name,
                'email'    => $request->email,
                'password' => Hash::make($request->password),
                'phone'    => $request->phone,
                'address'  => $request->address,
                'city'     => $request->city,
                'country'  => $request->country,
                'postal_code' => $request->postal_code,
            ]);
            return redirect('/dashboard/client/customer')->with('success', 'Compte créé avec succès !');

            // return redirect()->route('client.customerspace')->with('success', 'Compte créé avec succès !');

        } catch (\Exception $e) {
            // Log l'erreur pour debug
            Log::error('Erreur lors de la création de compte client : ' . $e->getMessage());

            return redirect()->back()
                ->with('error', 'Une erreur est survenue. Veuillez réessayer plus tard.')
                ->withInput();
        }
    }
}
