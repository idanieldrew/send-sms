<?php
/**
 * Created by PhpStorm.
 * User: danieldrew
 * Date: 12/17/21
 * Time: 12:38 PM
 */

namespace Packages\Idanieldrew\SendSms\src;


use Illuminate\Support\ServiceProvider;

class SendSmsServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(SendSms::class,function (){
            return new SendSms();
        });
    }

    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/sms.php' => config_path('sms.php')
        ],'config');
    }
}