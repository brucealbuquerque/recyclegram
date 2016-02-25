<?php

namespace recyclegram;

use Illuminate\Database\Eloquent\Model;

class TrDonations extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'dtCreation', 'dtEnding', 'qtdTotal',
      'idResidues', 'idUser',
  ];
}
