<x-layout>
    <div class="container">
        <h1>Edit Phone Number</h1>
        <form method="post" action="{{ route('contacts.updateNumber', [$contact, $number]) }}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="number">Number</label>
                <input type="number" class="form-control" id="number" name="number" value="{{ $number->number }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
</x-layout>
