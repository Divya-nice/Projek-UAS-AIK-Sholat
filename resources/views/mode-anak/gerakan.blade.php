<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Mode Anak – Yuk ikuti gerakan sholat {{ $sholat['nama'] }} satu per satu bersama SholatKu Muhammadiyah">
    <title>Sholat {{ $sholat['nama'] }} – Mode Anak | SholatKu Muhammadiyah</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amiri:wght@700&family=Baloo+2:wght@500;600;700;800&family=Nunito:wght@400;600;700;800&display=swap" rel="stylesheet">

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
            max-width: 700px;
            margin: 0 auto;
            padding: 1.5rem 1.25rem 4rem;
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
            font-family: 'Baloo 2', sans-serif;
            font-weight: 700;
            font-size: .9rem;
            color: var(--ink);
            text-decoration: none;
            background: var(--white);
            padding: .6rem 1.15rem;
            border-radius: 100px;
            box-shadow: 0 4px 0 rgba(0,0,0,.06);
            transition: transform .15s ease;
        }
        .btn-back:hover { transform: translateX(-3px); }

        .badge-waktu {
            display: inline-flex;
            align-items: center;
            gap: .4rem;
            font-family: 'Baloo 2', sans-serif;
            font-weight: 700;
            font-size: .85rem;
            color: var(--white);
            background: var(--pink);
            padding: .55rem 1.1rem;
            border-radius: 100px;
        }

        .hero-judul { text-align: center; margin-bottom: .5rem; }
        .hero-judul h1 {
            font-family: 'Baloo 2', sans-serif;
            font-weight: 800;
            font-size: clamp(1.4rem, 5.5vw, 2rem);
            color: var(--kuning-gelap);
            text-shadow: 2px 2px 0 rgba(255,255,255,.7);
            line-height: 1.3;
        }
        .hero-judul .sparkle {
            display: inline-block;
            animation: goyang 1.6s ease-in-out infinite;
        }
        @keyframes goyang {
            0%, 100% { transform: rotate(-8deg) scale(1); }
            50%      { transform: rotate(8deg) scale(1.15); }
        }
        .hero-sub {
            text-align: center;
            font-family: 'Baloo 2', sans-serif;
            font-weight: 700;
            font-size: .95rem;
            color: var(--muted);
            margin-bottom: 1.5rem;
        }

        .progress-track {
            height: 12px;
            border-radius: 100px;
            background: rgba(0,0,0,.07);
            overflow: hidden;
            margin-bottom: .4rem;
        }
        .progress-fill {
            height: 100%;
            width: 0%;
            background: linear-gradient(90deg, var(--hijau), var(--biru));
            border-radius: 100px;
            transition: width .35s ease;
        }
        .progress-label {
            text-align: center;
            font-family: 'Baloo 2', sans-serif;
            font-weight: 700;
            font-size: .78rem;
            color: var(--muted);
            margin-bottom: 1.75rem;
        }

        .daftar-gerakan { display: flex; flex-direction: column; gap: 1rem; }

        .kartu-gerakan {
            --shadow-color: rgba(0,0,0,.12);
            background: var(--white);
            border-radius: var(--radius);
            box-shadow: 0 6px 0 var(--shadow-color);
            overflow: hidden;
        }

        .gerakan-header {
            width: 100%;
            display: flex;
            align-items: center;
            gap: .9rem;
            padding: 1.1rem 1.3rem;
            background: none;
            border: none;
            cursor: pointer;
            text-align: left;
            font-family: inherit;
        }
        .gerakan-emoji {
            flex-shrink: 0;
            width: 48px;
            height: 48px;
            border-radius: 16px;
            background: linear-gradient(160deg, var(--kuning-terang), var(--oranye));
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.6rem;
        }
        .gerakan-title-wrap { flex: 1; }
        .gerakan-num {
            font-family: 'Baloo 2', sans-serif;
            font-size: .68rem;
            font-weight: 800;
            color: var(--pink);
            letter-spacing: .04em;
        }
        .gerakan-nama {
            font-family: 'Baloo 2', sans-serif;
            font-size: 1.05rem;
            font-weight: 700;
            color: var(--ink);
        }
        .gerakan-toggle {
            flex-shrink: 0;
            width: 34px;
            height: 34px;
            border-radius: 50%;
            background: var(--cream);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: .95rem;
            color: var(--muted);
            transition: transform .25s ease, background .2s;
        }
        .kartu-gerakan.terbuka .gerakan-toggle {
            transform: rotate(180deg);
            background: var(--kuning-terang);
            color: var(--ink);
        }

        .gerakan-body { max-height: 0; overflow: hidden; transition: max-height .3s ease; }
        .kartu-gerakan.terbuka .gerakan-body { max-height: 2000px; }

        .gerakan-body-inner {
            padding: 0 1.3rem 1.5rem;
            border-top: 2px dashed rgba(0,0,0,.08);
        }

        .ilustrasi-gerakan {
            width: 100%;
            height: 90px;      /* atau 80px */
            margin-top: 1.1rem;
            border-radius: 18px;
            background: linear-gradient(160deg, var(--biru), var(--ungu));
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2.3rem;
        }

        .label-kecil {
            font-family: 'Baloo 2', sans-serif;
            font-size: .7rem;
            font-weight: 700;
            color: var(--muted);
            text-transform: uppercase;
            letter-spacing: .06em;
            margin: 1rem 0 .35rem;
        }
        .bacaan-arab {
            font-family: 'Amiri', serif;
            font-size: 1.55rem;
            color: var(--kuning-gelap);
            direction: rtl;
            line-height: 1.9;
        }
        .bacaan-latin {
            font-size: .95rem;
            font-weight: 700;
            font-style: italic;
            color: var(--ink);
        }
        .badge-jumlah {
            display: inline-block;
            margin-left: .4rem;
            font-family: 'Baloo 2', sans-serif;
            font-size: .66rem;
            font-weight: 800;
            color: var(--white);
            background: var(--pink);
            padding: .18rem .6rem;
            border-radius: 100px;
            font-style: normal;
        }
        .bacaan-arti {
            font-size: .9rem;
            color: var(--muted);
            line-height: 1.7;
            background: var(--cream);
            border-radius: 14px;
            padding: .85rem 1rem;
            margin-top: .3rem;
        }

        .btn-suara {
            display: inline-flex;
            align-items: center;
            gap: .55rem;
            font-family: 'Baloo 2', sans-serif;
            font-weight: 700;
            font-size: .88rem;
            color: var(--ink);
            background: var(--kuning-terang);
            border: none;
            padding: .7rem 1.4rem;
            border-radius: 100px;
            box-shadow: 0 5px 0 var(--kuning-gelap);
            cursor: pointer;
            margin-top: 1.1rem;
            transition: transform .12s ease, box-shadow .12s ease;
        }
        .btn-suara:hover { transform: translateY(-2px); }
        .btn-suara:active { transform: translateY(3px); box-shadow: 0 2px 0 var(--kuning-gelap); }
        .btn-suara .icon-speaker { font-size: 1.1rem; }
        .btn-suara.playing .icon-speaker { animation: pulse .5s ease-in-out infinite; }
        @keyframes pulse {
            0%, 100% { transform: scale(1); }
            50%      { transform: scale(1.3); }
        }

        .footer-note {
            text-align: center;
            font-family: 'Baloo 2', sans-serif;
            font-weight: 700;
            font-size: .8rem;
            color: var(--muted);
            margin-top: 2.25rem;
        }
    </style>
</head>
<body>

    <div class="wrap">

        <div class="topbar">
            <a href="{{ route('mode-anak.index') }}" class="btn-back" aria-label="Kembali ke pilihan sholat">
                ← Kembali ke Pilihan Sholat
            </a>
            <span class="badge-waktu">{{ $sholat['emoji'] }} {{ strtoupper($sholat['nama']) }}</span>
        </div>

        <header class="hero-judul">
            <h1>
                <span class="sparkle" aria-hidden="true">👇</span>
                Yuk, Ikuti Gerakannya Satu Per Satu Ya!
            </h1>
        </header>
        <p class="hero-sub">Sholat {{ $sholat['nama'] }} &middot; {{ $sholat['rakaat'] }} Rakaat</p>

        <div class="progress-track"><div class="progress-fill" id="progressFill"></div></div>
        <p class="progress-label" id="progressLabel">0 dari {{ count($daftarGerakan) }} gerakan sudah dipelajari</p>

        <div class="daftar-gerakan" id="daftarGerakan">
            @foreach ($daftarGerakan as $i => $gerakan)
                <div class="kartu-gerakan" data-index="{{ $i }}">
                    <button type="button" class="gerakan-header" onclick="bukaTutup(this)">
                        <span class="gerakan-emoji" aria-hidden="true">{{ $gerakan['emoji'] }}</span>
                        <span class="gerakan-title-wrap">
                            <span class="gerakan-num">GERAKAN {{ $gerakan['urutan'] }}</span><br>
                            <span class="gerakan-nama">{{ $gerakan['nama'] }}</span>
                        </span>
                        <span class="gerakan-toggle" aria-hidden="true">&#9660;</span>
                    </button>

                    <div class="gerakan-body">
                        <div class="gerakan-body-inner">
                            <div class="ilustrasi-gerakan" role="img" aria-label="Ilustrasi {{ $gerakan['nama'] }}">
                                {{ $gerakan['emoji'] }}
                            </div>

                            <p class="label-kecil">Bacaan Doa @if(!empty($gerakan['jumlah']))(Dibaca {{ $gerakan['jumlah'] }} ya!)@endif</p>
                            <p class="bacaan-arab">{{ $gerakan['arab'] }}</p>
                            <p class="bacaan-latin">
                                &ldquo;{{ $gerakan['latin'] }}&rdquo;
                                @if (!empty($gerakan['jumlah']))
                                    <span class="badge-jumlah">{{ $gerakan['jumlah'] }}</span>
                                @endif
                            </p>

                            <p class="label-kecil">Artinya</p>
                            <p class="bacaan-arti">{{ $gerakan['arti'] }}</p>

                            <button
                                type="button"
                                class="btn-suara"
                                data-audio="{{ $gerakan['audio'] ?? '' }}"
                                onclick="putarSuara(this, {{ Js::from($gerakan['latin']) }})"
                                aria-label="Putar suara bacaan {{ $gerakan['nama'] }}"
                            >
                                <span class="icon-speaker" aria-hidden="true">🔊</span>
                                <span>Putar Suara Doa</span>
                            </button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <p class="footer-note">Semangat belajar sholat ya, adik-adik sholeh &amp; sholehah! 🎉</p>
    </div>

    <script>
        const gerakanTerbuka = new Set();
        const totalGerakan = {{ count($daftarGerakan) }};

        function bukaTutup(tombol) {
            const kartu = tombol.closest('.kartu-gerakan');
            const sedangTerbuka = kartu.classList.contains('terbuka');

            document.querySelectorAll('.kartu-gerakan.terbuka').forEach(el => {
                if (el !== kartu) el.classList.remove('terbuka');
            });

            kartu.classList.toggle('terbuka', !sedangTerbuka);

            const body = kartu.querySelector('.gerakan-body');

                if (!sedangTerbuka) {
                    body.style.maxHeight = body.scrollHeight + "px";
                } else {
                    body.style.maxHeight = null;
                }   
        }

        function perbaruiProgress() {
            const persen = Math.round((gerakanTerbuka.size / totalGerakan) * 100);
            document.getElementById('progressFill').style.width = persen + '%';
            document.getElementById('progressLabel').textContent =
                `${gerakanTerbuka.size} dari ${totalGerakan} gerakan sudah dipelajari`;
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
                alert('Yah, HP/browser ini belum bisa memutar suara. Coba pakai browser lain ya!');
                return;
            }

            window.speechSynthesis.cancel();

            const ucapan = new SpeechSynthesisUtterance(teks);
            ucapan.lang = 'ar-SA';
            ucapan.rate = 0.7;
            ucapan.pitch = 1.1;

            tombol.classList.add('playing');
            tombol.querySelector('span:last-child').textContent = 'Sedang Diputar...';

            ucapan.onend = ucapan.onerror = () => {
                tombol.classList.remove('playing');
                tombol.querySelector('span:last-child').textContent = 'Putar Suara Doa';
            };

            window.speechSynthesis.speak(ucapan);
        }

        document.addEventListener('DOMContentLoaded', () => {
            const pertama = document.querySelector('.kartu-gerakan');
            if (pertama) bukaTutup(pertama.querySelector('.gerakan-header'));
        });
    </script>

</body>
</html>