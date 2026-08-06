<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class SiteContent extends Model {
    protected $fillable = ['key', 'value'];
    public static function getValue($key, $default = '') {
        $item = self::where('key', $key)->first();
        return $item ? $item->value : $default;
    }
}
