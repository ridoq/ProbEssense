<?php

namespace Database\Seeders;

use App\Models\Umkm;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UmkmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Umkm::create([
            'image' => 'assets/img/download.jpeg',
            'name' => 'Soto Pak koya',
            'price' => '13000',
            'desc' => 'Kabupaten Probolinggo terkenal dengan kuliner soto koyanya yang legendaris. Hidangan soto yang satu ini sudah ada sejak jaman kolonial dan masih populer sampai sekarang.',
            'link' => 'https://gofood.co.id/probolinggo/restaurant/soto-pak-koya-kraksaan-9304a474-50e0-4101-8f69-e030d68ceb4c'
        ]);
        Umkm::create([
            'image' => 'assets/img/id-11134207-7r98r-lld6vwb6g2ducd.jpeg',
            'name' => 'Keripik Usus Dwi Surya',
            'price' => '23000',
            'desc' => 'Keripik Usus Dwi Surya adalah salah satu usaha mikro, kecil, dan menengah (UMKM) yang berbasis di Probolinggo, Jawa Timur. Usaha ini terkenal dengan produk keripik usus ayam yang renyah dan gurih.',
            'link' => 'https://www.facebook.com/photo.php?fbid=999748441708076&id=100050187892598&set=a.796692998680289&locale=id_ID'
        ]);
        Umkm::create([
            'image' => 'assets/img/1700202925_6106.jpeg',
            'name' => 'Batik Tulis Pancor Emas',
            'price' => '350000',
            'desc' => 'Batik yang berasal dari Bucor Kulon, Kec. Pakuniran',
            'link' => 'https://wa.me/6282330281624'
        ]);
        Umkm::create([
            'image' => 'assets/img/1700796925_1308.jpeg',
            'name' => 'Keripik Talas SALOYU',
            'price' => '5000',
            'desc' => 'Keripik talas aneka rasa yang berasal dari Dusun Klakah, Kec. Tiris',
            'link' => 'https://wa.me/6285257309190'
        ]);
        Umkm::create([
            'image' => 'assets/img/1700199336_9680.jpeg',
            'name' => 'Kerajinan Kaligrafis Kalijaga',
            'price' => '650000',
            'desc' => 'Salah satu kerajinan yang ada di daerah probolinggo, tepatnya di Dusun Krajan, Kec. Krejengan',
            'link' => 'https://wa.me/6285233707197'
        ]);
        Umkm::create([
            'image' => 'assets/img/1700205398_8797.jpeg',
            'name' => 'Kopi Bylbean Farm',
            'price' => '20000',
            'desc' => 'Salah satu produk minuman berupa kopi yang ada di bagian selatan daerah probolinggo, tepatnya di Dusun Dungbangu, Kec. Krucil',
            'link' => 'https://wa.me/6282338256322'
        ]);
        Umkm::create([
            'image' => 'assets/img/1700185040_8082.png',
            'name' => 'Madu Honiku',
            'price' => '40000',
            'desc' => 'Madu Honiku dari Kecamatan Leces adalah produk madu murni yang dihasilkan dari nektar bunga alami, menawarkan rasa manis yang kaya dan manfaat kesehatan yang beragam.',
            'link' => 'https://wa.me/6285230077174'
        ]);
        Umkm::create([
            'image' => 'assets/img/1700186992_5084.jpeg',
            'name' => 'Serabih Sosso',
            'price' => '10000',
            'desc' => 'Serabih Sosso adalah salah satu produk makanan dari Dusun Masjid, Kecamatan Paiton',
            'link' => 'https://wa.me/6285258602482'
        ]);
        Umkm::create([
            'image' => 'assets/img/1700193958_1602.jpeg',
            'name' => 'Udeng Khas Tengger Eruna Craft',
            'price' => '50000',
            'desc' => 'Udeng Khas Tengger Eruna Craft ini adalah salah satu kerajinan dari Dusun krajan, Sumberbulu, Kec. Tegalsiwalan',
            'link' => 'https://wa.me/6282229927849'
        ]);
    }
}
