<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->longtext('title');
            $table->longText('discription');
            $table->string('file')->nullable();
            $table->date('dueOn');
            $table->integer('creator')->references('id')->on('users');
            $table->integer('assignedTo')
            ->references('id')
            ->on('users');
            $table->integer('project')
            ->references('id')
            ->on('users');
            $table->string('status');
            $table->boolean('reminder')->default(False);
            $table->timestamps();
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
