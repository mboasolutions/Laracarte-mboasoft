<?php

namespace App\Models\Models;

use App\Scopes\DateScopable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Message extends Model
{
    use HasFactory;
    use DateScopable;
    protected $fillable = ['name', 'email', 'message'];
}
