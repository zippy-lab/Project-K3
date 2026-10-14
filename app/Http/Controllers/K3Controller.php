<?php

namespace App\Http\Controllers;

use App\Models\QuizAttempt;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class K3Controller extends Controller
{
    /**
     * Dapatkan daftar kurikulum materi K3 Software Engineering (Bab 1 - 6)
     *
     * @return array<int, array<string, mixed>>
     */
    public static function getLessonsData(): array
    {
        return [
            [
                'id' => 1,
                'chapter_num' => 1,
                'title' => 'Pengertian dan Tujuan K3',
                'subtitle' => 'Dasar Keselamatan & Kesehatan Kerja di Lingkungan Software Engineering',
                'emoji' => '📘',
                'tint' => '#e0f2fe',
                'badge' => 'Bab 1 Dasar',
                'desc' => 'Pahami prinsip fundamental K3, tujuan bagi ekosistem IT, manfaat bagi pekerja maupun perusahaan, serta penerapannya dalam rutinitas coding sehari-hari.',
                'goals' => 'Siswa mampu mendefinisikan K3, mengidentifikasi tujuan dan manfaatnya di sektor rekayasa perangkat lunak, serta menganalisis contoh kasus nyata di tempat kerja programmer.',
                'sections' => [
                    [
                        'heading' => 'Pengertian K3 dalam Konteks Software Engineering',
                        'body' => 'K3 (Keselamatan dan Kesehatan Kerja) adalah serangkaian upaya, prosedur, dan kebijakan yang bertujuan mencegah terjadinya kecelakaan kerja, penyakit akibat kerja (PAK), serta menciptakan ruang kerja yang aman, sehat, dan nyaman. Di industri software engineering, K3 tidak hanya berkaitan dengan pabrik atau helm proyek, melainkan mencakup keselamatan kelistrikan komputer, ergonomi workstation, pencahayaan lab, serta kesehatan mental saat menghadapi beban kerja deadline.',
                    ],
                    [
                        'heading' => 'Tujuan Penerapan K3 di Lingkungan IT',
                        'body' => '1. Melindungi programmer, software engineer, desainer UI/UX, dan analis sistem dari risiko kelelahan fisik, cedera otot/sendi, dan stres kognitif.'."\n".
                                  '2. Menjamin seluruh sarana lab/kantor (perangkat komputer, kabel, server, pendingin ruangan) digunakan secara aman dan efisien.'."\n".
                                  '3. Memastikan kesinambungan proses pengembangan perangkat lunak tanpa terhambat oleh insiden teknis atau kecelakaan personel.',
                    ],
                    [
                        'heading' => 'Manfaat K3 bagi Pekerja dan Perusahaan/Sekolah',
                        'body' => '• Bagi Siswa & Pekerja: Menjaga postur tubuh tetap bugar, mata tidak cepat lelah, terhindar dari sindrom carpal tunnel, serta memiliki kenyamanan psikologis dalam berkarya.'."\n".
                                  '• Bagi Perusahaan & Sekolah: Mengurangi angka absensi sakit, meningkatkan fokus dan produktivitas tim, menekan bug akibat kelelahan developer, serta mencegah kerusakan aset laboratorium akibat insiden korsleting atau tumpahan cairan.',
                    ],
                    [
                        'heading' => 'Contoh Penerapan Nyata di Tempat Kerja Programmer',
                        'body' => 'Mengatur tata letak meja dan kursi yang dapat disesuaikan (adjustable), merapikan bundel kabel PC dengan cable tray, menyepakati batas jam lembur yang wajar, memastikan ruangan memiliki sirkulasi udara bersih, serta menyediakan air minum agar programmer tidak dehidrasi saat marathon coding.',
                    ],
                ],
                'real_case' => 'Situasi Nyata: Seorang siswa magang sering memaksakan coding 7 jam tanpa jeda dengan kursi kayu keras dan laptop di atas pangkuan. Setelah dua minggu, ia mengeluhkan nyeri pinggang akut dan pusing kepala hebat. Setelah berkonsultasi, ia memindahkan laptop ke meja dengan stan monitor dan menerapkan peregangan berkala—gejala nyeri pun berkurang signifikan.',
                'tip' => 'K3 bagi software engineer berfokus pada investasi kesehatan jangka panjang. Kebiasaan posisi duduk dan ritme kerja sehat yang kamu bangun di bangku SMK akan menyelamatkan karirmu di industri teknologi!',
                'summary' => 'K3 di bidang software engineering adalah upaya holistik melindungi fisik dan psikis pekerja IT melalui penataan lingkungan kerja, peralatan aman, dan budaya kerja seimbang.',
            ],
            [
                'id' => 2,
                'chapter_num' => 2,
                'title' => 'Ergonomi di Depan Komputer',
                'subtitle' => 'Penataan Postur, Monitor, Keyboard, dan Pencegahan Gangguan Muskuloskeletal',
                'emoji' => '🖥️',
                'tint' => '#ede9fe',
                'badge' => 'Bab 2 Fisik & Postur',
                'desc' => 'Kuasai kaidah ergonomi komputer: posisi duduk 90–100 derajat, penataan tinggi monitor sejajar mata, posisi netral pergelangan tangan, serta teknik relaksasi 20-20-20.',
                'goals' => 'Siswa dapat menerapkan postur duduk yang ergonomis, mengatur jarak dan sudut monitor, memposisikan keyboard/mouse dengan benar, serta memahami risiko gangguan muskuloskeletal (MSDs & RSI).',
                'sections' => [
                    [
                        'heading' => 'Posisi Duduk yang Benar (Ergonomic Seating)',
                        'body' => 'Punggung harus tersangga penuh oleh sandaran kursi (terutama bagian lumbar/tulang belakang bawah). Sudut siku dan lutut dianjurkan membentuk sekitar 90 hingga 100 derajat. Telapak kaki harus menapak rata di lantai; jika kursi terlalu tinggi, gunakan pijakan kaki (footrest). Hindari membungkuk ke depan mendekati monitor (forward head posture).',
                    ],
                    [
                        'heading' => 'Posisi Monitor Sejajar Pandangan Mata',
                        'body' => 'Bagian atas layar monitor harus berada tepat sejajar atau sedikit di bawah garis horizontal pandangan mata. Jarak ideal mata ke monitor adalah 50–70 cm (kira-kira sepanjang rentangan satu lengan). Posisi ini mencegah otot leher mendongak berlebihan atau menunduk kaku, yang kerap menjadi sumber utama sakit kepala tegang.',
                    ],
                    [
                        'heading' => 'Posisi Keyboard dan Mouse yang Nyaman',
                        'body' => 'Letakkan keyboard dan mouse pada ketinggian yang membuat lengan bawah sejajar dengan meja, serta pergelangan tangan berada dalam posisi lurus netral (tidak menekuk ke atas atau ke bawah). Hindari menekan telapak tangan terlalu keras pada tepi meja yang tajam; gunakan wrist pad jika perlu.',
                    ],
                    [
                        'heading' => 'Pencahayaan Ruangan dan Jarak Pandang',
                        'body' => 'Pastikan pencahayaan ruangan cukup merata, tidak terlalu redup, dan tidak menimbulkan pantulan silau (glare) langsung pada monitor. Posisikan monitor tegak lurus terhadap jendela untuk meminimalkan pantulan sinar matahari.',
                    ],
                    [
                        'heading' => 'Pentingnya Istirahat Berkala dan Peregangan (Rule 20-20-20)',
                        'body' => 'Terapkan aturan 20-20-20: Setiap 20 menit menatap layar, pandanglah objek yang berjarak minimal 20 kaki (sekitar 6 meter) selama minimal 20 detik. Selain itu, lakukan peregangan ringan pada bahu, leher, punggung, dan pergelangan tangan setiap 1 jam.',
                    ],
                    [
                        'heading' => 'Risiko Gangguan Muskuloskeletal (MSDs) dan RSI',
                        'body' => 'Postur kerja yang buruk dan berulang-ulang dapat memicu Repetitive Strain Injury (RSI), Carpal Tunnel Syndrome (kesemutan/kebas pada jemari akibat saraf tertekan di pergelangan), nyeri leher kronis (text neck), serta spondilosis servikal.',
                    ],
                ],
                'real_case' => 'Situasi Nyata di Lab SMK: Seorang siswa sering meletakkan laptop terlalu rendah dan mouse di tepi meja tanpa ruang siku. Dalam sebulan, ia merasakan pergelangan tangan kanan nyeri dan kesemutan saat mengetik cepat. Setelah meja lab dilengkapi mousepad empuk dan posisi siku dinaikkan rata dengan meja, rasa ngilu tersebut mereda.',
                'tip' => 'Monitor terlalu rendah membuat leher menahan beban setara 15-25 kg! Gunakan stand laptop atau tumpukan buku yang kokoh untuk menaikkan layar sejajar mata.',
                'summary' => 'Ergonomi komputer berpusat pada penyesuaian alat terhadap tubuh manusia (bukan sebaliknya) untuk mencegah penyakit muskuloskeletal dan menjaga efisiensi mengetik kode.',
            ],
            [
                'id' => 3,
                'chapter_num' => 3,
                'title' => 'Keselamatan Peralatan dan Kelistrikan',
                'subtitle' => 'Pencegahan Bahaya Listrik, Manajemen Kabel, dan Sirkulasi Panas Perangkat',
                'emoji' => '🔌',
                'tint' => '#fef3c7',
                'badge' => 'Bab 3 Infrastruktur',
                'desc' => 'Kenali risiko tegangan listrik di workstation, tata kelola kabel rapi, pencegahan beban stopkontak berlebih, serta langkah darurat saat terjadi percikan api atau bau hangus.',
                'goals' => 'Siswa mampu mengidentifikasi bahaya listrik di laboratorium komputer, mengelola kabel peralatan secara tertata, mencegah overheating perangkat, serta melakukan prosedur darurat kelistrikan.',
                'sections' => [
                    [
                        'heading' => 'Penggunaan Komputer dan Laptop secara Aman',
                        'body' => 'Gunakan charger dan power supply (PSU) yang memiliki sertifikasi standar resmi (SNI/CE/UL). Pastikan stopkontak memiliki arde (grounding) yang baik agar casing PC tidak menghantarkan arus listrik statis yang mengejutkan.',
                    ],
                    [
                        'heading' => 'Bahaya Kabel Rusak dan Beban Stopkontak Berlebih (Overload)',
                        'body' => 'Kabel yang terkelupas, tertekuk tajam, atau konektor steker yang gosong harus segera disingkirkan. Jangan membuat sambungan "daisy-chain" (mencolokkan terminal stopkontak ke stopkontak lain secara bertingkat) karena dapat menimbulkan lonjakan arus panas yang memicu kebakaran hebat.',
                    ],
                    [
                        'heading' => 'Pengelolaan Kabel (Cable Management)',
                        'body' => 'Kabel yang menjuntai di lantai laboratorium berisiko membuat siswa tersandung, mencabut PC yang sedang menyala, atau menjatuhkan perangkat berharga. Gunakan spiral pelindung kabel, cable ties, atau duct kabel meja untuk menyatukan dan menyembunyikan kabel dengan rapi.',
                    ],
                    [
                        'heading' => 'Ventilasi Perangkat dan Pencegahan Overheating',
                        'body' => 'Jangan pernah memangku laptop di atas kasur, karpet berbulu tebal, atau bantal yang menutup kisi-kisi pembuangan hawa panas. Pastikan jarak antara casing belakang PC ke dinding minimal 10-15 cm agar kipas pendingin dapat mengeluarkan udara panas dengan bebas.',
                    ],
                    [
                        'heading' => 'Tindakan Tepat Saat Terjadi Bahaya Kelistrikan',
                        'body' => '1. Jika mencium bau sangit/hangus atau melihat percikan: Jangan menyentuh kabel telanjang dengan tangan!'."\n".
                                  '2. Matikan saklar pemutus utama (MCB) pada panel listrik jika posisinya aman dijangkau.'."\n".
                                  '3. Jauhkan semua orang dari area bahaya dan segera laporkan kepada guru pembimbing atau teknisi lab.'."\n".
                                  '4. Jika terjadi percikan api listrik, JANGAN PERNAH menyiramnya dengan air biasa (bisa memicu sengatan mematikan); gunakan APAR tipe C/CO2.',
                    ],
                ],
                'real_case' => 'Situasi Nyata di Sekolah: Di sudut lab RPL, beberapa siswa memasang pemanas air, charger 4 laptop, dan hair dryer pada satu colokan ekstensi murah. Steker colokan meleleh dan mengeluarkan asap pekat. Beruntung guru bertindak cepat memutus saklar MCB utama sebelum percikan merambat ke meja kayu.',
                'tip' => 'Jangan mencabut steker listrik dengan menarik kabelnya! Selalu pegang kepala stekernya secara kokoh untuk menghindari kawat tembaga di dalam terputus.',
                'summary' => 'Keselamatan kelistrikan bergantung pada instalasi ber-grounding, tidak membebani stopkontak, kabel yang tertata rapi, ventilasi bebas hambatan, serta respon cepat tanpa menyentuh kabel berbahaya.',
            ],
            [
                'id' => 4,
                'chapter_num' => 4,
                'title' => 'Kesehatan Fisik dan Mental Software Engineer',
                'subtitle' => 'Manajemen Layar, Kelelahan Mata, Manajemen Stres, dan Pencegahan Burnout',
                'emoji' => '💚',
                'tint' => '#dcfce7',
                'badge' => 'Bab 4 Kesehatan Holistik',
                'desc' => 'Jaga ketajaman pikiran dan stamina: atasi Computer Vision Syndrome, atur pola tidur berkualitas, kelola stres deadline fitur, dan bangun komunikasi tim yang suportif.',
                'goals' => 'Siswa mampu mengenali gejala kelelahan mata dan fisik, menerapkan pola istirahat seimbang, mengelola tekanan psikologis proyek perangkat lunak, serta mencegah sindrom burnout.',
                'sections' => [
                    [
                        'heading' => 'Dampak Bekerja Terlalu Lama di Depan Layar',
                        'body' => 'Terlalu lama menatap layar monitor atau laptop tanpa jeda dapat menurunkan frekuensi berkedip hingga 60%, menyebabkan mata kering, perih, pandangan kabur, dan sakit kepala di sekitar pelipis. Kondisi ini dikenal sebagai Computer Vision Syndrome (CVS).',
                    ],
                    [
                        'heading' => 'Kelelahan Mata dan Cara Efektif Menguranginya',
                        'body' => '• Terapkan dark mode atau tema warna berkontras seimbang saat coding malam hari.'."\n".
                                  '• Turunkan tingkat kecerahan layar agar setara dengan intensitas cahaya di ruangan sekitar.'."\n".
                                  '• Gunakan tetes mata penyegar (artificial tears) jika mata terasa berpasir/kering akibat AC lab.'."\n".
                                  '• Rutin mengedipkan mata secara sadar untuk melumasi kornea.',
                    ],
                    [
                        'heading' => 'Pentingnya Pola Tidur, Nutrisi, dan Aktivitas Fisik',
                        'body' => 'Tidur 7-8 jam per hari adalah waktu krusial bagi otak untuk membersihkan racun metabolik dan mengonsolidasikan memori logika algoritma. Menggantikan tidur dengan minuman energi berkafein tinggi hanya memberikan ilusi energi sesaat yang diikuti kelelahan parah (crash). Sempatkan olahraga ringan seperti jalan kaki atau skipping.',
                    ],
                    [
                        'heading' => 'Stres Akibat Deadline, Bug Misterius, dan Beban Kerja',
                        'body' => 'Bug yang tidak kunjung ditemukan menjelang demo aplikasi dapat memicu lonjakan kortisol (hormon stres). Langkah bijak: jangan panik, pecah masalah menjadi sub-modul terkecil, buat reproduction steps, dan diskusikan dengan tim secara terbuka.',
                    ],
                    [
                        'heading' => 'Komunikasi Tim, Pembagian Tugas, dan Manajemen Waktu',
                        'body' => 'Gunakan metode Agile/Scrum sederhana (seperti Trello/Kanban board). Pecah tugas besar menjadi User Stories berukuran realistis. Jangan ragu meminta bantuan rekan tim (pair programming) bila menemui jalan buntu lebih dari 1-2 jam.',
                    ],
                    [
                        'heading' => 'Pencegahan Burnout dan Budaya Kerja Sehat',
                        'body' => 'Burnout adalah kondisi kelelahan fisik, emosional, dan mental yang berkepanjangan akibat stres kronis di tempat kerja. Tandanya: hilangnya motivasi coding, mudah marah, dan merasa tidak kompeten. Solusinya adalah rehat total sejenak, hobi di luar komputer, serta lingkungan tim yang tidak toxic.',
                    ],
                ],
                'real_case' => 'Situasi Nyata Tim Proyek Uji Kompetensi: Menjelang hari penilaian UKK, tim siswa begadang 3 malam berturut-turut sambil minum kopi pekat. Hasilnya, saat presentasi mereka demam, salah mengetik perintah sederhana di terminal, dan aplikasi crash karena panik. Berbeda dengan tim lain yang menjadwalkan tidur teratur dan menyelesaikan tugas secara bertahap.',
                'tip' => 'Istirahat bukanlah tanda malas, melainkan bagian dari siklus kerja otak untuk memecahkan bug logika yang rumit!',
                'summary' => 'Kesehatan mental dan fisik programmer berbanding lurus dengan kualitas baris kode yang ditulis. Cegah burnout dengan tidur cukup, jeda mata teratur, dan komunikasi tim yang sehat.',
            ],
            [
                'id' => 5,
                'chapter_num' => 5,
                'title' => 'K3 dalam Lingkungan Kerja Digital',
                'subtitle' => 'Workstation Rapi, Higienitas Digital, Keamanan Data, dan K3 vs InfoSec',
                'emoji' => '🛡️',
                'tint' => '#fae8ff',
                'badge' => 'Bab 5 Digital Workspace',
                'desc' => 'Terapkan kebiasaan workstation bersih, higienitas digital, penguncian layar, pencegahan malware & phishing, serta pahami perbedaan mendasar antara K3 dan InfoSec.',
                'goals' => 'Siswa mampu menjaga kerapian fisik dan digital workstation, memahami praktik aman penanganan kredensial/data, serta membedakan aspek K3 manusia dengan Information Security sistem.',
                'sections' => [
                    [
                        'heading' => 'Keamanan Penggunaan Perangkat Kerja',
                        'body' => 'Selalu pasang pembaruan sistem operasi (security patches) dan antivirus resmi. Jangan mematikan fitur proteksi firewall sekolah. Jangan menancapkan flashdisk yang mencurigakan tanpa proses scanning terlebih dahulu.',
                    ],
                    [
                        'heading' => 'Pengelolaan Workstation yang Rapi dan Bersih',
                        'body' => 'Bersihkan keyboard, mouse, dan meja kerja secara rutin menggunakan cairan pembersih alkohol/lap mikrofiber. Debu dan remah makanan di sela tuts keyboard tidak hanya merusak mekanisme tombol, tetapi juga menjadi sarang kuman penyakit.',
                    ],
                    [
                        'heading' => 'Kebiasaan Digital Aman: Lock Screen & Kredensial',
                        'body' => 'Kembangkan refleks mengunci layar (shortcut Windows + L atau Command + Control + Q di Mac) setiap kali meninggalkan meja kerja—bahkan hanya untuk ke toilet. Jangan pernah menempelkan kertas sticky note berisi password di bezel monitor.',
                    ],
                    [
                        'heading' => 'Risiko Phishing, Rekayasa Sosial, dan Kehilangan Data',
                        'body' => 'Programmer adalah sasaran empuk serangan spear-phishing (misalnya email tawaran library palsu yang memuat trojan perusak). Selalu buat cadangan (backup) kode proyek ke repository Git remote terenkripsi (GitHub/GitLab) dengan autentikasi dua faktor (2FA).',
                    ],
                    [
                        'heading' => 'Pembedaan Antara K3 Konvensional dan Keamanan Informasi (InfoSec)',
                        'body' => '• K3 (Keselamatan & Kesehatan Kerja): Berfokus pada perlindungan manusia yang bekerja (raga, mata, otot, keselamatan jiwa, dan kondisi psikologis).'."\n".
                                  '• Keamanan Informasi (InfoSec): Berfokus pada perlindungan kerahasiaan (Confidentiality), integritas (Integrity), dan ketersediaan (Availability) dari data serta sistem komputer.'."\n".
                                  '• Korelasi: Keduanya saling melengkapi demi mewujudkan lingkungan profesional rekayasa perangkat lunak yang beretika, tangguh, dan akuntabel.',
                    ],
                ],
                'real_case' => 'Situasi Nyata di Laboratorium: Seorang siswa meninggalkan komputernya menyala tanpa di-lock untuk membeli jajan. Rekan lain jahil mengganti kode tugasnya dan menghapus database lokal. Di insiden lain, siswa mendownload installer bajakan berisi ransomware yang mengunci seluruh folder tugas akhir di laptopnya.',
                'tip' => 'Tekan tombol "Win + L" setiap kali bangkit dari kursi meja kerja. Jadikan ini sebagai kebiasaan otomatis seperti mengunci pintu rumah!',
                'summary' => 'Ruang kerja digital mencakup kebersihan fisik alat dan disiplin akses data. K3 melindungi manusia pembuat kode, sedangkan InfoSec melindungi kode dan data hasil karyanya.',
            ],
            [
                'id' => 6,
                'chapter_num' => 6,
                'title' => 'Penerapan K3 dalam Aktivitas Software Engineering',
                'subtitle' => 'Praktik Aman saat Coding, Testing, Code Review, dan Tata Tertib Lab PPLG',
                'emoji' => '⚙️',
                'tint' => '#ccfbf1',
                'badge' => 'Bab 6 Aksi Lapangan',
                'desc' => 'Integrasikan etos K3 saat coding marathon, testing di lab, code review yang etis, kepatuhan tata tertib laboratorium, serta bedah studi kasus pelanggaran K3.',
                'goals' => 'Siswa mampu menerapkan protokol keselamatan kerja saat siklus SDLC (coding, debugging, code review), mematuhi SOP lab komputer, dan menganalisis tindakan mitigasi risiko.',
                'sections' => [
                    [
                        'heading' => 'Penerapan K3 Saat Coding & Debugging Maraton',
                        'body' => 'Gunakan teknik Pomodoro (25 menit fokus coding, 5 menit berdiri/minum air). Atur layout editor font yang mudah dibaca (ukuran minimal 14px dengan ligatures jelas seperti Fira Code atau JetBrains Mono). Jika menemukan error sulit, hindari melampiaskan kekesalan dengan memukul meja atau keyboard.',
                    ],
                    [
                        'heading' => 'Penerapan K3 Ketika Melakukan Testing dan Uji Coba Lapangan',
                        'body' => 'Saat melakukan uji coba perangkat lunak yang terhubung ke modul IoT, robotik, atau catu daya eksternal di lab, pastikan polaritas kabel telah benar sebelum dinyalakan. Jangan menyentuh sirkuit terbuka pada mikrokontroler saat arus listrik masih tersambung.',
                    ],
                    [
                        'heading' => 'Penerapan K3 Saat Bekerja dalam Tim dan Melakukan Code Review',
                        'body' => 'Ulasan kode (code review) harus bersifat objektif terhadap kode, bukan menyerang pribadi rekan sejawat. Komunikasi yang santun dan konstruktif membangun rasa aman psikologis (psychological safety), sehingga anggota tim tidak takut melaporkan bug kritis atau kelelahan kerja.',
                    ],
                    [
                        'heading' => 'Tata Tertib dan Keselamatan di Laboratorium Komputer',
                        'body' => '1. Dilarang membawa makanan dan minuman tanpa penutup ke dekat meja komputer; tumpahan cairan dapat merusak sirkuit dan menyengat pengguna.'."\n".
                                  '2. Tas dan ransel harus disimpan di loker/rak khusus, bukan diletakkan di lorong lantai yang menghambat evakuasi.'."\n".
                                  '3. Ketahui letak saklar darurat lab, tombol alarm, kotak P3K, dan APAR terdekat.'."\n".
                                  '4. Selalu ikuti SOP shutdown komputer dengan benar sebelum meninggalkan lab.',
                    ],
                    [
                        'heading' => 'Contoh Kasus Pelanggaran K3 dan Tindakan Pencegahannya',
                        'body' => '• Pelanggaran: Menaruh botol kopi di atas CPU tower yang memiliki lubang kipas atas. Botol tersenggol, air masuk ke dalam power supply hingga meledak kecil dan berasap.'."\n".
                                  '• Pencegahan: Buat zona larangan minuman di meja komputer lab atau gunakan tumbler botol kedap tertutup rapat yang diletakkan di lantai/meja samping.',
                    ],
                ],
                'real_case' => 'Kasus Nyata Saat Ujian Sertifikasi: Seorang siswa terburu-buru berlari di lab dan kakinya tersangkut kabel proyektor yang melintang tanpa penutup gaffer tape. Siswa terjatuh mengenai sudut meja, proyektor pecah, dan proses ujian terhenti. Insiden ini membuktikan pentingnya cable protector di jalur lalu lintas manusia.',
                'tip' => 'Budaya K3 sejati tercermin saat kamu berani mengingatkan rekan kerja yang meletakkan cangkir air di atas PC atau mengingatkannya untuk istirahat saat sudah kelelahan.',
                'summary' => 'Penerapan K3 dalam software engineering adalah wujud profesionalisme pengembang perangkat lunak, mencakup kehati-hatian teknis, komunikasi tim beradab, serta ketaatan pada SOP keselamatan lab.',
            ],
        ];
    }

    /**
     * Dapatkan bank soal kuis K3 Software Engineering lengkap (15+ soal)
     *
     * @return array<int, array<string, mixed>>
     */
    public static function getQuestionsData(): array
    {
        return [
            [
                'id' => 1,
                'chapter' => 1,
                'type' => 'mcq',
                'q' => 'Apa tujuan utama diterapkannya K3 (Keselamatan dan Kesehatan Kerja) di lingkungan industri software engineering?',
                'o' => [
                    'Menuntut programmer bekerja lembur hingga larut malam demi mengejar rilis aplikasi',
                    'Melindungi keselamatan, kesehatan fisik, dan kesejahteraan mental pekerja dari potensi risiko lingkungan kerja IT',
                    'Menghapuskan seluruh tahapan pengujian (testing) dan jaminan kualitas software',
                    'Mewajibkan pekerja memakai helm proyek dan sepatu safety baja saat mengetik di depan laptop',
                ],
                'a' => 1,
                'why' => 'Tujuan utama K3 di sektor IT adalah memitigasi bahaya ergonomi, kelistrikan, stres, dan kelelahan kerja guna melindungi raga dan pikiran pekerja.',
            ],
            [
                'id' => 2,
                'chapter' => 2,
                'type' => 'case_study',
                'q' => 'Seorang programmer magang mengeluhkan sakit leher dan pegal di bahu karena monitor laptopnya diletakkan terlalu rendah di atas meja datar. Apa tindakan ergonomis yang paling tepat?',
                'o' => [
                    'Tetap bekerja tanpa mengubah posisi agar terbiasa menahan rasa sakit',
                    'Menaikkan posisi monitor menggunakan stand laptop atau monitor arm agar layarnya sejajar dengan pandangan mata',
                    'Mendekatkan wajah hingga jarak 10 cm ke arah layar monitor',
                    'Mematikan lampu ruangan secara total dan bekerja dalam kondisi gelap gulita',
                ],
                'a' => 1,
                'why' => 'Menaikkan layar sejajar dengan garis horizontal mata mencegah leher menekuk ke bawah (forward head posture) yang memicu ketegangan otot servikal.',
            ],
            [
                'id' => 3,
                'chapter' => 2,
                'type' => 'tf',
                'q' => 'Benar atau Salah: Mempertahankan posisi duduk yang sama persis tanpa bergerak sedikit pun selama 8 jam nonstop adalah tanda programmer berdedikasi tinggi dan aman bagi tubuh.',
                'o' => ['Benar', 'Salah'],
                'a' => 1,
                'tf' => true,
                'why' => 'Salah. Bekerja dalam posisi statis berkepanjangan menghambat sirkulasi darah dan meningkatkan risiko gangguan muskuloskeletal (MSDs). Dianjurkan berganti postur dan melakukan peregangan.',
            ],
            [
                'id' => 4,
                'chapter' => 2,
                'type' => 'mcq',
                'q' => 'Dalam kaidah kesehatan mata programmer, apa yang dimaksud dengan aturan "20-20-20"?',
                'o' => [
                    'Setiap 20 jam bekerja, siswa harus tidur selama 20 menit',
                    'Setiap 20 menit menatap layar, alihkan pandangan ke objek sejauh 20 kaki (±6 meter) selama 20 detik',
                    'Membeli kacamata minus 20 di usia 20 tahun',
                    'Membuka 20 tab editor coding dan menyelesaikan 20 commit per hari',
                ],
                'a' => 1,
                'why' => 'Aturan 20-20-20 adalah pedoman medis untuk merelaksasi otot akomodasi mata dan mencegah Computer Vision Syndrome (CVS).',
            ],
            [
                'id' => 5,
                'chapter' => 3,
                'type' => 'case_study',
                'q' => 'Saat merapikan meja komputer laboratorium, kamu mendapati kabel power supply PC terkelupas hingga terlihat kawat tembaganya. Tindakan paling tepat adalah…',
                'o' => [
                    'Tetap menyalakan PC karena komputer masih bisa hidup normal',
                    'Membalut kawat tersebut menggunakan selotip kertas buku biasa lalu lanjut coding',
                    'Menyentuh tembaga untuk memastikan apakah ada aliran listriknya',
                    'Segera menghentikan penggunaan kabel, mencabutnya saat aman, dan melaporkannya kepada teknisi/guru lab',
                ],
                'a' => 3,
                'why' => 'Kabel berisolasi rusak berpotensi fatal memicu sengatan listrik dan korsleting kebakaran. Penggunaan harus dihentikan dan diganti kabel standar baru.',
            ],
            [
                'id' => 6,
                'chapter' => 3,
                'type' => 'multi',
                'q' => 'Pilihlah semua tindakan yang BENAR terkait pencegahan bahaya kelistrikan dan peralatan di ruang kerja IT! (Pilih semua yang benar)',
                'o' => [
                    'Menggunakan stopkontak yang telah terpasang sistem arde (grounding) dengan baik',
                    'Menyambung steker ekstensi bertumpuk-tumpuk (daisy-chain) hingga melebihi batas daya',
                    'Merapikan kabel melintang dengan pelindung kabel (cable duct) agar tidak membuat tersandung',
                    'Menjauhkan botol minuman terbuka dari atas CPU dan perangkat elektronik',
                ],
                'a' => [0, 2, 3],
                'multi' => true,
                'why' => 'Grounding yang baik, perapian kabel, dan menjauhkan cairan adalah SOP keselamatan kelistrikan. Menyambung steker bertumpuk (daisy-chain) berbahaya dan dilarang.',
            ],
            [
                'id' => 7,
                'chapter' => 3,
                'type' => 'case_study',
                'q' => 'Jika tiba-tiba tercium aroma hangus terbakar dan terlihat percikan api kecil dari stopkontak di dinding lab komputer, tindakan awal apa yang harus diambil?',
                'o' => [
                    'Menyiram stopkontak yang sedang memercik dengan seember air bersih',
                    'Menjauhkan diri dan rekan dari area bahaya, mematikan saklar utama (MCB) jika aman, dan melapor ke teknisi lab',
                    'Mendekatkan kain basah ke stopkontak untuk meredam bau sangit',
                    'Mengabaikannya dan terus melanjutkan compile kode program',
                ],
                'a' => 1,
                'why' => 'Jangan pernah menyiram instalasi listrik dengan air karena air menghantarkan arus listrik. Jauhkan diri dan putus sumber listrik melalui MCB.',
            ],
            [
                'id' => 8,
                'chapter' => 4,
                'type' => 'mcq',
                'q' => 'Manakah gejala yang paling mencerminkan kondisi "Burnout" pada seorang software engineer?',
                'o' => [
                    'Merasa gembira ketika berhasil menyelesaikan fitur baru tepat waktu',
                    'Kelelahan fisik, mental, dan emosional kronis disertai hilangnya motivasi serta merasa tidak berdaya',
                    'Keinginan untuk terus belajar bahasa pemrograman baru di waktu luang',
                    'Mampu berdiskusi secara tenang dan ramah dengan product manager',
                ],
                'a' => 1,
                'why' => 'Burnout adalah sindrom akibat stres kerja berkepanjangan tanpa istirahat memadai, ditandai penurunan efikasi diri dan kelelahan mental akut.',
            ],
            [
                'id' => 9,
                'chapter' => 4,
                'type' => 'case_study',
                'q' => 'Seorang siswa SMK menghadapi tumpukan tugas proyek yang mendekati batas waktu penyerahan dan mulai merasa cemas berlebihan. Apa langkah manajemen kerja yang paling sehat?',
                'o' => [
                    'Memaksakan begadang tanpa tidur selama 3 hari berturut-turut sambil meminum banyak suplemen kafein',
                    'Menutup diri, menghindari komunikasi, dan mengabaikan pesan dari tim proyek',
                    'Membagi tugas besar menjadi bagian-bagian kecil (sprint), mengatur prioritas realistis, dan berkoordinasi dengan guru/tim',
                    'Menyalahkan teman satu kelompok di media sosial publik',
                ],
                'a' => 2,
                'why' => 'Dekomposisi tugas (breakdown) dan komunikasi terbuka secara psikologis mereduksi beban kognitif dan menjaga kesehatan mental siswa.',
            ],
            [
                'id' => 10,
                'chapter' => 5,
                'type' => 'tf',
                'q' => 'Benar atau Salah: K3 (Keselamatan dan Kesehatan Kerja) dan Keamanan Informasi (Information Security) memiliki konsep, ruang lingkup, dan fokus perlindungan yang sama persis.',
                'o' => ['Benar', 'Salah'],
                'a' => 1,
                'tf' => true,
                'why' => 'Salah. K3 berfokus pada keselamatan manusia (pekerja), sedangkan Keamanan Informasi berfokus pada kerahasiaan, keutuhan, dan ketersediaan data/aset sistem.',
            ],
            [
                'id' => 11,
                'chapter' => 5,
                'type' => 'case_study',
                'q' => 'Sebelum beranjak dari meja komputer untuk istirahat makan siang di area publik sekolah, kebiasaan digital hygiene apa yang harus selalu dilakukan?',
                'o' => [
                    'Membiarkan laptop tetap terbuka tanpa kunci agar teman mudah melihat kode kita',
                    'Mengunci sesi layar komputer (Lock Screen dengan shortcut Win + L)',
                    'Menempelkan kertas berisi username dan kata sandi di pinggir bingkai monitor',
                    'Mematikan sambungan Wi-Fi tetapi membiarkan akun admin terbuka',
                ],
                'a' => 1,
                'why' => 'Mengunci layar (Lock Screen) mencegah akses tanpa izin, pencurian sesi login, atau manipulasi file tugas saat workstation ditinggalkan.',
            ],
            [
                'id' => 12,
                'chapter' => 5,
                'type' => 'mcq',
                'q' => 'Mengapa membersihkan keyboard dan mouse dari debu serta remah makanan termasuk dalam praktik K3 di ruang kerja IT?',
                'o' => [
                    'Karena remah makanan dapat mempercepat kecepatan internet',
                    'Karena sela tuts kotor menjadi sarang bakteri penyakit dan dapat menyebabkan tuts macet yang merusak ritme mengetik',
                    'Agar tombol keyboard bisa menyala lebih terang tanpa listrik',
                    'Supaya sistem operasi komputer tidak mendeteksi malware',
                ],
                'a' => 1,
                'why' => 'Higienitas workstation penting untuk mencegah penyebaran bakteri/alergi pada saluran pernapasan serta menjaga kinerja perangkat keras.',
            ],
            [
                'id' => 13,
                'chapter' => 6,
                'type' => 'case_study',
                'q' => 'Saat proses Code Review, seorang rekan tim menemukan kesalahan penulisan algoritma yang kamu buat. Budaya kerja tim yang sehat dan aman secara psikologis dicerminkan oleh…',
                'o' => [
                    'Rekan tim mengejek dan mempermalukanmu di hadapan seluruh anggota kelas',
                    'Rekan tim memberikan komentar yang fokus pada logika kode dengan bahasa sopan dan memberi saran perbaikan konstruktif',
                    'Kamu langsung menghapus seluruh repository git karena tersinggung',
                    'Rekan tim menyembunyikan bug tersebut agar aplikasi sengaja gagal saat dipresentasikan',
                ],
                'a' => 1,
                'why' => 'Ulasan kode yang objektif dan santun menciptakan psychological safety sehingga seluruh anggota tim berani berkolaborasi tanpa takut dihakimi.',
            ],
            [
                'id' => 14,
                'chapter' => 6,
                'type' => 'mcq',
                'q' => 'Di laboratorium komputer PPLG, mengapa tas ransel siswa dilarang diletakkan berantakan di lorong antar meja?',
                'o' => [
                    'Karena ransel bisa menyerap sinyal Wi-Fi di dalam lab',
                    'Karena lorong jalan harus bebas hambatan agar tidak menimbulkan bahaya tersandung dan memudahkan evakuasi darurat',
                    'Karena guru tidak menyukai warna ransel siswa',
                    'Supaya lantai lab tampak lebih luas untuk bermain futsal',
                ],
                'a' => 1,
                'why' => 'Menjaga jalur lalu lintas lab bebas dari rintangan adalah standar dasar keselamatan evakuasi (housekeeping) guna mencegah cedera akibat tersandung.',
            ],
            [
                'id' => 15,
                'chapter' => 6,
                'type' => 'mcq',
                'q' => 'Berapa nilai akhir siswa jika ia berhasil menjawab 12 soal dengan benar dari total 15 soal kuis dengan bobot soal merata?',
                'o' => [
                    'Nilai: 70',
                    'Nilai: 75',
                    'Nilai: 80',
                    'Nilai: 85',
                ],
                'a' => 2,
                'why' => 'Perhitungan nilai = (Jumlah benar / Total soal) × 100 = (12 / 15) × 100 = 80.',
            ],
        ];
    }

    /**
     * Tampilkan halaman materi dan modul K3 Software Engineering.
     */
    public function index(): View
    {
        $lessons = self::getLessonsData();
        $questions = self::getQuestionsData();

        // Ambil riwayat percobaan terakhir dari database
        $latestAttempts = QuizAttempt::latest()->take(10)->get();
        $bestAttempt = QuizAttempt::orderByDesc('score')->first();
        $totalAttempts = QuizAttempt::count();

        return view('k3.index', compact('lessons', 'questions', 'latestAttempts', 'bestAttempt', 'totalAttempts'));
    }

    /**
     * API Backend untuk memvalidasi dan menyimpan hasil kuis siswa.
     */
    public function submitQuiz(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'student_name' => 'nullable|string|max:100',
            'answers' => 'required|array',
        ]);

        $questions = self::getQuestionsData();
        $userAnswers = $validated['answers'];
        $correctCount = 0;
        $unansweredCount = 0;
        $reviewDetails = [];

        foreach ($questions as $idx => $q) {
            $userAns = $userAnswers[$idx] ?? null;

            if ($userAns === null || (is_array($userAns) && count($userAns) === 0)) {
                $unansweredCount++;
                $isCorrect = false;
            } else {
                if (! empty($q['multi'])) {
                    $expected = (array) $q['a'];
                    $actual = (array) $userAns;
                    sort($expected);
                    sort($actual);
                    $isCorrect = ($expected === $actual);
                } else {
                    $isCorrect = ((int) $userAns === (int) $q['a']);
                }
            }

            if ($isCorrect) {
                $correctCount++;
            }

            // Siapkan label teks jawaban yang benar untuk review
            $correctLabels = [];
            $correctIndices = ! empty($q['multi']) ? (array) $q['a'] : [(int) $q['a']];
            foreach ($correctIndices as $ci) {
                if (isset($q['o'][$ci])) {
                    $correctLabels[] = $q['o'][$ci];
                }
            }

            $reviewDetails[] = [
                'question_index' => $idx + 1,
                'question' => $q['q'],
                'user_answer' => $userAns,
                'is_correct' => $isCorrect,
                'correct_labels' => implode(', ', $correctLabels),
                'explanation' => $q['why'],
            ];
        }

        $totalQuestions = count($questions);
        $score = (int) round(($correctCount / $totalQuestions) * 100);
        $incorrectCount = $totalQuestions - $correctCount - $unansweredCount;
        $xpEarned = $correctCount * 10;
        $passed = ($score >= 75);

        $attempt = QuizAttempt::create([
            'student_name' => $validated['student_name'] ?: 'Siswa PPLG',
            'score' => $score,
            'correct_count' => $correctCount,
            'incorrect_count' => $incorrectCount,
            'total_questions' => $totalQuestions,
            'xp_earned' => $xpEarned,
            'passed' => $passed,
            'answers' => $userAnswers,
        ]);

        return response()->json([
            'success' => true,
            'attempt_id' => $attempt->id,
            'score' => $score,
            'correct_count' => $correctCount,
            'incorrect_count' => $incorrectCount,
            'unanswered_count' => $unansweredCount,
            'total_questions' => $totalQuestions,
            'xp_earned' => $xpEarned,
            'passed' => $passed,
            'created_at' => $attempt->created_at->format('d M Y, H:i'),
            'reviews' => $reviewDetails,
        ]);
    }
}
