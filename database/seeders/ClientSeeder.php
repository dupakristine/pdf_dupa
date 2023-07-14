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
        // Client::factory(30)->create();

        $client = [
            [
                'last_name' => 'Dupa',
                'first_name' => 'Kristine',
                'middle_name' => '',
                'phone_number' => '09897866757',
                'address' => 'Ilijan Norte, Tubigon, Bohol.',
                'birth_date' => '2001-12-30',
                'email' => 'dupakristine96@gmail.com',
                'initial_deposit' => 20000,
            ],
            [
                'last_name' => 'Denice',
                'first_name' => 'Aparicio',
                'middle_name' => 'Bautista',
                'phone_number' => '09638757189',
                'address' => 'Inabanga Bohol',
                'birth_date' => '2002-10-14',
                'email' => 'denicejaneaparicio1402@gmail.com',
                'initial_deposit' => 18000,
            ],
            [
                'last_name' => 'Lauros',
                'first_name' => 'Joy',
                'middle_name' => 'Wako kahibaw',
                'phone_number' => '09321370116',
                'address' => 'Pundol Loon, Bohol.',
                'birth_date' => '2002-05-25',
                'email' => 'kimsecret627@gmail.com',
                'initial_deposit' => 30000,
            ],
            [
                'last_name' => 'Caminos',
                'first_name' => 'Jean',
                'middle_name' => 'Andoy',
                'phone_number' => '09321370116',
                'address' => 'Mandaug Calape, Bohol.',
                'birth_date' => '1999-04-27',
                'email' => 'applegwaps23@gmail.com',
                'initial_deposit' => 30000,
            ],
            [
                'last_name' => 'Iryouhin',
                'first_name' => 'Akhemi',
                'middle_name' => 'Akem',
                'phone_number' => '09776565561',
                'address' => 'Cahayag, Tubigon, Bohol.',
                'birth_date' => '2002-12-09',
                'email' => 'akhemiiryouhin@gmail.com',
                'initial_deposit' => 20000,
            ],
            [
                'last_name' => 'Dupa',
                'first_name' => 'Fatima',
                'middle_name' => 'Vitor',
                'phone_number' => '09638757189',
                'address' => 'Panaytayon, Tubigon, Bohol.',
                'birth_date' => '2001-04-09',
                'email' => 'dupafatima@gmail.com',
                'initial_deposit' => 20000,
            ],
            [
                'last_name' => 'Payusan',
                'first_name' => 'Lovely',
                'middle_name' => 'Dups',
                'phone_number' => '09098907861',
                'address' => 'Potohan, Tubigon, Bohol.',
                'birth_date' => '2003-10-06',
                'email' => 'dupalovelyjaene@gmail.com',
                'initial_deposit' => 20000,
            ],
            [
                'last_name' => 'Mascarinas',
                'first_name' => 'Kristine',
                'middle_name' => 'Dupa',
                'phone_number' => '09638757189',
                'address' => 'Ilijan, Tubigon, Bohol.',
                'birth_date' => '2002-11-07',
                'email' => 'kristinedupa66@gmail.com',
                'initial_deposit' => 20000,
            ],
            [
                'last_name' => 'Olsen',
                'first_name' => 'Carl Jay',
                'middle_name' => 'Dupa',
                'phone_number' => '09589786668',
                'address' => 'Ilijan, Tubigon, Bohol.',
                'birth_date' => '2007-08-04',
                'email' => 'ravijadwaynem@gmail.com',
                'initial_deposit' => 20000,
            ],
            [
                'last_name' => 'Mae',
                'first_name' => 'Aparicio',
                'middle_name' => 'Bautista',
                'phone_number' => '09787565783',
                'address' => 'Baogo Inabanga, Bohol.',
                'birth_date' => '2002-10-14',
                'email' => 'aparicio.enice1402@gmail.com',
                'initial_deposit' => 20000,
            ],
        ];

        foreach($client as $c) {
            Client::create($c);
        }
    }
}