<?php

namespace App\Http\Controllers;

class ModeDewasaController extends Controller
{
    /**
     * Data 5 sholat wajib untuk halaman "Panduan Sholat Wajib" (Mode Dewasa).
     */
    protected function daftarSholat(): array
    {
        return [
            [
                'slug'   => 'subuh',
                'nama'   => 'Subuh',
                'emoji'  => '🌅',
                'rakaat' => 2,
            ],
            [
                'slug'   => 'dzuhur',
                'nama'   => 'Dzuhur',
                'emoji'  => '☀️',
                'rakaat' => 4,
            ],
            [
                'slug'   => 'ashar',
                'nama'   => 'Ashar',
                'emoji'  => '🌤️',
                'rakaat' => 4,
            ],
            [
                'slug'   => 'maghrib',
                'nama'   => 'Maghrib',
                'emoji'  => '🌆',
                'rakaat' => 3,
            ],
            [
                'slug'   => 'isya',
                'nama'   => 'Isya',
                'emoji'  => '🌙',
                'rakaat' => 4,
            ],
        ];
    }

    /**
     * Bacaan NIAT untuk tiap waktu sholat (data baru dari dokumen).
     * Dipisah agar tiap waktu sholat menampilkan niat yang sesuai.
     */
    protected function daftarNiat(): array
    {
        return [
            'subuh' => [
                'arab'  => 'أُصَلِّى فَرْضَ الصُّبْحِ رَكْعَتَيْنِ مُسْتَقْبِلَ الْقِبْلَةِ أَدَاءً لِلّٰهِ تَعَالَى',
                'latin' => 'Ushalli fardhash shubhi rak\'ataini mustaqbilal qiblati adaa-an lillaahi ta\'aalaa.',
                'arti'  => 'Aku niat mengerjakan sholat fardhu Subuh dua rakaat menghadap kiblat, saat ini, karena Allah Ta\'ala.',
                'audio' => 'audio/niat-subuh.mp3',
            ],
            'dzuhur' => [
                'arab'  => 'أُصَلِّى فَرْضَ الظُّهْرِ أَرْبَعَ رَكَعَاتٍ مُسْتَقْبِلَ الْقِبْلَةِ أَدَاءً لِلَّهِ تَعَالَ',
                'latin' => 'Ushollii fardhoz Dzuhri arba’a rokaatin mustaqbilal qiblati adaa’an lilaahi ta’aalaa.',
                'arti'  => 'Saya (berniat) mengerjakan salat fardhu Dzuhur 4 raka’at menghadap kiblat, (sholat sendiri) karena Allah Ta’ala.',
                'audio' => 'audio/niat-dzuhur.mp3',
            ],
            'ashar' => [
                'arab'  => 'أُصَلِّى فَرْضَ الْعَصْرِأَرْبَعَ رَكَعاَتٍ مُسْتَقْبِلَ الْقِبْلَةِ أَدَاءً لِلّٰهِ تَعَالَى',
                'latin' => 'Ushalli fardhal \'ashri arba\'a raka\'aatain mustaqbilal qiblati adaa-an lillahi ta\'aala',
                'arti'  => 'Aku niat melakukan sholat fardhu Ashar empat rakaat sambil menghadap kiblat saat ini karena Allah Ta\'ala.',
                'audio' => 'audio/niat-ashar.mp3',
            ],
            'maghrib' => [
                'arab'  => 'أُصَلِّى فَرْضَ المَغْرِبِ ثَلاَثَ رَكَعاَتٍ مُسْتَقْبِلَ الْقِبْلَةِ أَدَاءً لله تَعَالَى',
                'latin' => 'Ushalli fardho maghribi tsalaatsa raka’aatin mustaqbilal qiblati adaa,an lillaahi ta’aala.',
                'arti'  => 'Saya melakukan shalat fardhu maghrib sebanyak tiga rakaat dengan menghadap kiblat, pada waktunya karena Allah Ta’ala.',
                'audio' => 'audio/niat-maghrib.mp3',
            ],
            'isya' => [
                'arab'  => 'أُصَلِّى فَرْضَ العِشَاء ِأَرْبَعَ رَكَعاَتٍ مُسْتَقْبِلَ الْقِبْلَةِ أَدَاءً لله تَعَالَى',
                'latin' => 'Usholli fardlol i\'syaa-i arba\'a roka\'aataim mustaqbilal qiblati adaa-an lillahi ta\'aala',
                'arti'  => '"Aku niat melakukan sholat fardu isya 4 rakaat, sambil menghadap kiblat, saat ini, karena Allah ta\'ala"',
                'audio' => 'audio/niat-isya.mp3',
            ],
        ];
    }

    /**
     * Rukun & bacaan sholat secara berurutan, lengkap dengan teks Arab,
     * transliterasi latin, dan terjemahan (data baru dari dokumen).
     *
     * Bacaan sholat identik untuk semua waktu; hanya NIAT yang berbeda,
     * sehingga niat disuntikkan sesuai waktu sholat yang dipilih.
     *
     * Key 'hanya_jika_rakaat_lebih_dari' dipakai untuk menyaring rukun yang
     * kondisional (mis. Tasyahud Awal hanya ada jika sholatnya lebih dari 2 rakaat).
     */
    protected function daftarRukun(string $slug): array
    {
        $niat = $this->daftarNiat()[$slug] ?? ['arab' => '', 'latin' => '', 'arti' => ''];

        return [
            [
                'kode'  => 'qiyam',
                'nama'  => 'Berdiri Tegak (Qiyam)',
                'arab'  => '',
                'latin' => '',
                'arti'  => 'Berdiri tegak dengan tenang menghadap kiblat bagi yang mampu.',
                'audio' => '',
            ],
            [
                'kode'  => 'niat',
                'nama'  => 'Niat Sholat',
                'arab'  => $niat['arab'],
                'latin' => $niat['latin'],
                'arti'  => $niat['arti'],
                'audio' => route('mode-dewasa.audio', ['sholat' => $slug]),
            ],
            [
                'kode'  => 'takbiratul-ihram',
                'nama'  => 'Takbiratul Ihram',
                'arab'  => 'اللّهُ اَكبَرُ',
                'latin' => 'Allahu Akbar.',
                'arti'  => 'Allah Maha Besar.',
                'audio' => route('audio.gerakan', ['kode' => 'takbir']),
            ],
            [
                'kode'  => 'iftitah',
                'nama'  => 'Bersedekap & Doa Iftitah',
                'arab'  => 'اَللّهُمَّ باَعِدْ بَيْنِى وَبَيْنَ خَطَاياَيَ كَمَا باَعَدْتَ بَيْنَ الْمَشْرِقِ وَالْمَغْرِبِاَللّهُمَّ نَقِّنِى مِنَ الْخَطَاياَ كَماَ يُنَقَّى الثَّوْبُ اْلأَبْيَضُ مِنَ الدَّنَسِاَللّهُمَّ اغْسِلْ خَطَاياَيَ باِلْماَءِ وَالثَّلْجِ وَالْبَرَدِ.',
                'latin' => 'Allaahumma baa’id bainii wabainaa khotoo yaa ya kamaa baa ‘adta bainal masyriqi wal maghrib. Allaahumma naqqinii minal khotoo yaa kamaa yunqqots tsaubul abyadhuu minaddanas. Allaahummaghsil khotoo yaa ya bil maa i wats tsalji walbarod',
                'arti'  => 'Ya Allah, jauhkanlah antara diriku dan di antara kesalahan-kesalahanku sebagaimana Engkau jauhkan antara timur dan barat. Ya Allah, bersihkanlah aku dari kesalahan sebagaimana dibersihkannya kain putih dari kotoran. Ya Allah, cucilah kesalahan-kesalahanku dengan air, salju dan embun.',
                'audio' => route('audio.gerakan', ['kode' => 'iftitah']),
            ],
            [
                'kode'  => 'taawudz',
                'nama'  => 'Ta\'awudz',
                'arab'  => 'أَعُوذُ بِاللَّهِ مِنَ الشَّيْطَانِ الرَّجِيمِ',
                'latin' => 'Au-dzu billa-himinasy syaita nirraji-m',
                'arti'  => 'Aku berlindung pada Allah, dari syaithan yang terkutuk',
                'audio' => route('audio.gerakan', ['kode' => 'taawudz']),
            ],
            [
                'kode'  => 'basmalah',
                'nama'  => 'Basmalah',
                'arab'  => 'بِسْمِ اللّهِ الرَّحْمَنِ الرَّحِيْ',
                'latin' => 'Bismillahirrahmannirrahiim',
                'arti'  => 'Atas nama Allah, maha Pemurah, maha Pengasih',
                'audio' => route('audio.gerakan', ['kode' => 'basmalah']),
            ],
            [
                'kode'  => 'al-fatihah',
                'nama'  => 'Membaca Surat Al-Fatihah',
                'arab'  => 'اَلْحَمْدُ لِلّٰهِ رَبِّ الْعٰلَمِیْنَۙ, الرَّحْمٰنِ الرَّحِیْمِۙ, مٰلِكِ یَوْمِ الدِّیْنِؕ, اِیَّاكَ نَعْبُدُ وَ اِیَّاكَ نَسْتَعِیْنُؕ, اِهْدِنَا الصِّرَاطَ الْمُسْتَقِیْمَۙ, صِرَاطَ الَّذِیْنَ اَنْعَمْتَ عَلَیْهِمْ غَیْرِ الْمَغْضُوْبِ عَلَیْهِمْ وَ لَا الضَّآلِّیْنَ۠',
                'latin' => 'Al-ḥamdu lillāhi rabbil-‘ālamīn. Ar-raḥmānir-raḥīm. Māliki yaumid-dīn. Iyyāka na’budu wa iyyāka nasta’īn. Ihdinaṣ-ṣirāṭal-mustaqīm. Sirāṭallażīna an’amta ‘alaihim gairil-magḍụbi ‘alaihim wa laḍ-ḍāllīn.',
                'arti'  => 'Segala puji bagi Allah, Tuhan semesta alam. Yang maha Pemurah lagi Maha Pengasih, Yang mengadili pada hari Qiyamat. Hanya Engkau yang aku sembah dan hanya Engkau yang aku mintai pertolongan. Tunjukkanlah aku kepada jalan yang lurus. Jalannya orang-orang yang Engkau beri keni’matan, yang tidak dimurkai dan tidak sama sesat.',
                'audio' => route('audio.gerakan', ['kode' => 'al-fatihah']),
            ],
            [
                'kode'  => 'surat-pendek',
                'nama'  => 'Membaca Surat Pendek (Al-Ikhlas)',
                'arab'  => 'قُلْ هُوَ اللّٰهُ اَحَدٌ ۝١ اَللّٰهُ الصَّمَدُ ۝٢ لَمْ يَلِدْ وَلَمْ يُوْلَدْ ۝٣ وَلَمْ يَكُنْ لَّهٗ كُفُوًا اَحَدٌ ۝٤',
                'latin' => 'Qul huwallaahu ahad. Allaahush-shamad. Lam yalid wa lam yuulad. Wa lam yakul lahuu kufuwan ahad.',
                'arti'  => 'Katakanlah (Nabi Muhammad), “Dialah Allah Yang Maha Esa. Allah tempat meminta segala sesuatu. Dia tidak beranak dan tidak pula diperanakkan, serta tidak ada sesuatu pun yang setara dengan-Nya.”',
                'audio' => route('audio.gerakan', ['kode' => 'al-ikhlas']),
            ],
            [
                'kode'  => 'ruku',
                'nama'  => 'Ruku',
                'arab'  => 'سُبْحَانَكَ اللّهُمَّ رَبَّناَ وَبِحَمْدِكَ اَللّهُمَّ اغْفِرْلِى',
                'latin' => 'Subhaanaka allaahuma robbanaa wabihamdika allaahumaghfirlii.',
                'arti'  => 'Maha suci Engkau, ya Allah, dan dengan memuji kepada Engkau, ya Allah, aku memohon ampun.',
                'audio' => route('audio.gerakan', ['kode' => 'ruku']),
            ],
            [
                'kode'  => 'itidal',
                'nama'  => 'I\'tidal',
                'arab'  => 'سَمِعَ اللَّهُ لِمَنْ حَمِدَهُ. رَبَّنَا وَلَكَ اْلحَم',
                'latin' => 'Sami’a Allohu liman hamidah. Robbanaa walakalhamdu',
                'arti'  => 'Allah mendengar pujian dari orang yang memuji-Nya, Wahai Rabb kami, bagi-Mu segala puji',
                'audio' => route('audio.gerakan', ['kode' => 'itidal']),
            ],
            [
                'kode'  => 'sujud-1',
                'nama'  => 'Sujud Pertama',
                'arab'  => 'سُبْحَانَكَ اللّٰهُمَّ رَبَّنَا وَبِحَمْدِكَ اَللّٰهُمَّ اغْفِرْلِيْ',
                'latin' => 'Subhaanaka allaahumma robbanaa wabihamdika allaahumaghfirlii.',
                'arti'  => 'Maha suci Engkau, ya Allah, Tuhan kami, dan dengan memuji kepada Engkau, ya Allah, ampunilah aku.',
                'audio' => route('audio.gerakan', ['kode' => 'sujud']),
            ],
            [
                'kode'  => 'duduk-antara-sujud',
                'nama'  => 'Duduk di Antara Dua Sujud',
                'arab'  => 'اَللّهُمَ اغْفِرْلِيْ وارْحَمنِيْ وَاجْبُرْنِيْ وَاهْدِنِيْ وَارْزُقْنِيْ',
                'latin' => 'Allaahummaghfirlii warhamnii wajburnii wahdinii warzuqnii.',
                'arti'  => 'Ya Allah ampunilah aku, kasihanilah aku, cukupilah aku, tunjukilah aku, dan berilah rizki untukku.',
                'audio' => route('audio.gerakan', ['kode' => 'duduk-antara-sujud']),
            ],
            [
                'kode'  => 'sujud-2',
                'nama'  => 'Sujud Kedua',
                'arab'  => 'سُبْحَانَكَ اللّٰهُمَّ رَبَّنَا وَبِحَمْدِكَ اَللّٰهُمَّ اغْفِرْلِيْ',
                'latin' => 'Subhaanaka allaahumma robbanaa wabihamdika allaahumaghfirlii.',
                'arti'  => 'Maha suci Engkau, ya Allah, Tuhan kami, dan dengan memuji kepada Engkau, ya Allah, ampunilah aku.',
                'audio' => route('audio.gerakan', ['kode' => 'sujud']),
            ],
            [
                'kode'  => 'tasyahud-awal',
                'nama'  => 'Tasyahud Awal',
                'arab'  => 'اَلتَّحِيَّاتُ لِلّهِ وَالصَّلَوَاتُ وَالطَّيِّباَتُ. اَلسَّلاَمُ عَلَيْكَ أَيُّهاَ النَّبِيُّوَرَحْمَةُ اللهِ وَبَرَكاَتُهُ. اَلسَّلاَمُ عَلَيْناَ وَعَلَى عِباَدِاللهِ الصَّالِحِيْنَأَشْهَدُ اَنْ لاَاِلَهَاِلاَّ اللهِ وَأَشْهَدُ أَنَّ مُحَمَّدًا عَبْدُهُ وَرَسُوْلُهُ.',
                'latin' => 'Attahiyyaatu lillaahi washsholawaatu waththoyyibaat. Assalaamu ‘alaika ayyuhannabiyyu warohmatullaahi wabarokaatuh. Assalaamu’alainaa wa’ala ‘ibaadillaahi shshoolihiin. Asyhadu anlaa ilaaha illallaah waasyhadu annamuhammadan ‘abduhu warosuuluh.',
                'arti'  => 'Segala kehormatan, kebahagiaan dan kebagusan adalah kepunyaan Allah. Semoga keselamatan bagi Engkau, ya Nabi Muhammad, beserta rahmat dan kebahagiaan Allah. Mudah-mudahan keselamatan juga bagi kita sekalian dan hamba-hamba Allah yang baik-baik. Aku bersaksi bahwa tiada Tuhan melainkan Allah dan aku bersaksi bahwa Muhammad itu hamba Allah dan utusan-Nya',
                'audio' => route('audio.gerakan', ['kode' => 'tasyahud-awal']),
                'hanya_jika_rakaat_lebih_dari' => 2,
            ],
            [
                'kode'  => 'tasyahud-akhir',
                'nama'  => 'Tasyahud Akhir',
                'arab'  => 'اَللّهُمَّ إِنِّى أَعُوْذُبِكَ مِنْ عَذَابِ جَهَنَّمَ, وَمِنْ عَذَابِ الْقَبْرِ, وَمِنْ فِتْنَةِ الْمَحْياَ وَالْمَمَاتِ, وَمِنْ شَرِّ فِتْنَةِ الْمَسِيْحِ الدَّجَّالِ',
                'latin' => 'Allaahumma innii a’uudzubika min ‘adzaabi jahannam. Wamin ‘adzaabil qobri. Wamin fitnatil mahyaa walmamaati. Wamin syarri fitnatil masiihiddadjaal.',
                'arti'  => 'Ya Allah aku berlindung kepada Engkau dari siksa jahannam dan siksa kubur, begitu juga dari fitnah hidup dan mati, serta dari jahatnya fitnah dajjal (pengembara yang dusta)',
                'audio' => route('audio.gerakan', ['kode' => 'tasyahud-akhir']),
            ],
            [
                'kode'  => 'salam',
                'nama'  => 'Salam',
                'arab'  => 'السَّلاَمُ عَلَيْكُمْ وَرَحْمَةُ اللهِ وَبَرَكَاتُهُ',
                'latin' => 'Assalaamua’alaikum warohmatullaahi wabarokaatuh.',
                'arti'  => 'Berbahagialah kamu sekalian dengan rahmat dan berkah Allah.',
                'audio' => route('audio.gerakan', ['kode' => 'salam']),
            ],
        ];
    }

    /**
     * Halaman "Panduan Sholat Wajib" — daftar 5 sholat.
     */
    public function index()
    {
        return view('mode-dewasa.pilih-sholat', [
            'daftarSholat' => $this->daftarSholat(),
        ]);
    }

    /**
     * Halaman "Panduan Rukun Fiqih Sholat" — accordion rukun untuk satu waktu sholat.
     * Rukun yang bersyarat (mis. Tasyahud Awal) disaring & dinomori ulang
     * berdasarkan jumlah rakaat sholat yang dipilih.
     */
    public function tampilkanPanduan(string $sholat)
    {
        $data = collect($this->daftarSholat())->firstWhere('slug', $sholat);

        abort_if(! $data, 404);

        $rukun = collect($this->daftarRukun($data['slug']))
            ->filter(function (array $item) use ($data) {
                if (! isset($item['hanya_jika_rakaat_lebih_dari'])) {
                    return true;
                }

                return $data['rakaat'] > $item['hanya_jika_rakaat_lebih_dari'];
            })
            ->values()
            ->map(function (array $item, int $i) {
                $item['urutan'] = $i + 1;

                return $item;
            })
            ->all();

        return view('mode-dewasa.panduan', [
            'sholat'      => $data,
            'daftarRukun' => $rukun,
        ]);
    }

    /**
     * Melayani file audio niat dengan Content-Type yang benar.
     * Diperlukan agar audio tetap dapat diputar saat "php artisan serve"
     * (server bawaan PHP tidak mengirim MIME audio/mpeg untuk file .mp3).
     */
    public function audioNiat(string $sholat)
    {
        $niat = $this->daftarNiat()[$sholat] ?? null;

        abort_if(! $niat || empty($niat['audio']), 404);

        $path = public_path($niat['audio']);

        abort_if(! is_file($path), 404);

        return response()->file($path, [
            'Content-Type'  => 'audio/mpeg',
            'Cache-Control' => 'public, max-age=86400',
        ]);
    }

    /**
     * Melayani file audio bacaan gerakan sholat dengan Content-Type yang benar.
     * Dipakai bersama oleh Mode Dewasa & Mode Anak.
     */
    public function audioGerakan(string $kode)
    {
        $peta = [
            'takbir'             => 'Allah huakbar.mpeg',
            'iftitah'            => 'Doa Iftitah.mpeg',
            'taawudz'            => 'Taawudz.mp3',
            'basmalah'           => 'Basmalah.mp3',
            'al-fatihah'         => 'Al-Fatihah.mp3',
            'al-ikhlas'          => 'al-ikhlas.mpeg',
            'ruku'               => 'ruku.mpeg',
            'itidal'             => ". I'tidal.mpeg",
            'sujud'              => 'sujud.mpeg',
            'duduk-antara-sujud' => 'duduk di antara dua sujud.mpeg',
            'tasyahud-awal'      => 'tasyahud awal.mpeg',
            'tasyahud-akhir'     => 'tasyahud akhir.mpeg',
            'salam'              => 'salam.mpeg',
        ];

        abort_unless(isset($peta[$kode]), 404);

        $path = public_path('audio/' . $peta[$kode]);

        abort_unless(is_file($path), 404);

        return response()->file($path, [
            'Content-Type'  => 'audio/mpeg',
            'Cache-Control' => 'public, max-age=86400',
        ]);
    }
}