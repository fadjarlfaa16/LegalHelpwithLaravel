<x-consultant-App>
    <div class="content-forum">
        <div class="form">
            <img src="../storage/profile/{{ Auth::user()->profile_path }}" alt="Profile Picture">
            <textarea placeholder="Write a new thread..."></textarea>
            <button>Submit</button>
        </div>

        <div class="threads">
            @foreach ($forum as $i)
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
</x-consultant-App>
