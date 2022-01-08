<?php

namespace Database\Seeders;

use App\Models\Contact;
use Database\Factories\ContactFactory;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
            Contact::factory()->count('10')->create();

    }
}
