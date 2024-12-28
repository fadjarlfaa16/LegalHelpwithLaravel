<x-admin-App>
    <div class="container">
        <h1>Tambah Top Consultant</h1>

        <form action="{{ route('admin.recommended.topconsultant.add') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="user_id" class="form-label">Pilih User</label>
                <select name="user_id" id="user_id" class="form-select" required>
                    <option value="" disabled selected>Pilih Consultant</option>
                    @foreach ($users as $user)
                        <option value="{{ $user->id }}">{{ $user->name }} - {{ $user->email }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="position" class="form-label">Posisi</label>
                <select name="position" id="position" class="form-select" required>
                    <option value="" disabled selected>Pilih Posisi</option>
                    <option value="1">Top 1</option>
                    <option value="2">Top 2</option>
                    <option value="3">Top 3</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</x-admin-App>
