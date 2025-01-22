<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\DB;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class Admin extends Authenticatable
{
    use HasApiTokens, HasRoles, HasFactory, Notifiable;

    protected $table = 'admins'; // Specify the table if different from the default
    protected $guard_name = 'admin';

    protected $fillable = [
        'username',
        'name',
        'first_name',
        'last_name',
        'designation',
        'age',
        'gender',
        'photo',
        'login_type',
        'email',
        'bio_data',
        'password',
    ];

    /**
     * Fetch all unique permission groups.
     *
     * @return \Illuminate\Support\Collection
     */
    public static function getPermissionGroups()
    {
        return DB::table('permissions')
            ->select('group_name as name')
            ->groupBy('group_name')
            ->get();
    }

    /**
     * Fetch permissions by group name.
     *
     * @param string $group_name
     * @return \Illuminate\Support\Collection
     */
    public static function getPermissionsByGroupName($group_name)
    {
        return DB::table('permissions')
            ->select('name', 'id')
            ->where('group_name', $group_name)
            ->get();
    }

    /**
     * Check if a role has all specified permissions.
     *
     * @param $role
     * @param $permissions
     * @return bool
     */
    public static function roleHasPermissions($role, $permissions)
    {
        foreach ($permissions as $permission) {
            if (!$role->hasPermissionTo($permission->name)) {
                return false;
            }
        }
        return true;
    }

    /**
     * Set the password attribute and hash it before saving.
     *
     * @param string $value
     */
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }
}
