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
     * Rukun & sunnah sholat secara berurutan, lengkap dengan teks Arab,
     * transliterasi latin, terjemahan, dan catatan fiqih (posisi tubuh).
     *
     * Key 'hanya_jika_rakaat_lebih_dari' dipakai untuk menyaring rukun yang
     * kondisional (mis. Tasyahud Awal hanya ada jika sholatnya lebih dari 2 rakaat).
     */
    protected function daftarRukun(): array
    {
        return [
            [
                'kode'   => 'takbiratul-ihram',
                'nama'   => 'Takbiratul Ihram & Doa Iftitah',
                'arab'   => 'اَللهُ أَكْبَرُ. اَللَّهُمَّ بَاعِدْ بَيْنِي وَبَيْنَ خَطَايَايَ كَمَا بَاعَدْتَ بَيْنَ الْمَشْرِقِ وَالْمَغْرِبِ',
                'latin'  => "Allaahu Akbar. Allaahumma baa'id bainii wa baina khathaayaaya kamaa baa'adta bainal masyriqi wal maghrib",
                'arti'   => 'Allah Maha Besar. Ya Allah, jauhkanlah antara aku dan kesalahan-kesalahanku sebagaimana Engkau menjauhkan antara timur dan barat.',
                'jumlah' => '1x',
                'sumber' => 'HR. Bukhari dan Muslim',
                'catatan' => 'Kedua tangan diangkat sejajar bahu atau telinga sambil bertakbir, lalu bersedekap dengan tangan kanan di atas tangan kiri di dada. Niat sholat cukup diucapkan dalam hati, tidak perlu dilafalkan.',
            ],
            [
                'kode'   => 'al-fatihah',
                'nama'   => 'Membaca Surat Al-Fatihah',
                'arab'   => 'بِسْمِ اللَّهِ الرَّحْمَٰنِ الرَّحِيمِ الْحَمْدُ لِلَّهِ رَبِّ الْعَالَمِينَ',
                'latin'  => "Bismillaahir rahmaanir rahiim. Alhamdu lillaahi rabbil 'aalamiin",
                'arti'   => 'Dengan nama Allah Yang Maha Pengasih lagi Maha Penyayang. Segala puji bagi Allah, Tuhan seluruh alam.',
                'jumlah' => 'Setiap rakaat',
                'sumber' => 'HR. Bukhari',
                'catatan' => 'Al-Fatihah wajib dibaca di setiap rakaat. Pada rakaat pertama dan kedua, disunnahkan menambahkan surat atau ayat Al-Qur\'an lain setelahnya.',
            ],
            [
                'kode'   => 'ruku',
                'nama'   => 'Ruku dan Thuma’ninah',
                'arab'   => 'سُبْحَانَ رَبِّيَ الْعَظِيمِ وَبِحَمْدِهِ',
                'latin'  => "Subhaana robbiyal 'adziimi wa bihamdih",
                'arti'   => 'Maha Suci Tuhanku Yang Maha Agung dan dengan memuji-Nya.',
                'jumlah' => '3x',
                'sumber' => 'HR. Ahmad dan Abu Dawud',
                'catatan' => 'Posisi punggung lurus mendatar, kedua telapak tangan memegang lutut dengan jari meregang.',
            ],
            [
                'kode'   => 'itidal',
                'nama'   => 'I’tidal dan Thuma’ninah',
                'arab'   => 'سَمِعَ اللَّهُ لِمَنْ حَمِدَهُ. رَبَّنَا وَلَكَ الْحَمْدُ حَمْدًا كَثِيرًا طَيِّبًا مُبَارَكًا فِيهِ',
                'latin'  => "Sami'allaahu liman hamidah. Rabbanaa wa lakal hamdu hamdan katsiiran thayyiban mubaarakan fiih",
                'arti'   => 'Allah mendengar hamba yang memuji-Nya. Ya Tuhan kami, bagi-Mu segala puji, pujian yang banyak, baik, dan penuh berkah.',
                'jumlah' => '1x',
                'sumber' => 'HR. Bukhari',
                'catatan' => 'Bangkit dari ruku hingga berdiri tegak sempurna, kedua tangan dilepas di samping badan, dengan thuma’ninah (tenang, tidak tergesa) sebelum turun sujud.',
            ],
            [
                'kode'   => 'sujud-1',
                'nama'   => 'Sujud Pertama dan Thuma’ninah',
                'arab'   => 'سُبْحَانَ رَبِّيَ الْأَعْلَى وَبِحَمْدِهِ',
                'latin'  => "Subhaana robbiyal a'laa wa bihamdih",
                'arti'   => 'Maha Suci Tuhanku Yang Maha Tinggi dan dengan memuji-Nya.',
                'jumlah' => '3x',
                'sumber' => 'HR. Ahmad dan Abu Dawud',
                'catatan' => 'Tujuh anggota badan menempel lantai: dahi beserta hidung, dua telapak tangan, dua lutut, dan ujung jari-jari kedua kaki. Siku diangkat tidak menempel lambung.',
            ],
            [
                'kode'   => 'duduk-antara-sujud',
                'nama'   => 'Duduk di Antara Dua Sujud',
                'arab'   => 'رَبِّ اغْفِرْ لِي وَارْحَمْنِي وَاجْبُرْنِي وَارْفَعْنِي وَارْزُقْنِي وَاهْدِنِي وَعَافِنِي وَاعْفُ عَنِّي',
                'latin'  => "Rabbighfirlii warhamnii wajburnii warfa'nii warzuqnii wahdinii wa'aafinii wa'fu 'annii",
                'arti'   => 'Ya Tuhanku, ampunilah aku, sayangilah aku, cukupkanlah kekuranganku, angkatlah derajatku, berilah aku rezeki, berilah aku petunjuk, berilah aku kesehatan, dan maafkanlah aku.',
                'jumlah' => '1x',
                'sumber' => 'HR. Abu Dawud dan Tirmidzi',
                'catatan' => 'Duduk iftirasy: duduk di atas kaki kiri yang dilipat, telapak kaki kanan ditegakkan dengan jari-jari menghadap kiblat, kedua tangan diletakkan di atas paha.',
            ],
            [
                'kode'   => 'sujud-2',
                'nama'   => 'Sujud Kedua dan Thuma’ninah',
                'arab'   => 'سُبْحَانَ رَبِّيَ الْأَعْلَى وَبِحَمْدِهِ',
                'latin'  => "Subhaana robbiyal a'laa wa bihamdih",
                'arti'   => 'Maha Suci Tuhanku Yang Maha Tinggi dan dengan memuji-Nya.',
                'jumlah' => '3x',
                'sumber' => 'HR. Ahmad dan Abu Dawud',
                'catatan' => 'Posisi sama seperti sujud pertama. Setelah ini, bangkit berdiri untuk rakaat berikutnya, atau duduk tasyahud bila rakaat sudah genap.',
            ],
            [
                'kode'   => 'tasyahud-awal',
                'nama'   => 'Duduk Tasyahud Awal',
                'arab'   => 'اَلتَّحِيَّاتُ لِلَّهِ وَالصَّلَوَاتُ وَالطَّيِّبَاتُ، السَّلَامُ عَلَيْكَ أَيُّهَا النَّبِيُّ وَرَحْمَةُ اللَّهِ وَبَرَكَاتُهُ',
                'latin'  => "Attahiyyaatu lillaahi wash-shalawaatu wath-thayyibaat, assalaamu 'alaika ayyuhan-nabiyyu wa rahmatullaahi wa barakaatuh",
                'arti'   => 'Segala penghormatan, sholawat, dan kebaikan hanya milik Allah. Semoga keselamatan, rahmat, dan berkah Allah tercurah kepadamu wahai Nabi.',
                'jumlah' => '1x, pada rakaat ke-2',
                'sumber' => 'HR. Bukhari dan Muslim',
                'catatan' => 'Duduk iftirasy seperti duduk di antara dua sujud, telunjuk kanan diangkat saat mengucap kalimat syahadat, lalu langsung berdiri kembali (tanpa membaca sholawat panjang) untuk rakaat berikutnya.',
                'hanya_jika_rakaat_lebih_dari' => 2,
            ],
            [
                'kode'   => 'tasyahud-akhir',
                'nama'   => 'Duduk Tasyahud Akhir & Sholawat',
                'arab'   => 'اَللَّهُمَّ صَلِّ عَلَى مُحَمَّدٍ وَعَلَى آلِ مُحَمَّدٍ كَمَا صَلَّيْتَ عَلَى آلِ إِبْرَاهِيمَ',
                'latin'  => "Allaahumma shalli 'alaa Muhammad wa 'alaa aali Muhammad, kamaa shallaita 'alaa aali Ibraahiim",
                'arti'   => 'Ya Allah, limpahkanlah sholawat kepada Nabi Muhammad dan keluarganya, sebagaimana Engkau melimpahkan sholawat kepada keluarga Ibrahim.',
                'jumlah' => '1x, pada rakaat terakhir',
                'sumber' => 'HR. Bukhari',
                'catatan' => 'Duduk tawarruk: pinggul menyentuh lantai, kaki kiri dikeluarkan dari bawah kaki kanan, telapak kaki kanan tetap ditegakkan. Dibaca setelah bacaan tasyahud (Attahiyyat) lengkap.',
            ],
            [
                'kode'   => 'salam',
                'nama'   => 'Salam',
                'arab'   => 'اَلسَّلَامُ عَلَيْكُمْ وَرَحْمَةُ اللَّهِ',
                'latin'  => "Assalaamu'alaikum warahmatullaah",
                'arti'   => 'Semoga keselamatan dan rahmat Allah tercurah kepada kalian.',
                'jumlah' => '2x (menoleh ke kanan lalu ke kiri)',
                'sumber' => 'HR. Muslim',
                'catatan' => 'Menoleh ke kanan hingga pipi terlihat dari belakang sambil mengucap salam, kemudian menoleh ke kiri dengan bacaan yang sama. Sholat selesai.',
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

        $rukun = collect($this->daftarRukun())
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
}