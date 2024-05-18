<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        
        $data = array(
            'contacts' => Contact::all(),
            
        ) ;
        return view('dashboard',$data);
        }

        public function update(Request $request, string $id)
    {
        $contact  = Contact::find($request->id);
        $data = array(
            'contact' => $contact
        );

        if($request->isMethod('post')){
            $contact->nama = $request->nama;
            $contact->email = $request->email;
            $contact->pesan = $request->pesan;
            $contact->save();
            return redirect('/admin')->with(['success' => 'Update successful']);
        }
        return view('welcome',$data);
    }
     public function destroy(Request $request)
    {
        $contact = Contact::find($request->id);
        $contact->delete();
        return redirect('/admin')->with(['success' => 'data has been successfully deleted']);
    }

}
