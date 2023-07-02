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
            font-size: 24px;
            /* Ukuran font */
            text-align: right;
            /* Perataan teks ke kanan */
            direction: rtl;
            /* Arah tulisan dari kanan ke kiri */
            /* letter-spacing: 5px */
            line-height: 2.5 
        }
    </style>
</head>

<body>
    <div class="container mt-5 mb-3">
        <div class="row">
            <h4 class="mb-5">Al-Qur'an Digitalku</h4>
            <div class="col-md-12">
                <div class="card shadow p-3">
                    <div class="card-body">
                        @if ($ayat['nomor'] != 1)
                            <div class="arabic">
                                بِسْمِ اللَّهِ الرَّحْمَٰنِ الرَّحِيمِ
                            </div>
                            <p class="mb-3 mt-2">Dengan nama Allah Yang Maha Pengasih, Maha Penyayang.</p>
                        @endif
                        @php
                            for ($i=0; $i < $ayat['jumlahAyat']; $i++) {
                                @endphp
                                <div class="text-end">
                                <h3 class="mb-1 arabic">{{ $ayat['ayat'][$i]['teksArab'] }}</>
                                </div>
                                <p class="mb-3">{{ $ayat['ayat'][$i]['teksIndonesia'] }}</p>
                                @php
                            }
                        @endphp
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>

</html>