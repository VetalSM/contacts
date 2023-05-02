<x-layout>
    <div class="container">
        <h1>Create Contact</h1>
        <form method="post" action="{{ route('contacts.store') }}">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
</x-layout>
