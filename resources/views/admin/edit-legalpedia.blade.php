<x-admin-App>
    <form action="{{ route('admin.legalpedia.update', $article->id) }}" method="POST" enctype="multipart/form-data">
        <input type="file" name="picture_path" accept="image/"> <br>
        @csrf
        @method('PUT')
        <div class="col-8">
            <label for="headline">Fullname</label>
            <input type="text" name="headline" id="headline" placeholder="{{ $article->headline }}"
                class="form-control mb-2">
        </div>
        <div class="col-8">
            <label for="content">Content</label>
            <input type="text" name="content" id="content" class="form-control mb-2"
                placeholder="{{ $article->content }}">
        </div>
        <button type="submit">SSSS</button>
    </form>

    {{-- <form action="{{ route('admin.legalpedia.updateArticlePicture', $article->id) }}" method="POST">
        <button type="submit">Submit</button>

    </form> --}}
</x-admin-App>
