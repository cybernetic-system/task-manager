<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
class TaskStatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('task_statuses')->truncate();
        DB::table('task_statuses')->insert([
            [
                'name' => 'Новая',
                'slug' => 'new',
            ],
            [
                'name' => 'В работе',
                'slug' => 'work',
            ],
            [
                'name' => 'Выполнена',
                'slug' => 'done',
            ],
            [
                'name' => 'Завершена',
                'slug' => 'complete',
            ],
            [
                'name' => 'Черновик',
                'slug' => 'draft',
            ],
            [
                'name' => 'Отклоненена',
                'slug' => 'refused',
            ],
            [
                'name' => 'Отложена',
                'slug' => 'deferred',
            ],
            [
                'name' => 'Отменена',
                'slug' => 'cancel',
            ],
        ]);
    }
}
