<?php

namespace recyclegram;

use Illuminate\Database\Eloquent\Model;

class Transactions extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'created_at', 'idUser', 'idResidues',
      'dtEnding', 'qtdTotal',
  ];
}
