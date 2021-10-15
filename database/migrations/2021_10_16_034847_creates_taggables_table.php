<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatesTaggablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // One tag can have more than one Post/Video Post
        // store Post/Video post Model(type)-Table 'id'
        Schema::create('taggables', function (Blueprint $table) {
            $table->unsignedInteger('tag_id');
            $table->unsignedInteger('taggable_id');
            $table->string('taggable_type');
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
        Schema::dropIfExists('taggables');
    }
}
