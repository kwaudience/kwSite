<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Log;
use Exception;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function sendEmail(Request $request)
    {
        Log::info('sendEmail called');
        $data = $request->validate([
            'nom' => 'required',
            'email' => 'required|email',
            'objet' => 'required',
            'message' => 'required',
        ]);

        try {
            Mail::to('contact@kwlegaltech.com')->send(new ContactMail($data));

            // Vérifie s'il y a eu une erreur pendant l'envoi


            return back()->with('success', 'Votre message a été envoyé avec succès.');
        } catch (Exception $e) {
            Log::error('Erreur envoi mail: ' . $e->getMessage());
            return back()->with('error', 'Une erreur s\'est produite. Veuillez réessayer plus tard.');
        }

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
