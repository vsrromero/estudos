<?php

use App\SiteContact;
use Illuminate\Database\Seeder;

class SiteContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*SiteContact::create([
        'name' => 'Victor',
        'phone' => '07482959508',
        'email' => 'victor@romero.com',
        'contact_reason' => 2,
        'message' => 'Você consegue, não é uma dúvida é um fato!'
        ]);*/

        factory(SiteContact::class, 100)->create();
    }
}
