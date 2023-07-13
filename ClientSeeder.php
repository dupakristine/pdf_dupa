<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Client;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Client::factory(20)->create();
        $cl = [
            [
                'last_name' => 'Kristine',
                'first_name' => 'Dupa',
                'middle_name' => '',
                'address' => 'Purok5, Ilijan Norte, Tubigon Bohol',
                'birth_date' => '2001-12-30',
                'phone_number' => '09321370116',
                'email' => 'dupakristine96@gmail.com',
                'initial_deposit' => 10000
            ],
            [
                'last_name' => 'Saturn',
                'first_name' => 'Rizel',
                'middle_name' => 'Dups',
                'address' => ' Purok5, Cahayag, Tubigon Bohol',
                'birth_date' => '1999-11-16',
                'phone_number' => '09867757655',
                'email' => 'dupakristine96@gmail.com',
                'initial_deposit' => 10000
            ]

        ];

        foreach($cl as $c) {
            Client::create($c);
        }
    }
}
