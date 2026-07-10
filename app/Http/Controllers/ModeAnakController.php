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
                'arti'   => 'Allah Maha Besar! Angkat dua tangan sejajar telinga sambil ucapkan takbir ya!',
                'audio'  => route('audio.gerakan', ['kode' => 'takbir']),
            ],
            [
                'urutan' => 2,
                'emoji'  => '🙏',
                'nama'   => 'Bersedekap',
                'arab'   => 'سُبْحَانَكَ اللَّهُمَّ وَبِحَمْدِكَ',
                'latin'  => "Subhaanakallaahumma wa bihamdik",
                'jumlah' => '1x',
                'arti'   => 'Maha Suci Engkau ya Allah, dengan memuji-Mu. Taruh tangan kanan di atas tangan kiri di dada ya!',
                'audio'  => route('audio.gerakan', ['kode' => 'iftitah']),
            ],
            [
                'urutan' => 3,
                'emoji'  => '📖',
                'nama'   => 'Membaca Al-Fatihah',
                'arab'   => 'بِسْمِ اللَّهِ الرَّحْمَٰنِ الرَّحِيمِ',
                'latin'  => "Bismillaahir rahmaanir rahiim",
                'jumlah' => 'Tiap rakaat',
                'arti'   => 'Dengan nama Allah Yang Maha Pengasih lagi Maha Penyayang. Baca Al-Fatihah pelan-pelan ya!',
                'audio'  => route('audio.gerakan', ['kode' => 'al-fatihah']),
            ],
            [
                'urutan' => 4,
                'emoji'  => '📗',
                'nama'   => 'Membaca Surat Pendek (Al-Ikhlas)',
                'arab'   => 'قُلْ هُوَ اللّٰهُ اَحَدٌ ۝١ اَللّٰهُ الصَّمَدُ ۝٢ لَمْ يَلِدْ وَلَمْ يُوْلَدْ ۝٣ وَلَمْ يَكُنْ لَّهٰ كُفُوًا اَحَدٌ ۝٤',
                'latin'  => "Qul huwallaahu ahad. Allaahush-shamad. Lam yalid wa lam yuulad. Wa lam yakul lahuu kufuwan ahad.",
                'jumlah' => 'Setelah Al-Fatihah',
                'arti'   => 'Ini surat Al-Ikhlas: Allah Maha Esa, tempat kita meminta segala sesuatu. Dibaca setelah Al-Fatihah ya!',
                'audio'  => route('audio.gerakan', ['kode' => 'al-ikhlas']),
            ],
            [
                'urutan' => 4,
                'emoji'  => '🙇',
                'nama'   => 'Gerakan Ruku',
                'arab'   => 'سُبْحَانَ رَبِّيَ الْعَظِيمِ وَبِحَمْدِهِ',
                'latin'  => "Subhaana robbiyal 'adziimi wa bihamdih",
                'jumlah' => '3x',
                'arti'   => 'Maha Suci Tuhanku Yang Maha Agung. Badan membungkuk, tangan pegang lutut, punggung lurus datar ya!',
                'audio'  => route('audio.gerakan', ['kode' => 'ruku']),
            ],
            [
                'urutan' => 5,
                'emoji'  => '🧍',
                'nama'   => "Gerakan I'tidal",
                'arab'   => 'سَمِعَ اللَّهُ لِمَنْ حَمِدَهُ رَبَّنَا لَكَ الْحَمْدُ',
                'latin'  => "Sami'allaahu liman hamidah, Rabbanaa lakal hamd",
                'jumlah' => '1x',
                'arti'   => 'Allah mendengar orang yang memuji-Nya. Ya Allah, bagi-Mu segala puji. Bangun tegak dari ruku ya!',
                'audio'  => route('audio.gerakan', ['kode' => 'itidal']),
            ],
            [
                'urutan' => 6,
                'emoji'  => '🛐',
                'nama'   => 'Gerakan Sujud',
                'arab'   => 'سُبْحَانَكَ اللّٰهُمَّ رَبَّنَا وَبِحَمْدِكَ اَللّٰهُمَّ اغْفِرْلِيْ',
                'latin'  => "Subhaanaka allaahumma robbanaa wabihamdika allaahumaghfirlii.",
                'jumlah' => '3x',
                'arti'   => 'Maha suci Engkau, ya Allah, Tuhan kami, dan dengan memuji kepada Engkau, ya Allah, ampunilah aku.',
                'audio'  => route('audio.gerakan', ['kode' => 'sujud']),
            ],
            [
                'urutan' => 7,
                'emoji'  => '🧎',
                'nama'   => 'Duduk Antara Dua Sujud',
                'arab'   => 'رَبِّ اغْفِرْ لِي وَارْحَمْنِي وَاجْبُرْنِي وَارْفَعْنِي وَارْزُقْنِي وَاهْدِنِي وَعَافِنِي وَاعْفُ عَنِّي',
                'latin'  => "Rabbighfirlii warhamnii wajburnii warfa'nii warzuqnii wahdinii wa'aafinii wa'fu 'annii",
                'jumlah' => '1x',
                'arti'   => 'Ya Allah, ampuni aku, sayangi aku, cukupkan aku, angkat derajatku, beri aku rezeki dan petunjuk.',
                'audio'  => route('audio.gerakan', ['kode' => 'duduk-antara-sujud']),
            ],
            [
                'urutan' => 8,
                'emoji'  => '🛐',
                'nama'   => 'Sujud Kedua',
                'arab'   => 'سُبْحَانَكَ اللّٰهُمَّ رَبَّنَا وَبِحَمْدِكَ اَللّٰهُمَّ اغْفِرْلِيْ',
                'latin'  => "Subhaanaka allaahumma robbanaa wabihamdika allaahumaghfirlii.",
                'jumlah' => '3x',
                'arti'   => 'Maha suci Engkau, ya Allah, Tuhan kami, dan dengan memuji kepada Engkau, ya Allah, ampunilah aku.',
                'audio'  => route('audio.gerakan', ['kode' => 'sujud']),
            ],
            [
                'urutan' => 9,
                'emoji'  => '⬆️',
                'nama'   => 'Berdiri ke Rakaat Berikutnya',
                'arab'   => 'اَللهُ أَكْبَرُ',
                'latin'  => "Allaahu Akbar",
                'jumlah' => '1x',
                'arti'   => 'Allah Maha Besar! Bangun lagi ke rakaat berikutnya sambil takbir, tanpa angkat tangan ya.',
                'audio'  => route('audio.gerakan', ['kode' => 'takbir']),
            ],
            [
                'urutan' => 10,
                'emoji'  => '👉',
                'nama'   => 'Tasyahud Awal',
                'arab'   => 'اَلتَّحِيَّاتُ لِلَّهِ وَالصَّلَوَاتُ وَالطَّيِّبَاتُ',
                'latin'  => "Attahiyyaatu lillaahi wash-shalawaatu wath-thayyibaat",
                'jumlah' => '1x (rakaat ke-2)',
                'arti'   => 'Segala penghormatan, sholawat dan kebaikan hanya untuk Allah. Duduk sambil telunjuk kanan menunjuk ya!',
                'audio'  => route('audio.gerakan', ['kode' => 'tasyahud-awal']),
            ],
            [
                'urutan' => 11,
                'emoji'  => '🤲',
                'nama'   => 'Tasyahud Akhir',
                'arab'   => 'اَللَّهُمَّ صَلِّ عَلَى مُحَمَّدٍ وَعَلَى آلِ مُحَمَّدٍ',
                'latin'  => "Allaahumma shalli 'alaa Muhammad wa 'alaa aali Muhammad",
                'jumlah' => '1x',
                'arti'   => 'Ya Allah, limpahkan sholawat kepada Nabi Muhammad. Duduk tawarruk di rakaat terakhir ya!',
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