<x-admin-App>
    <div class="container-crud">
        <h2 class="fw-bold text-center mb-4">EDIT TOP ARTICLE</h2>

        <form action="{{ route('admin.recommended.toparticle.update', ['id' => $topArticle->id]) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="article_id" class="form-label">Select Article</label>
                <select name="article_id" id="article_id" class="form-select" required>
                    @foreach ($article as $i)
                        <option value="{{ $i->id }}" {{ $i->id == $topArticle->user_id ? 'selected' : '' }}>
                            {{ $i->headline }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="position" class="form-label">Position</label>
                <select name="position" id="position" class="form-select" required>
                    <option value="1" {{ $topArticle->position == 1 ? 'selected' : '' }}>Top 1</option>
                    <option value="2" {{ $topArticle->position == 2 ? 'selected' : '' }}>Top 2</option>
                    <option value="3" {{ $topArticle->position == 3 ? 'selected' : '' }}>Top 3</option>
                    <option value="4" {{ $topArticle->position == 4 ? 'selected' : '' }}>Top 4</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
</x-admin-App>
