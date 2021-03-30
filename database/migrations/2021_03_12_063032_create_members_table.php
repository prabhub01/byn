<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->integer('member_id');
            $table->string('full_name');
            $table->string('gender');
            $table->string('valid_upto');
            $table->string('occupation')->nullable();
            $table->string('education')->nullable();
            $table->string('mobile')->nullable();
            $table->string('phone')->nullable();
            $table->string('age')->nullable();
            $table->string('email')->nullable();
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
        Schema::dropIfExists('members');
    }
}
