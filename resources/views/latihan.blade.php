<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan PHP Dasar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-5">

    <div class="container">
        <h1 class="mb-4">Hasil Belajar PHP Dasar</h1>

        <div class="card mb-3">
            <div class="card-header bg-primary text-white">1. Variabel & Tipe Data</div>
            <div class="card-body">
                <p><strong>Nama:</strong> {{ $nama }}</p>
                <p><strong>Umur:</strong> {{ $umur }}</p>
                <p><strong>IPK:</strong> {{ $ipk }}</p>
            </div>
        </div>

        <div class="card mb-3">
            <div class="card-header bg-success text-white">2. Selection (If-Else & Switch)</div>
            <div class="card-body">
                
                <h5>Status Member (If-Else):</h5>
                @if($status)
                    <div class="alert alert-success">
                        Selamat! Anda adalah <strong>Member Aktif</strong>.
                    </div>
                @else
                    <div class="alert alert-danger">
                        Anda <strong>Bukan Member</strong>. Yuk daftar!
                    </div>
                @endif

                <hr>

                <h5>Predikat IPK (Switch Case):</h5>
                {{-- Logika Switch Case di Blade --}}
                @switch(true)
                    @case($ipk >= 4.0)
                        <span class="badge bg-warning text-dark">Summa Cumlaude</span>
                        @break
                    @case($ipk >= 3.5)
                        <span class="badge bg-info">Cumlaude</span>
                        @break
                    @default
                        <span class="badge bg-secondary">Sangat Baik</span>
                @endswitch
            </div>
        </div>

        <div class="card mb-3">
            <div class="card-header bg-warning text-dark">3. Repetition (Looping)</div>
            <div class="card-body">
                
                <h5>Daftar Hobi (Foreach):</h5>
                <ul>
                    @foreach($hobi as $item)
                        <li>{{ $item }}</li>
                    @endforeach
                </ul>

                <hr>

                <h5>Hitung Mundur (For Loop):</h5>
                @for($i = 5; $i > 0; $i--)
                    <span class="badge bg-secondary">{{ $i }}</span>
                @endfor
                <span>... Mulai!</span>

            </div>
        </div>

        <div class="card mb-3">
            <div class="card-header bg-dark text-white">4. Hasil Function (Kalkulasi)</div>
            <div class="card-body">
                <p>Total Belanja setelah diskon (Pass By Reference):</p>
                <h3>Rp {{ number_format($total, 0, ',', '.') }}</h3>
            </div>
        </div>

    </div>

</body>
</html>