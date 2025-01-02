<x-user-App>
    <div class="content-legalpedia">
        <div class="container">
            <h2 class="fw-bold text-center text-2xl">LEGALPEDIA</h2>

            <div class="container">

                @forelse ($article as $i)
                    <a href="detailoflegalpedia={{ $i->id }}">
                        <div class="article">
                            <img src="../storage/article_images/{{ $i->picture_path }}" alt="Thumbnail">
                            <div class="article-contents">
                                <a href="#" class="article-title">{{ $i->headline }}</a>
                                <div class="article-date">{{ $i->created_at }}</div>
                                <p>{{ $i->content }}
                                </p>
                            </div>
                        </div>
                    </a>
                @empty
                    <h2>No data found</h2>
                @endforelse

            </div>


        </div>
    </div>
    </div>


</x-user-App>
