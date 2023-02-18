<?php

namespace App\Http\Controllers;

use App\Models\Contact;

use Carbon\Carbon;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function AllContact(){

        $contacts=Contact::latest()->paginate(4);
        return view('admin.contact.index', compact('contacts'));
    }

    public function NewContact()
    {
        $contacts = Contact::all();
        return view('admin.contact.addnew');

    }

    public function AddContact(Request $request){
      

        Contact::insert([
           
            'address' => $request->address,
            'phone' => $request->phone,
            'email' => $request->email,
            'created_at' => Carbon::now(),
        ]);

        return Redirect()->route('all.contact')->with('success', 'Record Added Successfully');
    }


    public function EditContact($id)
    {

        $contacts = Contact::find($id);
        return view('admin.contact.edit', compact('contacts'));
    }

    public function UpdateContact(Request $request, $id)
    {
        
        Contact::find($id)->update([
            
            'address' => $request->address,
            'phone' => $request->phone,
            'email' => $request->email,
        
        ]);

        return Redirect()->route('all.contact')->with('update', 'Record Updated Successfully!');
    }

    public function DeleteContact($id)
    {
        Contact::find($id)->delete();
        return Redirect()->route('all.contact')->with('delete', 'Record Deleted Successfully');
    }

}
