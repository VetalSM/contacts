<x-layout>
    <div class="container">
        <h1>Add Phone Number</h1>
        <form method="post" action="{{ route('contacts.storeNumber', $contact) }}">
            @csrf
            <div class="form-group">
                <label for="number">Number</label>
                <input type="number" class="form-control" id="number" name="number" required>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
</x-layout>
