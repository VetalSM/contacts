<x-layout>
    <div class="container">
        <h1>Edit Contact</h1>
        <form method="post" action="{{ route('contacts.update', $contact) }}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $contact->name }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
        <hr>
        <h2>Phone Numbers</h2>
        <table class="table">
            <thead>
            <tr>
                <th>Number</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($contact->numbers as $number)
                <tr>
                    <td>{{ $number->number }}</td>
                    <td>
                        <a href="{{ route('contacts.editNumber', [$contact, $number]) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('contacts.destroyNumber', [$contact, $number]) }}" method="post" style="display:inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <a href="{{ route('contacts.createNumber', $contact) }}" class="btn btn-success">Add Phone Number</a>
        <a href="{{ route('contacts.index') }}" class="btn btn-secondary">Back to Contacts</a>
    </div>

</x-layout>
