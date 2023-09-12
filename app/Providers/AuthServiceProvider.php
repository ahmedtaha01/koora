<?php

namespace App\Providers;

use App\Models\Comment;
use App\Models\Reservation;
use App\Models\Stadium;
use App\Models\User;
use App\Policies\Admin\AdminPolicy;
use App\Policies\Admin\ReservationPolicy;
use App\Policies\Admin\ReviewPolicy;
use App\Policies\Admin\StadiumPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
        // Comment::class => ReviewPolicy::class,
        Stadium::class      => StadiumPolicy::class,
        Reservation::class  => ReservationPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('add-review', function (User $user, Stadium $stadium) {
            return $user->id === $stadium->user_id;
        });
    }
}
