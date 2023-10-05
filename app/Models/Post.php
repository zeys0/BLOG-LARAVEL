<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $with = ['category', 'user'];

    public function scopeFilter($query,  array $filters)
    {



        $query->when($filters['search'] ?? false, function ($query, $search) {
            return $query->Where('title', 'like', '%' . $search . '%')
                ->orWhere('body', 'like', '%' . $search . '%');
        });

        $query->when($filters['category'] ?? false, function ($query, $category) {
            return $query->wherehas('category', fn ($query) => $query->Where('slug', $category));
        });

        $query->when($filters['user'] ?? false, function ($query, $user) {
            return $query->wherehas('user', fn ($query) => $query->Where('name', $user));
        });
    }

    public function category()
    {

        return $this->belongsTo(Category::class);
    }

    public function user()
    {

        return $this->belongsTo(User::class);
    }
}
