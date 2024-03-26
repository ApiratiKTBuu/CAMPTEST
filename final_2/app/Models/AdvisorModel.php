<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdvisorModel extends Model
{
    use HasFactory;
    public $table = "oe_advisors";
    public $timestamp = false;
    public $primaryKey = "advisor_id";
}
