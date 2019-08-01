<?php

namespace App\Models;

use App\Models\User;
use App\Models\GroupUser;
use App\Models\Announcement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Group extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'description',
    ];

    protected $dates = ['deleted_at'];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function announcements()
    {
        return $this->hasMany(Announcement::class);
    }

    public function groupUsers()
    {
        return $this->hasMany(GroupUser::class);
    }
}
