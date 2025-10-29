<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reparation extends Model
{
    use HasFactory;
     protected $fillable = [
        'vehicule_id',
        'technicien_id',
        'date',
        'duree_main_oeuvre',
        'objet_reparation',
    ];
     
    // Relation : une réparation appartient à un véhicule
    public function vehicule()
    {
        return $this->belongsTo(Vehicule::class, foreignKey: 'vehicule_id');
    }

    // Relation : une réparation est faite par un technicien
    public function technicien()
    {
        return $this->belongsTo(Technicien::class, foreignKey: 'technicien_id');
    }
}
