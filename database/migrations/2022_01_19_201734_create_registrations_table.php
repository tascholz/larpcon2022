<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registrations', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('first_name');
            $table->string('last_name');
            $table->string('adress');
            $table->date('birthdate');
            $table->string('mail');
            $table->string('supervisor');
            
            $table->string('char_name');
            $table->string('char_profession');
            $table->string('char_race');
            $table->string('char_group');
            $table->text('known_nsc');
            $table->text('char_history');
            $table->string('char_magic');

            $table->text('allergies');
            $table->string('tents');
            $table->string('pkw');

            $table->boolean('newsletter');
            $table->boolean('first_time');
            $table->text('plot_wishes');
            $table->text('con_wishes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registrations');
    }
}
