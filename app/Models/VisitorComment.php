<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VisitorComment extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'comment',
        'ip_address',
        'is_approved'
    ];

    protected $casts = [
        'is_approved' => 'boolean',
    ];

    /**
     * Scope for approved comments
     */
    public function scopeApproved($query)
    {
        return $query->where('is_approved', true);
    }

    /**
     * Scope for recent comments
     */
    public function scopeRecent($query, $limit = 5)
    {
        return $query->orderBy('created_at', 'desc')->limit($limit);
    }

    /**
     * Get display name (use provided name or "Anonymous")
     */
    public function getDisplayNameAttribute()
    {
        return $this->name ?: 'Anonymous';
    }

    /**
     * Get time ago
     */
    public function getTimeAgoAttribute()
    {
        return $this->created_at->diffForHumans();
    }
}
