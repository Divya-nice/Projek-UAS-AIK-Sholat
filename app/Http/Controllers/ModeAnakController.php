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

    /**
     * 12 gerakan/rukun sholat, urut dari Takbiratul Ihram sampai Salam.
     */
    protected function daftarGerakan(): array
    {
        return [
            [
                'urutan' => 1,
                'emoji'  => '🤲',
                'nama'   => 'Niat & Takbiratul Ihram',
                'arab'   => 'اَللهُ أَكْبَرُ',
                'latin'  => "Allaahu Akbar",
                'jumlah' => '1x',
                'arti'   => 'Allah Maha Besar! Ucapkan sambil angkat dua tangan ke atas, lalu niat sholat di dalam hati ya.',
            ],
            [
                'urutan' => 2,
                'emoji'  => '🙏',
                'nama'   => 'Bersedekap',
                'arab'   => 'سُبْحَانَكَ اللَّهُمَّ وَبِحَمْدِكَ',
                'latin'  => "Subhaanakallaahumma wa bihamdik",
                'jumlah' => '1x',
                'arti'   => 'Maha Suci Engkau ya Allah, dengan memuji-Mu. Taruh tangan kanan di atas tangan kiri di dada ya!',
            ],
            [
                'urutan' => 3,
                'emoji'  => '📖',
                'nama'   => 'Membaca Al-Fatihah',
                'arab'   => 'بِسْمِ اللَّهِ الرَّحْمَٰنِ الرَّحِيمِ',
                'latin'  => "Bismillaahir rahmaanir rahiim",
                'jumlah' => 'Tiap rakaat',
                'arti'   => 'Dengan nama Allah Yang Maha Pengasih lagi Maha Penyayang. Baca Al-Fatihah pelan-pelan ya!',
            ],
            [
                'urutan' => 4,
                'emoji'  => '🙇',
                'nama'   => 'Gerakan Ruku',
                'arab'   => 'سُبْحَانَ رَبِّيَ الْعَظِيمِ وَبِحَمْدِهِ',
                'latin'  => "Subhaana robbiyal 'adziimi wa bihamdih",
                'jumlah' => '3x',
                'arti'   => 'Maha Suci Tuhanku Yang Maha Agung. Badan membungkuk, tangan pegang lutut, punggung lurus datar ya!',
            ],
            [
                'urutan' => 5,
                'emoji'  => '🧍',
                'nama'   => "Gerakan I'tidal",
                'arab'   => 'سَمِعَ اللَّهُ لِمَنْ حَمِدَهُ رَبَّنَا لَكَ الْحَمْدُ',
                'latin'  => "Sami'allaahu liman hamidah, Rabbanaa lakal hamd",
                'jumlah' => '1x',
                'arti'   => 'Allah mendengar orang yang memuji-Nya. Ya Allah, bagi-Mu segala puji. Bangun tegak dari ruku ya!',
            ],
            [
                'urutan' => 6,
                'emoji'  => '🛐',
                'nama'   => 'Gerakan Sujud',
                'arab'   => 'سُبْحَانَ رَبِّيَ الْأَعْلَى وَبِحَمْدِهِ',
                'latin'  => "Subhaana robbiyal a'laa wa bihamdih",
                'jumlah' => '3x',
                'arti'   => 'Maha Suci Tuhanku Yang Maha Tinggi. Dahi, hidung, dua tangan, dua lutut & ujung kaki nempel lantai ya!',
            ],
            [
                'urutan' => 7,
                'emoji'  => '🧎',
                'nama'   => 'Duduk Antara Dua Sujud',
                'arab'   => 'رَبِّ اغْفِرْ لِي وَارْحَمْنِي وَاجْبُرْنِي وَارْفَعْنِي وَارْزُقْنِي وَاهْدِنِي وَعَافِنِي وَاعْفُ عَنِّي',
                'latin'  => "Rabbighfirlii warhamnii wajburnii warfa'nii warzuqnii wahdinii wa'aafinii wa'fu 'annii",
                'jumlah' => '1x',
                'arti'   => 'Ya Allah, ampuni aku, sayangi aku, cukupkan aku, angkat derajatku, beri aku rezeki dan petunjuk.',
            ],
            [
                'urutan' => 8,
                'emoji'  => '🛐',
                'nama'   => 'Sujud Kedua',
                'arab'   => 'سُبْحَانَ رَبِّيَ الْأَعْلَى وَبِحَمْدِهِ',
                'latin'  => "Subhaana robbiyal a'laa wa bihamdih",
                'jumlah' => '3x',
                'arti'   => 'Sama seperti sujud pertama ya! Setelah ini bangkit berdiri lagi atau duduk tasyahud.',
            ],
            [
                'urutan' => 9,
                'emoji'  => '⬆️',
                'nama'   => 'Berdiri ke Rakaat Berikutnya',
                'arab'   => 'اَللهُ أَكْبَرُ',
                'latin'  => "Allaahu Akbar",
                'jumlah' => '1x',
                'arti'   => 'Allah Maha Besar! Bangun lagi ke rakaat berikutnya sambil takbir, tanpa angkat tangan ya.',
            ],
            [
                'urutan' => 10,
                'emoji'  => '👉',
                'nama'   => 'Tasyahud Awal',
                'arab'   => 'اَلتَّحِيَّاتُ لِلَّهِ وَالصَّلَوَاتُ وَالطَّيِّبَاتُ',
                'latin'  => "Attahiyyaatu lillaahi wash-shalawaatu wath-thayyibaat",
                'jumlah' => '1x (rakaat ke-2)',
                'arti'   => 'Segala penghormatan, sholawat dan kebaikan hanya untuk Allah. Duduk sambil telunjuk kanan menunjuk ya!',
            ],
            [
                'urutan' => 11,
                'emoji'  => '🤲',
                'nama'   => 'Tasyahud Akhir',
                'arab'   => 'اَللَّهُمَّ صَلِّ عَلَى مُحَمَّدٍ وَعَلَى آلِ مُحَمَّدٍ',
                'latin'  => "Allaahumma shalli 'alaa Muhammad wa 'alaa aali Muhammad",
                'jumlah' => '1x',
                'arti'   => 'Ya Allah, limpahkan sholawat kepada Nabi Muhammad. Duduk tawarruk di rakaat terakhir ya!',
            ],
            [
                'urutan' => 12,
                'emoji'  => '👋',
                'nama'   => 'Salam',
                'arab'   => 'اَلسَّلَامُ عَلَيْكُمْ وَرَحْمَةُ اللَّهِ',
                'latin'  => "Assalaamu'alaikum warahmatullaah",
                'jumlah' => '2x (kanan & kiri)',
                'arti'   => 'Semoga keselamatan & rahmat Allah untukmu! Tengok kanan lalu kiri ya, sholat selesai!',
            ],
        ];
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
            'daftarGerakan' => $this->daftarGerakan(),
        ]);
    }
}