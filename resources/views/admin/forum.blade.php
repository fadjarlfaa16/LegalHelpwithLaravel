<x-admin-App>
    <div class="content-forum">
        @if (session('success'))
            <x-success-messege>{{ session('success') }}</x-success-messege>
        @endif
        <div class="threads">
            @foreach ($forum->reverse() as $i)
                <div class="thread">
                    <img src="../storage/profile/{{ $i->profile }}" alt="{{ $i->username }} Profile">
                    <div class="thread-content">
                        <div class="thread-title">{{ $i->username }}</div>
                        <div class="thread-text">{{ $i->content }}</div>
                        <div class="thread-time">{{ $i->created_at }}</div>
                    </div>
                    <div class="action-thread mt-3">
                        <form action="{{ route('admin.forum.delete', $i->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </div>
            @endforeach

        </div>

    </div>
</x-admin-App>
