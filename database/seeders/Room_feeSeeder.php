<?php

namespace Database\Seeders;

use App\Models\Room_fee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Room_feeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $room_fees = [
            [
                'roomFee' => 10000,
                'room_info_id' => 1,
                'tax_id' => 4,
                'expiryFromDate' => "2023-01-01",
                'expiryToDate' => "2023-07-31"
            ],
            [
                'roomFee' => 8000,
                'room_info_id' => 1,
                'tax_id' => 4,
                'expiryFromDate' => "2023-08-01",
                'expiryToDate' => "2024-01-31"
            ],
            [
                'roomFee' => 25000,
                'room_info_id' => 2,
                'tax_id' => 4,
                'expiryFromDate' => "2023-01-01",
                'expiryToDate' => "2024-01-31"
            ]
        ];

        //一括登録
        foreach ($room_fees as $room_fee) {
            Room_fee::create($room_fee);
        }
    }
}
