<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Disease;

class DiseaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $diseaseName = ['ภาวะสมองเสื่อม', 'โรคเบาหวาน', 'โรคกระเพาะ', 'โรคเก๊าท์', 'โรคหัวใจ', 'ไขมันในเลือดสูง', 'ความดันโลหิตสูง', 'โรคไต', 'โรคอ้วน', 'โรคข้อเข่าเสื่อม'];

        foreach ($diseaseName as $disease) {
            Disease::create([
                'name' => $disease,
            ]);
        }
    }
}
