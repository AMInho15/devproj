<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    // Champs remplissables (pour éviter les failles de sécurité)
    protected $fillable = [
        'titre',
        'description',
        'statut',
        'priorite',
        'user_id',
        'technicien_id'
    ];

    // Valeurs par défaut (optionnel)
    protected $attributes = [
        'statut' => 'Ouvert',
        'priorite' => 'Moyenne'
    ];

    // Relation avec l'employé créateur
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // Relation avec le technicien assigné (peut être null)
    public function technicien()
    {
        return $this->belongsTo(User::class, 'technicien_id');
    }

    // Scopes pour filtrer facilement
    public function scopeOuverts($query)
    {
        return $query->where('statut', 'Ouvert');
    }

    public function scopeCritiques($query)
    {
        return $query->where('priorite', 'Critique');
    }
}