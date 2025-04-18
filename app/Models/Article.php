<?php

namespace App\Models;

use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Article extends Model
{
    use HasFactory; // Il trait **use HasFactory;** serve per abilitare l'uso delle Factory nel tuo modello Eloquent in Laravel. Le factory sono uno strumento potente per creare dati finti, utile per test, seed del database, o sviluppo.

    protected $fillable = [
        'title',
        'description',
        'price',
        'category_id',
        'user_id',
    ];


    public function category(): BelongsTo
    {    
        return $this->belongsTo(Category::class);
    }   

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }


}
