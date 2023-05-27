<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contacts = Contact::paginate(20);

        return view('contacts.index', compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('contacts.create', [
            'contact' => new Contact(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ContactRequest $request)
    {
        Contact::create($request->all());

        return redirect()->route('contacts.index')->with('success', 'El contacto fue creado con éxito');
    }

    /**
     * Display the specified resource.
     */
    public function show(Contact $contact)
    {
        //return view('contacts.show', compact('contact'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        return view('contacts.edit', compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ContactRequest $request, Contact $contact)
    {
        $contact->update($request->all());

        return redirect()->route('contacts.index')->with('info', 'El contacto fue actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        $contact->delete();

        return redirect()->route('contacts.index')->with('success', 'El contacto fue eliminado con éxito');
    }
}
