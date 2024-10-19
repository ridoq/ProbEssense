<?php

namespace Database\Seeders;

use App\Models\Culture;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CultureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Culture::create([
            'image' => 'assets/img/DSC_3585-2.jpg',
            'name' => 'Jaran Bodhag',
            'headingSatu' => 'Apa itu Jaran Bodhag?',
            'descSatu' => 'Jaran Bodhag adalah kesenian tradisional dari wilayah Kota Probolinggo, Provinsi Jawa Timur. Kesenian ini telah ditetapkan menjadi Warisan Budaya Tak Benda Indonesia oleh Menteri Pendidikan dan Kebudayaan No. 153992B/MPK.A/DU/2014 pada tanggal 17 Oktober 2014. Hingga saat ini masyarakat Probolinggo masih melestarikan kesenian Jaran Bodhag',
            'headingDua' => 'Deskripsi',
            'descDua' => 'Kesenian ini biasa dilaksanakan dalam rangka mendampingi arak-arakan acara hajatan, pernikahan, khitanan dan lain sejenisnya. Istilah Jaran Bodhag dalam Bahasa Jawa atau Bahasa Madura yaitu Jaran berarti kuda dan Bodhag berarti wadah. Jaran Bodhag merupakan kuda mainan sebagai bentuk tiruan dari kuda aslinya. Tiruan kuda ini dibuat dari batang kayu yang dibentuk menyerupai kepala kuda hingga leher. Kemudian leher kuda mainan itu disambungkan dengan berbagai pelengkap berupa aksesoris-aksesoris. Kesenian ini disuguhkan berupa arak-arakan di jalan dan di halaman rumah dengan diiringi lagu musik tradisional gamelan yang terdiri dari Kenong, Gong, Kendang, dan Sronen. Dengan dua orang Jaran Bodhag dibawa ada yang sebagai Janis dan adapula sebagai penunggang kuda. tembang-tembang tradisional mengiringi kesenian Jaran Bodhag, para seniman Jaran Bodhag memakai pakaian gemerlap dan unik. Rancangan pakaian ini dibuat oleh para seniman Jaran Bodhag. Kesenian ini awalnya terinspirasi dari kesenian Jaran Kencak. Beberapa sumber menyebutkan bahwa awal kemerdekaan kesenian ini berkembang di Indonesia.[1]',
            'subDescDua' => 'Pagelaran Jaran Bodhag terkenal di Kota Probolinggo yang hampir sama dengan pertunjukan Jaran Kencak. Awalnya masyarakat terinspirasi dari pertunjukan Jaran Kencak, yaitu pertunjukan Kuda Menari. pertunjukan ini dilakukan dengan kuda yang telah dilatih untuk menari dengan riasan pakaian beraksesoris lengkap. Masyarakat wilayah pinggiran atau masyarakat yang kurang mampu mendambakan pertunjukan yang sama dengan gelar acara Jaran Kencak. Sebab mereka kurang mampu untuk membeli kuda atau menyewa kuda maka mereka memilih untuk membuat kuda mainan untuk meniru acara Jaran Kencak. Lalu dibuatlah kuda tiruan yang dibuat dari kayu, berupa kepala kuda hingga leher kuda dengan berbagai aksesoris seperti acara Jaran Kencak. Penunggang kuda mainan itu seolah-olah menaiki kuda dengan berjalan dan berdiri dengan kaki sendiri, sehingga dari kejauhan tampak menyerupai pagelaran Jaran Kencak dan sekarang berkembang sebagai Jaran Bodhag.[2]',
            'lokasi' => 'Kota Probolinggo'
        ]);
        Culture::create([
            'image' => 'assets/img/IMG-Netral-News-User-222-N4SM3ZPXQ1.jpg',
            'name' => 'Tari Glipang',
            'headingSatu' => 'Mengenal Tari Glipang',
            'descSatu' => 'Tari Glipang adalah tarian yang berasal dari kebiasaan masyarakat Kabupaten Probolinggo yang akhirnya menjadi tradisi. Glipang sendiri berasal dari Bahasa Arab, yaitu Gholiban yang artinya kebiasaan. Tari tersebut diwariskan secara turun-menurun sehingga masih dapat bertahan hingga sudah menurun empat generasi.',
            'headingDua' => 'Awal Keberadaan',
            'descDua' => 'Keberadaan Tari Glipang berawal dari kelompok seni pertunjukan seni Keliling yaitu Ludruk, yang dimana Ludruk disetiap akan dimulai dibuka dengan Tari Remo. Kemudian Tari Remo inilah yang kemudian dikembangkan oleh masyarakat lokal yang disinggahi Ludruk keliling, diantaranya masyarakat Probolinggo dan Lumajang.',
            'subDescDua' =>'Gerak tari Glipang tidak seluwes tari Remo, tetapi gerakan Reog yang ada didalam Remo tetap ada pada tari Glipang seperti Warok, Jathilan dan Klono Sewandono, Selain itu terdapat gerakan silat. Maka tidak heran gerak tari Glipang mirip dengan gerak tari pada Reog Ponorogo.Glipang berasal dari Bahasa Jawa Ngglipang yang berarti bergerak-gerak berulang-ulang, senada dengan tari Glipang yang gerak tarinya mengulang',
            'headingTiga'=>'Deskripsi',
            'descTiga'=>'Dari sejarahnya, Glipang bukan sekadar tarian, melainkan  gambaran tentang keberanian prajurit yang gagah berani dalam mengusir penjajah Belanda. Bahkan ada semboyan khusus terkait dengan keberanian para prajurit ini “katembheng poteh mata angok poteh tolang”. Maksudnya, lebih baik mati daripada menanggung malu di tangan penjajah. Tarian dengan napas Islam itu juga menjadi karakteristik warga Probolinggo yang memiliki religiusitas tinggi.',
            'subDescTiga'=>'Dalam tarian Glipang, mempunyai tiga gerakan. Tiap-tiap gerakan tarian tersebut mempunyai makna dan cerita pada saat diciptakan.Pertama, tari olah keprajuritan atau yang biasa disebut dengan Tari Kiprah Glipang. Tari Kiprah Glipang ini menggambarkan ketidakpuasan Sari Truno kepada para penjajah Belanda. Ciri khas tarian ini memperlihatkan nafas besar yang diartikan sebagai ungkapan rasa ketidakpuasan terhadap penjajah pada masa itu. Bahkan semangat perlawanan itu juga tercermin pada riasan yang sangar dan kostum serta aksesorisnya menggambarkan seorang prajurit. Gerakannya merupakan paduan dari gerakan Rudat, kesenian Topeng Gethak Madura, seni hadrah, gerakan samman, dan pencak silat.',
            'lokasi' => 'Kabupaten Probolinggo'
        ]);
        Culture::create([
            'image' => 'assets/img/petiklaut1.jpeg',
            'name' => 'Petik Laut',
            'headingSatu' => 'Apa itu Petik Laut?',
            'descSatu' => 'Petik laut adalah tradisi tahunan yang dilakukan oleh nelayan di Probolinggo, Jawa Timur sebagai ungkapan rasa syukur kepada Tuhan dan untuk memohon keselamatan dan rezeki. Tradisi ini juga merupakan bentuk penghargaan kepada laut yang telah menjadi sumber kehidupan.',
            'headingDua' => 'Deskripsi',
            'descDua' => 'Sejarah petik laut merupakan ritual yang selalu dinantikan yang rutin dilaksanakan dikalangan komunitas para nelayan termasuk para nelayan pesisir Mayangan. Petik laut ini rutin dilaksanakan setiap awal tahun hijriah yaitu pada bulan suro atau bulan muharram. Dengan adanya tradisi petik laut ini, dapat menimbulkan rasa tanggungjawab untuk melestarikan kebudayaan lokal yaitu petik laut di Pesisir Mayangan. Metode penulisan ini menggunakan deskriptif. Berdasarkan hasil wawancara yang dilakukan bersama tokoh masyarakat setempat, bahwa maksud dan tujuan dari berbagai upacara sedekah laut tersebut biasanya sama, yaitu memohon pada Tuhan agar para nelayan dianugerahi hasil laut yang melimpah pada tahun yang akan datang dan dihindarkan pula dari malapetaka selama melaut.',
            'subDescDua' => 'Perkembangan era modern tidak membuat upacara petik laut menghilang namun tetap lestari dan mengalami perubahan serta perkembangan. Hal tersebut tidak terlepas dari masyarakat pendukungnya yang tetap melestarikan dan mempertahankannya sebagai tradisi karena memiliki manfaat sehingga dapat dikatakan juga sebagai kearifan lokal.',
            'lokasi' => 'Paiton, Kab. Probolinggo'
        ]);
        Culture::create([
            'image' => 'assets/img/Kasada-Bromo-Wisata-Budaya-di-yang-sarat-makna.jpg',
            'name' => 'Kasada',
            'headingSatu' => 'Mengenal Kasada',
            'descSatu' => 'Probolinggo mempunyai tradisi yaitu Upacara Kasada.Upacara ini diadakan pada saat purnama bulan Kasada (ke dua belas) tahun saka, upacara ini disebut juga sebagai Hari Raya Kurban.',
            'headingDua' => 'Deskripsi',
            'descDua' => 'Upacara Kasada merupakan tradisi tahunan yang dilaksanakan oleh suku Tengger di sekitar Gunung Bromo, Probolinggo, sebagai ungkapan rasa syukur kepada Sang Hyang Widhi. Upacara ini biasanya berlangsung pada malam bulan purnama di bulan Kasada (bulan kesepuluh dalam kalender Jawa). Masyarakat Tengger mengadakan ritual yang melibatkan persembahan berupa hasil pertanian, seperti sayuran dan beras, yang dilemparkan ke kawah Gunung Bromo. Upacara ini juga diwarnai dengan berbagai atraksi seni, seperti tarian tradisional, musik gamelan, dan prosesi yang melibatkan para pemuka adat serta warga setempat.',
            'subDescDua' => 'Dalam pelaksanaan Upacara Kasada, masyarakat Tengger menganggap bahwa persembahan yang dibawa ke kawah akan diterima oleh para dewa dan leluhur mereka. Selain menjadi ajang syukur, upacara ini juga berfungsi untuk memperkuat rasa kebersamaan dan identitas budaya suku Tengger. Ritus ini menarik perhatian banyak wisatawan, sehingga menjadi salah satu daya tarik budaya yang terkenal di kawasan Bromo, sekaligus menjaga kelestarian tradisi yang telah berlangsung selama ratusan tahun.',
            'lokasi' => 'Kecamatan Sukapura, Kabupaten Probolinggo'
        ]);
    }
}
