<x-admin-App>
    <div class="container-crud">
        <h2 class="fw-bold text-center mb-4">UPDATE TOP CONSULTANT</h2>

        <form action="{{ route('admin.recommended.topconsultant.add') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="user_id" class="form-label">Select Consultant</label>
                <select name="user_id" id="user_id" class="form-select" required>
                    <option value="" disabled selected>Select Consultant</option>
                    @foreach ($users as $user)
                        <option value="{{ $user->id }}">{{ $user->name }} - {{ $user->email }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="position" class="form-label">Position</label>
                <select name="position" id="position" class="form-select" required>
                    <option value="" disabled selected>Select Position</option>
                    <option value="1">Top 1</option>
                    <option value="2">Top 2</option>
                    <option value="3">Top 3</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
</x-admin-App>
