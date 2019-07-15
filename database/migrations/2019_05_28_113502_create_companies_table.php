<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('company_name');
            $table->string('address');
            $table->string('website')->unique();
            $table->string('email')->unique();
            $table->integer('fax')->unsigned();
            $table->integer('mail_box')->unsigned();
            $table->integer('postal_code')->unsigned();
            $table->string('phone1');
            $table->string('phone2')->nullable();
            $table->string('mobile1');
            $table->string('mobile2')->nullable();
            $table->string('employer');
            $table->string('employer_phone');
            $table->string('employer_mobile');
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
        Schema::dropIfExists('companies');
    }
}
