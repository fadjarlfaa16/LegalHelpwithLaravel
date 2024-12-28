<x-admin-App>
    <form action="{{ route('admin.legalpedia.add') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="col-8">
            <input type="file" name="picture_path" accept="image/"> <br>
            <label for="headline">Fullname</label>
            <input type="text" name="headline" id="headline" placeholder="Content Headline" class="form-control mb-2">
        </div>
        <div class="col-8">
            <label for="content">Content</label>
            <input type="text" name="content" id="content" class="form-control mb-2" placeholder="Fill of Content">
        </div>
        <button type="submit">Submit</button>

    </form>
</x-admin-App>
