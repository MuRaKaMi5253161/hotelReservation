<?php

namespace Database\Seeders;

use App\Models\Address;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $addresses = [
            [
                'country_id' => 1,
                'address' => "1234 2nd Ave. Ny NY 10022",
            ],
            [
                'country_id' => 1,
                'address' => "1234 2nd Ave. Ny NY 10022",
            ]
        ];

        //一括登録
        foreach ($addresses as $address) {
            Address::create($address);
        }
    }
}
