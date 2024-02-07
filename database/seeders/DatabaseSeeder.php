<?php

namespace Database\Seeders;

use App\Models\Hero;
use \App\Models\User;
use App\Models\About;
use App\Models\Prodi;
use \App\Models\Dosen;
use App\Models\Tujuan;
use \App\Models\Studio;
use App\Models\Capaian;
use App\Models\Lulusan;
use App\Models\Semester;
use \App\Models\Category;
use \App\Models\Prestasi;
use App\Models\Kurikulum;
use Faker\Provider\Lorem;
use \App\Models\Workspace;
use \App\Models\Pengumuman;
use App\Models\Title_Semester;
use Illuminate\Database\Seeder;
use App\Database\Factories\PengumumanFactory;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Pengumuman::factory(5)->create();
        User::create([
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin')
        ]);

        // Prodi::create([
        //     'title' => 'D3 Teknik Elektro',
        //     'slug' => 'teknik-elektro'
        // ]);
        // Prodi::create([
        //     'title' => 'TEKNOLOGI REKAYASA PERANGKAT LUNAK',
        //     'slug' => 'teknologi-rekayasa-perangkat-lunak'
        // ]);
        // Hero::create([
        //     'title' => 'Selamat Datang Di Teknik Elektro',
        //     'deskripsi' => 'Teknik elektro adalah bidang studi yang berkaitan dengan penggunaan dan aplikasi ilmu pengetahuan dan teknologi dalam bidang listrik, elektronika, komunikasi, dan sistem.',
        //     'prodi_id' => '2'
        // ]);
        // Hero::create([
        //     'title' => 'Pejelasan Rinci',
        //     'deskripsi' => 'Teknik listrik atau teknik elektro adalah salah satu bidang ilmu teknik mengenai aplikasi listrik untuk memenuhi kebutuhan masyarakat. Teknik listrik melibatkan konsep, perancangan, pengembangan, dan produksi peralatan listrik dan elektronik yang dibutuhkan oleh masyarakat.',
        //     'prodi_id' => '2'
        // ]);
        // About::create([
        //     'title' => 'Teknik Elektro',
        //     'deskripsi' => 'Teknik listrik atau teknik elektro adalah salah satu bidang ilmu teknik mengenai aplikasi listrik untuk memenuhi kebutuhan masyarakat. Teknik listrik melibatkan konsep, perancangan, pengembangan, dan produksi peralatan listrik dan elektronik yang dibutuhkan oleh masyarakat. 
        //     Teknik Elektronika adalah cabang ilmu dari teknik elektro yang memanfaatkan komponen listrik nonlinear dan aktif untuk merancang sirkuit elektronika, perangkat VLSI, dan sistem perangkat lainnya. Khusus disiplin ini biasanya didasarkan pada papan sirkuit cetak.',
        //     'prodi_id' => '2'
        // ]);
        // Tujuan::create([
        //     'visi' => 'Menjadi jurusan vokasional yang bermutu, unggul, adaptif, inovatif, dan bermitra erat dengan industri dan masyarakat di bidang Teknik Informatika untuk mendukung Indonesia Maju dan Sejahtera 2045.',
        //     'misi' => 'Aktif dalam proses kreasi, penyebaran dan penerapan sains dan teknologi di bidang bidang Informatika, Multimedia dan Jaringan, Geomatika, Animasi, dan Keamanan Siber melalui layanan pendidikan tinggi vokasi dan penelitian terapan yang bermutu, terbuka, relevan, dan berkolaborasi erat dengan masyarakat dan industri dengan penerapan tata kelola institusi yang baik untuk kehidupan bangsa yang lebih baik.',
        //     'tujuan' => 'Terwujudnya layanan, sumber daya dan ouput pembelajaran dan penelitian di bidang bidang Informatika, Multimedia dan Jaringan, Geomatika, Animasi, dan Keamanan Siber yang bermutu, akses terbuka, inovatif, relevan dengan kebutuhan industri dan masyarakat.
        //     Terwujudnya jurusan yang transparan, akuntabel, produktif, dan bermutu.',
        //     'sasaran' => 'Meningkatnya mutu, akses, relevansi dari layanan, sumberdaya dan output pembelajaran vokasi di bidang bidang Informatika, Multimedia dan Jaringan, Geomatika, Animasi, dan Keamanan Siber.
        //     Meningkatnya mutu dan relevansi penelitian, publikasi hasil penelitian serta kemampuan penerapan iptek dan inovasi di bidang-bidang Informatika, Multimedia dan Jaringan, Geomatika, Animasi, dan Keamanan Siber.
        //     Meningkatnya transparansi, akuntabilitas, produktivitas berorientasi kelestarian lingkungan dan mutu layanan, serta tata kelola jurusan Teknik informatika.',
        //     'prodi_id' => '2'
        // ]);

        // Capaian::create([
        //     'deskripsi' =>'Capaian Pembelajaran (CP) program studi D3 Teknik Informatika telah merujuk pada SN-Dikti (Permendikbud No 49 tahun 2014) dan memiliki level sesuai dengan jenjang Kerangka Kualifikasi Nasional Indonesia/KKNI (Perpres No.8 Tahun 2014). Setiap lulusan program studi D3 Teknik Informatika memiliki capaian pembelajaran sebagai berikut:.',
        //     'sikap' =>'Bertakwa kepada Tuhan Yang Maha Esa dan mampu menunjukkan sikap religius;
        //     Menjunjung tinggi nilai kemanusiaan dalam menjalankan tugas berdasarkan agama, moral, dan etika;
        //     Berkontribusi dalam peningkatan mutu kehidupan bermasyarakat, berbangsa, bernegara, dan kemajuan peradaban berdasarkan Pancasila;
        //     Berperan sebagai warga negara yang bangga dan cinta tanah air, memiliki nasionalisme serta rasa tanggungjawab pada negara dan bangsa;
        //     Menghargai keanekaragaman budaya, pandangan, agama, dan kepercayaan, serta pendapat atau temuan orisinal orang lain;
        //     Bekerja sama dan memiliki kepekaan sosial serta kepedulian terhadap masyarakat dan lingkungan;
        //     Taat hukum dan disiplin dalam kehidupan bermasyarakat dan bernegara;
        //     Menginternalisasi nilai, norma, dan etika akademik;
        //     Menunjukkan sikap bertanggungjawab atas pekerjaan di bidang keahliannya secara mandiri;
        //     Menginternalisasi semangat kemandirian, kejuangan, dan kewirausahaan;
        //     Adaptif terhadap perkembangan ilmu pengetahuan dan teknologi, khususnya di bidang Teknologi Informasi dan Komunikasi dan bekerja sesuai dengan standard operational procedure di lingkungan kerja serta menerapkan prinsip kesehatan, keselamatan, dan keamanan kerja.',
        //     'umum' =>'Mampu menyelesaikan pekerjaan berlingkup luas melalui pengembangan perangkat lunak aplikasi dengan menerapkan beragam metode yang sesuai, baik yang belum maupun yang sudah baku;
        //     Mampu menunjukkan kinerja bermutu dan terukur;
        //     Mampu memecahkan masalah pekerjaan dengan sifat dan konteks yang sesuai dengan bidang keahlian terapannya, didasarkan pada pemikiran logis, inovatif, dan bertanggung jawab atas hasilnya secara mandiri;
        //     Mampu menyusun laporan hasil dan proses kerja secara akurat dan sahih, serta mengomunikasikannya secara efektif kepada pihak lain yang membutuhkan;
        //     Mampu bekerja sama, berkomunikasi, dan berinovasi dalam pekerjaannya;
        //     Mampu bertanggungjawab atas pencapaian hasil kerja kelompok dan melakukan supervisi dan evaluasi terhadap penyelesaian pekerjaan yang ditugaskan kepada pekerja yang berada di bawah tanggungjawabnya;
        //     Mampu melakukan proses evaluasi diri terhadap kelompok kerja yang berada dibawah tanggungjawabnya, dan mengelola pengembangan kompetensi kerja secara mandiri;
        //     Mampu mendokumentasikan, menyimpan, mengamankan, dan menemukan kembali data untuk menjamin kesahihan dan mencegah plagiasi dan
        //     Mampu mengenali kebutuhan, melakukan adaptasi dan mendemonstrasikan kemampuan dalam melanjutkan pengembangan diri (belajar sepanjang hayat).',
        //     'khusus' =>'Mampu mengelola administrasi sistem jaringan komputer;
        //     Mampu melakukan perakitan, perawatan, dan perbaikan komputer;
        //     Mampu mendesain, membangun, dan menginstalasi jaringan komputer untuk kategori LAN, WAN, intranet ataupun internet;
        //     Mampu menganalisis atau mengevaluasi lalulintas jaringan agar lebih efisien;
        //     Mampu melakukan troubleshooting masalah jaringan;
        //     Mampu menerapkan matematika dan dasar rekayasa untuk software (Engineering Foundations for software) dalam pengembangan perangkat lunak aplikasi dengan kebutuhan yang telah didefinisikan oleh sistem analis melalui Software Requirements Specifications (SRS);
        //     Mampu melakukan transformasi model penyelesaian masalah menjadi algoritma didasarkan pada pemikiran logis dan inovatif;
        //     Mampu melakukan pengujian fungsional pada algoritma yang telah dibuat dan bertanggung jawab atas hasilnya secara mandiri;
        //     Mampu melakukan transformasi algoritma menjadi source program dengan bahasa pemrograman terkini yang sesuai dengan platform teknologi yang dipersyaratkan pada Software Requirements Specifications (SRS);
        //     Mampu melakukan Unit testing dan penelusuran pada source code perangkat lunak aplikasi (tracing & debug) menggunakan pendekatan blackbox dan whitebox functional testing;
        //     Mampu merancang, mengimplementasikan, dan mengevaluasi model proses dan model data secara konseptual, lojikal dan fisik berdasarkan Software Requirements Specifications (SRS) yang telah didefinisikan;
        //     Mampu mendokumentasikan perangkat lunak aplikasi menggunakan standar dokumen yang berlaku serta mengkomunikasikannya secara efektif kepada pihak lain yang membutuhkan;
        //     Mampu menerapkan konsep matematika dan domain sistem informasi spesifik guna meningkatkan proses dan kinerja organisasi menggunakan teknologi informasi dan komunikasi;
        //     Mampu merancang dan mengimplementasikan bisnis proses dan standard operation procedure dalam perusahaan kecil dan menengah dengan kebutuhan sistem informasi yang telah didefinisikan oleh sistem analis;
        //     Mampu mengumpulkan (gathering), menyimpan (storing), dan mengelola (organizing) informasi dengan mempertimbangkan issue keamanan data, kebutuhan informasi, integritas data dan inovasi teknologi informasi dengan mengacu standar ISO 27002 (keamanan dan kontrol informasi); dan
        //     Mampu menggunakan teknologi komputer terkini dan mengetahui dampak penggunaannya terhadap peningkatan proses dan kinerja organisasi (Capability Maturity Model);',
        //     'penguasaan' =>'Menguasai konsep teoretis matematika dan dasar rekayasa untuk software (engineering foundations for software) dalam pengembangan perangkat lunak aplikasi;
        //     Menguasai pengetahuan tentang algoritma fundamental didasarkan pada pemikiran logis yang berkaitan dengan struktur data dan manipulasinya, bahasa-bahasa pemrograman, arsitektur dan organisasi komputer, sistem operasi komputer, serta jaringan komputer;
        //     Menguasai pengetahuan konseptual matematika diskrit untuk menyelesaikan problem-problem komputasi;
        //     Menguasai konsep teoritis tentang metode pengujian unit/modul perangkat lunak aplikasi meliputi pendekatan blackbox dan whitebox functional testing;
        //     Menguasai pengetahuan tentang desain basis data baik secara konseptual, logical dan physical;
        //     Menguasai pengetahuan faktual tentang codes dan standard dalam menjaga kualitas pengembangan perangkat lunak aplikasi (ISO 12207 tentang Software Development Process) dan penyusunan dokumentasinya (IEEE Std 829-1998 tentang Software Test Documentation, dan IEEE Std 1016-2009 tentang Software Design Description);
        //     Menguasai prinsip dan teknik berkomunikasi lisan dan tulisan;
        //     Menguasai ilmu manajemen dan teori tata kelola organisasi;
        //     Menguasai pengetahuan faktual tentang variasi bisnis proses dan standar operation procedure dalam perusahaan kecil dan menengah (jumlah pegawai < 100);
        //     Menguasai pengetahuan faktual tentang capability maturity model untuk proses organisasi dalam menerapkan teknologi informasi dan komunikasi;
        //     Menguasai prinsip dan cara mengumpulkan (gathering), menyimpan (storing), dan mengelola (organizing) informasi dengan mempertimbangkan issue keamanan data, kebutuhan informasi, integritas data dan inovasi teknologi informasi dengan mengacu standar ISO 27002 (keamanan dan kontrol informasi);
        //     Menguasai prinsip dan issue terkini tentang etika, social organisasi, legal dan ekonomi; dan
        //     Menguasai pengetahuan tentang perkembangan teknologi informasi dan komunikasi.',
        //     'prodi_id' => '2'
        // ]);

        // Kurikulum::create([
        //     'deskripsi' => 'Kurikulum adalah perangkat mata kuliah dan program pendidikan yang diberikan oleh suatu lembaga penyelenggara pendidikan yang berisi rancangan pelajaran yang akan diberikan kepada peserta pelajaran dalam satu periode jenjang pendidikan',
        //     'prodi_id' => '2'
        // ]);
        // Title_Semester::create([
        //     'title' => 'Semester 1',
        //     'prodi_id' => '2'
        // ]);
        // Title_Semester::create([
        //     'title' => 'Semester 2',
        //     'prodi_id' => '2'
        // ]);

        // Semester::create([
        //     'title__semester_id' => '3',
        //     'kode' => 'IF110',
        //     'name' => 'DASAR PEMROGRAMAN',
        //     'course' => 'FUNDAMENTAL PROGRAMING',
        //     'sks' => '4',
        //     'teori' => '3',
        //     'seminar' => '0',
        //     'praktikum' => '1',
        //     'deskripsi' => 'Capaian pembelajaran yang diharapkan pada mata kuliah ini adalah, mahasiswa mampu menyusun langkah penyelesaian masalah dan menuangkan dalam bentuk algoritma dan program. Ruang lingkup materi yang diberikan untuk mencapai capaian pembelajaran tersebut adalah pelatihan computational thinking, dasar algoritma dan lingkungan pemrograman, variabel, tipe data, operator, Input Output, Percabangan, Perulangan, Array dan matrik, tipe data bentukan serta fungsi dan prosedur.
        //     Mahasiswa mampu menyelesaikan masalah dengan Langkah penyelesaian yang runut, serta menyusun langkah penyelesaian terhadap masalah tersebut dan menuangkan dalam bentuk algoritma dan program dengan kaidah pemrograman',
        //     'umum' => 'Mahasiswa mampu menjelaskan tentang organisasi komponen sistem komputer dan fungsinya, serta mengatur konfigurasi sistem komputer sesuai dengan kebutuhan yang ditentukan.',
        //     'khusus' => 'Mahasiswa mampu:
        //     Menyusun langkah pemecahan masalah sederhana;
        //     Menuliskan langkah-langkah pemecahan masalah ke dalam notasi algoritma,
        //     Mengenali bagian-bagian struktur teks algoritma;
        //     Mengenali perbedaan konsep variabel dan konstanta;
        //     Membedakan karakteristik masing-masing tipe data dasar;
        //     Menentukan tipe data yang tepat untuk menyelesaikan masalah yang diberikan;
        //     Melakukan manipulasi nilai variabel dengan operator yang sesuai;
        //     Melakukan input dan output untuk masing-masing tipe data;
        //     Melakukan input dan output menggunakan arsip (file);
        //     Membedakan kasus yang memerlukan penyelesaian dengan satu kondisi, dua kondisi, atau lebih
        //     Menerapkan jenis percabangan yang tepat untuk penyelesaian masalah yang diberikan
        //     Menyusun program menggunakan konsep percabanga
        //     Membedakan ketiga jenis pengulangan, yakni for, while, dan do-while, serta pengulangan bersarang;
        //     Memilih jenis pengulangan yang tepat untuk menyelesaikan permasalahan
        //     Menyusun program dengan menggunakan konsep pengulangan dan pengulangan bersarang;
        //     Membuat tipe data bentukan sesuai dengan kebutuhan penyelesaian permasalahan;
        //     Melakukan manipulasi variabel bertipe data bentukan dengan menggunakan operator yang tepat;
        //     Membuat variabel array dari berbagai macam tipe data
        //     Melakukan proses-proses pada array sesuai kebutuhan penyelesaian permasalahan;
        //     Mengilustrasikan konsep matriks dalam gamb
        //     Melakukan operasi �operasi pada matriks
        //     Menjelaskan perlunya modularisasi dalam pembuatan program;
        //     Membedakan antara prosedur dan fungs
        //     Mendefinisikan prosedur dan fungsi serta memanggilnya dengan tepat;
        //     Membedakan jenis-jenis parameter dan lingkupnya;
        //     Memilih jenis parameter yang tepat untuk prosedur dan fungsi yang dibuat',
        //     'pustaka' => 'Rinaldi Munir, Algoritma & Pemrograman dalam Bahasa Pascal dan C, Penerbit Informatika Bandung, 20
        //     Rosa A.S. & M. Shalahuddin, Modul Pembelajaran Algoritma dan Pemrograman, Modula Bandung, 2010
        //     Cay Horstmann & Timothy Budd, Big C++, Wiley, 20
        //     David Griffith & Dawn Griffith, Head First C, O"Reilly, 2'
        // ]);

        // Semester::create([
        //     'title__semester_id' => '4',
        //     'kode' => 'IF217',
        //     'name' => 'REKAYASA PERANGKAT LUNAK',
        //     'course' => 'SOFTWARE ENGINEERING',
        //     'sks' => '2',
        //     'teori' => '2',
        //     'seminar' => '0',
        //     'praktikum' => '0',
        //     'deskripsi' => 'Pendahuluan yang berisi pengertian perangkat lunak, rekayasa perangkat lunak, aktivitas pengembangan perangkat lunak, manajemen pengembangan perangkat lunak, dan dokumentasi dan standar
        //     Beberapa model proses dan paradigma pengembangan perangkat lunak
        //     Aktivitas-aktivitas dalam pengembangan perangkat lun',
        //     'umum' => 'Mahasiswa mampu menjelaskan dan menerapkan prinsip dasar rekayasa perangkat lunak dalam aktivitas-aktivitas pengembangan perangkat lunak',
        //     'khusus' => 'Mahasiswa mampu
        //     Menjelaskan pengertian perangkat lunak, rekayasa perangkat lunak, aktivitas pengembangan perangkat lunak, manajemen pengembangan perangkat lunak, dokumentasi dan standar.
        //     Membedakan macam-macam model proses dan paradigma pengembangan perangkat lunak
        //     Menerapkan prinsip-prinsip dasar pengembangan perangkat lunak
        //     Melakukan aktivitas-aktivitas dalam pengembangan perangkat lunak',
        //     'pustaka' => 'Pressman, R. S., Software Engineering: A Practitioner�s Approach, 6th Edition, Mc Graw Hill, 2005.
        //     Sommerville, I., Software Engineering, 8th Edition, Addison Wesley, 2007.
        //     Whitten, J.L., Bentley, L.D., Dittman, K.C., Metode Desain dan Analisis Sistem, Edisi 6, McGrawHill-Penerbit Andi, 2004'
        // ]);
        // Semester::create([
        //     'title__semester_id' => '4',
        //     'kode' => 'IF218',
        //     'name' => 'STRUKTUR DATA',
        //     'course' => 'DATA STRUCTURE',
        //     'sks' => '3',
        //     'teori' => '2',
        //     'seminar' => '0',
        //     'praktikum' => '1',
        //     'deskripsi' => 'Stack
        //     Variabe
        //     Queue
        //     Linked List
        //     Graf
        //     Tree',
        //     'umum' => '	Mahasiswa mampu:
        //     Membangun aplikasi dengan menitikberatkan pada penentuan desain data di memori seperti array,struktur, queue, stack, linked list, graf serta tree
        //     Memanfaatkan desain data dalam fungsi-fungsi aplikasi melalui notasi algoritmik dan bahasa pemrograman',
        //     'khusus' => 'Menjelaskan pentingnya struktur data dalam pembuatan program
        //     Membedakan variabel bertipe data dasar dengan array, struktur, dan pointer
        //     Membuat array, tipe data struktur dan pointer secara tepat sesuai kebutuhan terampil melakukan operasi pada berbagai macam variabel
        //     Menggambarkan konsep stack pada memory
        //     Membuat struktur data stack dalam notasi algoritmik
        //     Melakukan operasi pada stack
        //     Mengaplikasikan stack pada program
        //     Menggambarkan konsep queue pada memory
        //     Membuat struktur data queue dalam notasi algoritmik
        //     Melakukan operasi pada queu
        //     Mengaplikasikan queue pada program
        //     Menggambarkan konsep linked list pada memory
        //     Membuat struktur data linked list dalam notasi algoritmik
        //     Melakukan operasi pada linked list
        //     Membedakan macam-macam struktur linked list dan operasiny
        //     Mengaplikasikan linked list pada program
        //     Menggambarkan konsep tree pada memor>
        //     Membuat struktur data tree dalam notasi algoritmik
        //     Melakukan operasi pada tree
        //     Memahami struktur binary search tree dan pemanfaatannya
        //     Mengaplikasikan tree pada program
        //     Menggambarkan konsep graf pada memory
        //     Membuat struktur data graf dalam notasi algoritmik
        //     Melakukan operasi pada graf
        //     Melakukan penelusuran graf
        //     Mencari lintasan terpendek pada graf
        //     Mengaplikasikan graf pada program',
        //     'pustaka' => 'Rinaldi Munir & Leoni Lidya, Algoritma & Pemrograman dalam Bahasa Pascal dan C edisi revisi, Penerbit Informatika Bandung, 2011
        //     Rinaldi Munir & Leoni Lidya, Algoritma & Pemrograman dalam Bahasa Pascal dan C edisi kedua, Penerbit Informatika Bandung, 2003
        //     Moh. Sjukani, Struktur Data (Algoritma & Struktur Data 2) dengan C, C++, Mitra Wacana Media, 2012
        //     Thompson Susabda Ngoen, Algoritma dan Struktur Data Pengurutan dan Pencarian, Mitra Wacana Media, 2011'
        // ]);

        // Lulusan::create([
        //     'title' => 'Administrator Jaringan',
        //     'deskripsi' => 'Meng-install, mengkonfigurasi, dan mendukung Local Area Network (LAN), Wide Area Network (WAN), dan sistem Internet atau segmen dari sistem jaringan',
        //     'prodi_id' => '2'
        // ]);
        // Lulusan::create([
        //     'title' => 'Robotic Engineer',
        //     'deskripsi' => 'Industri otomotif dan robotik yang kian masif seiring dengan perkembangan teknologi, sangat membutuhkan peran robotik engineer untuk memproduksi robot. Robot engineer tidak melulu menciptakan robot berbentuk seperti manusia, namun juga robot ini dikembangkan menggunakan artificial intelligence atau kecerdasan buatan untuk memudahkan pekerjaan manusia dengan gaji rata-rata 98 juta per tahun, bahkan bisa lebih.',
        //     'prodi_id' => '2'
        // ]);
        // Lulusan::create([
        //     'title' => 'Electrical Design Engineer',
        //     'deskripsi' => 'Insinyur desain listrik bisa bekerja di industri kedirgantaraan, arsitektur, energi dan sebagainya. Profesi ini mirip dengan insinyur lainnya, namun lebih berfokus pada pengembangan sistem kelistrikan.
        //     Selain itu, electrical design engineer juga memberikan layanan pemeliharaan atau pemasangan untuk sistem kelistrikan yang ada. Rata-rata gaji yang didapatkan seorang electrical design engineer adalah 98 juta per tahun, bergantung bidang dan perusahaan tempat kerjanya.',
        //     'prodi_id' => '2'
        // ]);

        // Category::create([
        //     'name' => 'lomba',
        //     'slug' => 'lomba'
        // ]);

        // Category::create([
        //     'name' => 'Website Design',
        //     'slug' => 'web-design'
        // ]);


        // Category::create([
        //     'name' => 'Website Tools',
        //     'slug' => 'web-tools'
        // ]);



        //Workspace
        // Workspace::create([
        //     'name' => 'Ruang 1',
        //     'jurusan' => 'Workspace Teknik Elektro',
        //     'deskripsi' => ''
        // ]);
        // Workspace::create([
        //     'name' => 'Ruang 2',
        //     'jurusan' => 'Workspace Teknik Listrik',
        //     'deskripsi' => ''
        // ]);
        // Workspace::create([
        //     'name' => 'Ruang 3',
        //     'jurusan' => 'Workspace Teknik Listrik',
        //     'deskripsi' => ''
        // ]);
        // Workspace::create([
        //     'name' => 'Ruang 4',
        //     'jurusan' => 'Workspace Teknik Komputer',
        //     'deskripsi' => ''
        // ]);
        // Workspace::create([
        //     'name' => 'Ruang 5',
        //     'jurusan' => 'Workspace Teknik Elektro',
        //     'deskripsi' => ''
        // ]);

        // Studio
        // Studio::create([
        //     'name' => 'Studio 1',
        //     'jurusan' => 'Studio Teknik Elektro',
        //     'deskripsi' => ''
        // ]);
        // Studio::create([
        //     'name' => 'Studio 2',
        //     'jurusan' => 'Studio Teknik Listrik',
        //     'deskripsi' => ''
        // ]);
        // Studio::create([
        //     'name' => 'Studio 3',
        //     'jurusan' => 'Studio Teknik Listrik',
        //     'deskripsi' => ''
        // ]);
        // Studio::create([
        //     'name' => 'Studio 4',
        //     'jurusan' => 'Studio Teknik Komputer',
        //     'deskripsi' => ''
        // ]);
        // Studio::create([
        //     'name' => 'Studio 5',
        //     'jurusan' => 'Studio Teknik Elektro',
        //     'deskripsi' => ''
        // ]);

        // Pengumuman::create([
        //     'title' => 'Pengadaan Lomba untuk Politeknik Negeri Batam untuk Jurusan Teknik Elektro',
        //     'category_id' => '1',
        //     'slug' => 'Pengadaan-Lomba-untuk-Politeknik-Negeri-Batam',
        //     'excerpt' => 'Dear Mahasiswa, Dimohon untuk mengisi Form Pendaftaran tentang Perlombaan yang di adakan oleh Politeknik negeri batam link: https://bit.ly/SurveyPPKSPolibatam',
        //     'body' => 'Dear Mahasiswa, Dimohon untuk mengisi Form Pendaftaran tentang Perlombaan yang di adakan oleh Politeknik negeri batam link: https://bit.ly/SurveyPPKSPolibatam Data ini digunakan oleh Dosen dalam mendata dan mengidentifikasi Pendaftaran mahasiswa. Atas kerjasamanya kami ucapkan terima kasih.'
        // ]);
        // Pengumuman::create([
        //     'title' => 'Pengisian kuisioner tentang survey pencegahan dan penanganan pelecehan kekerasan seksual di Lingkungan Politeknik Negeri Batam',
        //     'category_id' => '2',
        //     'slug' => 'Pengisian-kuisioner-tentang-survey',
        //     'excerpt' => 'Dear Mahasiswa, Dimohon untuk mengisi kuesioner tentang survey pencegahan dan penanganan pelecehan kekerasan seksual',
        //     'body' => 'Dear Mahasiswa, Dimohon untuk mengisi kuesioner tentang survey pencegahan dan penanganan pelecehan kekerasan seksual di Linkungan Politeknik Negeri Batam pada link: https://bit.ly/SurveyPPKSPolibatam Data ini digunakan oleh satgas PPKS dalam mendata dan mengidentifikasi pemahaman mahasiswa tentang pelecehan dan kekerasan seksual di lingkungan kampus. Atas kerjasamanya kami ucapkan terima kasih.'
        // ]);
        // Pengumuman::create([
        //     'title' => 'Pengisian kuisioner tentang survey pencegahan dan penanganan pelecehan kekerasan seksual di Lingkungan Politeknik Negeri Batam',
        //     'category_id' => '3',
        //     'slug' => 'Pengisian-kuisioner-tentang-survey',
        //     'excerpt' => 'Dear Mahasiswa, Dimohon untuk mengisi kuesioner tentang survey pencegahan dan penanganan pelecehan kekerasan seksual',
        //     'body' => 'Dear Mahasiswa, Dimohon untuk mengisi kuesioner tentang survey pencegahan dan penanganan pelecehan kekerasan seksual di Linkungan Politeknik Negeri Batam pada link: https://bit.ly/SurveyPPKSPolibatam Data ini digunakan oleh satgas PPKS dalam mendata dan mengidentifikasi pemahaman mahasiswa tentang pelecehan dan kekerasan seksual di lingkungan kampus. Atas kerjasamanya kami ucapkan terima kasih.'
        // ]);

        // Dosen::create([
        //     'nama_dosen' => 'Michael Robson',
        //     'jabatan' => 'Kepala Prodi Informatika',
        //     'pendidikan' => 'S2 Informatika',
        //     'program_studi' => 'Teknik Elektro',
        //     'deskripsi' => 'Telah mengajar di Politeknik Negeri Batam Selama 10 tahun',
        //     'nidn' => 152135,
        //     'email' => 'michael@gmail.com',
        //     'spesialis' => 'Game,simulasi, teknologi reality dan kewirausahaan'
        // ]);
        // Dosen::create([
        //     'nama_dosen' => 'Harun Midnight',
        //     'jabatan' => 'Kepala Prodi Elektronika',
        //     'pendidikan' => 'S2 Elektronika',
        //     'program_studi' => 'Teknik Multimedia & Jaringan',
        //     'deskripsi' => 'Telah Membuat pencapaian tingkat dunia',
        //     'nidn' => 152321,
        //     'email' => 'harun@gmail.com',
        //     'spesialis' => 'Telecommunication, Informatics'
        // ]);

        // Prestasi::create([
        //     'name' => 'Michael Robson',
        //     'deskripsi' => 'Memenangkan Lomba Web Design Tahun 2022'
        // ]);
        // Prestasi::create([
        //     'name' => 'Harun Midnight',
        //     'deskripsi' => 'Memenangkan Lomba Web Developer Batam Tahun 2023'
        // ]);
        // Prestasi::create([
        //     'name' => 'Bintang Syarif',
        //     'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam, aliquam facilis? Reiciendis neque eveniet delectus et optio quidem, qui aut atque similique eum esse accusantium ullam error quae illo sequi repellat, quis fuga quia quasi necessitatibus magnam est quam. Cupiditate quaerat impedit similique porro quibusdam enim aliquam consectetur fugit at assumenda modi nostrum reprehenderit corporis, ratione perferendis odio cum quisquam quis ipsam eveniet natus quia voluptatum deserunt. '
        // ]);
    }
}
