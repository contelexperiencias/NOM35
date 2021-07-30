<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('fullName',250);  
            $table->string('email')->unique();
            $table->string('age_id', 7);
            $table->string('gender_id', 10);
            $table->string('company_id', 10);
            $table->string('position_id', 10);
            $table->string('seniority_id', 10);
            $table->string('userCode', 50);
            $table->string('completed', 50);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->boolean('tipo_usuario')->default(0); // 0 = suscriptor && 1 = administrador
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
