<?php

use App\ContactReason;
use Illuminate\Database\Seeder;

class ContactReasonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ContactReason::create(['reason_description' => 'Doubt']);
        ContactReason::create(['reason_description' => 'Compliment']);
        ContactReason::create(['reason_description' => 'Complain']);
    }
}
