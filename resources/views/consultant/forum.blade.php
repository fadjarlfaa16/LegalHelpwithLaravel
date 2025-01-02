<x-consultant-App>
    <div class="content-forum">
        <div class="form">
            <form action="{{ route('consultant.forum.add') }}" method="POST">
                @csrf
                <img src="../storage/profile/{{ Auth::user()->profile_path }}" alt="Profile Picture">
                <textarea id="forum-content" name="content" placeholder="Write a new thread..."></textarea>
                <button>Submit</button>
            </form>
        </div>
        <hr>
        <div class="threads mt-3">
            @foreach ($forum->reverse() as $i)
                <div class="thread">
                    <img src="../storage/profile/{{ $i->profile }}" alt="{{ $i->username }} Profile">
                    <div class="thread-content">
                        <div class="thread-title">{{ $i->username }}</div>
                        <div class="thread-text">{{ $i->content }}</div>
                        <div class="thread-time">{{ $i->created_at }}</div>
                    </div>
                    @if (Auth::user()->email == $i->email)
                        <div class="action-thread mt-3">
                            <form action="{{ route('consultant.forum.delete', $i->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                    @endif
                </div>
            @endforeach

        </div>
    </div>
</x-consultant-App>
