<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Justification extends Model
{
    /** @use HasFactory<\Database\Factories\JustificationFactory> */
    use HasFactory;

protected $perpage = 10;

   protected $fillable = [
       'justification_id',
       'reason',
       'date',
       'status',
       'employee_id',
   ];



public function report()
    {
        return $this->hasMany(Report::class);
    }

  
}