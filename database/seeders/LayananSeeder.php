<?php
namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class LayananSeeder extends Seeder
{
    /**
    * Run the database seeds.
    */
    public function run(): void
    {
        DB::table('layanans')->insert([
        [
        'code' => 'CK',
        'layanan' => 'Cuci Kering',
        'description' => 'lorem ipsum'
        ],
        [
        'code' => 'CB',
        'layanan' => 'Cuci Basah',
        'description' => 'lorem ipsum'
        ],
        [
            'code' => 'CS',
            'layanan' => 'Cuci Setrika',
            'description' => 'lorem ipsum'
            ],
        [
        'code' => 'SE',
        'layanan' => 'Setrika',
        'description' => 'lorem ipsum'
        ],
        ]);
    }
}