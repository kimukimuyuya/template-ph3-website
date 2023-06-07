<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChoiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('choices')->insert([[
            'id'=>1,
            'question_id'=>1,
            'name'=>'約28万人',
            'valid'=>0
        ],
        [
            'id'=>2,
            'question_id'=>1,
            'name'=>'約79万人',
            'valid'=>1
        ],
        [
            'id'=>3,
            'question_id'=>1,
            'name'=>'約183万人',
            'valid'=>0
        ],
        [
            'id'=>4,
            'question_id'=>2,
            'name'=>'INTECH',
            'valid'=>0
        ],
        [
            'id'=>5,
            'question_id'=>2,
            'name'=>'BIZZTECH',
            'valid'=>0
        ],
        [
            'id'=>6,
            'question_id'=>2,
            'name'=>'X-TECH',
            'valid'=>1
        ],
        [
            'id'=>7,
            'question_id'=>3,
            'name'=>'Internet of Things',
            'valid'=>1
        ],
        [
            'id'=>8,
            'question_id'=>3,
            'name'=>'Integrate into Technology',
            'valid'=>0
        ],
        [
            'id'=>9,
            'question_id'=>3,
            'name'=>'Information on Tool',
            'valid'=>0
        ],
        [
            'id'=>10,
            'question_id'=>4,
            'name'=>'Society 5.0',
            'valid'=>1
        ],
        [
            'id'=>11,
            'question_id'=>4,
            'name'=>'CyPhy',
            'valid'=>0
        ],
        [
            'id'=>12,
            'question_id'=>4,
            'name'=>'SDGs',
            'valid'=>0
        ],
        [
            'id'=>13,
            'question_id'=>5,
            'name'=>'Web3.0',
            'valid'=>1
        ],
        [
            'id'=>14,
            'question_id'=>5,
            'name'=>'NFT',
            'valid'=>0
        ],
        [
            'id'=>15,
            'question_id'=>5,
            'name'=>'メタバース',
            'valid'=>0
        ],
        [
            'id'=>16,
            'question_id'=>6,
            'name'=>'約2倍',
            'valid'=>0
        ],
        [
            'id'=>17,
            'question_id'=>6,
            'name'=>'約5倍',
            'valid'=>1
        ],
        [
            'id'=>18,
            'question_id'=>6,
            'name'=>'約11倍',
            'valid'=>0
        ],
    ]);
    }
}
