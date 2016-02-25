<?php

namespace recyclegram;

use Illuminate\Database\Eloquent\Model;

class TpResidues extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'descricao',
  ];
}
