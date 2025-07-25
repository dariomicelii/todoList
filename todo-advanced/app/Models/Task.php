<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Priority;

class Task extends Model
{
    public function priority() {
        return $this->belongsTo(Priority::class);
    }
    protected $fillable = ['title', 'note', 'date', 'priority_id'];
}
