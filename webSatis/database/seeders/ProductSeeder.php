<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
            'name'=>'Ahsap Elegance Mutfak Gereç Takımı',
            'price'=>'200',
            'description'=>'8li Bambu Saplı Silikon Mutfak Seti Krem Renk Ürün Doğal Bambu Saplı Olup Birinci Kalite , Isıya Dayanıklı Silikon Malzemeden Üretilmiştir.',
            'category'=>'Ahsap',
            'gallery'=>'https://productimages.hepsiburada.net/s/157/550/110000113740452.jpg/format:webp'
            ],
            [
                'name'=>'Ahsap Premium Mutfak Gereç Takımı',
                'price'=>'300',
                'description'=>'Ürün Doğal Bambu Saplı Olup Birinci Kalite Ahşap Malzemeden Üretilmiştir.',
                'category'=>'Ahsap',
                'gallery'=>'https://productimages.hepsiburada.net/s/139/550/110000091079932.jpg/format:webp'
            ],
            [
                'name'=>'Ahsap Soft Mutfak Gereç Takımı',
                'price'=>'250',
                'description'=>'Bambu Saplı Silikon Mutfak Seti Krem Renk Ürün Isıya Dayanıklı Silikon Malzemeden Üretilmiştir.',
                'category'=>'Ahsap',
                'gallery'=>'https://productimages.hepsiburada.net/s/204/550/110000179135507.jpg/format:webp'
            ],
            [
                'name'=>'Ahsap Chic Mutfak Gereç Takımı',
                'price'=>'400',
                'description'=>'Doğal Bambu Saplı Olup Birinci Kalite , Isıya Dayanıklı Silikon Malzemeden Üretilmiştir.',
                'category'=>'Plastik',
                'gallery'=>'https://productimages.hepsiburada.net/s/183/550/110000146730554.jpg/format:webp'
            ]
        ]);
    }
}
