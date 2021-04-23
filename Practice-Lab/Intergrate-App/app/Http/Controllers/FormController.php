<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Validator;//**n1 */
use App\Http\Requests\ContactRequest;

class FormController extends Controller
{
    public function contactSubmit(ContactRequest $request){
     // dd($request->all());
     
     //How to use $request object to validate records
     //$validatedData=$request->validate(Contact::$rules);
    
     //How to use validator facade to validate records
    //  $validatedData =  Validator::make($request->all(), Contact::$rules);
    //     if($validatedData->fails()){
    //       return redirect(route('page.contact'))
    //                   ->withErrors($validatedData)
    //                   ->withInput();
    //     }


      //There are 2 step form controller
      //1.Save to database
     
      $contact = new Contact();
      $contact->to = 'admin@test.com';
      $contact->name = $request->get('name');
      $contact->email = $request->get('email');
      $contact->phone = $request->get('phone');
      $contact->message = $request->get('message');
      $contact->save();

      //2.send email


      //redirect with para success
      return redirect(route('page.contact', ['success'=> 1]));//then this para need to route to method contactPage()
                                                            //method contactpage in pageController
    }
}
