<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Company extends Model
{
    protected $fillable = [
        'full_name',
        'short_name',
        'domain',
        'support_email',
        'background',
        'logo'
    ];

    /**
     * Get company users
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function users()
    {
        return $this->hasMany(User::class, 'company_id', 'id');
    }
}
