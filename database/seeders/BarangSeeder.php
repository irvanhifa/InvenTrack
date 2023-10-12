<?php

namespace Database\Seeders;

use App\Models\Barang;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dataBarang = [
            [
                'jenis' => 0,
                'nama' => 'Switch 1',
                'merk' => 'Huawei',
                'stok' => 100,
                'satuan_stok' => 'pcs',
                'path_foto' => 'img/dummy.png'
            ],[
                'jenis' => 1,
                'nama' => 'Kabel 1',
                'merk' => 'Huawei',
                'stok' => 100,
                'satuan_stok' => 'meter',
                'path_foto' => 'img/dummy.png'
            ],[
                'jenis' => 0,
                'nama' => 'Switch 2',
                'merk' => 'Huawei',
                'stok' => 100,
                'satuan_stok' => 'pcs',
                'path_foto' => 'img/dummy.png'
            ],[
                'jenis' => 1,
                'nama' => 'Kabel 2',
                'merk' => 'Huawei',
                'stok' => 100,
                'satuan_stok' => 'meter',
                'path_foto' => 'img/dummy.png'
            ],[
                'jenis' => 0,
                'nama' => 'Switch 3',
                'merk' => 'Huawei',
                'stok' => 100,
                'satuan_stok' => 'pcs',
                'path_foto' => 'img/dummy.png'
            ],[
                'jenis' => 1,
                'nama' => 'Kabel 3',
                'merk' => 'Huawei',
                'stok' => 100,
                'satuan_stok' => 'meter',
                'path_foto' => 'img/dummy.png'
            ],[
                'jenis' => 0,
                'nama' => 'Switch 4',
                'merk' => 'Huawei',
                'stok' => 100,
                'satuan_stok' => 'pcs',
                'path_foto' => 'img/dummy.png'
            ],[
                'jenis' => 1,
                'nama' => 'Kabel 4',
                'merk' => 'Huawei',
                'stok' => 100,
                'satuan_stok' => 'meter',
                'path_foto' => 'img/dummy.png'
            ],[
                'jenis' => 0,
                'nama' => 'Switch 5',
                'merk' => 'Huawei',
                'stok' => 100,
                'satuan_stok' => 'pcs',
                'path_foto' => 'img/dummy.png'
            ],[
                'jenis' => 1,
                'nama' => 'Kabel 5',
                'merk' => 'Huawei',
                'stok' => 100,
                'satuan_stok' => 'meter',
                'path_foto' => 'img/dummy.png'
            ],
        ];

        Barang::insert($dataBarang);
    }
}
