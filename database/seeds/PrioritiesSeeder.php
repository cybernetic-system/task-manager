<?php

use Illuminate\Database\Seeder;

class PrioritiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('priorities')->insert([
            [
                'name' => 'Низкий',
                'sort' => 0
            ],
            [
                'name' => 'Средний',
                'sort' => 1
            ],
            [
                'name' => 'Высокий',
                'sort' => 2
            ],
        ]);
    }
}
