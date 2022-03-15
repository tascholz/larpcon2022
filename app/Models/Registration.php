<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    use HasFactory;

    protected $fillable = [
        'event_id',
        'reg_first_name',
        'reg_last_name',
        'reg_adress_street',
        'reg_adress_pcode',
        'reg_adress_city',
        'reg_birthdate',
        'reg_mail',
        'reg_supervisor',
        'reg_food',
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
        'reg_agb'
    ];

    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}
