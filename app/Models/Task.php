<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Task extends Model
{
    use HasFactory;

    // protected $table = 'tasks'; // laravel se ngam dinh hieu tasks table

    protected $fillable = ['name', 'description', 'priority', 'progress', 'assignee_id'];

    public function assignee()
    {
        return $this->belongsTo(User::class, foreignKey: 'assignee_id');
    }
}
