<?php

namespace Database\Seeders;

use App\Models\Room;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoomsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rooms = [
            [
                'roomName' => "ルーム1",
                'roomCount' => 15
            ],
            [
                'roomName' => "ルーム2",
                'roomCount' => 16
            ],
        ];

        //一括登録
        foreach ($rooms as $room) {
            Room::create($room);
        }
    }
}
