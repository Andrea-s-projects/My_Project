<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function store(Request $request)
    {
        // Validazione dei dati del commento
        $request->validate([
            'announcement_id' => 'required|exists:announcements,id',
            'comment' => 'required|string|max:255',
        ]);

        $comment = new Comment();
        $comment->announcement_id = $request->announcement_id;
        $comment->user_id = auth()->id(); // Assumendo che ci sia un sistema di autenticazione degli utenti
        $comment->body = $request->comment;

        // commento
        $comment->status = 'pending'; // Imposta lo stato del commento come "in attesa di revisione"
    // commento

        $comment->save();

        // Ritorna alla pagina dell'annuncio dopo aver aggiunto il commento
        return redirect()->back()->with('success', 'Il tuo commento è stato inviato per la revisione.');
    }
}

