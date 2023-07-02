<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Al Qur'an Digital</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Amiri&display=swap');
        /* Mengimpor font Amiri dari Google Fonts */

        .arabic {
            font-family: 'Amiri', serif;
            /* Menggunakan font Amiri */
            font-size: 40px;
            /* Ukuran font */
            text-align: right;
            /* Perataan teks ke kanan */
            direction: rtl;
            /* Arah tulisan dari kanan ke kiri */
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <h4 class="mb-5">Al-Qur'an DigitalKu</h4>
            <div class="col-md-4">
                <input type="text" class="form-control mb-3 p-3" placeholder="Cari Surah" name="" id="cari-surah">
            </div>
            <div class="col-md-12"></div>
            {{-- <div class=""> --}}
            <div class="col-md-12">
                <div class="row card-container">
                    @foreach ($surat as $s)
                        <div class="col-md-4 kolom mb-3">
                            <a href="{{ url('detail/' . $s['nomor']) }}" class="nav-link">
                                <div class="card p-4 shadow-lg" id="{{ $s['nomor'] }}">
                                    <div class="text-end">
                                        <h1 class="mb-3 arabic mt-2">{{ $s['nama'] }}</h1>
                                        <p class="fst-italic nama-surah">{{ $s['namaLatin'] }}</p>
                                        {{-- <a href="{{ url('detail/' . $s['nomor']) }}" class="btn btn-primary"><i class="bi bi-book"></i>
                    Baca</a> --}}
                                        {{-- <a href="" class="btn btn-success"><i class="bi bi-play"></i> Play</a> --}}
                                        {{-- <audio id="audio-{{ $s['nomor'] }}">
                    <source src="{{ $s['audioFull']['01'] }}" type="audio/mpeg">
                    Your browser does not support the audio element.
                </audio> --}}
                                        {{-- <button onclick="playAudio({{ $s['nomor'] }})" class="btn btn-primary"><i class="bi bi-play"></i>
                    Putar</button> --}}
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            var cardUrutanAsli = $('.kolom').toArray(); // Array untuk menyimpan urutan asli card surah
            $('#cari-surah').on('input', function() {
                var kataKunci = $(this).val().toLowerCase();
                $('.kolom').each(function() {
                    var namaSurah = $(this).find('.nama-surah').text()
                        .toLowerCase(); // Ambil teks nama surah dan ubah ke huruf kecil
                    if (namaSurah.includes(kataKunci)) {
                        $(this)
                            .show(); // Tampilkan card jika nama surah cocok dengan kata kunci
                    } else {
                        $(this)
                            .hide(); // Sembunyikan card jika nama surah tidak cocok dengan kata kunci
                    }
                });
                // }
            });
        });
    </script>
    {{-- <script>
        function playAudio(ayatId) {
            var audio = document.getElementById("audio-" + ayatId);
            audio.play();
        }
    </script> --}}
</body>

</html>
