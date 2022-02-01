<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('name');
            $table->integer('orga_id');
            $table->text('description');
            $table->date('date_start');
            $table->date('date_end');
            $table->boolean('has_registration');
            $table->integer('sc_count');
            $table->integer('nsc_count');
            $table->float('sc_price');
            $table->float('nsc_price')->nullable();
            $table->float('food_price')->nullable();

            $table->boolean('reg_first_name')->default("0");
            $table->boolean('reg_last_name')->default("0");
            $table->boolean('reg_adress')->default("0");
            $table->boolean('reg_birthdate')->default("0");
            $table->boolean('reg_mail')->default("0");
            $table->boolean('reg_supervisor')->default("0");

            $table->boolean('reg_char_name')->default("0");
            $table->boolean('reg_char_profession')->default("0");
            $table->boolean('reg_char_race')->default("0");
            $table->boolean('reg_char_group')->default("0");
            $table->boolean('reg_known_nsc')->default("0");
            $table->boolean('reg_char_history')->default("0");
            $table->boolean('reg_char_magic')->default("0");

            $table->boolean('reg_allergies')->default("0");
            $table->boolean('reg_tents')->default("0");
            $table->boolean('reg_pkw')->default("0");

            $table->boolean('reg_newsletter')->default("0");
            $table->boolean('reg_first_time')->default("0");
            $table->boolean('reg_plot_wishes')->default("0");
            $table->boolean('reg_con_wishes')->default("0");

            $table->boolean('reg_corona')->default("0");
            $table->text('reg_corona_text')->nullable();
            $table->boolean('reg_agb')->default("0");
            $table->text('reg_agb_text')->nullable();
            
            $table->string('image_path')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}
