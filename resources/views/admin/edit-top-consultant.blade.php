<x-admin-App>
    <div class="container-crud">
        <h2 class="fw-bold text-center mb-4">EDIT TOP CONSULTANT</h2>

        <form action="{{ route('admin.recommended.topconsultant.update', ['id' => $topConsultant->id]) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="user_id" class="form-label">Select Consultant</label>
                <select name="user_id" id="user_id" class="form-select" required>
                    @foreach ($users as $user)
                        <option value="{{ $user->id }}"
                            {{ $user->id == $topConsultant->user_id ? 'selected' : '' }}>
                            {{ $user->name }} - {{ $user->email }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="position" class="form-label">Position</label>
                <select name="position" id="position" class="form-select" required>
                    <option value="1" {{ $topConsultant->position == 1 ? 'selected' : '' }}>Top 1</option>
                    <option value="2" {{ $topConsultant->position == 2 ? 'selected' : '' }}>Top 2</option>
                    <option value="3" {{ $topConsultant->position == 3 ? 'selected' : '' }}>Top 3</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
</x-admin-App>
