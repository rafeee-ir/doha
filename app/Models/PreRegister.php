<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PreRegister extends Model
{
    use HasFactory;
    protected $guarded;

    /**
     * Set the categories
     *
     */
    public function setCategoryAttribute($value)
    {
        $this->attributes['category'] = json_encode($value);
    }

    /**
     * Get the categories
     *
     */
    public function getCategoryAttribute($value)
    {
        return $this->attributes['category'] = json_decode($value);
    }
    /**
     * Set the categories
     *
     */
    public function setForAttribute($value)
    {
        $this->attributes['for'] = json_encode($value);
    }

    /**
     * Get the categories
     *
     */
    public function getForAttribute($value)
    {
        return $this->attributes['for'] = json_decode($value);
    }
}
