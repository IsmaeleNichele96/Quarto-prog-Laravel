<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{
    public function welcome()
    {
        $articles = Article::orderBy('created_at', 'DESC')->take(3)->get();
        return view('welcome', compact('articles'));
    }

    public function contattaci()
    {
        return view('contattaci');
    }

    public function contattaci_submit(Request $request)
    {

        $email = $request->input('email');
        $name = $request->input('name');
        $text = $request->input('text');

        Mail::to($email)->send(new ContactMail($name, $text));

        // return redirect(route('welcome'))->with('message', 'Email inviata con successo');
        return redirect(route('contattaci_grazie', ['name' => $name]));
    }

    public function contattaci_grazie($name)
    {
        return view('contattaci_grazie', ['name' => $name]);
    }
}
