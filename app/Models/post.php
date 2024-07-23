<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class post extends Model
{
    use HasFactory;

    protected $table = 'posts';

    protected $fillable = [
        'title', 'content', 'slug', 'published_at'
    ];

    // protected $guarded = [
    //     'published_at'
    // ];

    protected function title(): Attribute
    {
        return Attribute::make(
            set: function ($value) {
                return strtolower($value);
            },
            get: function ($value) {
                return ucfirst($value);
            }
        );
    }

    protected function casts(): array
    {
        return [
            'published_at' => 'datetime'
        ];
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
     
}
