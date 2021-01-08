<?php

namespace Database\Seeders;

use App\Models\Client;
use DateTimeImmutable;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;


class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker, Client $client)
    {
        $client->name = $faker->name;
        $client->email = $faker->unique()->safeEmail;
        $client->voucher_number_received = 0;
        $client->date_last_voucher = new DateTimeImmutable();
        $client->store();
    }
}
