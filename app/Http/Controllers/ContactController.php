<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        if($request->isMethod('post')){
            $contact = new Contact();
            $contact->email = $request->email;
            $contact->nama = $request->nama;
            $contact->pesan = $request->pesan;
            $contact->save();
            return redirect('/')->with(['berhasil' => 'Pesan Berhasil Terkirim']);
        }
        return view('welcome');
    }
    public function index(){
        $data = array(
            'contacts' => Contact::all(),
            
        ) ;
        return view('dashboard',$data);
    }
    
}
