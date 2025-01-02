<x-admin-App>
    <div class="container-crud">
        <form action="{{ route('admin.legalpedia.update', $article->id) }}" method="POST" enctype="multipart/form-data">
            <input type="file" name="picture_path" accept="image/"> <br>
            @csrf
            @method('PUT')
            <div class="col-8">
                <label for="headline">Headline</label>
                <input type="text" name="headline" id="headline" placeholder="{{ $article->headline }}"
                    class="form-control mb-2">
            </div>
            <div class="col-8">
                <label for="content">Content</label>
                <textarea name="content" id="content" class="form-control mb-2" placeholder="{{ $article->content }}" required></textarea>
            </div>
            <button type="submit">Save</button>
        </form>
    </div>

</x-admin-App>
