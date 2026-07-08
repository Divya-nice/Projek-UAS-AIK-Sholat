<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="SholatKu Muhammadiyah – Tuntunan tata cara sholat sesuai Himpunan Putusan Tarjih (HPT) Muhammadiyah">
    <title>SholatKu Muhammadiyah</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amiri:ital,wght@0,400;0,700;1,400&family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        /* ============================================================
           TOKEN SYSTEM
           Palette:
             --teal-deep   #0D4F4A   (primary brand, header)
             --teal-mid    #1A7A73   (hover, active)
             --gold        #C8973A   (accent, ornament)
             --gold-light  #F0C97A   (highlight text)
             --cream       #F7F3EC   (page bg)
             --white       #FFFFFF
             --ink         #1E1E1E
             --muted       #5C6A6A
           Type:
             Display/Arabic  → Amiri (serif, cultural weight)
             Body/UI         → Plus Jakarta Sans (modern, legible)
        ============================================================ */

        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

        :root {
            --teal-deep:   #0D4F4A;
            --teal-mid:    #1A7A73;
            --teal-light:  #E8F4F3;
            --gold:        #C8973A;
            --gold-light:  #F0C97A;
            --cream:       #F7F3EC;
            --white:       #FFFFFF;
            --ink:         #1E1E1E;
            --muted:       #5C6A6A;
            --radius:      16px;
            --radius-sm:   8px;
        }

        html { scroll-behavior: smooth; }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: var(--cream);
            color: var(--ink);
            min-height: 100vh;
            overflow-x: hidden;
        }

        /* ── Geometric Background Pattern ── */
        body::before {
            content: '';
            position: fixed;
            inset: 0;
            background-image:
                radial-gradient(circle at 15% 20%, rgba(13,79,74,.06) 0%, transparent 50%),
                radial-gradient(circle at 85% 80%, rgba(200,151,58,.06) 0%, transparent 50%);
            pointer-events: none;
            z-index: 0;
        }

        /* ============================================================
           IDENTITY HEADER STRIP
        ============================================================ */
        .identity-strip {
            background: var(--teal-deep);
            color: rgba(255,255,255,.75);
            font-size: .7rem;
            font-weight: 500;
            letter-spacing: .04em;
            padding: .45rem 1.5rem;
            display: flex;
            flex-wrap: wrap;
            gap: .5rem 2rem;
            align-items: center;
            justify-content: center;
        }
        .identity-strip span { white-space: nowrap; }
        .identity-strip strong { color: var(--gold-light); }

        /* ============================================================
           NAVBAR
        ============================================================ */
        .navbar {
            position: sticky;
            top: 0;
            z-index: 100;
            background: rgba(247,243,236,.92);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border-bottom: 1px solid rgba(13,79,74,.12);
            padding: .85rem 2rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 1rem;
        }

        .nav-brand {
            display: flex;
            align-items: center;
            gap: .65rem;
            text-decoration: none;
        }
        .nav-logo {
            width: 38px;
            height: 38px;
            background: var(--teal-deep);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Amiri', serif;
            font-size: 1.3rem;
            color: var(--gold-light);
            flex-shrink: 0;
        }
        .nav-name {
            font-size: .95rem;
            font-weight: 700;
            color: var(--teal-deep);
            line-height: 1.15;
        }
        .nav-name small {
            display: block;
            font-size: .65rem;
            font-weight: 400;
            color: var(--muted);
            letter-spacing: .02em;
        }

        .nav-links {
            display: flex;
            align-items: center;
            gap: 1.5rem;
            list-style: none;
        }
        .nav-links a {
            font-size: .82rem;
            font-weight: 500;
            color: var(--muted);
            text-decoration: none;
            transition: color .2s;
        }
        .nav-links a:hover { color: var(--teal-deep); }

        /* ============================================================
           HERO SECTION
        ============================================================ */
        .hero {
            position: relative;
            z-index: 1;
            padding: 5rem 2rem 4rem;
            text-align: center;
            max-width: 860px;
            margin: 0 auto;
        }

        /* Geometric ornament ring behind content */
        .hero-ornament {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 500px;
            height: 500px;
            border: 1px solid rgba(13,79,74,.08);
            border-radius: 50%;
            pointer-events: none;
        }
        .hero-ornament::before {
            content: '';
            position: absolute;
            inset: 30px;
            border: 1px solid rgba(200,151,58,.12);
            border-radius: 50%;
        }
        .hero-ornament::after {
            content: '';
            position: absolute;
            inset: 70px;
            border: 1px solid rgba(13,79,74,.07);
            border-radius: 50%;
        }

        .hero-eyebrow {
            display: inline-flex;
            align-items: center;
            gap: .4rem;
            font-size: .72rem;
            font-weight: 600;
            letter-spacing: .1em;
            text-transform: uppercase;
            color: var(--gold);
            background: rgba(200,151,58,.1);
            border: 1px solid rgba(200,151,58,.25);
            border-radius: 100px;
            padding: .3rem .85rem;
            margin-bottom: 1.5rem;
        }

        /* ── Signature element: large Arabic display headline ── */
        .hero-arabic {
            font-family: 'Amiri', serif;
            font-size: clamp(2.8rem, 7vw, 5.5rem);
            color: var(--teal-deep);
            line-height: 1.2;
            margin-bottom: .4rem;
            text-shadow: 0 2px 24px rgba(13,79,74,.08);
        }

        .hero-title {
            font-size: clamp(1.25rem, 3vw, 1.7rem);
            font-weight: 700;
            color: var(--teal-deep);
            margin-bottom: .9rem;
        }

        .hero-desc {
            font-size: .95rem;
            color: var(--muted);
            line-height: 1.75;
            max-width: 560px;
            margin: 0 auto 2.5rem;
        }

        /* ── CTA Buttons ── */
        .cta-group {
            display: flex;
            flex-wrap: wrap;
            gap: .85rem;
            justify-content: center;
            margin-bottom: 3.5rem;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            gap: .5rem;
            padding: .85rem 1.8rem;
            border-radius: 100px;
            font-size: .9rem;
            font-weight: 600;
            cursor: pointer;
            text-decoration: none;
            transition: all .22s ease;
            border: none;
        }
        .btn-primary {
            background: var(--teal-deep);
            color: var(--white);
            box-shadow: 0 4px 16px rgba(13,79,74,.28);
        }
        .btn-primary:hover {
            background: var(--teal-mid);
            transform: translateY(-2px);
            box-shadow: 0 8px 24px rgba(13,79,74,.35);
        }
        .btn-secondary {
            background: var(--white);
            color: var(--teal-deep);
            border: 1.5px solid rgba(13,79,74,.2);
        }
        .btn-secondary:hover {
            border-color: var(--teal-deep);
            background: var(--teal-light);
            transform: translateY(-2px);
        }
        .btn-gold {
            background: var(--gold);
            color: var(--white);
            box-shadow: 0 4px 16px rgba(200,151,58,.3);
        }
        .btn-gold:hover {
            background: #b5842e;
            transform: translateY(-2px);
        }

        /* Divider glyph */
        .hero-divider {
            display: flex;
            align-items: center;
            gap: 1rem;
            justify-content: center;
            margin-bottom: 3.5rem;
        }
        .hero-divider::before,
        .hero-divider::after {
            content: '';
            width: 60px;
            height: 1px;
            background: linear-gradient(to right, transparent, var(--gold));
        }
        .hero-divider::after { transform: scaleX(-1); }
        .hero-divider-icon {
            width: 20px;
            height: 20px;
            background: var(--gold);
            clip-path: polygon(50% 0%, 61% 35%, 98% 35%, 68% 57%, 79% 91%, 50% 70%, 21% 91%, 32% 57%, 2% 35%, 39% 35%);
        }

        /* ============================================================
           MODE CARDS
        ============================================================ */
        .mode-section {
            position: relative;
            z-index: 1;
            padding: 0 1.5rem 5rem;
            max-width: 900px;
            margin: 0 auto;
        }

        .mode-label {
            text-align: center;
            font-size: .72rem;
            font-weight: 700;
            letter-spacing: .12em;
            text-transform: uppercase;
            color: var(--muted);
            margin-bottom: 1.4rem;
        }

        .mode-cards {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1.2rem;
        }

        .mode-card {
            background: var(--white);
            border-radius: var(--radius);
            padding: 2rem 1.75rem;
            border: 1.5px solid transparent;
            cursor: pointer;
            text-decoration: none;
            display: block;
            transition: all .25s ease;
            position: relative;
            overflow: hidden;
        }

        /* Dewasa card */
        .mode-card--dewasa {
            border-color: rgba(13,79,74,.15);
        }
        .mode-card--dewasa::after {
            content: '';
            position: absolute;
            top: 0; right: 0;
            width: 120px; height: 120px;
            background: radial-gradient(circle at top right, rgba(13,79,74,.07), transparent 70%);
            pointer-events: none;
        }
        .mode-card--dewasa:hover {
            border-color: var(--teal-deep);
            box-shadow: 0 8px 32px rgba(13,79,74,.15);
            transform: translateY(-4px);
        }

        /* Anak card */
        .mode-card--anak {
            border-color: rgba(200,151,58,.2);
            background: linear-gradient(145deg, #fff 70%, rgba(240,201,122,.08));
        }
        .mode-card--anak::after {
            content: '';
            position: absolute;
            top: 0; right: 0;
            width: 120px; height: 120px;
            background: radial-gradient(circle at top right, rgba(200,151,58,.1), transparent 70%);
            pointer-events: none;
        }
        .mode-card--anak:hover {
            border-color: var(--gold);
            box-shadow: 0 8px 32px rgba(200,151,58,.2);
            transform: translateY(-4px);
        }

        .mode-card-icon {
            font-size: 2.4rem;
            margin-bottom: 1rem;
            display: block;
        }
        .mode-card-title {
            font-size: 1.1rem;
            font-weight: 700;
            color: var(--ink);
            margin-bottom: .4rem;
        }
        .mode-card-desc {
            font-size: .82rem;
            color: var(--muted);
            line-height: 1.6;
            margin-bottom: 1.25rem;
        }
        .mode-card-features {
            list-style: none;
            display: flex;
            flex-direction: column;
            gap: .35rem;
            margin-bottom: 1.5rem;
        }
        .mode-card-features li {
            font-size: .78rem;
            color: var(--muted);
            display: flex;
            align-items: center;
            gap: .45rem;
        }
        .mode-card-features li::before {
            content: '';
            width: 5px; height: 5px;
            background: var(--teal-deep);
            border-radius: 50%;
            flex-shrink: 0;
        }
        .mode-card--anak .mode-card-features li::before {
            background: var(--gold);
        }

        .mode-card-cta {
            display: inline-flex;
            align-items: center;
            gap: .4rem;
            font-size: .82rem;
            font-weight: 700;
            color: var(--teal-deep);
        }
        .mode-card--anak .mode-card-cta { color: var(--gold); }
        .mode-card-cta::after {
            content: '→';
            transition: transform .2s;
        }
        .mode-card:hover .mode-card-cta::after { transform: translateX(4px); }

        /* ============================================================
           FITUR HIGHLIGHTS
        ============================================================ */
        .features-section {
            position: relative;
            z-index: 1;
            background: var(--teal-deep);
            padding: 4rem 2rem;
            margin-bottom: 0;
        }

        .features-inner {
            max-width: 960px;
            margin: 0 auto;
        }

        .section-heading {
            text-align: center;
            margin-bottom: 2.5rem;
        }
        .section-heading .eyebrow {
            font-size: .7rem;
            font-weight: 700;
            letter-spacing: .12em;
            text-transform: uppercase;
            color: var(--gold-light);
            display: block;
            margin-bottom: .6rem;
        }
        .section-heading h2 {
            font-size: clamp(1.3rem, 3vw, 1.8rem);
            font-weight: 700;
            color: var(--white);
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1rem;
        }

        .feature-item {
            background: rgba(255,255,255,.06);
            border: 1px solid rgba(255,255,255,.1);
            border-radius: var(--radius-sm);
            padding: 1.4rem 1.2rem;
            transition: background .2s;
        }
        .feature-item:hover { background: rgba(255,255,255,.1); }
        .feature-icon {
            font-size: 1.6rem;
            margin-bottom: .75rem;
            display: block;
        }
        .feature-name {
            font-size: .88rem;
            font-weight: 600;
            color: var(--white);
            margin-bottom: .3rem;
        }
        .feature-desc {
            font-size: .75rem;
            color: rgba(255,255,255,.55);
            line-height: 1.55;
        }

        /* ============================================================
           GERAKAN SHOLAT PREVIEW
        ============================================================ */
        .gerakan-section {
            position: relative;
            z-index: 1;
            padding: 4.5rem 1.5rem;
            max-width: 960px;
            margin: 0 auto;
        }

        .gerakan-heading {
            text-align: center;
            margin-bottom: 2rem;
        }
        .gerakan-heading .eyebrow {
            font-size: .7rem;
            font-weight: 700;
            letter-spacing: .12em;
            text-transform: uppercase;
            color: var(--gold);
            display: block;
            margin-bottom: .5rem;
        }
        .gerakan-heading h2 {
            font-size: clamp(1.2rem, 3vw, 1.6rem);
            font-weight: 700;
            color: var(--teal-deep);
        }

        .gerakan-list {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(130px, 1fr));
            gap: .75rem;
        }

        .gerakan-item {
            background: var(--white);
            border: 1.5px solid rgba(13,79,74,.1);
            border-radius: var(--radius-sm);
            padding: 1rem .85rem;
            text-align: center;
            cursor: pointer;
            transition: all .2s;
        }
        .gerakan-item:hover {
            border-color: var(--teal-deep);
            background: var(--teal-light);
            transform: translateY(-2px);
        }
        .gerakan-number {
            font-size: .65rem;
            font-weight: 700;
            color: var(--gold);
            letter-spacing: .06em;
            display: block;
            margin-bottom: .3rem;
        }
        .gerakan-name {
            font-size: .8rem;
            font-weight: 600;
            color: var(--teal-deep);
            line-height: 1.3;
        }

        /* ============================================================
           MULAI BELAJAR BANNER
        ============================================================ */
        .start-banner {
            position: relative;
            z-index: 1;
            background: linear-gradient(135deg, var(--teal-deep) 0%, #0a3d39 100%);
            margin: 0 1.5rem 4rem;
            border-radius: var(--radius);
            padding: 3rem 2rem;
            text-align: center;
            overflow: hidden;
            max-width: 860px;
            margin-left: auto;
            margin-right: auto;
        }
        .start-banner::before {
            content: '';
            position: absolute;
            top: -40px; right: -40px;
            width: 200px; height: 200px;
            border: 1px solid rgba(200,151,58,.2);
            border-radius: 50%;
            pointer-events: none;
        }
        .start-banner::after {
            content: '';
            position: absolute;
            bottom: -60px; left: -60px;
            width: 250px; height: 250px;
            border: 1px solid rgba(255,255,255,.06);
            border-radius: 50%;
            pointer-events: none;
        }

        .start-arabic {
            font-family: 'Amiri', serif;
            font-size: 1.8rem;
            color: var(--gold-light);
            margin-bottom: .5rem;
        }
        .start-banner h3 {
            font-size: 1.3rem;
            font-weight: 700;
            color: var(--white);
            margin-bottom: .6rem;
        }
        .start-banner p {
            font-size: .88rem;
            color: rgba(255,255,255,.65);
            margin-bottom: 1.75rem;
            max-width: 420px;
            margin-left: auto;
            margin-right: auto;
        }

        /* ============================================================
           FOOTER
        ============================================================ */
        footer {
            position: relative;
            z-index: 1;
            background: var(--white);
            border-top: 1px solid rgba(13,79,74,.1);
            padding: 1.5rem 2rem;
            text-align: center;
        }
        .footer-logo {
            font-family: 'Amiri', serif;
            font-size: 1.2rem;
            color: var(--teal-deep);
            font-weight: 700;
            margin-bottom: .3rem;
        }
        footer p {
            font-size: .72rem;
            color: var(--muted);
            line-height: 1.6;
        }
        footer p a {
            color: var(--teal-deep);
            text-decoration: none;
            font-weight: 500;
        }

        /* ── Footer academic identity block ── */
        .footer-academic {
            margin: 1.5rem auto 0;
            max-width: 520px;
            background: var(--cream);
            border: 1px solid rgba(13,79,74,.12);
            border-radius: var(--radius-sm);
            padding: 1.25rem 1.5rem 1.4rem;
            text-align: center;
        }
        .footer-academic .campus-name {
            font-size: .85rem;
            font-weight: 700;
            color: var(--teal-deep);
            margin-bottom: .15rem;
        }
        .footer-academic .prodi-name {
            font-size: .74rem;
            color: var(--muted);
            margin-bottom: .9rem;
        }
        .footer-academic .academic-block + .academic-block {
            margin-top: .9rem;
            padding-top: .9rem;
            border-top: 1px dashed rgba(13,79,74,.15);
        }
        .footer-academic .academic-label {
            font-size: .62rem;
            font-weight: 700;
            letter-spacing: .1em;
            text-transform: uppercase;
            color: var(--gold);
            margin-bottom: .45rem;
        }
        .footer-academic .dosen-name {
            font-size: .78rem;
            font-weight: 600;
            color: var(--ink);
        }
        .footer-academic .dosen-nidn {
            font-size: .68rem;
            color: var(--muted);
            margin-top: .1rem;
        }
        .footer-academic .members-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: .4rem .75rem;
            list-style: none;
        }
        .footer-academic .members-grid li {
            font-size: .74rem;
            font-weight: 500;
            color: var(--ink);
            line-height: 1.4;
        }
        .footer-academic .members-grid .nim {
            display: block;
            font-size: .64rem;
            font-weight: 400;
            color: var(--muted);
        }
        @media (max-width: 480px) {
            .footer-academic .members-grid { grid-template-columns: 1fr; }
        }

        /* ============================================================
           RESPONSIVE
        ============================================================ */
        @media (max-width: 640px) {
            .navbar { padding: .75rem 1rem; }
            .nav-links { display: none; }

            .hero { padding: 3.5rem 1.25rem 2.5rem; }
            .hero-ornament { width: 300px; height: 300px; }

            .mode-cards { grid-template-columns: 1fr; }

            .start-banner { margin: 0 1rem 3rem; padding: 2.25rem 1.5rem; }

            .identity-strip {
                font-size: .65rem;
                gap: .3rem .8rem;
                padding: .4rem .75rem;
            }
        }

        /* ============================================================
           REDUCED MOTION
        ============================================================ */
        @media (prefers-reduced-motion: reduce) {
            *, *::before, *::after { transition: none !important; }
        }
    </style>
</head>
<body>

    <!-- ── NAVBAR ── -->
    <nav class="navbar" role="navigation" aria-label="Navigasi utama">
        <a href="{{ route('home') }}" class="nav-brand" aria-label="SholatKu Muhammadiyah – Beranda">
            <div class="nav-logo" aria-hidden="true">ص</div>
            <div class="nav-name">
                SholatKu
                <small>Muhammadiyah</small>
            </div>
        </a>
        <ul class="nav-links" role="list">
            <li><a href="#gerakan">Gerakan Sholat</a></li>
            <li><a href="#fitur">Fitur</a></li>
            <li><a href="#mulai" class="btn btn-primary" style="padding:.5rem 1.1rem;font-size:.8rem;">Mulai Belajar</a></li>
        </ul>
    </nav>

    <!-- == HERO ============================================================ -->
    <main>
        <section class="hero" aria-labelledby="hero-heading">
            <div class="hero-ornament" aria-hidden="true"></div>

            <div class="hero-eyebrow" aria-label="Berdasarkan HPT Muhammadiyah">
                ☽ &nbsp;Berdasarkan HPT Muhammadiyah
            </div>

            <!-- Signature: Arabic as primary display headline -->
            <h1 class="hero-arabic" aria-label="Bismillahirrahmanirrahim">
                بِسْمِ اللَّهِ الرَّحْمَنِ الرَّحِيمِ
            </h1>
            <p class="hero-title" id="hero-heading">
                SholatKu Muhammadiyah
            </p>
            <p class="hero-desc">
                Tuntunan tata cara sholat yang benar sesuai Himpunan Putusan Tarjih (HPT) Muhammadiyah — lengkap dengan bacaan Arab, Latin, terjemahan, audio, dan video gerakan.
            </p>

            <div class="cta-group" role="group" aria-label="Pilih mode belajar">
                <a href="{{ route('mode-dewasa.index') }}" class="btn btn-primary" aria-label="Masuk ke Mode Dewasa">
                    📖 Mode Dewasa
                </a>
                <a href="{{ route('mode-anak.index') }}" class="btn btn-gold" aria-label="Masuk ke Mode Anak-anak">
                    🌟 Mode Anak
                </a>
                <a href="#mulai" class="btn btn-secondary" aria-label="Mulai belajar sekarang">
                    Mulai Belajar
                </a>
            </div>

            <div class="hero-divider" aria-hidden="true">
                <div class="hero-divider-icon"></div>
            </div>
        </section>

        <!-- == MODE CARDS ============================================================ -->
        <section class="mode-section" aria-labelledby="mode-heading" id="mode">
            <p class="mode-label" id="mode-heading">Pilih Mode Pembelajaran</p>
            <div class="mode-cards">

                <!-- Dewasa -->
                <a href="{{ route('mode-dewasa.index') }}" class="mode-card mode-card--dewasa" role="button" aria-label="Pilih Mode Dewasa">
                    <span class="mode-card-icon" aria-hidden="true">📘</span>
                    <div class="mode-card-title">Mode Dewasa</div>
                    <p class="mode-card-desc">Pembelajaran lengkap dan formal sesuai HPT Muhammadiyah dengan sumber referensi.</p>
                    <ul class="mode-card-features" aria-label="Fitur Mode Dewasa">
                        <li>Bacaan Arab lengkap beserta sumber</li>
                        <li>Transliterasi Latin & terjemahan</li>
                        <li>Audio pelafalan & video gerakan</li>
                        <li>Tampilan formal & profesional</li>
                    </ul>
                    <span class="mode-card-cta">Masuk ke Mode Dewasa</span>
                </a>

                <!-- Anak -->
                <a href="{{ route('mode-anak.index') }}" class="mode-card mode-card--anak" role="button" aria-label="Pilih Mode Anak-anak">
                    <span class="mode-card-icon" aria-hidden="true">🌈</span>
                    <div class="mode-card-title">Mode Anak</div>
                    <p class="mode-card-desc">Belajar sholat dengan cara yang menyenangkan melalui visual dan bahasa yang mudah dipahami.</p>
                    <ul class="mode-card-features" aria-label="Fitur Mode Anak">
                        <li>Gambar kartun yang menarik</li>
                        <li>Bahasa sederhana & ramah anak</li>
                        <li>Audio & video animasi</li>
                        <li>Warna cerah & ikon lucu</li>
                    </ul>
                    <span class="mode-card-cta">Masuk ke Mode Anak</span>
                </a>

            </div>
        </section>

        <!-- == FITUR HIGHLIGHTS ============================================================ -->
        <section class="features-section" aria-labelledby="fitur-heading" id="fitur">
            <div class="features-inner">
                <div class="section-heading">
                    <span class="eyebrow">Mengapa SholatKu?</span>
                    <h2 id="fitur-heading">Semua yang Kamu Butuhkan untuk Belajar Sholat</h2>
                </div>
                <div class="features-grid" role="list">
                    <div class="feature-item" role="listitem">
                        <span class="feature-icon" aria-hidden="true">🕌</span>
                        <div class="feature-name">12 Gerakan Sholat</div>
                        <p class="feature-desc">Urutan lengkap dari Takbiratul Ihram hingga Salam sesuai HPT.</p>
                    </div>
                    <div class="feature-item" role="listitem">
                        <span class="feature-icon" aria-hidden="true">🔊</span>
                        <div class="feature-name">Audio Bacaan</div>
                        <p class="feature-desc">Dengarkan pelafalan yang benar untuk setiap bacaan sholat.</p>
                    </div>
                    <div class="feature-item" role="listitem">
                        <span class="feature-icon" aria-hidden="true">🎬</span>
                        <div class="feature-name">Video Gerakan</div>
                        <p class="feature-desc">Tonton demonstrasi gerakan sholat secara langsung dan jelas.</p>
                    </div>
                    <div class="feature-item" role="listitem">
                        <span class="feature-icon" aria-hidden="true">▶️</span>
                        <div class="feature-name">Autoplay Sholat</div>
                        <p class="feature-desc">Jalankan seluruh gerakan secara otomatis dan berurutan.</p>
                    </div>
                    <div class="feature-item" role="listitem">
                        <span class="feature-icon" aria-hidden="true">📊</span>
                        <div class="feature-name">Progress Belajar</div>
                        <p class="feature-desc">Pantau seberapa jauh kamu telah menguasai materi.</p>
                    </div>
                    <div class="feature-item" role="listitem">
                        <span class="feature-icon" aria-hidden="true">🏆</span>
                        <div class="feature-name">Quiz & Sertifikat</div>
                        <p class="feature-desc">Uji pemahaman dan dapatkan sertifikat penyelesaian.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- == GERAKAN PREVIEW ============================================================ -->
        <section class="gerakan-section" aria-labelledby="gerakan-heading" id="gerakan">
            <div class="gerakan-heading">
                <span class="eyebrow">Materi Pembelajaran</span>
                <h2 id="gerakan-heading">Urutan Gerakan Sholat</h2>
            </div>
            <ol class="gerakan-list" role="list" aria-label="Daftar urutan gerakan sholat">
                <li class="gerakan-item" role="listitem" tabindex="0">
                    <span class="gerakan-number">01</span>
                    <span class="gerakan-name">Takbiratul Ihram</span>
                </li>
                <li class="gerakan-item" role="listitem" tabindex="0">
                    <span class="gerakan-number">02</span>
                    <span class="gerakan-name">Bersedekap</span>
                </li>
                <li class="gerakan-item" role="listitem" tabindex="0">
                    <span class="gerakan-number">03</span>
                    <span class="gerakan-name">Membaca Al-Fatihah</span>
                </li>
                <li class="gerakan-item" role="listitem" tabindex="0">
                    <span class="gerakan-number">04</span>
                    <span class="gerakan-name">Rukuk</span>
                </li>
                <li class="gerakan-item" role="listitem" tabindex="0">
                    <span class="gerakan-number">05</span>
                    <span class="gerakan-name">I'tidal</span>
                </li>
                <li class="gerakan-item" role="listitem" tabindex="0">
                    <span class="gerakan-number">06</span>
                    <span class="gerakan-name">Sujud Pertama</span>
                </li>
                <li class="gerakan-item" role="listitem" tabindex="0">
                    <span class="gerakan-number">07</span>
                    <span class="gerakan-name">Duduk Antara Dua Sujud</span>
                </li>
                <li class="gerakan-item" role="listitem" tabindex="0">
                    <span class="gerakan-number">08</span>
                    <span class="gerakan-name">Sujud Kedua</span>
                </li>
                <li class="gerakan-item" role="listitem" tabindex="0">
                    <span class="gerakan-number">09</span>
                    <span class="gerakan-name">Berdiri Rakaat Berikutnya</span>
                </li>
                <li class="gerakan-item" role="listitem" tabindex="0">
                    <span class="gerakan-number">10</span>
                    <span class="gerakan-name">Tasyahud Awal</span>
                </li>
                <li class="gerakan-item" role="listitem" tabindex="0">
                    <span class="gerakan-number">11</span>
                    <span class="gerakan-name">Tasyahud Akhir</span>
                </li>
                <li class="gerakan-item" role="listitem" tabindex="0">
                    <span class="gerakan-number">12</span>
                    <span class="gerakan-name">Salam</span>
                </li>
            </ol>
        </section>

        <!-- == MULAI BELAJAR BANNER ============================================================ -->
        <div style="padding: 0 1.5rem 4rem; position: relative; z-index: 1;" id="mulai">
            <div class="start-banner" role="complementary" aria-label="Ajakan mulai belajar">
                <p class="start-arabic" aria-label="Tegakkanlah sholat">وَأَقِيمُوا الصَّلَاةَ</p>
                <h3>Mulai Belajar Sekarang</h3>
                <p>Pelajari tata cara sholat yang benar sesuai tuntunan Rasulullah ﷺ, kapan saja dan di mana saja.</p>
                <div class="cta-group" style="margin-bottom: 0;" role="group" aria-label="Tombol mulai belajar">
                    <a href="{{ route('mode-dewasa.index') }}" class="btn btn-gold" aria-label="Mulai dengan Mode Dewasa">📖 Mode Dewasa</a>
                    <a href="{{ route('mode-anak.index') }}" class="btn btn-secondary" style="background:rgba(255,255,255,.12);color:#fff;border-color:rgba(255,255,255,.25);" aria-label="Mulai dengan Mode Anak">🌟 Mode Anak</a>
                </div>
            </div>
        </div>
    </main>

    <!-- ── FOOTER ── -->
    <footer role="contentinfo">
        <div class="footer-logo">SholatKu Muhammadiyah</div>
        <p>
            Tuntunan Tata Cara Sholat Sesuai HPT Muhammadiyah
            <br>
        </p>

        <div class="footer-academic">
            <div class="campus-name">Universitas Muhammadiyah Pontianak</div>
            <div class="prodi-name">Program Studi Sistem Informasi</div>

            <div class="academic-block">
                <div class="academic-label">Dosen Pengampu</div>
                <div class="dosen-name">Dedy Susanto, S.Pd.I., M.M.</div>
                <div class="dosen-nidn">NIDN. 1128048303</div>
            </div>

            <div class="academic-block">
                <div class="academic-label">Anggota Kelompok</div>
                <ul class="members-grid">
                    <li>Merlinsha Lunny<span class="nim">241230021</span></li>
                    <li>Divya Harinda Verlita<span class="nim">241230011</span></li>
                    <li>Nabila Septi Ramadani<span class="nim">241230039</span></li>
                    <li>Natasya Helmalia<span class="nim">241230059</span></li>
                    <li>Haliza Zulqa Aulia<span class="nim">241230002</span></li>
                </ul>
            </div>
        </div>
    </footer>

</body>
</html>
