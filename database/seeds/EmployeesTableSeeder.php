<?php

use Illuminate\Database\Seeder;

class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employees')->insert([
           [
               'first_name' => 'Emmanuel',
               'other_names' => 'Oduro Adubah',
               'gender' => 'Male',
               'date_of_birth'  => \Carbon\Carbon::create(1992,04,23),
               'hometown'   => 'Swedru',
               'region' => 'Western',
               'telephone_number' => '0245156826',
               'email' => 'emmanuel_oduro@gmail.com',
               'house_number' => 'BLK K80 PLT B'
           ],
            [
                'first_name' => 'Sampson',
                'other_names' => 'Addo',
                'gender' => 'Male',
                'date_of_birth'  => \Carbon\Carbon::create(1990,10,17),
                'hometown'   => 'Ejura',
                'region' => 'Ashanti',
                'telephone_number' => '055462415',
                'email' => 'sampsonaddo@gmail.com',
                'house_number' => 'BLK K11 PLT B2'
            ],
            [
                'first_name' => 'Offeibea',
                'other_names' => 'Juliet',
                'gender' => 'Female',
                'date_of_birth'  => \Carbon\Carbon::create(1995,05,3),
                'hometown'   => 'Mampong',
                'region' => 'Ashanti',
                'telephone_number' => '02745454541',
                'email' => 'offeibea@gmail.com',
                'house_number' => 'BLK Y67 BLK 45C'
            ],
            [
                'first_name' => 'Maxwell',
                'other_names' => 'Atigah',
                'gender' => 'Male',
                'date_of_birth'  => \Carbon\Carbon::create(1990,11,12),
                'hometown'   => 'Sunyani',
                'region' => 'Brong-Ahafo',
                'telephone_number' => '02344544144',
                'email' => 'maxibillian@gmail.com',
                'house_number' => 'BLK F30 PLT C4'
            ],
            [
                'first_name' => 'Vida',
                'other_names' => 'Ataa Kusi',
                'gender' => 'Female',
                'date_of_birth'  => \Carbon\Carbon::create(1990,07,16),
                'hometown'   => 'Ejisu',
                'region' => 'Ashanti',
                'telephone_number' => '05654545144',
                'email' => 'vidash@gmail.com',
                'house_number' => 'BLK A5 PLT D7'
            ]
        ]);
    }
}
