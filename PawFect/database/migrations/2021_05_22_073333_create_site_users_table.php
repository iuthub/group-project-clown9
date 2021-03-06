<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiteUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('site_users', function (Blueprint $table) {
            $table->id();

            $table->string('Username');
            $table->string('FullName');
            $table->string('Password');
            $table->string('DateOfBirth');
            $table->integer('PostalCode');
            $table->string('City');
            $table->string('PhoneNumber');
            $table->string('email');
            $table->string('Passport');
            $table->string('PhotoPath')->nullable('True');

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
        Schema::dropIfExists('site_users');
    }
}
