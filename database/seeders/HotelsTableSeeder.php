<?php

namespace Database\Seeders;

use App\Models\Hotel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HotelsTableSeeder extends Seeder
{

    public function run()
    {
        $hotels = [
            [
                'hotelName' => "HOTELHokkaido1",
                'hotelImage' => "img/qui-nguyen-giL2fHNr3Lc-unsplash.jpg",
                'country_id' => 5,
                'mail' => "hokkaido1@test.co.jp",
                'basicFee' => "￥300,000",
                'max_guest' => 25
            ],
            [
                'hotelName' => "HOTELHokkaido2",
                'hotelImage' => "img/valeriia-bugaiova-_pPHgeHz1uk-unsplash.jpg",
                'country_id' => 5,
                'mail' => "hokkaido2@test.co.jp",
                'basicFee' => "￥400,000",
                'max_guest' => 25
            ],
            [
                'hotelName' => "HOTELAomori1",
                'hotelImage' => "img/qui-nguyen-giL2fHNr3Lc-unsplash.jpg",
                'country_id' => 6,
                'mail' => "aomori1@test.co.jp",
                'basicFee' => "￥300,000",
                'max_guest' => 25
            ],
            [
                'hotelName' => "HOTELAomori2",
                'hotelImage' => "img/valeriia-bugaiova-_pPHgeHz1uk-unsplash.jpg",
                'country_id' => 6,
                'mail' => "aomori2@test.co.jp",
                'basicFee' => "￥400,000",
                'max_guest' => 25
            ],
            [
                'hotelName' => "HOTELIwate1",
                'hotelImage' => "img/qui-nguyen-giL2fHNr3Lc-unsplash.jpg",
                'country_id' => 7,
                'mail' => "iwate1@test.co.jp",
                'basicFee' => "￥300,000",
                'max_guest' => 25
            ],
            [
                'hotelName' => "HOTELIwate2",
                'hotelImage' => "img/valeriia-bugaiova-_pPHgeHz1uk-unsplash.jpg",
                'country_id' => 7,
                'mail' => "iwate2@test.co.jp",
                'basicFee' => "￥400,000",
                'max_guest' => 25
            ],
            [
                'hotelName' => "HOTELMiyagi1",
                'hotelImage' => "img/qui-nguyen-giL2fHNr3Lc-unsplash.jpg",
                'country_id' => 8,
                'mail' => "miyagi1@test.co.jp",
                'basicFee' => "￥300,000",
                'max_guest' => 25
            ],
            [
                'hotelName' => "HOTELMiyagi2",
                'hotelImage' => "img/valeriia-bugaiova-_pPHgeHz1uk-unsplash.jpg",
                'country_id' => 8,
                'mail' => "miyagi2@test.co.jp",
                'basicFee' => "￥400,000",
                'max_guest' => 25
            ],
            [
                'hotelName' => "HOTELAkita1",
                'hotelImage' => "img/qui-nguyen-giL2fHNr3Lc-unsplash.jpg",
                'country_id' => 9,
                'mail' => "akita1@test.co.jp",
                'basicFee' => "￥300,000",
                'max_guest' => 25
            ],
            [
                'hotelName' => "HOTELAkita2",
                'hotelImage' => "img/valeriia-bugaiova-_pPHgeHz1uk-unsplash.jpg",
                'country_id' => 9,
                'mail' => "akita2@test.co.jp",
                'basicFee' => "￥400,000",
                'max_guest' => 25
            ],
            [
                'hotelName' => "HOTELYamagata1",
                'hotelImage' => "img/qui-nguyen-giL2fHNr3Lc-unsplash.jpg",
                'country_id' => 10,
                'mail' => "yamagata1@test.co.jp",
                'basicFee' => "￥300,000",
                'max_guest' => 25
            ],
            [
                'hotelName' => "HOTELYamagata2",
                'hotelImage' => "img/valeriia-bugaiova-_pPHgeHz1uk-unsplash.jpg",
                'country_id' => 10,
                'mail' => "yamagata2@test.co.jp",
                'basicFee' => "￥400,000",
                'max_guest' => 25
            ],
            [
                'hotelName' => "HOTELHukushima1",
                'hotelImage' => "img/qui-nguyen-giL2fHNr3Lc-unsplash.jpg",
                'country_id' => 11,
                'mail' => "hukushima1@test.co.jp",
                'basicFee' => "￥300,000",
                'max_guest' => 25
            ],
            [
                'hotelName' => "HOTELHukushima2",
                'hotelImage' => "img/valeriia-bugaiova-_pPHgeHz1uk-unsplash.jpg",
                'country_id' => 11,
                'mail' => "hukushima2@test.co.jp",
                'basicFee' => "￥400,000",
                'max_guest' => 25
            ],
            [
                'hotelName' => "HOTELIbaraki1",
                'hotelImage' => "img/qui-nguyen-giL2fHNr3Lc-unsplash.jpg",
                'country_id' => 12,
                'mail' => "ibaraki1@test.co.jp",
                'basicFee' => "￥300,000",
                'max_guest' => 25
            ],
            [
                'hotelName' => "HOTELIbaraki2",
                'hotelImage' => "img/valeriia-bugaiova-_pPHgeHz1uk-unsplash.jpg",
                'country_id' => 12,
                'mail' => "ibaraki2@test.co.jp",
                'basicFee' => "￥400,000",
                'max_guest' => 25
            ],
            [
                'hotelName' => "HOTELTochigi1",
                'hotelImage' => "img/qui-nguyen-giL2fHNr3Lc-unsplash.jpg",
                'country_id' => 13,
                'mail' => "tochigi1@test.co.jp",
                'basicFee' => "￥300,000",
                'max_guest' => 25
            ],
            [
                'hotelName' => "HOTELTochigi2",
                'hotelImage' => "img/valeriia-bugaiova-_pPHgeHz1uk-unsplash.jpg",
                'country_id' => 13,
                'mail' => "tochigi2@test.co.jp",
                'basicFee' => "￥400,000",
                'max_guest' => 25
            ],
            [
                'hotelName' => "HOTELGunma1",
                'hotelImage' => "img/qui-nguyen-giL2fHNr3Lc-unsplash.jpg",
                'country_id' => 14,
                'mail' => "gunma1@test.co.jp",
                'basicFee' => "￥300,000",
                'max_guest' => 25
            ],
            [
                'hotelName' => "HOTELGunma2",
                'hotelImage' => "img/valeriia-bugaiova-_pPHgeHz1uk-unsplash.jpg",
                'country_id' => 14,
                'mail' => "gunma2@test.co.jp",
                'basicFee' => "￥400,000",
                'max_guest' => 25
            ],
            [
                'hotelName' => "HOTELSaitama1",
                'hotelImage' => "img/qui-nguyen-giL2fHNr3Lc-unsplash.jpg",
                'country_id' => 15,
                'mail' => "saitama1@test.co.jp",
                'basicFee' => "￥300,000",
                'max_guest' => 25
            ],
            [
                'hotelName' => "HOTELSaitama2",
                'hotelImage' => "img/valeriia-bugaiova-_pPHgeHz1uk-unsplash.jpg",
                'country_id' => 15,
                'mail' => "saitama2@test.co.jp",
                'basicFee' => "￥400,000",
                'max_guest' => 25
            ],
            [
                'hotelName' => "HOTELChiba1",
                'hotelImage' => "img/qui-nguyen-giL2fHNr3Lc-unsplash.jpg",
                'country_id' => 16,
                'mail' => "chiba1@test.co.jp",
                'basicFee' => "￥300,000",
                'max_guest' => 25
            ],
            [
                'hotelName' => "HOTELChiba2",
                'hotelImage' => "img/valeriia-bugaiova-_pPHgeHz1uk-unsplash.jpg",
                'country_id' => 16,
                'mail' => "chiba2@test.co.jp",
                'basicFee' => "￥400,000",
                'max_guest' => 25
            ],
            [
                'hotelName' => "HOTELTokyo1",
                'hotelImage' => "img/qui-nguyen-giL2fHNr3Lc-unsplash.jpg",
                'country_id' => 17,
                'mail' => "tokyo1@test.co.jp",
                'basicFee' => "￥300,000",
                'max_guest' => 25
            ],
            [
                'hotelName' => "HOTELTokyo2",
                'hotelImage' => "img/valeriia-bugaiova-_pPHgeHz1uk-unsplash.jpg",
                'country_id' => 17,
                'mail' => "tokyo2@test.co.jp",
                'basicFee' => "￥400,000",
                'max_guest' => 25
            ],
            [
                'hotelName' => "HOTELKanagawa1",
                'hotelImage' => "img/qui-nguyen-giL2fHNr3Lc-unsplash.jpg",
                'country_id' => 18,
                'mail' => "kanagawa1@test.co.jp",
                'basicFee' => "￥300,000",
                'max_guest' => 25
            ],
            [
                'hotelName' => "HOTELKanagawa2",
                'hotelImage' => "img/valeriia-bugaiova-_pPHgeHz1uk-unsplash.jpg",
                'country_id' => 18,
                'mail' => "kanagawa2@test.co.jp",
                'basicFee' => "￥400,000",
                'max_guest' => 25
            ],
            [
                'hotelName' => "HOTELNiigata1",
                'hotelImage' => "img/qui-nguyen-giL2fHNr3Lc-unsplash.jpg",
                'country_id' => 19,
                'mail' => "niigata1@test.co.jp",
                'basicFee' => "￥300,000",
                'max_guest' => 25
            ],
            [
                'hotelName' => "HOTELNiigata2",
                'hotelImage' => "img/valeriia-bugaiova-_pPHgeHz1uk-unsplash.jpg",
                'country_id' => 19,
                'mail' => "niigata2@test.co.jp",
                'basicFee' => "￥400,000",
                'max_guest' => 25
            ],
            [
                'hotelName' => "HOTELToyama1",
                'hotelImage' => "img/qui-nguyen-giL2fHNr3Lc-unsplash.jpg",
                'country_id' => 20,
                'mail' => "toyama1@test.co.jp",
                'basicFee' => "￥300,000",
                'max_guest' => 25
            ],
            [
                'hotelName' => "HOTELToyama2",
                'hotelImage' => "img/valeriia-bugaiova-_pPHgeHz1uk-unsplash.jpg",
                'country_id' => 20,
                'mail' => "toyama2@test.co.jp",
                'basicFee' => "￥400,000",
                'max_guest' => 25
            ],
            [
                'hotelName' => "HOTELIshikawa1",
                'hotelImage' => "img/qui-nguyen-giL2fHNr3Lc-unsplash.jpg",
                'country_id' => 21,
                'mail' => "ishikawa1@test.co.jp",
                'basicFee' => "￥300,000",
                'max_guest' => 25
            ],
            [
                'hotelName' => "HOTELIshikawa2",
                'hotelImage' => "img/valeriia-bugaiova-_pPHgeHz1uk-unsplash.jpg",
                'country_id' => 21,
                'mail' => "ishikawa2@test.co.jp",
                'basicFee' => "￥400,000",
                'max_guest' => 25
            ],
            [
                'hotelName' => "HOTELHukui1",
                'hotelImage' => "img/qui-nguyen-giL2fHNr3Lc-unsplash.jpg",
                'country_id' => 22,
                'mail' => "hukui1@test.co.jp",
                'basicFee' => "￥300,000",
                'max_guest' => 25
            ],
            [
                'hotelName' => "HOTELHukui2",
                'hotelImage' => "img/valeriia-bugaiova-_pPHgeHz1uk-unsplash.jpg",
                'country_id' => 22,
                'mail' => "hukui2@test.co.jp",
                'basicFee' => "￥400,000",
                'max_guest' => 25
            ],
            [
                'hotelName' => "HOTELYamanashi1",
                'hotelImage' => "img/qui-nguyen-giL2fHNr3Lc-unsplash.jpg",
                'country_id' => 23,
                'mail' => "yamanashi1@test.co.jp",
                'basicFee' => "￥300,000",
                'max_guest' => 25
            ],
            [
                'hotelName' => "HOTELYamanashi2",
                'hotelImage' => "img/valeriia-bugaiova-_pPHgeHz1uk-unsplash.jpg",
                'country_id' => 23,
                'mail' => "yamanashi2@test.co.jp",
                'basicFee' => "￥400,000",
                'max_guest' => 25
            ],
            [
                'hotelName' => "HOTELNagano1",
                'hotelImage' => "img/qui-nguyen-giL2fHNr3Lc-unsplash.jpg",
                'country_id' => 24,
                'mail' => "nagano1@test.co.jp",
                'basicFee' => "￥300,000",
                'max_guest' => 25
            ],
            [
                'hotelName' => "HOTELNagano2",
                'hotelImage' => "img/valeriia-bugaiova-_pPHgeHz1uk-unsplash.jpg",
                'country_id' => 24,
                'mail' => "nagano2@test.co.jp",
                'basicFee' => "￥400,000",
                'max_guest' => 25
            ],
            [
                'hotelName' => "HOTELGihu1",
                'hotelImage' => "img/qui-nguyen-giL2fHNr3Lc-unsplash.jpg",
                'country_id' => 25,
                'mail' => "gihu1@test.co.jp",
                'basicFee' => "￥300,000",
                'max_guest' => 25
            ],
            [
                'hotelName' => "HOTELGihu2",
                'hotelImage' => "img/valeriia-bugaiova-_pPHgeHz1uk-unsplash.jpg",
                'country_id' => 25,
                'mail' => "gihu2@test.co.jp",
                'basicFee' => "￥400,000",
                'max_guest' => 25
            ],
            [
                'hotelName' => "HOTELShizuoka1",
                'hotelImage' => "img/qui-nguyen-giL2fHNr3Lc-unsplash.jpg",
                'country_id' => 26,
                'mail' => "shizuoka1@test.co.jp",
                'basicFee' => "￥300,000",
                'max_guest' => 25
            ],
            [
                'hotelName' => "HOTELShizuoka2",
                'hotelImage' => "img/valeriia-bugaiova-_pPHgeHz1uk-unsplash.jpg",
                'country_id' => 26,
                'mail' => "shizuoka2@test.co.jp",
                'basicFee' => "￥400,000",
                'max_guest' => 25
            ],
            [
                'hotelName' => "HOTELAichi1",
                'hotelImage' => "img/qui-nguyen-giL2fHNr3Lc-unsplash.jpg",
                'country_id' => 27,
                'mail' => "aichi1@test.co.jp",
                'basicFee' => "￥300,000",
                'max_guest' => 25
            ],
            [
                'hotelName' => "HOTELAichi2",
                'hotelImage' => "img/valeriia-bugaiova-_pPHgeHz1uk-unsplash.jpg",
                'country_id' => 27,
                'mail' => "aichi2@test.co.jp",
                'basicFee' => "￥400,000",
                'max_guest' => 25
            ],
            [
                'hotelName' => "HOTELMie1",
                'hotelImage' => "img/qui-nguyen-giL2fHNr3Lc-unsplash.jpg",
                'country_id' => 28,
                'mail' => "mie1@test.co.jp",
                'basicFee' => "￥300,000",
                'max_guest' => 25
            ],
            [
                'hotelName' => "HOTELMie2",
                'hotelImage' => "img/valeriia-bugaiova-_pPHgeHz1uk-unsplash.jpg",
                'country_id' => 28,
                'mail' => "mie2@test.co.jp",
                'basicFee' => "￥400,000",
                'max_guest' => 25
            ],
            [
                'hotelName' => "HOTELShiga1",
                'hotelImage' => "img/qui-nguyen-giL2fHNr3Lc-unsplash.jpg",
                'country_id' => 29,
                'mail' => "shiga1@test.co.jp",
                'basicFee' => "￥300,000",
                'max_guest' => 25
            ],
            [
                'hotelName' => "HOTELShiga2",
                'hotelImage' => "img/valeriia-bugaiova-_pPHgeHz1uk-unsplash.jpg",
                'country_id' => 29,
                'mail' => "shiga2@test.co.jp",
                'basicFee' => "￥400,000",
                'max_guest' => 25
            ],
            [
                'hotelName' => "HOTELKyoto1",
                'hotelImage' => "img/qui-nguyen-giL2fHNr3Lc-unsplash.jpg",
                'country_id' => 30,
                'mail' => "kyoto1@test.co.jp",
                'basicFee' => "￥300,000",
                'max_guest' => 25
            ],
            [
                'hotelName' => "HOTELKyoto2",
                'hotelImage' => "img/valeriia-bugaiova-_pPHgeHz1uk-unsplash.jpg",
                'country_id' => 30,
                'mail' => "kyoto2@test.co.jp",
                'basicFee' => "￥400,000",
                'max_guest' => 25
            ],
            [
                'hotelName' => "HOTELOsaka1",
                'hotelImage' => "img/qui-nguyen-giL2fHNr3Lc-unsplash.jpg",
                'country_id' => 31,
                'mail' => "osaka1@test.co.jp",
                'basicFee' => "￥300,000",
                'max_guest' => 25
            ],
            [
                'hotelName' => "HOTELOsaka2",
                'hotelImage' => "img/valeriia-bugaiova-_pPHgeHz1uk-unsplash.jpg",
                'country_id' => 31,
                'mail' => "osaka2@test.co.jp",
                'basicFee' => "￥400,000",
                'max_guest' => 25
            ],
            [
                'hotelName' => "HOTELHyogo1",
                'hotelImage' => "img/qui-nguyen-giL2fHNr3Lc-unsplash.jpg",
                'country_id' => 32,
                'mail' => "hyogo1@test.co.jp",
                'basicFee' => "￥300,000",
                'max_guest' => 25
            ],
            [
                'hotelName' => "HOTELHyogo2",
                'hotelImage' => "img/valeriia-bugaiova-_pPHgeHz1uk-unsplash.jpg",
                'country_id' => 32,
                'mail' => "hyogo2@test.co.jp",
                'basicFee' => "￥400,000",
                'max_guest' => 25
            ],
            [
                'hotelName' => "HOTELNara1",
                'hotelImage' => "img/qui-nguyen-giL2fHNr3Lc-unsplash.jpg",
                'country_id' => 33,
                'mail' => "nara1@test.co.jp",
                'basicFee' => "￥300,000",
                'max_guest' => 25
            ],
            [
                'hotelName' => "HOTELNara2",
                'hotelImage' => "img/valeriia-bugaiova-_pPHgeHz1uk-unsplash.jpg",
                'country_id' => 33,
                'mail' => "nara2@test.co.jp",
                'basicFee' => "￥400,000",
                'max_guest' => 25
            ],
            [
                'hotelName' => "HOTELWakayama1",
                'hotelImage' => "img/qui-nguyen-giL2fHNr3Lc-unsplash.jpg",
                'country_id' => 34,
                'mail' => "wakayama1@test.co.jp",
                'basicFee' => "￥300,000",
                'max_guest' => 25
            ],
            [
                'hotelName' => "HOTELWakayama2",
                'hotelImage' => "img/valeriia-bugaiova-_pPHgeHz1uk-unsplash.jpg",
                'country_id' => 34,
                'mail' => "wakayama2@test.co.jp",
                'basicFee' => "￥400,000",
                'max_guest' => 25
            ],
            [
                'hotelName' => "HOTELTottori1",
                'hotelImage' => "img/qui-nguyen-giL2fHNr3Lc-unsplash.jpg",
                'country_id' => 35,
                'mail' => "tottori1@test.co.jp",
                'basicFee' => "￥300,000",
                'max_guest' => 25
            ],
            [
                'hotelName' => "HOTELTottori2",
                'hotelImage' => "img/valeriia-bugaiova-_pPHgeHz1uk-unsplash.jpg",
                'country_id' => 35,
                'mail' => "tottori2@test.co.jp",
                'basicFee' => "￥400,000",
                'max_guest' => 25
            ],
            [
                'hotelName' => "HOTELShimane1",
                'hotelImage' => "img/qui-nguyen-giL2fHNr3Lc-unsplash.jpg",
                'country_id' => 36,
                'mail' => "shimane1@test.co.jp",
                'basicFee' => "￥300,000",
                'max_guest' => 25
            ],
            [
                'hotelName' => "HOTELShimane2",
                'hotelImage' => "img/valeriia-bugaiova-_pPHgeHz1uk-unsplash.jpg",
                'country_id' => 36,
                'mail' => "shimane2@test.co.jp",
                'basicFee' => "￥400,000",
                'max_guest' => 25
            ], [
                'hotelName' => "HOTELOkayama1",
                'hotelImage' => "img/qui-nguyen-giL2fHNr3Lc-unsplash.jpg",
                'country_id' => 37,
                'mail' => "okayama1@test.co.jp",
                'basicFee' => "￥300,000",
                'max_guest' => 25
            ],
            [
                'hotelName' => "HOTELOkayama2",
                'hotelImage' => "img/valeriia-bugaiova-_pPHgeHz1uk-unsplash.jpg",
                'country_id' => 37,
                'mail' => "okayama2@test.co.jp",
                'basicFee' => "￥400,000",
                'max_guest' => 25
            ],
            [
                'hotelName' => "HOTELHiroshima1",
                'hotelImage' => "img/qui-nguyen-giL2fHNr3Lc-unsplash.jpg",
                'country_id' => 38,
                'mail' => "hiroshima1@test.co.jp",
                'basicFee' => "￥300,000",
                'max_guest' => 25
            ],
            [
                'hotelName' => "HOTELHiroshima2",
                'hotelImage' => "img/valeriia-bugaiova-_pPHgeHz1uk-unsplash.jpg",
                'country_id' => 38,
                'mail' => "hiroshima2@test.co.jp",
                'basicFee' => "￥400,000",
                'max_guest' => 25
            ],
            [
                'hotelName' => "HOTELYamaguchi1",
                'hotelImage' => "img/qui-nguyen-giL2fHNr3Lc-unsplash.jpg",
                'country_id' => 39,
                'mail' => "yamaguchi1@test.co.jp",
                'basicFee' => "￥300,000",
                'max_guest' => 25
            ],
            [
                'hotelName' => "HOTELYamaguchi2",
                'hotelImage' => "img/valeriia-bugaiova-_pPHgeHz1uk-unsplash.jpg",
                'country_id' => 39,
                'mail' => "yamaguchi2@test.co.jp",
                'basicFee' => "￥400,000",
                'max_guest' => 25
            ],
            [
                'hotelName' => "HOTELTokushima1",
                'hotelImage' => "img/qui-nguyen-giL2fHNr3Lc-unsplash.jpg",
                'country_id' => 40,
                'mail' => "tokushima1@test.co.jp",
                'basicFee' => "￥300,000",
                'max_guest' => 25
            ],
            [
                'hotelName' => "HOTELTokushima2",
                'hotelImage' => "img/valeriia-bugaiova-_pPHgeHz1uk-unsplash.jpg",
                'country_id' => 40,
                'mail' => "tokushima2@test.co.jp",
                'basicFee' => "￥400,000",
                'max_guest' => 25
            ],
            [
                'hotelName' => "HOTELKagawa1",
                'hotelImage' => "img/qui-nguyen-giL2fHNr3Lc-unsplash.jpg",
                'country_id' => 41,
                'mail' => "kagawa1@test.co.jp",
                'basicFee' => "￥300,000",
                'max_guest' => 25
            ],
            [
                'hotelName' => "HOTELKagawa2",
                'hotelImage' => "img/valeriia-bugaiova-_pPHgeHz1uk-unsplash.jpg",
                'country_id' => 41,
                'mail' => "kagawa2@test.co.jp",
                'basicFee' => "￥400,000",
                'max_guest' => 25
            ],
            [
                'hotelName' => "HOTELEhime1",
                'hotelImage' => "img/qui-nguyen-giL2fHNr3Lc-unsplash.jpg",
                'country_id' => 42,
                'mail' => "ehime1@test.co.jp",
                'basicFee' => "￥300,000",
                'max_guest' => 25
            ],
            [
                'hotelName' => "HOTELEhime2",
                'hotelImage' => "img/valeriia-bugaiova-_pPHgeHz1uk-unsplash.jpg",
                'country_id' => 42,
                'mail' => "ehime2@test.co.jp",
                'basicFee' => "￥400,000",
                'max_guest' => 25
            ],
            [
                'hotelName' => "HOTELKouchi1",
                'hotelImage' => "img/qui-nguyen-giL2fHNr3Lc-unsplash.jpg",
                'country_id' => 43,
                'mail' => "kouchi1@test.co.jp",
                'basicFee' => "￥300,000",
                'max_guest' => 25
            ],
            [
                'hotelName' => "HOTELKouchi2",
                'hotelImage' => "img/valeriia-bugaiova-_pPHgeHz1uk-unsplash.jpg",
                'country_id' => 43,
                'mail' => "kouchi2@test.co.jp",
                'basicFee' => "￥400,000",
                'max_guest' => 25
            ],
            [
                'hotelName' => "HOTELHukuoka1",
                'hotelImage' => "img/qui-nguyen-giL2fHNr3Lc-unsplash.jpg",
                'country_id' => 44,
                'mail' => "hukuoka1@test.co.jp",
                'basicFee' => "￥300,000",
                'max_guest' => 25
            ],
            [
                'hotelName' => "HOTELHukuoka2",
                'hotelImage' => "img/valeriia-bugaiova-_pPHgeHz1uk-unsplash.jpg",
                'country_id' => 44,
                'mail' => "hukuoka2@test.co.jp",
                'basicFee' => "￥400,000",
                'max_guest' => 25
            ],
            [
                'hotelName' => "HOTELSaga1",
                'hotelImage' => "img/qui-nguyen-giL2fHNr3Lc-unsplash.jpg",
                'country_id' => 45,
                'mail' => "saga1@test.co.jp",
                'basicFee' => "￥300,000",
                'max_guest' => 25
            ],
            [
                'hotelName' => "HOTELSaga2",
                'hotelImage' => "img/valeriia-bugaiova-_pPHgeHz1uk-unsplash.jpg",
                'country_id' => 45,
                'mail' => "saga2@test.co.jp",
                'basicFee' => "￥400,000",
                'max_guest' => 25
            ],
            [
                'hotelName' => "HOTELNagasaki1",
                'hotelImage' => "img/qui-nguyen-giL2fHNr3Lc-unsplash.jpg",
                'country_id' => 46,
                'mail' => "nagasaki1@test.co.jp",
                'basicFee' => "￥300,000",
                'max_guest' => 25
            ],
            [
                'hotelName' => "HOTELNagasaki2",
                'hotelImage' => "img/valeriia-bugaiova-_pPHgeHz1uk-unsplash.jpg",
                'country_id' => 46,
                'mail' => "nagasaki2@test.co.jp",
                'basicFee' => "￥400,000",
                'max_guest' => 25
            ],
            [
                'hotelName' => "HOTELKumamoto1",
                'hotelImage' => "img/qui-nguyen-giL2fHNr3Lc-unsplash.jpg",
                'country_id' => 47,
                'mail' => "kumamoto1@test.co.jp",
                'basicFee' => "￥300,000",
                'max_guest' => 25
            ],
            [
                'hotelName' => "HOTELKumamoto2",
                'hotelImage' => "img/valeriia-bugaiova-_pPHgeHz1uk-unsplash.jpg",
                'country_id' => 47,
                'mail' => "kumamoto2@test.co.jp",
                'basicFee' => "￥400,000",
                'max_guest' => 25
            ],
            [
                'hotelName' => "HOTELOoita1",
                'hotelImage' => "img/qui-nguyen-giL2fHNr3Lc-unsplash.jpg",
                'country_id' => 48,
                'mail' => "ooita1@test.co.jp",
                'basicFee' => "￥300,000",
                'max_guest' => 25
            ],
            [
                'hotelName' => "HOTELOoita2",
                'hotelImage' => "img/valeriia-bugaiova-_pPHgeHz1uk-unsplash.jpg",
                'country_id' => 48,
                'mail' => "ooita2@test.co.jp",
                'basicFee' => "￥400,000",
                'max_guest' => 25
            ],
            [
                'hotelName' => "HOTELMiyazaki1",
                'hotelImage' => "img/qui-nguyen-giL2fHNr3Lc-unsplash.jpg",
                'country_id' => 49,
                'mail' => "miyazaki1@test.co.jp",
                'basicFee' => "￥300,000",
                'max_guest' => 25
            ],
            [
                'hotelName' => "HOTELMiyazaki2",
                'hotelImage' => "img/valeriia-bugaiova-_pPHgeHz1uk-unsplash.jpg",
                'country_id' => 49,
                'mail' => "miyazaki2@test.co.jp",
                'basicFee' => "￥400,000",
                'max_guest' => 25
            ],
            [
                'hotelName' => "HOTELKagoshima1",
                'hotelImage' => "img/qui-nguyen-giL2fHNr3Lc-unsplash.jpg",
                'country_id' => 50,
                'mail' => "kagoshima1@test.co.jp",
                'basicFee' => "￥300,000",
                'max_guest' => 25
            ],
            [
                'hotelName' => "HOTELKagoshima2",
                'hotelImage' => "img/valeriia-bugaiova-_pPHgeHz1uk-unsplash.jpg",
                'country_id' => 50,
                'mail' => "kagoshima2@test.co.jp",
                'basicFee' => "￥400,000",
                'max_guest' => 25
            ],
            [
                'hotelName' => "HOTELOkinawa1",
                'hotelImage' => "img/qui-nguyen-giL2fHNr3Lc-unsplash.jpg",
                'country_id' => 51,
                'mail' => "okinawa1@test.co.jp",
                'basicFee' => "￥300,000",
                'max_guest' => 25
            ],
            [
                'hotelName' => "HOTELOkinawa2",
                'hotelImage' => "img/valeriia-bugaiova-_pPHgeHz1uk-unsplash.jpg",
                'country_id' => 51,
                'mail' => "okinawa2@test.co.jp",
                'basicFee' => "￥400,000",
                'max_guest' => 25
            ]

        ];

        //一括登録
        foreach ($hotels as $hotel) {
            Hotel::create($hotel);
        }
    }
}
