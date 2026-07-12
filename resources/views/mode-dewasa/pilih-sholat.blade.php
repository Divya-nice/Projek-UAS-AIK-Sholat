<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Mode Dewasa – Panduan Sholat Wajib lengkap dengan rukun fiqih, bacaan, dan dalil, oleh SholatKu Muhammadiyah">
    <title>Panduan Sholat Wajib – Mode Dewasa | SholatKu Muhammadiyah</title>

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

        .header-utama {
            text-align: center;
            margin: 2rem 0 1.5rem;
        }
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
            font-size: clamp(1.7rem, 5.5vw, 2.3rem);
            color: var(--hijau-tua);
            line-height: 1.3;
        }

        .ayat {
            background: var(--white);
            border-left: 4px solid var(--emas);
            border-radius: 0 12px 12px 0;
            padding: 1.25rem 1.5rem;
            margin: 1.75rem 0;
            box-shadow: 0 2px 10px rgba(20,67,43,.06);
        }
        .ayat p {
            font-family: 'Lora', serif;
            font-style: italic;
            font-size: 1rem;
            color: var(--ink);
            line-height: 1.7;
        }
        .ayat span {
            display: block;
            margin-top: .5rem;
            font-family: 'Inter', sans-serif;
            font-style: normal;
            font-size: .82rem;
            font-weight: 600;
            color: var(--emas);
        }

        .subjudul {
            font-weight: 600;
            font-size: 1rem;
            color: var(--muted);
            margin: 2rem 0 1rem;
        }

        .daftar-sholat {
            display: flex;
            flex-direction: column;
            gap: .85rem;
        }

        .kartu-sholat {
            display: flex;
            align-items: center;
            gap: 1rem;
            text-decoration: none;
            background: var(--white);
            border: 1px solid rgba(20,67,43,.10);
            border-radius: var(--radius);
            padding: 1.1rem 1.3rem;
            box-shadow: 0 2px 8px rgba(16,38,63,.05);
            transition: transform .15s ease, box-shadow .15s ease, border-color .15s ease;
        }
        .kartu-sholat:hover {
            transform: translateX(4px);
            border-color: var(--hijau-terang);
            box-shadow: 0 4px 14px rgba(16,38,63,.10);
        }

        .kartu-sholat .nomor {
            flex-shrink: 0;
            width: 42px;
            height: 42px;
            border-radius: 12px;
            background: linear-gradient(160deg, var(--hijau), var(--hijau-tua));
            color: var(--white);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.3rem;
        }

        .kartu-sholat .info { flex: 1; }
        .kartu-sholat .nama {
            font-family: 'Lora', serif;
            font-weight: 600;
            font-size: 1.1rem;
            color: var(--ink);
        }
        .kartu-sholat .rakaat {
            font-size: .82rem;
            color: var(--muted);
            margin-top: .1rem;
        }

        .kartu-sholat .panah {
            flex-shrink: 0;
            color: var(--hijau);
            font-size: 1.1rem;
        }

        .tombol-audio {
            display: flex;
            justify-content: center;
            margin-top: 2.5rem;
        }
        .btn-audio {
            display: inline-flex;
            align-items: center;
            gap: .55rem;
            font-weight: 600;
            font-size: .9rem;
            color: var(--white);
            background: linear-gradient(160deg, var(--biru), var(--biru-tua));
            border: none;
            padding: .8rem 1.6rem;
            border-radius: 100px;
            cursor: pointer;
            box-shadow: 0 4px 14px rgba(16,38,63,.25);
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
            margin-top: 2rem;
        }
    </style>
</head>
<body>

    <div class="wrap">

        <a href="{{ route('home') }}" class="btn-back" aria-label="Kembali ke halaman Home">
            ← Kembali ke Home
        </a>

        <header class="header-utama">
            <span class="label-mode">Mode Dewasa</span>
            <h1>Panduan Sholat Wajib</h1>
        </header>

        <div class="ayat">
            <p>
                "Sesungguhnya sholat itu adalah fardhu yang ditentukan waktunya
                atas orang-orang yang beriman."
                <span>QS. An-Nisa: 103</span>
            </p>
        </div>

        <p class="subjudul">Silakan pilih ibadah sholat wajib di bawah ini:</p>

        <div class="daftar-sholat" role="list" aria-label="Pilihan sholat wajib">
            @foreach ($daftarSholat as $index => $sholat)
                <a href="{{ route('mode-dewasa.panduan', $sholat['slug']) }}"
                   class="kartu-sholat"
                   role="listitem"
                   aria-label="Panduan sholat {{ $sholat['nama'] }}, {{ $sholat['rakaat'] }} rakaat">
                    <span class="nomor" aria-hidden="true">{{ $sholat['emoji'] }}</span>
                    <span class="info">
                        <span class="nama">{{ $index + 1 }}. Sholat {{ $sholat['nama'] }}</span>
                        <span class="rakaat">{{ $sholat['rakaat'] }} Rakaat</span>
                    </span>
                    <span class="panah" aria-hidden="true">→</span>
                </a>
            @endforeach
        </div>

        <p class="footer-note">Pilih salah satu waktu sholat untuk melihat panduan rukun fiqih secara lengkap.</p>

    </div>

    <script>
        const btnAudio = document.getElementById('btnAudio');
        const teksPengantar = 'Sebelum memulai sholat, pastikan Anda telah suci dari hadas, menghadap kiblat, dan menutup aurat dengan sempurna. Niatkanlah sholat karena Allah semata.';

        btnAudio.addEventListener('click', () => {
            if (!('speechSynthesis' in window)) {
                alert(teksPengantar);
                return;
            }

            window.speechSynthesis.cancel();

            const ucapan = new SpeechSynthesisUtterance(teksPengantar);
            ucapan.lang = 'id-ID';
            ucapan.rate = 0.95;
            ucapan.pitch = 1;

            btnAudio.classList.add('playing');
            ucapan.onend = ucapan.onerror = () => btnAudio.classList.remove('playing');

            window.speechSynthesis.speak(ucapan);
        });
    </script>

</body>
</html>