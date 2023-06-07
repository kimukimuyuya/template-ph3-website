<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('questions')->insert([
            [
                'id'=> 1,
                'content'=> '日本のIT人材が2030年には最大どれくらい不足すると言われているでしょうか？',
                'image'=> 'img-quiz01.png',
                'supplement'=> '経済産業省 2019年3月 － IT 人材需給に関する調査'
            ],
            [
                'id'=>2,
                'content'=> '既存業界のビジネスと、先進的なテクノロジーを結びつけて生まれた、新しいビジネスのことをなんと言うでしょう？',
                'image'=>'img-quiz02.png',
                'supplement'=>''
            ],
            [
                'id'=>3,
                'content'=> 'IoTとは何の略でしょう？',
                'image'=>'img-quiz03.png',
                'supplement'=>''
            ],
            [
                'id'=>4,
                'content'=> 'イギリスのコンピューター科学者であるギャビン・ウッド氏が提唱した、ブロックチェーン技術を活用した「次世代分散型インターネット」のことをなんと言うでしょう？',
                'image'=>'img-quiz04.png',
                'supplement'=>'Society5.0 - 科学技術政策 - 内閣府'
            ],
            [
                'id'=>5,
                'content'=> 'イギリスのコンピューター科学者であるギャビン・ウッド氏が提唱した、ブロックチェーン技術を活用した「次世代分散型インターネット」のことをなんと言うでしょう？',
                'image'=>'img-quiz05.png',
                'supplement'=>''
            ],
            [
                'id'=>6,
                'content'=>'先進テクノロジー活用企業と出遅れた企業の収益性の差はどれくらいあると言われているでしょうか？',
                'image'=>'img-quiz06.png',
                'supplement'=>'Accenture Technology Vision 2021'
            ]]);
    }
}
