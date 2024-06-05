<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class CoursesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       for ($i=0; $i<= 10; $i++) {
           $random = Str::random(10);
           DB::table('courses')->insert([
               'title' => "this is {$random} course",
               'subtitle' => "this is the {$random} subtitle Strong knowledge of database concepts. Good Testing concepts (ideal to have ISTQB, any other test certification or hands on experience in Dev / Testing)",
               'category' => "IT",
               'image' => "https://mui.com/static/images/templates/templates-images/dash-light.png",
               'content' => "this is the {$random} content TDM  Overview Course covers all the aspects of TDM e.g Data Generation,Data Masking,Data subsetting,Data Archiving.Typical challenges faced in testing projects are discussed  in detail along with solutions catered by TDM",
               'author' => "Tran Vdc"
           ]);
       }

    }
}
