<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Al-Qur'an Digital</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Bacasime+Antique&family=Caveat:wght@700&family=Josefin+Sans:wght@200&family=Montserrat:wght@300&family=Nanum+Myeongjo&family=Roboto+Mono:wght@100;300&family=Roboto+Slab:wght@500&display=swap"
        rel="stylesheet">
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Amiri&display=swap');
            /* Mengimpor font Amiri dari Google Fonts */
        
            .arabic {
                font-family: 'Amiri', serif;
                /* Menggunakan font Amiri */
                font-size: 32px;
                /* Ukuran font */
                text-align: right;
                /* Perataan teks ke kanan */
                direction: rtl;
                /* Arah tulisan dari kanan ke kiri */
            }
        </style>
</head>

<body>
    <div class="container fixed-bottom mb-3">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card bg-dark shadow-lg border rounded-pill">
                    <div class="card-body mx-auto">
                        <a href="" style="width: 4rem" class="btn btn-light me-5 rounded-pill"><i
                                class="fas fa-home"></i>
                        </a>
                        <a href="" style="width: 4rem" class="btn btn-outline-light me-5 rounded-pill"><i
                                class="fas fa-quran text-light"></i>
                        </a>
                        <a href="" style="width: 4rem;" class="btn btn-outline-light rounded-pill"><i
                                class="fas fa-user text-white"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-3" style="margin-bottom: 3cm">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h1 class=""
                    style="font-family: 'Abril Fatface', cursive;
font-family: 'Bacasime Antique', serif;
font-family: 'Caveat', cursive;
font-family: 'Josefin Sans', sans-serif;
font-family: 'Montserrat', sans-serif;
font-family: 'Nanum Myeongjo', serif;
font-family: 'Roboto Mono', monospace;
font-family: 'Roboto Slab', serif;">
                    Al-Qur'an Digital</h1>
                    <p class="alert alert-info mt-3">Membaca Al-Quran adalah cara paling sederhana untuk mendapatkan dan melipat gandakan pahala.</p>
            </div>
            <div class="col-md-12"></div>
            <div class="col-md-6">
                <input type="text" class="form-control mb-3 p-3" placeholder="Cari Surah" name="" id="cari-surah">
            </div>
            <div class="col-md-12"></div>
            <div class="col-md-6">
                <div class="row card-container">
                    @foreach ($surat as $s)
                    <div class="col-md-6 kolom mb-3">
                        <a href="{{ url('detail/' . $s['nomor']) }}" class="nav-link">
                            <div class="card p-4" id="{{ $s['nomor'] }}">
                                <div class="text-end">
                                    <h1 class="mb-3 arabic mt-2">{{ $s['nama'] }}</h1>
                                    <p class="fst-italic nama-surah">{{ $s['namaLatin'] }} ({{ $s['arti'] }})</p>
                                    <p class="mt-2 fst-italic">Jumlah Ayat : {{ $s['jumlahAyat'] }}</p>
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
</body>

</html>
