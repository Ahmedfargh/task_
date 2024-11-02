<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //
        Schema::create("check_question",function(Blueprint $table){
            $table->id();
            $table->bigInteger("check_process_id")->unsigned();
            $table->bigInteger("question_id")->unsigned();
            $table->Integer("answer");
            $table->string("comment",128);
            $table->timestamps();
            $table->foreign("question_id")->on("check_list")->references("id")->onDelete("cascade")->onUpdate("cascade");
            $table->foreign("check_process_id")->on("check_list")->references("id")->onDelete("cascade")->onUpate("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
