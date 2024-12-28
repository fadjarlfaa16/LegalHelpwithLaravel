<x-admin-App>
    <div class="content-recommended">
        <h1>Top Consultants</h1>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <a href="{{ route('admin.recommended.topconsultant.create') }}" class="btn btn-primary mb-3">Tambah Top
            Consultant</a>
        <table class="table-minimalist">
            <thead class="bg-[#1b5c60] text-white">
                <tr>
                    <th>Position</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($topConsultants as $topConsultant)
                    <tr>
                        <td>Top {{ $topConsultant->position }}</td>
                        <td>{{ $topConsultant->user->name }}</td>
                        <td>{{ $topConsultant->user->email }}</td>
                        <td>
                            <a href="{{ route('admin.recommended.topconsultant.edit', $topConsultant->id) }}"
                                class="btn btn-warning">Edit</a>
                            <form action="{{ route('admin.recommended.topconsultant.delete', $topConsultant->id) }}"
                                method="get" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger"
                                    onclick="return confirm('Surely want remove this?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>



        <br><br><br>

        <h1>Top Article</h1>


        <a href="{{ route('admin.recommended.toparticle.create') }}" class="btn btn-primary mb-3">Tambah Top Article</a>

        <table class="table-minimalist">
            <thead class="bg-[#1b5c60] text-white">
                <tr>
                    <th>Posisi</th>
                    <th>Headline</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($topArticle as $i)
                    <tr>
                        <td>Top {{ $i->position }}</td>
                        <td>{{ $i->article->headline }}</td>
                        <td>
                            <a href="{{ route('admin.recommended.toparticle.edit', $i->id) }}"
                                class="btn btn-warning">Edit</a>
                            <form action="{{ route('admin.recommended.toparticle.delete', $i->id) }}" method="get"
                                class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger"
                                    onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-admin-App>
