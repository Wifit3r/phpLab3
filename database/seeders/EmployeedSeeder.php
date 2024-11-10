<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class EmployeedSeeder extends Seeder
{
    public function run()
    {
        DB::table('employees')->insert([
            [
                'code' => 'E001',
                'name' => 'Коваль Олександр Іванович',
                'gender' => 'чоловік',
                'birth_year' => 1985,
                'education' => 'вища',
                'specialty' => 'менеджер',
                'registration_date' => Carbon::parse('2021-11-01'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'code' => 'E002',
                'name' => 'Сидоренко Марія Олександрівна',
                'gender' => 'жінка',
                'birth_year' => 1990,
                'education' => 'середня спеціальна',
                'specialty' => 'бухгалтер',
                'registration_date' => Carbon::parse('2022-01-15'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            // Додайте ще декілька записів
            [
                'code' => 'E003',
                'name' => 'Гончар Петро Миколайович',
                'gender' => 'чоловік',
                'birth_year' => 1978,
                'education' => 'вища',
                'specialty' => 'інженер',
                'registration_date' => Carbon::parse('2020-05-20'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'code' => 'E004',
                'name' => 'Кравченко Наталія Петрівна',
                'gender' => 'жінка',
                'birth_year' => 1982,
                'education' => 'вища',
                'specialty' => 'юрист',
                'registration_date' => Carbon::parse('2021-03-11'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ]);
    }
}
