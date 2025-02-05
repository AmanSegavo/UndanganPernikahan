<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Tamu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Daftar Tamu</h1>
        <a href="{{ route('guests.create') }}" class="btn btn-primary mb-3">Tambah Tamu</a>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Nomor Telepon</th>
                    <th>Alamat</th>
                    <th>Link Undangan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($guests as $guest)
                    <tr>
                        <td>{{ $guest->name }}</td>
                        <td>{{ $guest->email }}</td>
                        <td>{{ $guest->phone }}</td>
                        <td>{{ $guest->address }}</td>
                        <td>
                            <a href="{{ url('/invitation/' . $guest->invitation_link) }}" target="_blank">Lihat Undangan</a>
                        </td>
                        <td>
                            <a href="{{ route('guests.edit', $guest->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('guests.destroy', $guest->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus?')">Hapus</button>
                            </form>
                            
                            @if(!empty($guest->phone))
                                <a href="https://wa.me/{{ $guest->phone }}?text=Halo%20{{ urlencode($guest->name) }},%20berikut%20adalah%20undangan%20Anda:%20{{ urlencode(url('/invitation/' . $guest->invitation_link)) }}" 
                                   target="_blank" class="btn btn-success btn-sm">
                                    Kirim ke WhatsApp
                                </a>
                            @else
                                <div class="alert alert-warning mt-2" role="alert">
                                    Nomor WhatsApp tidak tersedia. Silakan salin link berikut untuk dikirim melalui media lain:
                                    <br>
                                    <strong>{{ url('/invitation/' . $guest->invitation_link) }}</strong>
                                </div>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
