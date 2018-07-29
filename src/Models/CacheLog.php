<?php

namespace NtimYeboah\LaravelGlare\Models;

use Illuminate\Database\Eloquent\Model;

class CacheLog extends Model
{
    protected $table = 'cache_log';

    public $fillable = ['key', 'value', 'event', 'tags', 'created_at', 'updated_at'];
}