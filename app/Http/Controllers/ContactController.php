<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function contact(){
        return view('contattaci');
    }
    public function contact_us(Request $request){
        $name = $request->name;
        $surname = $request->surname;
        $email = $request->email;
        $notation = $request->notation;
        try{

            Mail::to($email)->send(new ContactMail($name, $surname, $email, $notation));
        }
        catch(Exception $error){
            return redirect()->back()->with('emailError', "C'e' stato un problema con l'invio della tua email. Riprova tra qualche minuto");
        }
        return redirect(route('homepage'))->with('emailSent','La tua mail è stata spedita con successo');
        
    }
}   
