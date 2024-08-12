<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
class CasesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['crime_record_id' => 1, 'Created_by'=>1,'case_number' => 'C001', 'description' => 'متهم به حمل و نگهداری غیرقانونی اسلحه.', 'start_date' => '1403-01-01', 'end_date' => '1403-06-01', 'status' => 'در حال بررسی', 'crime_type' => 'حمل و نگهداری غیرقانونی', 'crime_location' => 'تهران'],
            ['crime_record_id' => 2, 'Created_by'=>1,'case_number' => 'C002', 'description' => 'متهم به سرقت از یک فروشگاه بزرگ.', 'start_date' => '1403-01-15', 'end_date' => '1403-07-15', 'status' => 'محاکمه شده', 'crime_type' => 'سرقت', 'crime_location' => 'مشهد'],
            ['crime_record_id' => 3, 'Created_by'=>1,'case_number' => 'C003', 'description' => 'متهم به فریبکاری مالی و کلاهبرداری.', 'start_date' => '1403-02-01', 'end_date' => '1403-08-01', 'status' => 'در حال بررسی', 'crime_type' => 'کلاهبرداری مالی', 'crime_location' => 'تهران'],
            ['crime_record_id' => 4, 'Created_by'=>1,'case_number' => 'C004', 'description' => 'متهم به قتل عمدی در درگیری خانوادگی.', 'start_date' => '1403-03-01', 'end_date' => '1403-09-01', 'status' => 'محاکمه شده', 'crime_type' => 'قتل عمدی', 'crime_location' => 'کرج'],
            ['crime_record_id' => 5, 'Created_by'=>1,'case_number' => 'C005', 'description' => 'متهم به تعرض به حریم خصوصی و هک اطلاعات.', 'start_date' => '1403-04-01', 'end_date' => '1403-10-01', 'status' => 'در حال بررسی', 'crime_type' => 'هک اطلاعات', 'crime_location' => 'تهران'],
            ['crime_record_id' => 6, 'Created_by'=>1,'case_number' => 'C006', 'description' => 'متهم به قاچاق مواد مخدر در مقیاس بزرگ.', 'start_date' => '1403-05-01', 'end_date' => '1403-11-01', 'status' => 'محاکمه شده', 'crime_type' => 'قاچاق مواد مخدر', 'crime_location' => 'اصفهان'],
            ['crime_record_id' => 7, 'Created_by'=>1,'case_number' => 'C007', 'description' => 'متهم به جعل اسناد و مدارک رسمی.', 'start_date' => '1403-06-01', 'end_date' => '1403-12-01', 'status' => 'در حال بررسی', 'crime_type' => 'جعل اسناد', 'crime_location' => 'شیراز'],
            ['crime_record_id' => 8, 'Created_by'=>1,'case_number' => 'C008', 'description' => 'متهم به قتل عمدی با شواهد قوی.', 'start_date' => '1403-07-01', 'end_date' => '1404-01-01', 'status' => 'در حال بررسی', 'crime_type' => 'قتل عمدی', 'crime_location' => 'تبریز'],
            ['crime_record_id' => 9, 'Created_by'=>1,'case_number' => 'C009', 'description' => 'متهم به کلاهبرداری مالی با استفاده از مدارک جعلی.', 'start_date' => '1403-08-01', 'end_date' => '1404-02-01', 'status' => 'محاکمه شده', 'crime_type' => 'کلاهبرداری مالی', 'crime_location' => 'تهران'],
            ['crime_record_id' => 10,'Created_by'=>1, 'case_number' => 'C010', 'description' => 'متهم به ضرب و شتم شدید در درگیری خیابانی.', 'start_date' => '1403-09-01', 'end_date' => '1404-03-01', 'status' => 'در حال بررسی', 'crime_type' => 'ضرب و شتم', 'crime_location' => 'مشهد'],
        ];

        DB::table('cases')->insert($data);
        $faker = Faker::create('fa_IR'); // Using Persian locale

        $cases = [];
        $crimeRecordIds = DB::table('crime_register_record_information')->pluck('id')->toArray(); // Get all crime record IDs
        $usersIDs = DB::table('users')->pluck('id')->toArray(); // Get all crime record IDs

        for ($i = 0; $i < 800; $i++) { // Generate 100 fake records
            $createdAt = $faker->dateTimeBetween('2016-01-01', '2024-12-31');
            $cases[] = [
                'crime_record_id' => $faker->randomElement($crimeRecordIds), // Randomly assign a crime record ID
                'case_number' => $faker->unique()->numerify('Case-####'), // Generate a unique case number
                'description' => $faker->randomElement([
                    'این جرم شامل سرقت اموال عمومی بود.',
                    'متهم به قتل درجه یک متهم شد.',
                    'این پرونده مرتبط با قاچاق مواد مخدر است.',
                    'جرم ارتکابی شامل فساد اداری بود.',
                    'این پرونده به دلیل رشوه‌گیری تشکیل شد.',
                    'مجرم به جعل اسناد دولتی متهم شد.',
                    'جرم شامل تزویر و تقلب مالی است.',
                    'این جرم مربوط به قاچاق انسان است.',
                    'متهم به فساد اقتصادی دستگیر شد.',
                    'پرونده شامل تخریب اموال عمومی است.',
                    'جرم ارتکابی مربوط به تجاوز جنسی است.',
                    'این پرونده مربوط به جرایم سایبری است.',
                    'متهم به آدم‌ربایی متهم شد.',
                    'جرم شامل تهدید به قتل است.',
                    'این پرونده مربوط به اخاذی مالی است.',
                    'جرم ارتکابی شامل ضرب و شتم بود.',
                    'پرونده مربوط به آتش‌سوزی عمدی است.',
                    'این جرم شامل خیانت به وطن است.',
                    'جرم شامل تروریزم بین‌المللی است.',
                    'پرونده مرتبط با سرقت مسلحانه است.',
                    'این جرم شامل تجاوز به حقوق فردی است.',
                    'پرونده مربوط به جعل هویت بود.',
                    'جرم ارتکابی شامل سرقت خودرو است.',
                    'این جرم مربوط به اختلاس دولتی است.',
                    'متهم به جرایم مالی پیچیده متهم شد.',
                    'این پرونده مربوط به سرقت ادبی است.',
                    'جرم ارتکابی شامل تهاجم فیزیکی است.',
                    'پرونده شامل تخریب آثار باستانی است.',
                    'این جرم مربوط به جرایم اقتصادی است.',
                    'جرم ارتکابی شامل نقض حقوق بشر بود.',
                    'پرونده شامل قاچاق اسلحه است.',
                    'این جرم مربوط به نقض قوانین بین‌المللی است.',
                    'جرم شامل اخلال در نظم عمومی بود.',
                    'پرونده مربوط به تجاوز به عنف است.',
                    'این جرم مربوط به ارتشا و فساد مالی است.',
                    'جرم شامل فریب‌کاری در معاملات است.',
                    'پرونده شامل جرایم اقتصادی پیچیده بود.',
                    'این جرم شامل اختلاس در مقیاس بزرگ است.',
                    'جرم شامل تهاجم به حریم خصوصی بود.',
                    'پرونده مربوط به جعل اوراق بهادار است.',
                    'متهم به کلاهبرداری مالی متهم شد.',
                    'این جرم شامل سرقت از بانک است.',
                    'پرونده مربوط به فساد اخلاقی است.',
                    'جرم ارتکابی شامل تجاوز به حریم خصوصی است.',
                    'این جرم مربوط به اخلال در امنیت عمومی است.',
                    'متهم به تخریب محیط زیست متهم شد.',
                    'جرم شامل حمل و نقل غیرقانونی مواد است.',
                    'پرونده مرتبط با پولشویی بین‌المللی است.',
                    'این جرم مربوط به دستکاری در انتخابات است.',
                    'جرم شامل تجارت غیرقانونی بود.',
                    'پرونده مربوط به خشونت خانوادگی است.',
                    'این جرم شامل تهاجم به آزادی بیان است.',
                    'جرم ارتکابی شامل تحریف واقعیت بود.',
                    'پرونده مرتبط با استفاده غیرقانونی از داده‌ها است.',
                    'این جرم شامل استفاده از خشونت علیه مردم است.',
                    'جرم شامل نقض مقررات ایمنی بود.',
                    'پرونده مربوط به قاچاق فرهنگی است.',
                    'این جرم مربوط به تولید محتوای غیرقانونی است.',
                    'جرم شامل سرقت اطلاعات بود.',
                    'پرونده مربوط به سو استفاده از قدرت است.',
                    'این جرم شامل قاچاق کالا است.',
                    'جرم ارتکابی شامل استفاده از مواد مخدر بود.',
                    'پرونده شامل تهدید امنیت ملی است.',
                    'این جرم شامل تخریب اموال شخصی است.',
                    'جرم شامل سرقت از مغازه بود.',
                    'پرونده مرتبط با توهین به مقدسات است.',
                    'این جرم شامل نقض قوانین گمرکی است.',
                    'جرم شامل دسترسی غیرمجاز به سیستم‌های رایانه‌ای بود.',
                    'پرونده مربوط به تحریف اسناد دولتی است.',
                    'این جرم شامل انتشار اخبار کذب است.',
                    'جرم شامل تجاوز به حریم کودکان بود.',
                    'پرونده مربوط به اخلال در نظم جامعه است.',
                    'این جرم شامل سوء استفاده از موقعیت شغلی است.',
                    'جرم ارتکابی شامل فریب مشتریان بود.',
                    'پرونده مربوط به فروش غیرقانونی دارو است.',
                    'این جرم شامل قاچاق مشروبات الکلی است.',
                    'جرم شامل استفاده از مدارک جعلی بود.',
                    'پرونده مربوط به توهین و افترا است.',
                    'این جرم شامل نقض قوانین مهاجرتی است.',
                    'جرم شامل تهدید به افشای اطلاعات خصوصی بود.'
                ]),

                'start_date' => $faker->date,
                'Created_by'=>$faker->randomElement($usersIDs),
                'end_date' => $faker->optional()->date, // Randomly make it nullable
                'status' => $faker->randomElement(['در حال بررسی', 'محاکمه شده', 'بسته']),
                'crime_type' => $faker->randomElement([
                    'قتل',
                    'دزدی',
                    'اختلاس',
                    'فساد اداری',
                    'قاچاق مواد مخدر',
                    'تجاوز جنسی',
                    'جرایم سایبری',
                    'آدم‌ربایی',
                    'تروریزم',
                    'خیانت به وطن',
                    'جعل اسناد',
                    'رشوه‌گیری',
                    'اخاذی',
                    'قاچاق انسان',
                    'ضرب و شتم',
                    'آتش‌سوزی عمدی',
                    'فساد اقتصادی',
                    'تخریب اموال عمومی',
                    'تهدید',
                    'تزویر و تقلب'
                ]),

                'crime_location' => $faker->address,
                'created_at' => $createdAt,
                'updated_at' => $createdAt,
            ];
        }

        DB::table('cases')->insert($cases);
    }
}
