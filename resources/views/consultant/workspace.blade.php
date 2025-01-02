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
                    <th>Client Name</th>
                    <th>Client Email</th>
                    <th>Timestamp</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($schedule as $i)
                    <tr>
                        <td>{{ $i->reserved_time }}</td>
                        <td>{{ $i->username }}</td>
                        <td>{{ $i->user_email }}</td>
                        <td> {{ $i->created_at }}</td>
                    </tr>

                @empty
                    <tr>
                        <td colspan="4" class="text-center">You dont have any consultation request!</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>


</x-consultant-App>
