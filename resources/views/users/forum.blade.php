<x-user-App>

    <div class="content-forum">
        <div class="container">
            <h2 class="fw-bold text-center mb-2 text-2xl">FORUM</h2>
            <div class="form">
                <form action="{{ route('users.forum.add') }}" method="POST">
                    @csrf
                    <img src="../storage/profile/{{ Auth::user()->profile_path }}" alt="Profile Picture">
                    <textarea id="forum-content" name="content" placeholder="Write a new thread..."></textarea>
                    <button>Submit</button>
                </form>
            </div>
            <hr>
            <div class="threads">
                @forelse ($forum->reverse() as $i)
                    <div class="thread">
                        <img src="../storage/profile/{{ $i->profile }}" alt="{{ $i->username }} Profile"
                            class="mt-2">
                        <div class="thread-content">
                            <div class="thread-title">{{ $i->username }}</div>
                            <div class="thread-text">{{ $i->content }}</div>
                            <div class="thread-time">Posted on {{ $i->created_at }}</div>
                        </div>
                        @if (Auth::user()->email == $i->email)
                            <div class="action-thread mt-3">
                                <form action="{{ route('users.forum.delete', $i->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>

                            </div>
                        @endif
                    </div>
                @empty
                    <p class="text-center text-2xl">Be the one!</p>
                @endforelse

            </div>
        </div>
    </div>


</x-user-App>
