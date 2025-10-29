<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Technicien extends Model
{
    use HasFactory;
     protected $fillable = [
        'nom',
        'prenom',
        'specialite',
    ];

    // Relation : un technicien peut faire plusieurs réparations
    public function reparations()
    {
        return $this->hasMany(Reparation::class, foreignKey: 'technicien_id');
    }
}
