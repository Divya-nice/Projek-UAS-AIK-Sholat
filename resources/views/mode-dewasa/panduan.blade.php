<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Mode Dewasa – Panduan rukun fiqih sholat {{ $sholat['nama'] }} lengkap dengan bacaan, terjemahan, dan catatan fiqih">
    <title>Panduan Sholat {{ $sholat['nama'] }} – Mode Dewasa | SholatKu Muhammadiyah</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amiri:wght@400;700&family=Lora:wght@500;600;700&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

        :root {
            --hijau-tua:    #14432B;
            --hijau:        #1F6D4C;
            --hijau-terang: #2E9463;
            --biru-tua:     #10263F;
            --biru:         #1B4E78;
            --emas:         #C9A24B;
            --emas-terang:  #E6C778;
            --ink:          #1C2622;
            --muted:        #5F6F68;
            --cream:        #F4F2EA;
            --white:        #FFFFFF;
            --radius:       16px;
        }

        html { scroll-behavior: smooth; }

        body {
            font-family: 'Inter', sans-serif;
            background: linear-gradient(180deg, #F4F2EA 0%, #EAF0EA 45%, #E4EEF3 100%);
            color: var(--ink);
            min-height: 100vh;
        }

        .wrap {
            max-width: 720px;
            margin: 0 auto;
            padding: 1.75rem 1.25rem 4rem;
        }

        .topbar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: .75rem;
            flex-wrap: wrap;
            margin-bottom: 1.5rem;
        }
        .btn-back {
            display: inline-flex;
            align-items: center;
            gap: .4rem;
            font-weight: 600;
            font-size: .9rem;
            color: var(--hijau-tua);
            text-decoration: none;
            background: var(--white);
            padding: .55rem 1.1rem;
            border-radius: 100px;
            border: 1px solid rgba(20,67,43,.15);
            transition: transform .15s ease, background .15s ease;
        }
        .btn-back:hover { transform: translateX(-3px); background: var(--cream); }

        .badge-waktu {
            display: inline-flex;
            align-items: center;
            gap: .4rem;
            font-weight: 700;
            font-size: .82rem;
            color: var(--white);
            background: linear-gradient(160deg, var(--biru), var(--biru-tua));
            padding: .5rem 1rem;
            border-radius: 100px;
        }

        .header-utama { text-align: center; margin-bottom: .4rem; }
        .label-mode {
            display: inline-block;
            font-size: .72rem;
            font-weight: 700;
            letter-spacing: .08em;
            text-transform: uppercase;
            color: var(--biru);
            background: rgba(27,78,120,.08);
            padding: .3rem .85rem;
            border-radius: 100px;
            margin-bottom: .9rem;
        }
        h1 {
            font-family: 'Lora', serif;
            font-weight: 700;
            font-size: clamp(1.5rem, 5vw, 2rem);
            color: var(--hijau-tua);
            line-height: 1.35;
        }
        .sub-nama-sholat {
            font-family: 'Lora', serif;
            font-weight: 600;
            color: var(--hijau);
        }
        .hero-sub {
            text-align: center;
            font-size: .88rem;
            color: var(--muted);
            margin: .5rem 0 2rem;
        }

        .daftar-rukun { display: flex; flex-direction: column; gap: .9rem; }

        .kartu-rukun {
            background: var(--white);
            border: 1px solid rgba(20,67,43,.10);
            border-radius: var(--radius);
            box-shadow: 0 2px 10px rgba(16,38,63,.05);
            overflow: hidden;
        }

        .rukun-header {
            width: 100%;
            display: flex;
            align-items: center;
            gap: 1rem;
            padding: 1.1rem 1.3rem;
            background: none;
            border: none;
            cursor: pointer;
            text-align: left;
            font-family: inherit;
        }
        .rukun-nomor {
            flex-shrink: 0;
            width: 38px;
            height: 38px;
            border-radius: 10px;
            background: linear-gradient(160deg, var(--hijau), var(--hijau-tua));
            color: var(--white);
            font-family: 'Lora', serif;
            font-weight: 700;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .rukun-title-wrap { flex: 1; }
        .rukun-nama {
            font-family: 'Lora', serif;
            font-weight: 600;
            font-size: 1.02rem;
            color: var(--ink);
        }
        .rukun-toggle-label {
            flex-shrink: 0;
            font-size: .76rem;
            font-weight: 700;
            letter-spacing: .04em;
            color: var(--hijau);
            border: 1px solid rgba(31,109,76,.3);
            padding: .3rem .7rem;
            border-radius: 100px;
            transition: background .2s ease, color .2s ease;
        }
        .kartu-rukun.terbuka .rukun-toggle-label {
            background: var(--hijau);
            color: var(--white);
        }

        .rukun-body { max-height: 0; overflow: hidden; transition: max-height .3s ease; }
        .kartu-rukun.terbuka .rukun-body { max-height: 900px; }

        .rukun-body-inner {
            padding: 0 1.3rem 1.5rem;
            border-top: 1px solid rgba(20,67,43,.08);
        }

        .label-kecil {
            font-size: .7rem;
            font-weight: 700;
            color: var(--muted);
            text-transform: uppercase;
            letter-spacing: .06em;
            margin: 1.1rem 0 .4rem;
        }
        .bacaan-arab {
            font-family: 'Amiri', serif;
            font-size: 1.5rem;
            color: var(--hijau-tua);
            direction: rtl;
            line-height: 2;
        }
        .bacaan-latin {
            font-family: 'Lora', serif;
            font-style: italic;
            font-size: .95rem;
            color: var(--ink);
        }
        .badge-jumlah {
            display: inline-block;
            margin-left: .4rem;
            font-size: .68rem;
            font-weight: 700;
            font-style: normal;
            color: var(--white);
            background: var(--emas);
            padding: .18rem .6rem;
            border-radius: 100px;
        }
        .bacaan-arti {
            font-size: .9rem;
            color: var(--ink);
            line-height: 1.7;
            background: var(--cream);
            border-radius: 12px;
            padding: .85rem 1rem;
            margin-top: .3rem;
        }
        .bacaan-arti .sumber {
            display: block;
            margin-top: .5rem;
            font-size: .78rem;
            font-weight: 600;
            color: var(--muted);
        }

        .catatan-fiqih {
            display: flex;
            gap: .6rem;
            font-size: .87rem;
            color: var(--biru-tua);
            line-height: 1.65;
            background: rgba(27,78,120,.06);
            border-left: 3px solid var(--biru);
            border-radius: 0 10px 10px 0;
            padding: .85rem 1rem;
            margin-top: .3rem;
        }
        .catatan-fiqih .icon { flex-shrink: 0; }

        .btn-audio {
            display: inline-flex;
            align-items: center;
            gap: .55rem;
            font-weight: 600;
            font-size: .85rem;
            color: var(--white);
            background: linear-gradient(160deg, var(--biru), var(--biru-tua));
            border: none;
            padding: .68rem 1.35rem;
            border-radius: 100px;
            cursor: pointer;
            margin-top: 1.15rem;
            box-shadow: 0 3px 10px rgba(16,38,63,.2);
            transition: transform .12s ease;
        }
        .btn-audio:hover { transform: translateY(-2px); }
        .btn-audio.playing .icon-speaker { animation: pulse .6s ease-in-out infinite; }
        @keyframes pulse {
            0%, 100% { transform: scale(1); }
            50%      { transform: scale(1.25); }
        }

        .footer-note {
            text-align: center;
            font-size: .82rem;
            color: var(--muted);
            margin-top: 2.25rem;
        }
    </style>
</head>
<body>

    <div class="wrap">

        <div class="topbar">
            <a href="{{ route('mode-dewasa.index') }}" class="btn-back" aria-label="Kembali ke panduan sholat wajib">
                ← Kembali
            </a>
            <span class="badge-waktu">{{ $sholat['emoji'] }} SHOLAT {{ strtoupper($sholat['nama']) }}</span>
        </div>

        <header class="header-utama">
            <span class="label-mode">Mode Dewasa</span>
            <h1>Panduan Rukun Fiqih<br>Sholat <span class="sub-nama-sholat">{{ strtoupper($sholat['nama']) }}</span></h1>
        </header>
        <p class="hero-sub">{{ $sholat['rakaat'] }} Rakaat &middot; {{ count($daftarRukun) }} Rukun & Sunnah</p>

        <div class="daftar-rukun" id="daftarRukun">
            @foreach ($daftarRukun as $i => $rukun)
                <div class="kartu-rukun @if ($i === 0) terbuka @endif" data-index="{{ $i }}">
                    <button type="button" class="rukun-header" onclick="bukaTutup(this)" aria-expanded="{{ $i === 0 ? 'true' : 'false' }}">
                        <span class="rukun-nomor" aria-hidden="true">{{ $rukun['urutan'] }}</span>
                        <span class="rukun-title-wrap">
                            <span class="rukun-nama">{{ $rukun['urutan'] }}. {{ $rukun['nama'] }}</span>
                        </span>
                        <span class="rukun-toggle-label" aria-hidden="true">
                            <span class="teks-tutup">KLIK TUTUP</span>
                            <span class="teks-buka">KLIK BUKA</span>
                        </span>
                    </button>

                    <div class="rukun-body">
                        <div class="rukun-body-inner">
                            <p class="label-kecil">Teks Arab</p>
                            <p class="bacaan-arab">{{ $rukun['arab'] }}</p>

                            <p class="label-kecil">Transliterasi Latin</p>
                            <p class="bacaan-latin">
                                {{ $rukun['latin'] }}
                                @if (!empty($rukun['jumlah']))
                                    <span class="badge-jumlah">{{ $rukun['jumlah'] }}</span>
                                @endif
                            </p>

                            <p class="label-kecil">Terjemahan Arti</p>
                            <p class="bacaan-arti">
                                "{{ $rukun['arti'] }}"
                                @if (!empty($rukun['sumber']))
                                    <span class="sumber">({{ $rukun['sumber'] }})</span>
                                @endif
                            </p>

                            <button
                                type="button"
                                class="btn-audio"
                                data-audio="{{ $rukun['audio'] ?? '' }}"
                                onclick="putarSuara(this, {{ Js::from($rukun['latin']) }})"
                                aria-label="Putar audio murottal {{ $rukun['nama'] }}"
                            >
                                <span class="icon-speaker" aria-hidden="true">▶</span>
                                <span>Audio Murottal</span>
                            </button>

                            @if (!empty($rukun['catatan']))
                                <p class="label-kecil">Catatan Fiqih</p>
                                <div class="catatan-fiqih">
                                    <span class="icon" aria-hidden="true">📝</span>
                                    <span>{{ $rukun['catatan'] }}</span>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <p class="footer-note">Panduan disusun berdasarkan tuntunan fiqih sholat. Semoga sholat kita diterima Allah SWT. 🤲</p>
    </div>

    <style>
        .kartu-rukun .teks-buka { display: inline; }
        .kartu-rukun .teks-tutup { display: none; }
        .kartu-rukun.terbuka .teks-buka { display: none; }
        .kartu-rukun.terbuka .teks-tutup { display: inline; }
    </style>

    <script>
        function bukaTutup(tombol) {
            const kartu = tombol.closest('.kartu-rukun');
            const sedangTerbuka = kartu.classList.contains('terbuka');

            kartu.classList.toggle('terbuka', !sedangTerbuka);
            tombol.setAttribute('aria-expanded', String(!sedangTerbuka));
        }

        function putarAudioFile(tombol, url) {
            if (window.speechSynthesis) { window.speechSynthesis.cancel(); }
            if (window._audioAktif) { window._audioAktif.pause(); window._audioAktif.currentTime = 0; }
            const audio = new Audio(url);
            window._audioAktif = audio;
            const label = tombol.querySelector('span:last-child');
            const labelAsli = label.getAttribute('data-asli') || label.textContent;
            label.setAttribute('data-asli', labelAsli);
            tombol.classList.add('playing');
            label.textContent = 'Sedang Diputar...';
            const selesai = () => { tombol.classList.remove('playing'); label.textContent = labelAsli; };
            audio.onended = selesai;
            audio.onerror = () => { selesai(); alert('Maaf, file audio tidak dapat diputar.'); };
            audio.play().catch(() => selesai());
        }

        function putarSuara(tombol, teks) {
            const audioUrl = tombol.dataset.audio;
            if (audioUrl) { return putarAudioFile(tombol, audioUrl); }
            if (!('speechSynthesis' in window)) {
                alert('Perangkat/browser ini belum mendukung audio murottal otomatis.');
                return;
            }

            window.speechSynthesis.cancel();

            const ucapan = new SpeechSynthesisUtterance(teks);
            ucapan.lang = 'ar-SA';
            ucapan.rate = 0.75;
            ucapan.pitch = 1;

            tombol.classList.add('playing');
            const label = tombol.querySelector('span:last-child');
            const labelAsli = label.textContent;
            label.textContent = 'Sedang Diputar...';

            ucapan.onend = ucapan.onerror = () => {
                tombol.classList.remove('playing');
                label.textContent = labelAsli;
            };

            window.speechSynthesis.speak(ucapan);
        }
    </script>

</body>
</html>