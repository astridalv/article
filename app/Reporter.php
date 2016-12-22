<?php

namespace App;
use ReporterController;
use Illuminate\Database\Eloquent\Model;

class Reporter extends Model
{
    protected $fillable = [
      'reporterid','nama','jeniskelamin','alamat','image'
    ];
}
