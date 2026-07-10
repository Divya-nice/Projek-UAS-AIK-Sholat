<?php

namespace App\Http\Controllers;

class ModeAnakController extends Controller
{
    /**
     * Data 5 sholat wajib untuk ditampilkan di halaman pilih sholat (Mode Anak).
     */
    protected function daftarSholat(): array
    {
        return [
            [
                'slug'   => 'subuh',
                'nama'   => 'Subuh',
                'emoji'  => '🌅',
                'rakaat' => 2,
                'warna'  => 'from-orange-300 to-pink-300',
            ],
            [
                'slug'   => 'dzuhur',
                'nama'   => 'Dzuhur',
                'emoji'  => '☀️',
                'rakaat' => 4,
                'warna'  => 'from-yellow-300 to-orange-300',
            ],
            [
                'slug'   => 'ashar',
                'nama'   => 'Ashar',
                'emoji'  => '🌤️',
                'rakaat' => 4,
                'warna'  => 'from-sky-300 to-blue-300',
            ],
            [
                'slug'   => 'maghrib',
                'nama'   => 'Maghrib',
                'emoji'  => '🌆',
                'rakaat' => 3,
                'warna'  => 'from-purple-300 to-indigo-300',
            ],
            [
                'slug'   => 'isya',
                'nama'   => 'Isya',
                'emoji'  => '🌙',
                'rakaat' => 4,
                'warna'  => 'from-indigo-400 to-purple-500',
            ],
        ];
    }

    protected function daftarNiat(): array
    {
        return [
            'subuh' => [
                'arab'  => 'أُصَلِّى فَرْضَ الصُّبْحِ رَكْعَتَيْنِ مُسْتَقْبِلَ الْقِبْلَةِ أَدَاءً لِلّٰهِ تَعَالَى',
                'latin' => 'Ushalli fardhash shubhi rak\'ataini mustaqbilal qiblati adaa-an lillaahi ta\'aalaa.',
                'arti'  => '"Aku niat mengerjakan sholat fardhu Subuh dua rakaat menghadap kiblat, saat ini, karena Allah Ta\'ala."',
                'audio' => 'audio/niat-subuh.mp3',
            ],
            'dzuhur' => [
                'arab'  => 'أُصَلِّى فَرْضَ الظُّهْرِ أَرْبَعَ رَكَعَاتٍ مُسْتَقْبِلَ الْقِبْلَةِ أَدَاءً لِلَّهِ تَعَالَ',
                'latin' => 'Ushollii fardhoz Dzuhri arba’a rokaatin mustaqbilal qiblati adaa’an lilaahi ta’aalaa.',
                'arti'  => '"Saya (berniat) mengerjakan salat fardhu Dzuhur 4 raka’at menghadap kiblat, (sholat sendiri) karena Allah Ta’ala."',
                'audio' => 'audio/niat-dzuhur.mp3',
            ],
            'ashar' => [
                'arab'  => 'أُصَلِّى فَرْضَ الْعَصْرِأَرْبَعَ رَكَعاَتٍ مُسْتَقْبِلَ الْقِبْلَةِ أَدَاءً لِلّٰهِ تَعَالَى',
                'latin' => 'Ushalli fardhal \'ashri arba\'a raka\'aatain mustaqbilal qiblati adaa-an lillahi ta\'aala',
                'arti'  => '"Aku niat melakukan sholat fardhu Ashar empat rakaat sambil menghadap kiblat saat ini karena Allah Ta\'ala."',
                'audio' => 'audio/niat-ashar.mp3',
            ],
            'maghrib' => [
                'arab'  => 'أُصَلِّى فَرْضَ المَغْرِبِ ثَلاَثَ رَكَعاَتٍ مُسْتَقْبِلَ الْقِبْلَةِ أَدَاءً لله تَعَالَى',
                'latin' => 'Ushalli fardho maghribi tsalaatsa raka’aatin mustaqbilal qiblati adaa,an lillaahi ta’aala.',
                'arti'  => '"Saya melakukan shalat fardhu maghrib sebanyak tiga rakaat dengan menghadap kiblat, pada waktunya karena Allah Ta’ala."',
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
     * Daftar gerakan/rukun sholat (termasuk Niat), urut dari Niat sampai Salam.
     * Niat disuntikkan sesuai waktu sholat, sama seperti Mode Dewasa.
     */
    protected function daftarGerakan(string $slug): array
    {
        $niat = $this->daftarNiat()[$slug] ?? ['arab' => '', 'latin' => '', 'arti' => ''];

        $gerakan = [
            [
                'emoji'  => '🧠',
                'nama'   => 'Niat Sholat',
                'arab'   => $niat['arab'],
                'latin'  => $niat['latin'],
                'arti'   => $niat['arti'],
                'audio'  => route('mode-dewasa.audio', ['sholat' => $slug]),
            ],
            [
                'urutan' => 1,
                'emoji'  => '🤲',
                'nama'   => 'Takbiratul Ihram',
                'arab'   => 'اَللهُ أَكْبَرُ',
                'latin'  => "Allaahu Akbar",
                'jumlah' => '1x',
                'arti'   => '"Allah Maha Besar!" Angkat dua tangan sejajar telinga sambil ucapkan takbir ya!',
                'audio'  => route('audio.gerakan', ['kode' => 'takbir']),
            ],
            [
                'urutan' => 2,
                'emoji'  => '🙏',
                'nama'   => 'Bersedekap dan Doa Iftitah',
                'arab'   => 'اَللّهُمَّ باَعِدْ بَيْنِى وَبَيْنَ خَطَاياَيَ كَمَا باَعَدْتَ بَيْنَ الْمَشْرِقِ وَالْمَغْرِبِاَللّهُمَّ نَقِّنِى مِنَ الْخَطَاياَ كَماَ يُنَقَّى الثَّوْبُ اْلأَبْيَضُ مِنَ الدَّنَسِاَللّهُمَّ اغْسِلْ خَطَاياَيَ باِلْماَءِ وَالثَّلْجِ وَالْبَرَدِ.',
                'latin'  => "Allaahumma baa’id bainii wabainaa khotoo yaa ya kamaa baa ‘adta bainal masyriqi wal maghrib. Allaahumma naqqinii minal khotoo yaa kamaa yunqqots tsaubul abyadhuu minaddanas. Allaahummaghsil khotoo yaa ya bil maa i wats tsalji walbarod",
                'jumlah' => '1x',
                'arti'   => '"Ya Allah, jauhkanlah antara diriku dan di antara kesalahan-kesalahanku sebagaimana Engkau jauhkan antara timur dan barat. Ya Allah, bersihkanlah aku dari kesalahan sebagaimana dibersihkannya kain putih dari kotoran. Ya Allah, cucilah kesalahan-kesalahanku dengan air, salju dan embun." Taruh tangan kanan di atas tangan kiri di dada ya!',
                'audio'  => route('audio.gerakan', ['kode' => 'iftitah']),
            ],
            [
                'urutan' => 3,
                'emoji'  => '📖',
                'nama'   => 'Membaca Al-Fatihah',
                'arab'   => 'أَعُوذُ بِاللَّهِ مِنَ الشَّيْطَانِ الرَّجِيمِ بِسْمِ اللّهِ الرَّحْمَنِ الرَّحِيْ اَلْحَمْدُ لِلّٰهِ رَبِّ الْعٰلَمِیْنَۙ, الرَّحْمٰنِ الرَّحِیْمِۙ, مٰلِكِ یَوْمِ الدِّیْنِؕ, اِیَّاكَ نَعْبُدُ وَ اِیَّاكَ نَسْتَعِیْنُؕ, اِهْدِنَا الصِّرَاطَ الْمُسْتَقِیْمَۙ, صِرَاطَ الَّذِیْنَ اَنْعَمْتَ عَلَیْهِمْ غَیْرِ الْمَغْضُوْبِ عَلَیْهِمْ وَ لَا الضَّآلِّیْنَ۠',
                'latin'  => "Au-dzu billa-himinasy syaita nirraji-m. Bismillahirrahmannirrahiim. Al-ḥamdu lillāhi rabbil-‘ālamīn. Ar-raḥmānir-raḥīm. Māliki yaumid-dīn. Iyyāka na’budu wa iyyāka nasta’īn. Ihdinaṣ-ṣirāṭal-mustaqīm. Sirāṭallażīna an’amta ‘alaihim gairil-magḍụbi ‘alaihim wa laḍ-ḍāllīn.",
                'jumlah' => 'Tiap rakaat',
                'arti'   => '"Aku berlindung pada Allah, dari syaithan yang terkutuk. Atas nama Allah, maha Pemurah, maha Pengasih. Segala puji bagi Allah, Tuhan semesta alam. Yang maha Pemurah lagi Maha Pengasih, Yang mengadili pada hari Qiyamat. Hanya Engkau yang aku sembah dan hanya Engkau yang aku mintai pertolongan. Tunjukkanlah aku kepada jalan yang lurus. Jalannya orang-orang yang Engkau beri keni’matan, yang tidak dimurkai dan tidak sama sesat. " Baca Al-Fatihah pelan-pelan ya!',
                'audio'  => route('audio.gerakan', ['kode' => 'al-fatihah']),
            ],
            [
                'urutan' => 4,
                'emoji'  => '📗',
                'nama'   => 'Membaca Surat Pendek (Al-Ikhlas)',
                'arab'   => 'قُلْ هُوَ اللّٰهُ اَحَدٌ ۝١ اَللّٰهُ الصَّمَدُ ۝٢ لَمْ يَلِدْ وَلَمْ يُوْلَدْ ۝٣ وَلَمْ يَكُنْ لَّهٰ كُفُوًا اَحَدٌ ۝٤',
                'latin'  => "Qul huwallaahu ahad. Allaahush-shamad. Lam yalid wa lam yuulad. Wa lam yakul lahuu kufuwan ahad.",
                'jumlah' => 'Setelah Al-Fatihah',
                'arti'   => '"Katakanlah (Nabi Muhammad), “Dialah Allah Yang Maha Esa. Allah tempat meminta segala sesuatu. Dia tidak beranak dan tidak pula diperanakkan, serta tidak ada sesuatu pun yang setara dengan-Nya.”" Dibaca setelah Al-Fatihah ya!',
                'audio'  => route('audio.gerakan', ['kode' => 'al-ikhlas']),
            ],
            [
                'urutan' => 4,
                'emoji'  => '🙇',
                'nama'   => 'Gerakan Ruku',
                'arab'   => 'سُبْحَانَكَ اللّهُمَّ رَبَّناَ وَبِحَمْدِكَ اَللّهُمَّ اغْفِرْلِى',
                'latin'  => "Subhaanaka allaahuma robbanaa wabihamdika allaahumaghfirlii.",
                'jumlah' => '3x',
                'arti'   => '"Maha suci Engkau, ya Allah, dan dengan memuji kepada Engkau, ya Allah, aku memohon ampun." Badan membungkuk, tangan pegang lutut, punggung lurus datar ya!',
                'audio'  => route('audio.gerakan', ['kode' => 'ruku']),
            ],
            [
                'urutan' => 5,
                'emoji'  => '🧍',
                'nama'   => "Gerakan I'tidal",
                'arab'   => 'سَمِعَ اللَّهُ لِمَنْ حَمِدَهُ رَبَّنَا لَكَ الْحَمْدُ',
                'latin'  => "Sami'allaahu liman hamidah, Rabbanaa lakal hamd",
                'jumlah' => '1x',
                'arti'   => '"Allah mendengar orang yang memuji-Nya. Ya Allah, bagi-Mu segala puji." Bangun tegak dari ruku ya!',
                'audio'  => route('audio.gerakan', ['kode' => 'itidal']),
            ],
            [
                'urutan' => 6,
                'emoji'  => '🛐',
                'nama'   => 'Gerakan Sujud',
                'arab'   => 'سُبْحَانَكَ اللّٰهُمَّ رَبَّنَا وَبِحَمْدِكَ اَللّٰهُمَّ اغْفِرْلِيْ',
                'latin'  => "Subhaanaka allaahumma robbanaa wabihamdika allaahumaghfirlii.",
                'jumlah' => '3x',
                'arti'   => '"Maha suci Engkau, ya Allah, Tuhan kami, dan dengan memuji kepada Engkau, ya Allah, ampunilah aku."',
                'audio'  => route('audio.gerakan', ['kode' => 'sujud']),
            ],
            [
                'urutan' => 7,
                'emoji'  => '🧎',
                'nama'   => 'Duduk Antara Dua Sujud',
                'arab'   => 'رَبِّ اغْفِرْ لِي وَارْحَمْنِي وَاجْبُرْنِي وَارْفَعْنِي وَارْزُقْنِي وَاهْدِنِي وَعَافِنِي وَاعْفُ عَنِّي',
                'latin'  => "Rabbighfirlii warhamnii wajburnii warfa'nii warzuqnii wahdinii wa'aafinii wa'fu 'annii",
                'jumlah' => '1x',
                'arti'   => '"Ya Allah, ampuni aku, sayangi aku, cukupkan aku, angkat derajatku, beri aku rezeki dan petunjuk."',
                'audio'  => route('audio.gerakan', ['kode' => 'duduk-antara-sujud']),
            ],
            [
                'urutan' => 8,
                'emoji'  => '🛐',
                'nama'   => 'Sujud Kedua',
                'arab'   => 'سُبْحَانَكَ اللّٰهُمَّ رَبَّنَا وَبِحَمْدِكَ اَللّٰهُمَّ اغْفِرْلِيْ',
                'latin'  => "Subhaanaka allaahumma robbanaa wabihamdika allaahumaghfirlii.",
                'jumlah' => '3x',
                'arti'   => '"Maha suci Engkau, ya Allah, Tuhan kami, dan dengan memuji kepada Engkau, ya Allah, ampunilah aku."',
                'audio'  => route('audio.gerakan', ['kode' => 'sujud']),
            ],
            [
                'urutan' => 9,
                'emoji'  => '⬆️',
                'nama'   => 'Berdiri ke Rakaat Berikutnya',
                'arab'   => 'اَللهُ أَكْبَرُ',
                'latin'  => "Allaahu Akbar",
                'jumlah' => '1x',
                'arti'   => '"Allah Maha Besar!" Bangun lagi ke rakaat berikutnya sambil takbir, tanpa angkat tangan ya."',
                'audio'  => route('audio.gerakan', ['kode' => 'takbir']),
            ],
            [
                'urutan' => 10,
                'emoji'  => '👉',
                'nama'   => 'Tasyahud Awal',
                'arab'   => 'اَلتَّحِيَّاتُ لِلّهِ وَالصَّلَوَاتُ وَالطَّيِّباَتُ. اَلسَّلاَمُ عَلَيْكَ أَيُّهاَ النَّبِيُّوَرَحْمَةُ اللهِ وَبَرَكاَتُهُ. اَلسَّلاَمُ عَلَيْناَ وَعَلَى عِباَدِاللهِ الصَّالِحِيْنَأَشْهَدُ اَنْ لاَاِلَهَاِلاَّ اللهِوَأَشْهَدُ أَنَّ مُحَمَّدًا عَبْدُهُ وَرَسُوْلُهُ',
                'latin'  => "Attahiyyaatu lillaahi washsholawaatu waththoyyibaat. Assalaamu ‘alaika ayyuhannabiyyu warohmatullaahi wabarokaatuh. Assalaamu’alainaa wa’ala ‘ibaadillaahi shshoolihiin. Asyhadu anlaa ilaaha illallaah waasyhadu annamuhammadan ‘abduhu warosuuluh.",
                'jumlah' => '1x (rakaat ke-2)',
                'arti'   => '"Segala kehormatan, kebahagiaan dan kebagusan adalah kepunyaan Allah. Semoga keselamatan bagi Engkau, ya Nabi Muhammad, beserta rahmat dan kebahagiaan Allah. Mudah-mudahan keselamatan juga bagi kita sekalian dan hamba-hamba Allah yang baik-baik. Aku bersaksi bahwa tiada Tuhan melainkan Allah dan aku bersaksi bahwa Muhammad itu hamba Allah dan utusan-Nya"',
                'audio'  => route('audio.gerakan', ['kode' => 'tasyahud-awal']),
                'hanya_jika_rakaat_lebih_dari' => 2,
            ],
            [
                'urutan' => 11,
                'emoji'  => '🤲',
                'nama'   => 'Tasyahud Akhir',
                'arab'   => 'اَللّهُمَّ إِنِّى أَعُوْذُبِكَ مِنْ عَذَابِ جَهَنَّمَ, وَمِنْ عَذَابِ الْقَبْرِ, وَمِنْ فِتْنَةِ الْمَحْياَ وَالْمَمَاتِ, وَمِنْ شَرِّ فِتْنَةِ الْمَسِيْحِ الدَّجَّالِ',
                'latin'  => "Allaahumma innii a’uudzubika min ‘adzaabi jahannam. Wamin ‘adzaabil qobri. Wamin fitnatil mahyaa walmamaati. Wamin syarri fitnatil masiihiddadjaal.",
                'jumlah' => '1x',
                'arti'   => '"Ya Allah aku berlindung kepada Engkau dari siksa jahannam dan siksa kubur, begitu juga dari fitnah hidup dan mati, serta dari jahatnya fitnah dajjal (pengembara yang dusta)"',
                'audio'  => route('audio.gerakan', ['kode' => 'tasyahud-akhir']),
            ],
            [
                'urutan' => 12,
                'emoji'  => '👋',
                'nama'   => 'Salam',
                'arab'   => 'اَلسَّلَامُ عَلَيْكُمْ وَرَحْمَةُ اللَّهِ',
                'latin'  => "Assalaamu'alaikum warahmatullaah",
                'jumlah' => '2x (kanan & kiri)',
                'arti'   => 'Semoga keselamatan & rahmat Allah untukmu! Tengok kanan lalu kiri ya, sholat selesai!',
                'audio'  => route('audio.gerakan', ['kode' => 'salam']),
            ],
        ];

        $jumlahRakaat = collect($this->daftarSholat())
            ->firstWhere('slug', $slug)['rakaat'] ?? 2;

        $gerakan = array_values(array_filter($gerakan, function ($item) use ($jumlahRakaat) {
        if (isset($item['hanya_jika_rakaat_lebih_dari'])) {
            return $jumlahRakaat > $item['hanya_jika_rakaat_lebih_dari'];
        }

        return true;
        }));

        foreach ($gerakan as $index => $item) {
            $gerakan[$index]['urutan'] = $index + 1;
        }

        return $gerakan;
    }

    /**
     * Menampilkan halaman "Pilih Sholat yang Mau Kamu Pelajari Hari Ini".
     */
    public function index()
    {
        return view('mode-anak.pilih-sholat', [
            'daftarSholat' => $this->daftarSholat(),
        ]);
    }

    /**
     * Menampilkan halaman daftar & detail gerakan (accordion) untuk satu waktu sholat.
     */
    public function tampilkanGerakan(string $sholat)
    {
        $data = collect($this->daftarSholat())->firstWhere('slug', $sholat);

        abort_if(! $data, 404);

        return view('mode-anak.gerakan', [
            'sholat'        => $data,
            'daftarGerakan' => $this->daftarGerakan($data['slug']),
        ]);
    }
}