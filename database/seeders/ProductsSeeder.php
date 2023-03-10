<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductsSeeder::table('products')->insert([
                'nume' => 'Talisman de tip pandantiv cu litera v din alfabet',
                'pret' => 169.00,
                'imagine' =>'product-images/v.png',
                'categorie' => 'Talismane',
                'descriere' => 'Spune ce simți cu talismanul nostru de tip pandantiv cu litera V din alfabet.',
                'desc_completa' => 'Inspirat de firul îndoit și de mișcarea unui pix pe hârtie, acest talisman placat cu aur roz de 14 k include o literă „V” tridimensională care arată ca și cum a fost scrisă de mână.',
                'stare' =>'Disponibil',
                'oferta' => 1,
                'noutati' => 1,
                'cod' => '112345C01',
                'metal' =>'Placare cu aur roz de 14 k',
                'piatra' => 'Zirconiu cubic',
                ]);
                
    }
}
