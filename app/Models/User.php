<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Auction;
use Illuminate\Support\Str;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Support\Facades\Request;
// use Illuminate\Http\Client\Request;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Notifications\UserResetPasswordNotification;
use App\Traits\ModelTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class User extends Authenticatable implements HasMedia
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles, SoftDeletes;
    use ModelTrait;
    use InteractsWithMedia;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        // 'name',
        // 'email',
        // 'password',
        // 'status',
    ];

    protected $guarded = [];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'phone',
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'deleted_at' => 'datetime',
    ];

    public $files = [
        'file_photo' => '사진',
        'file_biz'   => '사업자등록증',
        'file_sign'  => '매도용인감증명',
        'file_cert'  => '매매업체 대표증 / 종사원증',
    ];

    public $enums = [
        'status' => [
            'ok'     => '정상',
            'ask'    => '심사중',
            'reject' => '거절',
        ],
    ];

    // protected static function boot()
    // {
    //     parent::boot();

    //     static::creating(function ($user) {
    //         $user->uuid = (string) Str::uuid();
    //     });
    // }

    protected static function booted()
    {
        // TEST 와 seed 에는 request 데이터가 없고, seed 에는 auth 도 확실히 없다
        static::creating(function ($user) {
            if (!app()->environment('testing')) {
            }
        });

        static::created(function ($user) {
        });

        static::updating(function ($user) {
            if (!app()->environment('testing')) {
            }
        });

        static::updated(function ($user) {
        });

        static::saving(function ($user) {
            unset($user->role); // 롤 네임은 뒤에서 처리
            if (!empty($user->password) && $user->isDirty('password')) {
                $user->password = Hash::make($user->password);
            }
        });

        static::forceDeleted(function ($user) {
            $user->dealer()->delete();
        });

        static::addGlobalScope('withDealer', function ($builder) {
            $builder->with('dealer');
        });
        static::addGlobalScope('withRoles', function ($builder) {
            $builder->with('roles');
        });
    }

    public function setPhoneAttribute($value)
    {
        // 숫자가 아닌 모든 문자를 제거
        $this->attributes['phone'] = preg_replace('/\D+/', '', $value);
    }

    public function sendPasswordResetNotification($token)
    {
        $this->notify(new UserResetPasswordNotification($token));
    }

    public function dealer()
    {
        return $this->hasOne(Dealer::class);
    }

    public function auction()
    {
        return $this->hasMany(Auction::class);
    }

    public function bid()
    {
        return $this->hasMany(Bid::class);
    }

    // 파일
    public function registerMediaCollections(): void
    {
        foreach ($this->files as $file => $name) {
            $this->addMediaCollection($file)
                ->useFallbackUrl('/images/placeholder.jpg')
                ->useFallbackPath(public_path('/images/placeholder.jpg'));
        }
    }

    public function registerMediaConversions(Media $media = null): void
    {
        if (env('RESIZE_IMAGE') === true) {
            $this->addMediaConversion('resized-image')
                ->width(env('IMAGE_WIDTH', 300))
                ->height(env('IMAGE_HEIGHT', 300));
        }
    }
}
