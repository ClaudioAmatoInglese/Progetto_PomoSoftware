<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Article;
use App\Mail\BecomeRevisor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Artisan;

class RevisorController extends Controller
{
    
    public function index()
{
    $processed_ids = session('processed_article_ids', []); // Recupera gli ID già processati o array vuoto

    $article_to_check = Article::where('is_accepted', null)
                               ->whereNotIn('id', $processed_ids) // Escludi quelli già processati
                               ->first();

    $article_to_re_check = Article::whereIn('is_accepted', [0, 1])
                                   ->whereNotIn('id', $processed_ids) // Escludi quelli già processati
                                   ->orderBy('updated_at', 'desc')
                                   ->first();

    return view('revisor.index', compact('article_to_check', 'article_to_re_check'));
}
    
public function accept(Article $article)
{
    $article->setAccepted(true);

    // Aggiungi l'articolo alla lista degli ID già processati
    session()->push('processed_article_ids', $article->id);

    return redirect()
        ->back()
        ->with('message', "Hai accettato l'articolo {$article->title}");
}

public function reject(Article $article)
{
    $article->setAccepted(false);

    // Aggiungi l'articolo alla lista degli ID già processati
    session()->push('processed_article_ids', $article->id);

    return redirect()
        ->back()
        ->with('message', "Hai rifiutato l'articolo {$article->title}");
}
    
    public function becomeRevisor() {
        
        Mail::to('admin@presto.it')->send(new BecomeRevisor(Auth::user()));
        return redirect()->route('homepage')->with('message', 'Complimenti,hai richiesto di diventare revisor');
        
    }
    
    public function makeRevisor(User $user)
    {
        Artisan::call('app:make-user-revisor', ['email' => $user->email]);
        return redirect()->back();
    }
    
    
}
