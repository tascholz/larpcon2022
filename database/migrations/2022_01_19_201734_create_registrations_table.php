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

            $table->integer('event_id');

            $table->string('reg_first_name');
            $table->string('reg_last_name');
            $table->string('reg_adress_street');
            $table->string('reg_adress_pcode');
            $table->string('reg_adress_city');
            $table->date('reg_birthdate');
            $table->string('reg_mail');
            $table->string('reg_supervisor');
            $table->boolean('reg_food');
            
            $table->string('reg_char_name');
            $table->string('reg_char_profession');
            $table->string('reg_char_race');
            $table->string('reg_char_group');
            $table->text('reg_known_nsc');
            $table->text('reg_char_history');
            $table->string('reg_char_magic');

            $table->text('reg_allergies');
            $table->string('reg_tents');
            $table->string('reg_pkw');

            $table->boolean('reg_newsletter');
            $table->boolean('reg_first_time');
            $table->text('reg_plot_wishes');
            $table->text('reg_con_wishes');
            $table->string('reg_corona');
            $table->string('reg_agb');

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
