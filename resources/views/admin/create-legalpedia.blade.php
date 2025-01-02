<x-admin-App>
    <div class="container-crud">
        <h2 class="fw-bold text-center mb-4">CREATE ARTICLE</h2>
        <form action="{{ route('admin.legalpedia.add') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="col-8">
                <input type="file" name="picture_path" accept="image/"> <br>
                <label for="headline">Fullname</label>
                <input type="text" name="headline" id="headline" placeholder="Content Headline"
                    class="form-control mb-2">
            </div>
            <div class="col-8">
                <label for="content">Content</label>
                <textarea name="content" id="content" class="form-control mb-2" placeholder="Fill of Content" required></textarea>
            </div>
            <button type="submit">Submit</button>

        </form>
    </div>
</x-admin-App>
