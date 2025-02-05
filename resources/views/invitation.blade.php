<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Undangan Pernikahan Ali & Fatimah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Dancing+Script&family=Parisienne&family=Tangerine&family=Alex+Brush&family=Playfair+Display&family=Sacramento&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/invitation.css') }}">
</head>
<body>
<div class="loading-screen" id="loading">
    <div class="loading-grid">
        <div class="square"></div>
        <div class="square"></div>
        <div class="square"></div>
        <div class="square"></div>
        <div class="square"></div>
        <div class="square"></div>
        <div class="square"></div>
        <div class="square"></div>
        <div class="square"></div>
    </div>
</div>
    <div class="background-animation"></div>
    <div class="invitation-card" id="invitation">
        <h4>THE WEDDING OF</h4>
        <h1>Ali & Fatimah</h1>
        <p>Kepada Yth. <strong>{{ $guest->name }}</strong>,</p>
        <a href="{{ url('/opening/' . $guest->invitation_link) }}" class="btn btn-success">Open Invitation</a>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="{{ asset('js/invitation.js') }}"></script>
</body>
</html>