<x-user-App>

    <div class="content-forum">
        <div class="container">
            <h2 style="font-size: 25px">Sharing your experience with our Forum!</h2>

            <div class="form">
                <form action="{{ route('users.forum.add') }}" method="POST">
                    @csrf
                    <img src="../storage/profile/{{ Auth::user()->profile_path }}" alt="Profile Picture">
                    <textarea name="content" placeholder="Write a new thread..."></textarea>
                    <button>Submit</button>
                </form>
            </div>

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
    </div>


</x-user-App>
