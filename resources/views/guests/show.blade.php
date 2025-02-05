<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Tamu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Detail Tamu</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $guest->name }}</h5>
                <p class="card-text"><strong>Email:</strong> {{ $guest->email }}</p>
                <p class="card-text"><strong>Nomor Telepon:</strong> {{ $guest->phone }}</p>
                <p class="card-text"><strong>Alamat:</strong> {{ $guest->address }}</p>
                <p class="card-text">
                    <strong>Link Undangan:</strong>
                    <a href="{{ url('/invitation/' . $guest->invitation_link) }}" target="_blank">{{ $guest->invitation_link }}</a>
                </p>
                
                <!-- Cek jika nomor telepon tersedia -->
                @if(!empty($guest->phone))
                    <a href="https://wa.me/{{ $guest->phone }}?text=Halo%20{{ urlencode($guest->name) }},%20berikut%20adalah%20undangan%20Anda:%20{{ urlencode(url('/invitation/' . $guest->invitation_link)) }}" 
                       target="_blank" class="btn btn-success">
                        Kirim ke WhatsApp
                    </a>
                @else
                    <div class="alert alert-warning mt-2" role="alert">
                        Nomor WhatsApp tidak tersedia. Silakan salin link berikut untuk dikirim melalui media lain:
                        <br>
                        <strong>{{ url('/invitation/' . $guest->invitation_link) }}</strong>
                    </div>
                @endif
                
                <a href="{{ route('guests.index') }}" class="btn btn-secondary">Kembali</a>
            </div>
        </div>
    </div>
</body>
</html>