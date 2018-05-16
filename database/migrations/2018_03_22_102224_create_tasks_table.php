<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('description');
            $table->timestamp('time_laid')->nullable();//времени заложено
            $table->timestamp('time_spend')->nullable();//времени затрачено
            $table->timestamp('last_time_start')->nullable();//последний запуск таймера
            $table->boolean('start_status')->default(0);//статус запуска
            $table->integer('status_id')->unsigned()->nullable();
            $table->integer('priority_id')->unsigned()->nullable();
            $table->integer('manager_id')->unsigned()->nullable();
            $table->integer('executor_id')->unsigned()->nullable();
            $table->integer('group_id')->unsigned()->nullable();
            $table->timestamps();
            $table->foreign('priority_id')->references('id')->on('priorities')->onDelete('set null');
            $table->foreign('status_id')->references('id')->on('task_statuses')->onDelete('set null');
            $table->foreign('manager_id')->references('id')->on('users')->onDelete('set null');
            $table->foreign('executor_id')->references('id')->on('users')->onDelete('set null');
            $table->foreign('group_id')->references('id')->on('task_groups')->onDelete('set null');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tasks');
    }
}
