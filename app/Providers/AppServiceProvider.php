<?php

namespace App\Providers;

use App\Userdetail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        View::composer('*', function($view){
            $currentUser = Auth::user();
            /*$currentLang = Session::has('locale') ? Session::get('locale') : Session::put('locale','en');
            \App::setLocale($currentLang);*/
            if($currentUser != null)
            {
                $userinfo = Userdetail::where('userid',$currentUser->userid)->first();

                $countRows = 0;
                
                if(empty($userinfo->toArray())) {
                    $countRows = 0;
                }else {
                    foreach($userinfo->toArray() as $info)
                    {
                        if(empty($info))
                        {
                            continue;
                        }
                        $countRows++;
                    }
                }

                $accountPercentage = ($countRows / count($userinfo->toArray())) * 100;

                $view->with([
                    'accountPercentage' => $accountPercentage,
                    'currentUser' => $currentUser
                ]);
            }
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
