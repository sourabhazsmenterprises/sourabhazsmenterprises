<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $table = 'activities';
    protected $fillable = ['activity_name', 'display_list_page', 'sort_order', 'status'];
}
