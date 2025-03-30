<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\sanpham;


class SanphamTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        sanpham::create([
            'tensp' => 'Macbook Pro 2020',
            'slug' => 'macbook-pro-2020',
            'chitietsp' => '13 inch, 256GB SSD, 8GB RAM',
            'giasp' => '17300000',
            'mieutasp' => 'orem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a maximus enim.
                Curabitur in neque condimentum, tincidunt sapien non, feugiat diam. Aenean cursus sit amet tellus nec eleifend.'
        ]);

        sanpham::create([
            'tensp' => 'Macbook Air 2020',
            'slug' => 'macbook-air-2020',
            'chitietsp' => '13 inch, 256GB SSD, 8GB RAM',
            'giasp' => '17490000',
            'mieutasp' => 'orem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a maximus enim.
                Curabitur in neque condimentum, tincidunt sapien non, feugiat diam. Aenean cursus sit amet tellus nec eleifend.'
        ]);

        sanpham::create([
            'tensp' => 'Macbook Air M3',
            'slug' => 'macbook-air-m3',
            'chitietsp' => '13 inch, 256GB SSD, 16GB RAM',
            'giasp' => '25290000',
            'mieutasp' => 'orem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a maximus enim.
                Curabitur in neque condimentum, tincidunt sapien non, feugiat diam. Aenean cursus sit amet tellus nec eleifend.'
        ]);

        sanpham::create([
            'tensp' => 'Macbook Pro M4',
            'slug' => 'macbook-pro-m4',
            'chitietsp' => '14 inch, 512GB SSD, 24GB RAM',
            'giasp' => '49490000',
            'mieutasp' => 'orem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a maximus enim.
                Curabitur in neque condimentum, tincidunt sapien non, feugiat diam. Aenean cursus sit amet tellus nec eleifend.'
        ]);

        sanpham::create([
            'tensp' => 'Macbook Air M2',
            'slug' => 'macbook-air-m2',
            'chitietsp' => '13 inch, 512GB SSD, 16GB RAM',
            'giasp' => '27990000',
            'mieutasp' => 'orem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a maximus enim.
                Curabitur in neque condimentum, tincidunt sapien non, feugiat diam. Aenean cursus sit amet tellus nec eleifend.'
        ]);

        sanpham::create([
            'tensp' => 'Macbook Pro M3',
            'slug' => 'macbook-pro-m3',
            'chitietsp' => '16 inch, 512GB SSD, 36GB RAM',
            'giasp' => '59990000',
            'mieutasp' => 'orem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a maximus enim.
                Curabitur in neque condimentum, tincidunt sapien non, feugiat diam. Aenean cursus sit amet tellus nec eleifend.'
        ]);
    }
}
