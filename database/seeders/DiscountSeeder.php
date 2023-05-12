<?php

namespace Database\Seeders;

use App\Models\Discount;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DiscountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $discountes = [
            [
                'discountCode' => 89019283,
                'discountFlag' => false
            ],
            [
                'discountCode' => 17812081,
                'discountFlag' => false
            ],
            [
                'discountCode' => 12345678,
                'discountFlag' => false
            ],
            [
                'discountCode' => 40276384,
                'discountFlag' => false
            ],
            [
                'discountCode' => 27472768,
                'discountFlag' => false
            ],
            [
                'discountCode' => 24784578,
                'discountFlag' => false
            ],
            [
                'discountCode' => 70243278,
                'discountFlag' => false
            ],
            [
                'discountCode' => 23904895,
                'discountFlag' => false
            ],
            [
                'discountCode' => 23784672,
                'discountFlag' => false
            ],
            [
                'discountCode' => 74857369,
                'discountFlag' => false
            ],
            [
                'discountCode' => 91028394,
                'discountFlag' => false
            ],
            [
                'discountCode' => 12347232,
                'discountFlag' => false
            ],
            [
                'discountCode' => 29034783,
                'discountFlag' => false
            ],
            [
                'discountCode' => 70246743,
                'discountFlag' => false
            ],
            [
                'discountCode' => 34627891,
                'discountFlag' => false
            ],
            [
                'discountCode' => 51638679,
                'discountFlag' => false
            ],
            [
                'discountCode' => 89987642,
                'discountFlag' => false
            ],
            [
                'discountCode' => 46928271,
                'discountFlag' => false
            ],
            [
                'discountCode' => 13425734,
                'discountFlag' => false
            ],
            [
                'discountCode' => 65442672,
                'discountFlag' => false
            ],
            [
                'discountCode' => 76583522,
                'discountFlag' => false
            ],
            [
                'discountCode' => 22222222,
                'discountFlag' => false
            ],
            [
                'discountCode' => 53533423,
                'discountFlag' => false
            ],
            [
                'discountCode' => 12890578,
                'discountFlag' => false
            ],
            [
                'discountCode' => 99127741,
                'discountFlag' => false
            ],
            [
                'discountCode' => 47894673,
                'discountFlag' => false
            ],
            [
                'discountCode' => 36283838,
                'discountFlag' => false
            ],
            [
                'discountCode' => 74567782,
                'discountFlag' => false
            ],
            [
                'discountCode' => 56772899,
                'discountFlag' => false
            ],
            [
                'discountCode' => 57883201,
                'discountFlag' => false
            ],
            [
                'discountCode' => 87472272,
                'discountFlag' => false
            ],
            [
                'discountCode' => 46721781,
                'discountFlag' => false
            ],
        ];

        //一括登録
        foreach ($discountes as $discount) {
            Discount::create($discount);
        }
    }
}
