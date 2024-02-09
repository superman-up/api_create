<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $records = collect([
            [
            "name" =>"Ajay Bharti",
            "age" =>25,
            "phone" =>8233846596,
            "email" =>"ajaybharti6998@gmail.com",
            "class" =>"B.tech",
            "gender" =>"male"
            ],
            [
            "name" =>"divya Sharma",
            "age" =>25,
            "phone" =>8233846596,
            "email" =>"ajay@gmail.com",
            "class" =>"B.tech",
            "gender" =>"female"],
            [
            "name" =>"Ashika",
            "age" =>25,
            "phone" =>8233846596,
            "email" =>"ashikagupta@gmail.com",
            "class" =>"B.tech",
            "gender" =>"female"],
            [
                "name" =>"Ayushi",
                "age" =>26,
                "phone" =>8233556596,
                "email" =>"ayushi@gmail.com",
                "class" =>"B.tech",
                "gender" =>"female"]
        ]);
        foreach($records as $record){
            Student::create($record);

        }
    }
}
