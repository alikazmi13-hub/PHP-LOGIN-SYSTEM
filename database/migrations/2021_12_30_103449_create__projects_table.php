<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Table For CLIENT PROJECTS
        Schema::create('projects', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Client_Name', 100);
            $table->string('Client_Email', 255);
            $table->string('Project_Title', 255);
            $table->string('Project_Technology', 255);
            $table->string('Project_Type', 255);
            $table->string('Project_Status', 255);
            $table->longText('Project_Description');
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
        Schema::dropIfExists('Projects');
    }
}
