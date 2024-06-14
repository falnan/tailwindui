<?php

namespace Database\Seeders;

use App\Models\Person;
use Illuminate\Database\Seeder;

class PersonSeeder extends Seeder
{
    public function run(): void
    {
        Person::insert([
            [
                'name' => 'aaa',
                'username' => 'a',
                'email' => 'a@gmail.com',
                'phone' => '123',
            ],
            [
                'name' => 'bbb',
                'username' => 'b',
                'email' => 'b@gmail.com',
                'phone' => '123',
            ],
            [
                'name' => 'ccc',
                'username' => 'c',
                'email' => 'c@gmail.com',
                'phone' => '123',
            ],
            [
                'name' => 'ddd',
                'username' => 'd',
                'email' => 'd@gmail.com',
                'phone' => '123',
            ],
            [
                'name' => 'eee',
                'username' => 'e',
                'email' => 'e@gmail.com',
                'phone' => '123',
            ],
            [
                'name' => 'fff',
                'username' => 'f',
                'email' => 'f@gmail.com',
                'phone' => '123',
            ],
            [
                'name' => 'ggg',
                'username' => 'g',
                'email' => 'g@gmail.com',
                'phone' => '123',
            ],
            [
                'name' => 'hhh',
                'username' => 'h',
                'email' => 'h@gmail.com',
                'phone' => '123',
            ],
            [
                'name' => 'iii',
                'username' => 'i',
                'email' => 'i@gmail.com',
                'phone' => '123',
            ],
            [
                'name' => 'jjj',
                'username' => 'j',
                'email' => 'j@gmail.com',
                'phone' => '123',
            ],
        ]);
    }
}
