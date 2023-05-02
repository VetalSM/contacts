<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Number;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();

        return view('contacts.index', compact('contacts'));
    }

    public function create()
    {
        return view('contacts.create');
    }

    public function store(Request $request)
    {
        $contact = Contact::create($request->all());

        return redirect()->route('contacts.edit', $contact);
    }
    public function show(Contact $contact)
    {
        return view('contacts.show', compact('contact'));
    }

    public function edit(Contact $contact)
    {
        return view('contacts.edit', compact('contact'));
    }

    public function update(Request $request, Contact $contact)
    {
        $contact->update($request->all());

        return redirect()->route('contacts.show', $contact);
    }

    public function destroy(Contact $contact)
    {
        $contact->delete();

        return redirect()->route('contacts.index');
    }

    public function createNumber(Contact $contact)
    {
        return view('contacts.createNumber', compact('contact'));
    }

    public function storeNumber(Request $request, Contact $contact)
    {
        $request->validate([

            'number' => 'required',
        ]);

        $contact->numbers()->create([
            'number' => $request->number,
        ]);

        return redirect()->route('contacts.edit', $contact);
    }

    public function editNumber(Contact $contact, Number $number)
    {
        return view('contacts.editNumber', compact('contact', 'number'));
    }

    public function updateNumber(Request $request, Contact $contact, Number $number)
    {
        $request->validate([
            'number' => 'required',
        ]);

        $number->update([
            'number' => $request->number,
        ]);

        return redirect()->route('contacts.edit', $contact);
    }

    public function destroyNumber(Contact $contact, Number $number)
    {
        $number->delete();

        return redirect()->route('contacts.edit', $contact);
    }

}
