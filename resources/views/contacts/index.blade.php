<x-layout>
    <div class="container">
        <h1>Contacts</h1>
        <table class="table">
            <thead>
            <tr>
                <th>Name</th>
                <th>Phone Numbers</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($contacts as $contact)
                <tr>
                    <td>{{ $contact->name }}</td>
                    <td>
                        @foreach ($contact->numbers as $number)
                            {{ $number->number }}<br>
                        @endforeach
                    </td>
                    <td>
                        <a href="{{ route('contacts.edit', $contact) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('contacts.destroy', $contact) }}" method="post" style="display:inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <a href="{{ route('contacts.create') }}" class="btn btn-success">Add Contact</a>
    </div>
</x-layout>
