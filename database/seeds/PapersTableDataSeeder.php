<?php

use Illuminate\Database\Seeder;
use App\papers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PapersTableDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            $papers = [
                ['description' => 'جواز السفر بالمهنة الواردة فى الامر وان يكون الاسم رباعى'],
                ['description' => 'صورة البطاقة'],
                ['description' => 'المؤهلات العملية'],
                ['description' => 'شهادة فيرس من المعامل المركزية لوزارة الصحة'],
                ['description' => 'الشهادات الصحية'],
                ['description' => 'فيش وتشبية'],
                ['description' => 'اصل المؤهل مصدق من وزارة الخارجية']
            ];
        if(DB::table('papers')->get()->count() == 0){
            DB::table('papers')->insert($papers);
        }else {
            echo "\e[31mThe table papers is not empty, therefore NOT ";
        }
        // foreach($papers as $paper){
        //     papers::insert($paper);
        // }
    }
}
