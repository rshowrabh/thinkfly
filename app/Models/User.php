<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use BezhanSalleh\FilamentShield\Traits\HasPanelShield;
use Filament\Models\Contracts\FilamentUser;
use Filament\Panel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use Filament\Models\Contracts\HasAvatar;

class User extends Authenticatable implements FilamentUser, HasAvatar
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable, HasRoles, HasPanelShield;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'profile_photo_path'
    ];
    // public function canAccessPanel(Panel $panel): bool
    // {
    //     return str_ends_with($this->email, '@a.com') && $this->hasVerifiedEmail();
    // }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    protected static function boot()
    {
        parent::boot();

        static::saving(function ($record) {
            if ($record->isDirty('profile_photo_path')) {
                $oldAvatar = $record->getOriginal('profile_photo_path');
                if ($oldAvatar) {
                    Storage::disk('public')->delete($oldAvatar);
                }
            }
        });
    }

    /**
     * Get the user's avatar URL.
     */
    public function getFilamentAvatarUrl(): ?string
    {
        return $this->profile_photo_url;
    }

    /**
     * Used in filamnet resource to display user's roles.
     */
    public function getRoleNamesAttribute(): string
    {
        return $this->roles->pluck('name')->join(',');
    }
}
