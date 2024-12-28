<x-admin-App>
    <div class="content-forum">
        {{-- @foreach ($forum->reverse() as $i)
            <div class="post-card">
                <div class="d-flex align-items-center">
                    <div class="profile-picture" style="width: 50px; height: 50px; overflow: hidden">
                        <img src="../img/c_NiG8Kz_400x400.jpg" alt="Gambar Contoh" style="width: 100%; height: auto" />
                    </div>
                    <div class="ml-3">
                        <div class="username">{{ $i->username }}</div>
                        <div class="time-posted">Posted on {{ $i->created_at }}</div>
                    </div>
                </div>
                <div class="post-content mt-2">
                    {{ $i->content }}
                </div>
                <div class="delete-thread">

                    <form action="forum/{{ $i->id }}/delete" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                    </form>

                </div>
            </div>
        @endforeach --}}

        <div class="threads">
            @foreach ($forum->reverse() as $i)
                <div class="thread">
                    <img src="https://via.placeholder.com/50" alt="{{ $i->username }} Profile">
                    <div class="thread-content">
                        <div class="thread-title">{{ $i->username }}</div>
                        <div class="thread-text">{{ $i->content }}</div>
                        <div class="thread-time">{{ $i->created_at }}</div>
                    </div>
                </div>
            @endforeach

        </div>

    </div>
</x-admin-App>
