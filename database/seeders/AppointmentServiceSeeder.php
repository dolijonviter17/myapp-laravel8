<?php

namespace Database\Seeders;

use App\Models\Service;
use App\Models\Appointment;
use Illuminate\Database\Seeder;

class AppointmentServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Appointment::factory(10)->create()->each(function($a) {
            $a->services()
            ->save(Service::factory()->make());
        });
        Service::factory(5)->create()->each(function ($q) {
            $q->appointments()->save(Appointment::factory()->make());
        });
        
    }
}
