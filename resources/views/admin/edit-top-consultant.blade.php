<x-admin-App>
    <div class="container">
        <h1>Edit Top Consultant</h1>

        <form action="{{ route('admin.recommended.topconsultant.update', ['id' => $topConsultant->id]) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="user_id" class="form-label">Pilih User</label>
                <select name="user_id" id="user_id" class="form-select" required>
                    @foreach ($users as $user)
                        <option value="{{ $user->id }}" {{ $user->id == $topConsultant->user_id ? 'selected' : '' }}>
                            {{ $user->name }} - {{ $user->email }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="position" class="form-label">Posisi</label>
                <select name="position" id="position" class="form-select" required>
                    <option value="1" {{ $topConsultant->position == 1 ? 'selected' : '' }}>Top 1</option>
                    <option value="2" {{ $topConsultant->position == 2 ? 'selected' : '' }}>Top 2</option>
                    <option value="3" {{ $topConsultant->position == 3 ? 'selected' : '' }}>Top 3</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</x-admin-App>
