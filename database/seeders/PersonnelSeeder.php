<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Personnel;
use Illuminate\Support\Str;

class PersonnelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'first_name' => 'Taiwo',
                'last_name' => 'Obembe',
                'age' => random_int(18,55),
                'email' => 'Taiwo'.'Obembe'.'@gmail.com',
                'telephone' => '911234567891',
                'sex' => \App\Enums\SexStatus::MALE,
                'created_at' => now(),
            ],
            [
                'first_name' => 'Juliet',
                'last_name' => 'Wilcox',
                'age' => random_int(18,55),
                'email' => 'Juliet'.'Wilcox'.'@gmail.com',
                'telephone' => '311234567891',
                'sex' => \App\Enums\SexStatus::FEMALE,
                'created_at' => now(),
            ],
            [
                'first_name' => 'John',
                'last_name' => 'Doe',
                'age' => random_int(18,55),
                'email' => 'John'.'Doe'.'@gmail.com',
                'telephone' => '211234567891',
                'sex' => \App\Enums\SexStatus::MALE,
                'sex' => \App\Enums\SexStatus::MALE,
                'created_at' => now(),
            ],
            [
                'first_name' => 'George',
                'last_name' => 'Bush',
                'age' => random_int(18,55),
                'email' => 'George'.'Bush'.'@gmail.com',
                'telephone' => '111234567891',
                'sex' => \App\Enums\SexStatus::MALE,
                'created_at' => now(),
            ],
            [
                'first_name' => 'Charles',
                'last_name' => 'Peter',
                'age' => random_int(18,55),
                'email' => 'Charles'.'Peter'.'@gmail.com',
                'telephone' => '111234567892',
                'sex' => \App\Enums\SexStatus::MALE,
                'created_at' => now(),
            ],
        ];
        Personnel::insert($data);
    }
}
