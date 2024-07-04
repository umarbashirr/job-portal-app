<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class JobListing extends Model
{
    use HasFactory;

    protected $fillable = [
        'employer_id',
        'title',
        'description',
        'location',
        'type',
        'salary',
    ];

    public function employer()
    {
        return $this->belongsTo(Employer::class);
    }

    public static function find(int $id)
    {
        return Arr::first(static::all(), fn ($job) => $job->id === $id);
    }
}
