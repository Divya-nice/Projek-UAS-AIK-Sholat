<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Mode Anak – Yuk Belajar Sholat Wajib bersama SholatKu Muhammadiyah">
    <title>Yuk Belajar Sholat Wajib! – Mode Anak | SholatKu Muhammadiyah</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@500;600;700;800&family=Nunito:wght@400;600;700;800&display=swap" rel="stylesheet">

    <style>
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

        :root {
            --kuning:        #FFC93C;
            --kuning-terang: #FFE27A;
            --kuning-gelap:  #F5A623;
            --oranye:        #FF9F45;
            --pink:          #FF7EB6;
            --hijau:         #4CD9A0;
            --biru:          #4AB8FF;
            --ungu:          #A78BFA;
            --ink:           #3A2E1F;
            --muted:         #8A7A61;
            --cream:         #FFF8E7;
            --white:         #FFFFFF;
            --radius:        26px;
        }

        html { scroll-behavior: smooth; }

        body {
            font-family: 'Nunito', sans-serif;
            background: linear-gradient(180deg, #FFF6DD 0%, #FFEFC7 45%, #FFE9B8 100%);
            color: var(--ink);
            min-height: 100vh;
            overflow-x: hidden;
            position: relative;
        }

        /* Bentuk-bentuk ceria mengambang di background */
        body::before, body::after {
            content: '';
            position: fixed;
            border-radius: 50%;
            pointer-events: none;
            z-index: 0;
            opacity: .35;
        }
        body::before {
            width: 260px; height: 260px;
            top: -80px; left: -80px;
            background: radial-gradient(circle, var(--pink), transparent 70%);
        }
        body::after {
            width: 320px; height: 320px;
            bottom: -100px; right: -100px;
            background: radial-gradient(circle, var(--biru), transparent 70%);
        }

        .wrap {
            position: relative;
            z-index: 1;
            max-width: 760px;
            margin: 0 auto;
            padding: 1.5rem 1.25rem 4rem;
        }

        /* ── Tombol Kembali ke Home ── */
        .btn-back {
            display: inline-flex;
            align-items: center;
            gap: .4rem;
            font-family: 'Baloo 2', sans-serif;
            font-weight: 700;
            font-size: .95rem;
            color: var(--ink);
            text-decoration: none;
            background: var(--white);
            padding: .6rem 1.15rem;
            border-radius: 100px;
            box-shadow: 0 4px 0 rgba(0,0,0,.06);
            transition: transform .15s ease;
        }
        .btn-back:hover { transform: translateX(-3px); }

        /* ── Judul Ceria ── */
        .hero-judul {
            text-align: center;
            margin: 2rem 0 1.75rem;
        }
        .hero-judul h1 {
            font-family: 'Baloo 2', sans-serif;
            font-weight: 800;
            font-size: clamp(1.8rem, 6vw, 2.6rem);
            color: var(--kuning-gelap);
            text-shadow: 2px 2px 0 rgba(255,255,255,.7);
            line-height: 1.25;
        }
        .hero-judul .sparkle {
            display: inline-block;
            animation: goyang 1.6s ease-in-out infinite;
        }
        @keyframes goyang {
            0%, 100% { transform: rotate(-8deg) scale(1); }
            50%      { transform: rotate(8deg) scale(1.15); }
        }

        .ilustrasi {
            display: flex;
            justify-content: center;
            margin-bottom: 1.5rem;
        }
        .ilustrasi-kartu {
            background: var(--white);
            border-radius: 24px;
            padding: 1.4rem 2rem;
            display: flex;
            align-items: center;
            gap: .9rem;
            box-shadow: 0 6px 0 rgba(0,0,0,.05);
            font-size: 2.4rem;
        }
        .ilustrasi-kartu span:last-child {
            font-family: 'Baloo 2', sans-serif;
            font-size: 1rem;
            font-weight: 700;
            color: var(--muted);
        }

        .subjudul {
            text-align: center;
            font-family: 'Baloo 2', sans-serif;
            font-weight: 700;
            font-size: 1.15rem;
            color: var(--ink);
            margin-bottom: 1.75rem;
        }
        .subjudul .highlight { color: var(--pink); }

        /* ── Grid Kartu Sholat ── */
        .grid-sholat {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 1rem;
        }
        .grid-sholat .baris-dua {
            grid-column: 1 / -1;
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 220px));
            gap: 1rem;
            justify-content: center;
        }

        .kartu-sholat {
            --shadow-color: rgba(0,0,0,.12);
            position: relative;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: .5rem;
            text-decoration: none;
            color: var(--white);
            background: linear-gradient(160deg, var(--warna-1), var(--warna-2));
            border-radius: var(--radius);
            padding: 1.5rem 1rem 1.25rem;
            box-shadow: 0 6px 0 var(--shadow-color);
            transition: transform .15s ease, box-shadow .15s ease;
        }
        .kartu-sholat:hover {
            transform: translateY(-4px);
        }
        .kartu-sholat:active {
            transform: translateY(2px);
            box-shadow: 0 2px 0 var(--shadow-color);
        }
        .kartu-sholat .emoji {
            font-size: 2.6rem;
            filter: drop-shadow(0 3px 0 rgba(0,0,0,.08));
        }
        .kartu-sholat .nama {
            font-family: 'Baloo 2', sans-serif;
            font-weight: 800;
            font-size: 1.15rem;
            letter-spacing: .01em;
        }
        .kartu-sholat .badge {
            position: absolute;
            top: .6rem;
            right: .6rem;
            background: rgba(255,255,255,.35);
            font-size: .68rem;
            font-weight: 700;
            padding: .15rem .5rem;
            border-radius: 100px;
        }

        /* ── Tombol Suara ── */
        .tombol-suara {
            display: flex;
            justify-content: center;
            margin-top: 2.25rem;
        }
        .btn-suara {
            display: inline-flex;
            align-items: center;
            gap: .55rem;
            font-family: 'Baloo 2', sans-serif;
            font-weight: 700;
            font-size: .95rem;
            color: var(--ink);
            background: var(--kuning-terang);
            border: none;
            padding: .75rem 1.5rem;
            border-radius: 100px;
            box-shadow: 0 5px 0 var(--kuning-gelap);
            cursor: pointer;
            transition: transform .12s ease, box-shadow .12s ease;
        }
        .btn-suara:hover { transform: translateY(-2px); }
        .btn-suara:active {
            transform: translateY(3px);
            box-shadow: 0 2px 0 var(--kuning-gelap);
        }
        .btn-suara .icon-speaker {
            font-size: 1.15rem;
            animation: none;
        }
        .btn-suara.playing .icon-speaker {
            animation: pulse .5s ease-in-out infinite;
        }
        @keyframes pulse {
            0%, 100% { transform: scale(1); }
            50%      { transform: scale(1.3); }
        }

        @media (max-width: 480px) {
            .grid-sholat { grid-template-columns: repeat(2, 1fr); }
            .grid-sholat .baris-dua { grid-template-columns: repeat(2, 1fr); }
        }
    </style>
</head>
<body>

    <div class="wrap">

        {{-- Kembali ke Home --}}
        <a href="{{ route('home') }}" class="btn-back" aria-label="Kembali ke halaman Home">
            ← Kembali ke Home
        </a>

        {{-- Judul Ceria --}}
        <header class="hero-judul">
            <h1>
                <span class="sparkle" aria-hidden="true">✨</span>
                YUK BELAJAR SHOLAT WAJIB!
                <span class="sparkle" aria-hidden="true">✨</span>
            </h1>
        </header>

        {{-- Ilustrasi Masjid Ceria / Anak Sholeh Berdoa --}}
        <div class="ilustrasi" role="img" aria-label="Ilustrasi masjid ceria dan anak sholeh sedang berdoa">
            <div class="ilustrasi-kartu">
                <span aria-hidden="true">🕌</span>
                <span aria-hidden="true">🤲</span>
                <span>Masjid Ceria &amp; Anak Sholeh Berdoa</span>
            </div>
        </div>

        {{-- Sub judul --}}
        <p class="subjudul">
            Pilih Sholat yang Mau Kamu <span class="highlight">Pelajari</span> Hari Ini, Sayang:
        </p>

        {{-- Grid pilihan sholat --}}
        <div class="grid-sholat" role="list" aria-label="Pilihan sholat wajib">
            @foreach ($daftarSholat as $index => $sholat)
                @php
                    $isBarisDua = $index >= 3;
                    [$warna1, $warna2] = match ($sholat['slug']) {
                        'subuh'   => ['#FFB74D', '#FF8A80'],
                        'dzuhur'  => ['#FFD54F', '#FF9F45'],
                        'ashar'   => ['#7EC8FF', '#4AB8FF'],
                        'maghrib' => ['#C79BFF', '#A78BFA'],
                        'isya'    => ['#8E9CFF', '#6C63FF'],
                        default   => ['#FFC93C', '#FF9F45'],
                    };
                @endphp

                @if ($index === 3)
                    <div class="baris-dua">
                @endif

                <a href="{{ route('mode-anak.gerakan', $sholat['slug']) }}"
                   class="kartu-sholat"
                   style="--warna-1: {{ $warna1 }}; --warna-2: {{ $warna2 }};"
                   role="listitem"
                   aria-label="Belajar sholat {{ $sholat['nama'] }}">
                    <span class="emoji" aria-hidden="true">{{ $sholat['emoji'] }}</span>
                    <span class="nama">{{ $sholat['nama'] }}</span>
                </a>

                @if ($index === count($daftarSholat) - 1)
                    </div>
                @endif
            @endforeach
        </div>

        {{-- Tombol Suara --}}
        <div class="tombol-suara">
            <button type="button" class="btn-suara" id="btnSuara" aria-label="Putar suara ajakan memilih sholat">
                <span class="icon-speaker" aria-hidden="true">🔊</span>
                <span>"Ayo pilih salah satu sholatnya!"</span>
            </button>
        </div>

    </div>

    <script>
        // Tombol suara memakai Web Speech API (text-to-speech bawaan browser)
        const btnSuara = document.getElementById('btnSuara');
        const teksAjakan = 'Ayo pilih salah satu sholatnya!';

        btnSuara.addEventListener('click', () => {
            if (!('speechSynthesis' in window)) {
                alert(teksAjakan);
                return;
            }

            window.speechSynthesis.cancel();

            const ucapan = new SpeechSynthesisUtterance(teksAjakan);
            ucapan.lang = 'id-ID';
            ucapan.rate = 0.95;
            ucapan.pitch = 1.15;

            btnSuara.classList.add('playing');
            ucapan.onend = () => btnSuara.classList.remove('playing');
            ucapan.onerror = () => btnSuara.classList.remove('playing');

            window.speechSynthesis.speak(ucapan);
        });
    </script>

</body>
</html>