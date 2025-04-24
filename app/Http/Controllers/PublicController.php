<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Article;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class PublicController extends Controller
{
    public function homepage()
    {
        $articles = Article::where('is_accepted', true)->orderBy('created_at', 'desc')->take(6)->get();
        return view('welcome', compact('articles'));
    }
    


    public function searchArticles(Request $request) {
        $query = $request->input('query');

        $articles = Article::search($query)->where('is_accepted', true)->paginate(10);

        return view('article.searched', ['articles' => $articles, 'query' => $query]);
    }

    public function store(Request $req) {
        $email = $req->input('email');
        $contact = compact('email');

        $newContact = new Contact();
        $newContact->email = $req->input('email');
        $newContact->save();

        Mail::to($email)->send(new ContactMail($contact));

        return redirect()->route('homepage')->with('success', 'Email registrata, controlla la tua casella di posta per la conferma!');
    }
}