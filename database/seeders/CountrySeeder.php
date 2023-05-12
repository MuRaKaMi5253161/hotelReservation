<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $countrys = [
            [
                'countryName' => "北海道"
            ],
            [
                'countryName' => "青森県"
            ],
            [
                'countryName' => "岩手県"
            ],
            [
                'countryName' => "宮城県"
            ],
            [
                'countryName' => "秋田県"
            ],
            [
                'countryName' => "山形県"
            ],
            [
                'countryName' => "福島県"
            ],
            [
                'countryName' => "茨城県"
            ],
            [
                'countryName' => "栃木県"
            ],
            [
                'countryName' => "群馬県"
            ],
            [
                'countryName' => "埼玉県"
            ],
            [
                'countryName' => "千葉県"
            ],
            [
                'countryName' => "東京都"
            ],
            [
                'countryName' => "神奈川県"
            ],
            [
                'countryName' => "新潟県"
            ],
            [
                'countryName' => "富山県"
            ],
            [
                'countryName' => "石川県"
            ],
            [
                'countryName' => "福井県"
            ],
            [
                'countryName' => "山梨県"
            ],
            [
                'countryName' => "長野県"
            ],
            [
                'countryName' => "岐阜県"
            ],
            [
                'countryName' => "静岡県"
            ],
            [
                'countryName' => "愛知県"
            ],
            [
                'countryName' => "三重県"
            ],
            [
                'countryName' => "滋賀県"
            ],
            [
                'countryName' => "京都府"
            ],
            [
                'countryName' => "大阪府"
            ],
            [
                'countryName' => "兵庫県"
            ],
            [
                'countryName' => "奈良県"
            ],
            [
                'countryName' => "和歌山県"
            ],
            [
                'countryName' => "鳥取県"
            ],
            [
                'countryName' => "島根県"
            ],
            [
                'countryName' => "岡山県"
            ],
            [
                'countryName' => "広島県"
            ],
            [
                'countryName' => "山口県"
            ],
            [
                'countryName' => "徳島県"
            ],
            [
                'countryName' => "香川県"
            ],
            [
                'countryName' => "愛媛県"
            ],
            [
                'countryName' => "高知県"
            ],
            [
                'countryName' => "福岡県"
            ],
            [
                'countryName' => "佐賀県"
            ],
            [
                'countryName' => "長崎県"
            ],
            [
                'countryName' => "熊本県"
            ],
            [
                'countryName' => "大分県"
            ],
            [
                'countryName' => "宮崎県"
            ],
            [
                'countryName' => "鹿児島県"
            ],
            [
                'countryName' => "沖縄県"
            ]
        ];

        //一括登録
        foreach ($countrys as $country) {
            Country::create($country);
        }
    }
}
