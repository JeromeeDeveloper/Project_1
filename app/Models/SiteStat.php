<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteStat extends Model
{
    use HasFactory;

    protected $fillable = [
        'stat_key',
        'stat_value',
        'description'
    ];

    /**
     * Get stat value by key
     */
    public static function getValue($key, $default = 0)
    {
        $stat = self::where('stat_key', $key)->first();
        return $stat ? $stat->stat_value : $default;
    }

    /**
     * Increment stat value
     */
    public static function incrementValue($key, $amount = 1)
    {
        $stat = self::firstOrCreate(
            ['stat_key' => $key],
            ['stat_value' => 0, 'description' => ucfirst($key)]
        );
        
        $stat->increment('stat_value', $amount);
        return $stat->stat_value;
    }

    /**
     * Set stat value
     */
    public static function setValue($key, $value, $description = null)
    {
        return self::updateOrCreate(
            ['stat_key' => $key],
            [
                'stat_value' => $value,
                'description' => $description ?? ucfirst($key)
            ]
        );
    }
}
