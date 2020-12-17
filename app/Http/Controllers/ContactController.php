<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailSender;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $emails = Contact::all();
        return view('admin.contact.allEmails', compact('emails'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $storeContact = new Contact();
        $storeContact->sujet = $request->sujet;
        $storeContact->email = $request->email;
        $storeContact->message = $request->message;
        $storeContact->save();
        Mail::to($request->email)->send(new MailSender($request));
        return redirect('/allEmails');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact, $id)
    {
        $editContact = Contact::find($id);
        return view('admin.contact.editContact', compact('editContact'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact, $id)
    {
        $updateContact = Contact::find($id);
        $updateContact->sujet = $request->newSujet;
        $updateContact->email = $request->newEmail;
        $updateContact->message = $request->newMessage;
        $updateContact->save();
        return redirect('/allEmails');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact, $id)
    {
        $deleteEmail = Contact::find($id);
        $deleteEmail->delete();
        return redirect()->back();
    }
}
