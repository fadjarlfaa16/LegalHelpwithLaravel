<x-consultant-App>
    <div class="content-workspace">
        <h1 class="workspace-title">{{ Auth::user()->name }}'s Workspace</h1>
        <br>
        <hr>
        <br>
        <table class="table-minimalist">
            <thead>
                <tr>
                    <th>Schedule</th>
                    <th>Profile</th>
                    <th>Client Name</th>
                    <th>Client Email</th>
                    <th>Timestamp</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($schedule as $i)
                    @if ($i->consultant_email == Auth::user()->email)
                        <tr>
                            <td>{{ $i->reserved_time }}</td>
                            <td><img src="{{ $i->profile_path }}" alt="User Profile" style="width: 20px"></td>
                            <td>{{ $i->username }}</td>
                            <td>{{ $i->user_email }}</td>
                            <td> {{ $i->created_at }}</td>
                        </tr>
                    @endif
                @endforeach
            </tbody>
        </table>
    </div>


</x-consultant-App>
