<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TrainingHall extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'description', 'location', 'capacity', 'image_path'
    ];

    public function scopeFilter(Builder $builder, $filters)
    {
        $builder->when($filters['search'] ?? '', function ($builder, $value) {
            $builder->where(function ($builder) use ($value) {
                $builder->where('name', 'LIKE', "%{$value}%")
                    ->orWhere('location', 'LIKE', "%{$value}%");
            });
        });
    }
}
