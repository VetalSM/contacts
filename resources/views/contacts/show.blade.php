<x-layout>
    <div class="container">
        <h1>Contact Details</h1>
        <table class="table">
            <tr>
                <th>Name</th>
                <td>{{ $contact->name }}</td>
            </tr>
            <tr>
                <th>Phone Numbers</th>
                <td>
                    <ul>
                        @foreach ($contact->numbers as $number)
                            <li>{{ $number->type }}: {{ $number->number }}</li>
                        @endforeach
                    </ul>
                </td>
            </tr>
        </table>
        <a href="{{ route('contacts.edit', $contact) }}" class="btn btn-primary">Edit Contact</a>
        <a href="{{ route('contacts.index') }}" class="btn btn-secondary">Back to Contacts</a>
    </div>
</x-layout>
