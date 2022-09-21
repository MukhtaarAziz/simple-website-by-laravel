<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ContactUsMessagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $facker = Factory::create();
        $contactUsMessages =[];
        foreach(range(1,10) as $index){
            $contactUsMessages[] = [
                'fullname' => $facker->name,
                'email' => $facker->email,
                'message' => $facker->text,
                'created_at' => now(),
                'updated_at' => now()
            ];
        }

        DB::table('contact_us_messages')->insert($contactUsMessages);
    }
}
