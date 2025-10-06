<?php

namespace App\Http\Controllers;

use App\Models\Book; // N'oubliez pas d'importer votre modèle Book
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        // Récupère les 4 derniers livres ajoutés.
        // ->with('user') est crucial pour charger les informations du vendeur
        // grâce à la relation `user` que vous avez dans votre modèle Book.
        $latestBooks = Book::with('user')
                            ->latest()
                            ->take(4)
                            ->get();

        // Retourne la vue 'welcome' en lui passant les données des livres
        return view('welcome', compact('latestBooks'));
    }
}