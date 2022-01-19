<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'orga_id',
        'description',
        'date_start',
        'date_end',
        'has_registration',
        'sc_count',
        'nsc_count',
        'sc_price',
        'nsc_price',
        'food_price',
        'reg_first_name',
        'reg_last_name',
        'reg_adress',
        'reg_birthdate',
        'reg_mail',
        'reg_supervisor',
        'reg_char_name',
        'reg_char_profession',
        'reg_char_race',
        'reg_char_group',
        'reg_known_nsc',
        'reg_char_history',
        'reg_char_magic',
        'reg_allergies',
        'reg_tents',
        'reg_pkw',
        'reg_newsletter',
        'reg_first_time',
        'reg_plot_wishes',
        'reg_con_wishes',
        'reg_corona',
        'reg_corona_text',
        'reg_agb',
        'reg_agb_text'
    ];

    public function orga()
    {
        return $this->belongsTo(Orga::class);
    }
}
