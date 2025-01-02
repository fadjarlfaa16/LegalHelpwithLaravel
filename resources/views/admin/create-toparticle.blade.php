<x-admin-App>
    <div class="container-crud">
        <h2 class="fw-bold text-center mb-4">UPDATE TOP ARTICLE</h2>

        <form action="{{ route('admin.recommended.toparticle.add') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="article_id" class="form-label">Select Article</label>
                <select name="article_id" id="article_id" class="form-select" required>
                    <option value="" disabled selected>Select Article</option>
                    @foreach ($article as $i)
                        <option value="{{ $i->id }}">{{ $i->headline }}</option>
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
                    <option value="4">Top 4</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
</x-admin-App>
