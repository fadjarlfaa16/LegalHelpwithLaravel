<x-admin-App>
    <div class="content-legalpedia">


        <a href="{{ route('admin.legalpedia.create') }}">Create Article</a>

        @foreach ($article as $i)
            <div class="container">
                <div class="article">
                    <img src="../storage/article_images/{{ $i->picture_path }}" alt="Thumbnail">
                    <div class="article-content">
                        <p class="article-title">{{ $i->headline }}</p>
                        <div class="article-date">Posted on {{ $i->created_at }}</div>
                        <p>
                            {{ $i->content }}
                        </p>
                    </div>
                    <a href="{{ route('admin.legalpedia.edit', $i->id) }}">Edit</a>
                    <form action="{{ route('admin.legalpedia.delete', $i->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                    </form>
                </div>
        @endforeach
    </div>


</x-admin-App>
