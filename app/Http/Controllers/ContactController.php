<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Http\Requests\ContactStoreRequest;
use App\Http\Requests\ContactUpdateRequest;
class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // recuperer tous les contacts
        $contacts = Contact::all();
        return view('contacts.index', compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('contacts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ContactStoreRequest $request)
    {
        
        // enregistrement sans validation
        Contact::create($request->validated());
        // redirection vers la liste des contacts
        return redirect()->route('contacts.index')->with('success', 'Contact créé avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show(Contact $contact)
    {
        return view('contacts.show', compact('contact'));
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
    public function update(ContactUpdateRequest $request, Contact $contact)
    {
        // mise a jour sans validation
        $contact->update($request->validated());
        // redirection vers la liste des contacts
        return redirect()->route('contacts.index')->with('success', 'Contact mis à jour avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        // suppression du contact
        $contact->delete();
        // redirection vers la liste des contacts
        return redirect()->route('contacts.index');
    }
}
