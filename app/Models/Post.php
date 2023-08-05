<?php

namespace App\Models;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'tags', 'body', 'image'];
    use HasFactory;
    public function ScopeFilter($query, array $filters) {
        if ($filters['search'] ?? false) {
            $query->where('title', 'like', '%'. request('search') . '%')
            ->orWhere('body', 'like', '%'. request('search') . '%')
            ->orWhere('tags', 'like', '%'. request('search') . '%');
        }

        if ($filters['tag'] ?? false) {
            $query->where('tags', 'like', '%'. request('tag') . '%')
            ->orWhere('title', 'like', '%'. request('tag') . '%')
            ->orWhere('body', 'like', '%'. request('tag') . '%');
        }

    }
    public function user() {
       return $this->belongsTo(User::class, 'user_id');
    }
}
