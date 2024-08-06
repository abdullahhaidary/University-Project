<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CriminalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run()
    {
        DB::table('criminals')->insert([
            [
                'suspect_id' => 1,
                'case_id' => 1,
                'criminal_name' => 'احمد',
                'last_name' => 'رضایی',
                'father_name' => 'حسین',
                'Created_by'=>1,
                'phone' => '09121234567',
                'email' => 'ahmad.rezaei@example.com',
                'current_address' => 'تهران، میدان انقلاب',
                'actual_address' => 'تهران، خیابان ولیعصر',
                'arrest_date' => Carbon::parse('2024-05-01'),
                'date_of_birth' => Carbon::parse('1980-01-01'),
                'gender' => 'مرد',
                'job' => 'بازاریاب',
                'marital_status' => 'متأهل',
                'family_members' => '3',
                'photo' => 'path/to/photo1.jpg',
<<<<<<< HEAD
                'Created_by'=>'admin',
=======
                'Created_by' => 'admin',

>>>>>>> dd927d6 (waris)
            ],
            [
                'suspect_id' => 2,
                'case_id' => 2,
                'criminal_name' => 'علی',
                'last_name' => 'محمدی',
                'father_name' => 'محمد',
                'Created_by'=>1,
                'phone' => '09131234567',
                'email' => 'ali.mohammadi@example.com',
                'current_address' => 'مشهد، میدان شهدا',
                'actual_address' => 'مشهد، خیابان امام رضا',
                'arrest_date' => Carbon::parse('2024-06-15'),
                'date_of_birth' => Carbon::parse('1990-02-15'),
                'gender' => 'مرد',
                'job' => 'پزشک',
                'marital_status' => 'مجرد',
                'family_members' => '2',
                'photo' => 'path/to/photo2.jpg',
<<<<<<< HEAD
                'Created_by'=>'admin',
=======
                'Created_by' => 'admin',
>>>>>>> dd927d6 (waris)
            ],
            [
                'suspect_id' => 3,
                'case_id' => 3,
                'criminal_name' => 'فاطمه',
                'last_name' => 'احمدی',
                'father_name' => 'سید',
                'Created_by'=>1,
                'phone' => '09132345678',
                'email' => 'fatemeh.ahmadi@example.com',
                'current_address' => 'شیراز، میدان سعدی',
                'actual_address' => 'شیراز، خیابان زند',
                'arrest_date' => Carbon::parse('2024-07-10'),
                'date_of_birth' => Carbon::parse('1985-03-22'),
                'gender' => 'زن',
                'job' => 'معلم',
                'marital_status' => 'متأهل',
                'family_members' => '4',
                'photo' => 'path/to/photo3.jpg',
<<<<<<< HEAD
                'Created_by'=>'admin',
=======
                'Created_by' => 'admin',
>>>>>>> dd927d6 (waris)
            ],
            [
                'suspect_id' => 4,
                'case_id' => 4,
                'criminal_name' => 'حسین',
                'last_name' => 'کریمی',
                'Created_by'=>1,
                'father_name' => 'حسن',
                'phone' => '09133456789',
                'email' => 'hossein.karimi@example.com',
                'current_address' => 'اصفهان، میدان انقلاب',
                'actual_address' => 'اصفهان، خیابان حافظ',
                'arrest_date' => Carbon::parse('2024-08-20'),
                'date_of_birth' => Carbon::parse('1992-11-05'),
                'gender' => 'مرد',
                'job' => 'مهندس',
                'marital_status' => 'متأهل',
                'family_members' => '5',
                'photo' => 'path/to/photo4.jpg',
<<<<<<< HEAD
                'Created_by'=>'admin',
=======
                'Created_by' => 'admin',
>>>>>>> dd927d6 (waris)
            ],
            [
                'suspect_id' => 5,
                'case_id' => 5,
                'criminal_name' => 'مریم',
                'Created_by'=>1,
                'last_name' => 'سلیمی',
                'father_name' => 'سلیمان',
                'phone' => '09134567890',
                'email' => 'maryam.solimi@example.com',
                'current_address' => 'کرج، میدان مادر',
                'actual_address' => 'کرج، خیابان آزادی',
                'arrest_date' => Carbon::parse('2024-09-05'),
                'date_of_birth' => Carbon::parse('1987-04-12'),
                'gender' => 'زن',
                'job' => 'مدیر',
                'marital_status' => 'مجرد',
                'family_members' => '2',
                'photo' => 'path/to/photo5.jpg',
<<<<<<< HEAD
                'Created_by'=>'admin',
=======
                'Created_by' => 'admin',
>>>>>>> dd927d6 (waris)
            ],
            [
                'suspect_id' => 6,
                'case_id' => 6,
                'criminal_name' => 'رضا',
                'last_name' => 'علیزاده',
                'Created_by'=>1,
                'father_name' => 'علی',
                'phone' => '09135678901',
                'email' => 'reza.alizadeh@example.com',
                'current_address' => 'تبریز، میدان بسیج',
                'actual_address' => 'تبریز، خیابان استاد شهریار',
                'arrest_date' => Carbon::parse('2024-10-15'),
                'date_of_birth' => Carbon::parse('1989-09-17'),
                'gender' => 'مرد',
                'job' => 'خلبان',
                'marital_status' => 'متأهل',
                'family_members' => '4',
                'photo' => 'path/to/photo6.jpg',
<<<<<<< HEAD
                'Created_by'=>'admin',
=======
                'Created_by' => 'admin',
>>>>>>> dd927d6 (waris)
            ],
            [
                'suspect_id' => 7,
                'case_id' => 7,
                'criminal_name' => 'سارا',
                'last_name' => 'محمدی',
                'father_name' => 'محمد',
                'Created_by'=>1,
                'phone' => '09136789012',
                'email' => 'sara.mohammadi@example.com',
                'current_address' => 'تهران، میدان ونک',
                'actual_address' => 'تهران، خیابان فرشته',
                'arrest_date' => Carbon::parse('2024-11-25'),
                'date_of_birth' => Carbon::parse('1995-05-30'),
                'gender' => 'زن',
                'job' => 'طراح',
                'marital_status' => 'متأهل',
                'family_members' => '3',
                'photo' => 'path/to/photo7.jpg',
<<<<<<< HEAD
                'Created_by'=>'admin',
=======
                'Created_by' => 'admin',
>>>>>>> dd927d6 (waris)
            ],
            [
                'suspect_id' => 8,
                'case_id' => 8,
                'criminal_name' => 'بهرام',
                'last_name' => 'کریمی',
                'father_name' => 'رضا',
                'Created_by'=>1,
                'phone' => '09181234567',
                'email' => 'bahram.karimi@example.com',
                'current_address' => 'کرج، میدان ولیعصر',
                'actual_address' => 'کرج، خیابان شهیدان',
                'arrest_date' => Carbon::parse('2024-07-22'),
                'date_of_birth' => Carbon::parse('1982-06-12'),
                'gender' => 'مرد',
                'job' => 'تاجر',
                'marital_status' => 'مجرد',
                'family_members' => '1',
                'photo' => 'path/to/photo8.jpg',
<<<<<<< HEAD
                'Created_by'=>'admin',
=======
                'Created_by' => 'admin',
>>>>>>> dd927d6 (waris)
            ],
            [
                'suspect_id' => 9,
                'case_id' => 9,
                'criminal_name' => 'مهناز',
                'Created_by'=>1,
                'last_name' => 'رحیمی',
                'father_name' => 'سعید',
                'phone' => '09191234567',
                'email' => 'mahnaz.rahimi@example.com',
                'current_address' => 'اصفهان، میدان امام',
                'actual_address' => 'اصفهان، خیابان آزادی',
                'arrest_date' => Carbon::parse('2024-08-10'),
                'date_of_birth' => Carbon::parse('1991-12-01'),
                'gender' => 'زن',
                'job' => 'مدیر',
                'marital_status' => 'متأهل',
                'family_members' => '2',
                'photo' => 'path/to/photo9.jpg',
<<<<<<< HEAD
                'Created_by'=>'admin',
=======
                'Created_by' => 'admin',
>>>>>>> dd927d6 (waris)
            ],
            [
                'suspect_id' => 10,
                'case_id' => 10,
                'criminal_name' => 'مهدی',
                'Created_by'=>1,
                'last_name' => 'علیزاده',
                'father_name' => 'حسین',
                'phone' => '09201234567',
                'email' => 'mehdi.alizadeh@example.com',
                'current_address' => 'تبریز، میدان جمهوری',
                'actual_address' => 'تبریز، خیابان آزادی',
                'arrest_date' => Carbon::parse('2024-09-05'),
                'date_of_birth' => Carbon::parse('1993-07-20'),
                'gender' => 'مرد',
                'job' => 'راننده',
                'marital_status' => 'مجرد',
                'family_members' => '4',
                'photo' => 'path/to/photo10.jpg',
<<<<<<< HEAD
                'Created_by'=>'admin',
=======
                'Created_by' => 'admin',
>>>>>>> dd927d6 (waris)
            ],
            // [
            //     'suspect_id' => 11,
            //     'case_id' => 11,
            //     'criminal_name' => 'آرمان',
            //     'last_name' => 'اکبری',
            //     'father_name' => 'اکبر',
            //     'phone' => '09112345678',
            //     'email' => 'arman.akbari@example.com',
            //     'current_address' => 'تهران، میدان آزادی',
            //     'actual_address' => 'تهران، خیابان گاندی',
            //     'arrest_date' => Carbon::parse('2024-07-15'),
            //     'date_of_birth' => Carbon::parse('1988-10-05'),
            //     'gender' => 'مرد',
            //     'job' => 'مربی',
            //     'marital_status' => 'متأهل',
            //     'family_members' => '3',
            //     'photo' => 'path/to/photo11.jpg',
            // ],
            // [
            //     'suspect_id' => 12,
            //     'case_id' => 12,
            //     'criminal_name' => 'نرگس',
            //     'last_name' => 'حسینی',
            //     'father_name' => 'ابراهیم',
            //     'phone' => '09123456789',
            //     'email' => 'narges.hosseini@example.com',
            //     'current_address' => 'شیراز، میدان انقلاب',
            //     'actual_address' => 'شیراز، خیابان خلیج فارس',
            //     'arrest_date' => Carbon::parse('2024-10-05'),
            //     'date_of_birth' => Carbon::parse('1994-02-22'),
            //     'gender' => 'زن',
            //     'job' => 'کارمند',
            //     'marital_status' => 'متأهل',
            //     'family_members' => '2',
            //     'photo' => 'path/to/photo12.jpg',
            // ],
            // [
            //     'suspect_id' => 13,
            //     'case_id' => 13,
            //     'criminal_name' => 'حمید',
            //     'last_name' => 'موسوی',
            //     'father_name' => 'موسی',
            //     'phone' => '09134567890',
            //     'email' => 'hamid.mousavi@example.com',
            //     'current_address' => 'تهران، میدان ولیعصر',
            //     'actual_address' => 'تهران، خیابان ولیعصر',
            //     'arrest_date' => Carbon::parse('2024-08-10'),
            //     'date_of_birth' => Carbon::parse('1981-03-19'),
            //     'gender' => 'مرد',
            //     'job' => 'کارگر',
            //     'marital_status' => 'مجرد',
            //     'family_members' => '5',
            //     'photo' => 'path/to/photo13.jpg',
            // ],
            // [
            //     'suspect_id' => 14,
            //     'case_id' => 14,
            //     'criminal_name' => 'پریسا',
            //     'last_name' => 'صادقی',
            //     'father_name' => 'سعید',
            //     'phone' => '09145678901',
            //     'email' => 'parisa.sadeghi@example.com',
            //     'current_address' => 'تبریز، میدان آذربایجان',
            //     'actual_address' => 'تبریز، خیابان آزادی',
            //     'arrest_date' => Carbon::parse('2024-09-20'),
            //     'date_of_birth' => Carbon::parse('1986-08-15'),
            //     'gender' => 'زن',
            //     'job' => 'مشاور',
            //     'marital_status' => 'متأهل',
            //     'family_members' => '4',
            //     'photo' => 'path/to/photo14.jpg',
            // ],
        ]);
}
}
