<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        // 1. Validação dos dados
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // 2. Salvar no banco de dados
        Contact::create($validated);

        // 3. Redirecionar com mensagem de sucesso
        return back()->with('success', 'Mensagem enviada com sucesso! Entrarei em contato em breve.');
    }
}
