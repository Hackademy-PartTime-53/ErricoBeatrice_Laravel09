<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use Illuminate\Http\Request;

class Contattacicontroller extends Controller
{
    public function form(){
        return view ('about.contattaci');
    }
    
    public function getDataAndSendEmail(request $request){
        // dd($request->all());
        
        // dd($request->user_name);
        $un=$request->user_name;
        $ue=$request->user_email;
        $um=$request->user_message;
        // if (!str_contains($ue, '@')){
        //     return redirect()->back()->with('error', 'L\'indirizzo e-mail non è valido');
        // }
        if( !$un || !$ue ){
          return redirect()->back()->with('error', 'Tutti i campi sono obbligatori!'); 
        };
        if( !$um ){
            return redirect()->back()->with('warning', 'Una form che include un messaggio è molto più chiara!'); 
          };
        //   creo l'oggetto mail
          $mail=new ContactMail($un, $ue, $um);
          // return $mail->render(); 

          Mail::to('administration@autodrive.it')->send($mail);

        return redirect()->back()->with('success', 'E-mail inviata con successo!');
        //quando hai finito di elaborare i dati reindirizza l'utente
        // return redirect()->route('home');
        

        // Modo per visualizzare le info nel browser e formattarle correttamente
        // echo "<pre>" . ($un) . "</pre>";
        // echo "<pre>" . ($ue) . "</pre>";
        // echo "<pre>" . ($um) . "</pre>";   
      
        
    }
}
