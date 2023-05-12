<?php

namespace Database\Seeders;

use App\Models\Tax;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TaxsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $taxes = [
            [
                'tax' => "0.3"
            ],
            [
                'tax' => "0.5"
            ],
            [
                'tax' => "0.8"
            ],
            [
                'tax' => "1.0"
            ]
        ];

        //一括登録
        foreach ($taxes as $tax) {
            Tax::create($tax);
        }
    }
}
