<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Al Qur'an Digital</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Bacasime+Antique&family=Caveat:wght@700&family=Josefin+Sans:wght@200&family=Montserrat:wght@300&family=Nanum+Myeongjo&family=Roboto+Mono:wght@100;300&family=Roboto+Slab:wght@500&display=swap"
        rel="stylesheet">
    <style>
        /* <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"> */

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
    <div class="container fixed-bottom mb-3">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card bg-dark shadow-lg border rounded-pill">
                    <div class="card-body mx-auto">
                        <a href="{{ url('/') }}" style="width: 4rem" class="btn btn-light me-5 rounded-pill"><i
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
        <div class="row">
            <div class="col-md-12 mb-3">
                <div class="card shadow-lg">
                    <div class="card-body">
                        <h3 class="mb-3" style="font-family: 'Abril Fatface', cursive;
font-family: 'Bacasime Antique', serif;
font-family: 'Caveat', cursive;
font-family: 'Josefin Sans', sans-serif;
font-family: 'Montserrat', sans-serif;
font-family: 'Nanum Myeongjo', serif;
font-family: 'Roboto Mono', monospace;
font-family: 'Roboto Slab', serif;"><a href="{{ url('/') }}" class="text-dark"><i
                                    class="fas fa-arrow-left fa-xs mb-1 me-1"></i></a> Surah {{ $ayat['namaLatin'] }}
                        </h3>
                        <p>Nomor Surah : {{ $ayat['nomor'] }}</p>
                        <p>Jumlah Ayat : {{ $ayat['jumlahAyat'] }}</p>
                        <p>Tempat Turun : {{ $ayat['tempatTurun'] }}</p>
                        @if ($ayat['suratSebelumnya'] != false)
                        <a href="{{ url('detail/' . $ayat['suratSebelumnya']['nomor']) }}"
                            class="btn btn-primary btn-sm"> <i class="fas fa-arrow-left fa-xs"></i> Surah Sebelumnya</a>
                        @endif
                        @if($ayat['suratSelanjutnya'] != false)
                        <a href="{{ url('detail/' . $ayat['suratSelanjutnya']['nomor']) }}"
                            class="btn btn-primary btn-sm">Surah Selanjutnya <i
                                class="fas fa-arrow-right fa-xs"></i></a>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card shadow p-3">
                    <div class="card-body">
                        @if ($ayat['nomor'] != 1)
                        <div class="arabic">
                            بِسْمِ اللَّهِ الرَّحْمَٰنِ الرَّحِيمِ
                        </div>
                        <p class="mb-4 mt-2">Dengan nama Allah Yang Maha Pengasih, Maha Penyayang.</p>
                        @endif
                        @php
                        for ($i=0; $i < $ayat['jumlahAyat']; $i++) { @endphp <div class="text-end">
                            <h3 class="mb-1 arabic">{{ $ayat['ayat'][$i]['teksArab'] }}
                        </>
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