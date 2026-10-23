<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TechProduct;

class TechProductSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            [
                'name' => 'MacBook Pro M3 Max',
                'brand' => 'Apple',
                'release_date' => '2025-11-15',
                'specs' => 'Apple M3 Max, 36GB RAM, 1TB SSD',
                'price' => 35999000,
                'image' => 'macbook.jpg',
                'description' => 'Laptop flagship berperforma tinggi untuk para profesional kreatif dan developer.'
            ],
            [
                'name' => 'Samsung Galaxy S26 Ultra',
                'brand' => 'Samsung',
                'release_date' => '2026-02-01',
                'specs' => 'Snapdragon 8 Gen 5, 12GB RAM, 256GB Storage',
                'price' => 21999000,
                'image' => 'samsung_galaxy_s26.jpg', 
                'description' => 'Smartphone dengan teknologi kamera tercanggih dan dukungan AI terintegrasi.'
            ],
            [
                'name' => 'realme C100i',
                'brand' => 'realme',
                'release_date' => '2026-03-10',
                'specs' => 'Baterai 7000 mAh, Ramping & Lightweight, Fast Charging',
                'price' => 2199000,
                'image' => 'realme_c100i.jpeg', 
                'description' => 'Hape kelas 2 jutaan Rupiah dengan baterai jumbo 7000 mAh. Desainnya tetap ramping dan tidak bongsor meski kapasitas baterainya sangat besar.'
            ],
            [
                'name' => 'Lenovo Legion Pro 5 16IRX10',
                'brand' => 'Lenovo',
                'release_date' => '2026-02-15',
                'specs' => 'Intel Core i9-14900HX, NVIDIA GeForce RTX 5070, Layar 16" WQXGA 240Hz',
                'price' => 32999000,
                'image' => 'lenovo_legion_pro_5.jpg', 
                'description' => 'Laptop gaming dengan dapur pacu mumpuni untuk menjalankan game AAA dengan grafis berat masa kini. Ditenagai prosesor Intel Core i9-14900HX dan GPU RTX 5070.'
            ],
            [
                'name' => 'SteelSeries Arctis Nova Pro Omni',
                'brand' => 'SteelSeries',
                'release_date' => '2026-01-20',
                'specs' => 'Konektivitas 5 Perangkat, Hi-Res Wireless 96kHz/24-bit, Dual Battery System',
                'price' => 6499000,
                'image' => 'steelseries_arctis_omni.jpg', 
                'description' => 'Headset wireless premium untuk gamer dan audiophile. Mendukung konektivitas hingga 5 perangkat sekaligus, Hi-Res Wireless Audio, serta sistem baterai ganda.'
            ],
            [
                'name' => 'SanDisk Creator Phone SSD',
                'brand' => 'SanDisk',
                'release_date' => '2026-02-28',
                'specs' => 'Magnet MagSafe Attachment, Rekam Direct ProRes 4K 60fps, USB-C High-Speed',
                'price' => 2899000,
                'image' => 'sandisk_creator_ssd.jpg',
                'description' => 'SSD portabel khusus pengguna iPhone. Menempel langsung via magnet MagSafe dan mendukung perekaman video ProRes 4K 60fps secara langsung ke dalam SSD.'
            ],
            [
                'name' => 'Samsung Galaxy A27 5G',
                'brand' => 'Samsung',
                'release_date' => '2026-03-01',
                'specs' => 'Dukungan Fitur AI, Update OS & One UI 6 Generasi, Layar Super AMOLED 120Hz',
                'price' => 5499000,
                'image' => 'samsung_a27_5g.jpg', 
                'description' => 'Penerus Galaxy A26 5G yang membawa fitur AI lebih canggih dan jaminan pembaruan sistem operasi serta One UI hingga 6 generasi untuk penggunaan jangka panjang.'
            ],
            [
                'name' => 'ASUS ROG Zephyrus Duo 2026',
                'brand' => 'ASUS ROG',
                'release_date' => '2026-03-15',
                'specs' => 'Dual Screen 16" Dual-OLED, Intel Core Ultra 9, RTX 5090, 64GB RAM',
                'price' => 129700000,
                'image' => 'rog_zephyrus_duo_2026.jpg', 
                'description' => 'Laptop gaming flagship paling mahal di Indonesia tahun ini. Mengusung konsep dual-layar OLED 16 inci untuk segmen niche pengagum spesifikasi tertinggi.'
            ],
            [
                'name' => 'Logitech Keys-To-Go 2',
                'brand' => 'Logitech',
                'release_date' => '2026-02-10',
                'specs' => 'Ultra-Slim Mobile Keyboard, Daya Tahan Baterai 3 Tahun, Multi-OS Bluetooth',
                'price' => 1299000,
                'image' => 'Logitech-Keys-To-Go-2.jpg', 
                'description' => 'Keyboard nirkabel ultra-tipis dengan ketahanan baterai hingga 3 tahun. Dirancang khusus untuk portabilitas tinggi pada pengguna tablet dan laptop tipis.'
            ],
            [
                'name' => 'Acer Predator Helios 18 AI',
                'brand' => 'Acer',
                'release_date' => '2026-06-01',
                'specs' => 'Layar 18 Inci Mini-LED, Chipset AI Acceleration, Intel Core Ultra 9',
                'price' => 45000000,
                'image' => 'acer_predator_helios18.jpg', 
                'description' => 'Laptop gaming besar berteknologi AI terbaru yang dipamerkan pada ajang Computex 2026. Menawarkan performa tinggi dan fitur pemrosesan kecerdasan buatan.'
            ],
            [
                'name' => 'OPPO A6c',
                'brand' => 'OPPO',
                'release_date' => '2026-03-05',
                'specs' => 'Baterai 7000 mAh, Desain Flagship Look, Ultra-Durable Body',
                'price' => 2499000,
                'image' => 'oppo-a6c.jpg', 
                'description' => 'Smartphone entry-level segmen 2 jutaan yang mengusung baterai jumbo 7000mAh dan desain bergaya flagship untuk daya tahan maksimal seharian.'
            ],
            [
                'name' => 'Redmi Pad 2.9.7 Pro',
                'brand' => 'Xiaomi',
                'release_date' => '2026-03-12',
                'specs' => 'Layar 9.7" 2K Display, Baterai 7.600 mAh, Quad Speakers',
                'price' => 2399000,
                'image' => 'redmi_pad2.jpg',
                'description' => 'Tablet terjangkau dengan layar visual 2K jernih dan baterai 7.600 mAh, cocok untuk melengkapi kebutuhan produktivitas dan hiburan keluarga.'
            ],
            [
                'name' => 'ZEISS Horizon Anamorphic',
                'brand' => 'ZEISS',
                'release_date' => '2026-06-05',
                'specs' => 'Interchangeable Look Elements, Professional Cinema Lens Mount',
                'price' => 85000000,
                'image' => 'zeiss_horizon.jpeg',
                'description' => 'Lini lensa sinema dengan look element yang bisa ditukar. Menyasar segmen sangat niche yaitu sinematografer profesional.'
            ],
            [
                'name' => 'ASUS ROG Strix XG27UCG Gen2',
                'brand' => 'ASUS',
                'release_date' => '2026-03-20',
                'specs' => 'Fast IPS 27 Inci, Resolusi 4K, Fitur Dual Mode (High Resolution / High Refresh Rate)',
                'price' => 8999000,
                'image' => 'asus_rog_xg27ucg.jpg', 
                'description' => 'Monitor gaming dengan fitur Dual Mode yang memberi fleksibilitas bagi gamer untuk beralih antara resolusi tinggi dan refresh rate tinggi tanpa ganti monitor.'
            ],
            [
                'name' => 'Lenovo LOQ Gaming Monitor Series',
                'brand' => 'Lenovo',
                'release_date' => '2026-03-22',
                'specs' => 'High Resolution / High Refresh Rate Options, Ergonomic Stand',
                'price' => 1600000,
                'image' => 'lenovo_loq_monitor.jpg', 
                'description' => 'Empat model monitor gaming LOQ yang menyasar gamer yang mencari opsi resolusi atau refresh rate tinggi sesuai kebutuhan dan bujet.'
            ],
            [
                'name' => 'Xiaomi IoT Ecosystem Bundle (Watch S5, Buds 6, Smart Band 10 Pro)',
                'brand' => 'Xiaomi',
                'release_date' => '2026-03-25',
                'specs' => 'Watch S5, TWS Buds 6, Smart Band 10 Pro Interconnected Ecosystem',
                'price' => 1899000,
                'image' => 'xiaomi_iot_bundle.jpeg', 
                'description' => 'Tiga perangkat IoT sekaligus (Smartwatch Watch S5, TWS Buds 6, dan Smart Band 10 Pro) untuk memperluas ekosistem perangkat yang saling terhubung.'
            ],
            [
                'name' => 'Xiaomi 17T Pro',
                'brand' => 'Xiaomi',
                'release_date' => '2026-03-28',
                'specs' => 'Telephoto Camera, Leica Live Moment, High-Performance Chipset',
                'price' => 8999000,
                'image' => 'xiaomi_17t_pro.jpg', 
                'description' => 'Smartphone unggulan dengan kemampuan telefoto dan fitur Leica Live Moment, dirancang khusus untuk memotret dari jarak jauh seperti di konser atau satwa liar.'
            ],
            [
                'name' => 'Acer Display Collection Laser Projector',
                'brand' => 'Acer',
                'release_date' => '2026-06-10',
                'specs' => '2x QD-OLED 4K Monitor, Ultra-Slim Portable Screen, 4K Laser Projector with Google TV',
                'price' => 15000000,
                'image' => 'acer_display_computex.jpg', 
                'description' => 'Koleksi display pameran Computex 2026 mencakup monitor QD-OLED 4K, layar portabel ultra-tipis, hingga proyektor laser 4K dengan Google TV bawaan.'
            ],
        ];

        foreach ($products as $product) {
            TechProduct::updateOrCreate(
                ['name' => $product['name']], 
                $product
            );
        }
    }
}