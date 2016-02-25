<?php

namespace recyclegram;

use Illuminate\Database\Eloquent\Model;

class Residues extends Model
{
    protected $table = 'residues';
    public $timestamp = false;

    protected $fillable = array('descricaoResidue', 'idTpResidues');
    //
}
