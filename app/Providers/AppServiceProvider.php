<?php
namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

class AppserviceProvider extends ServiceProvider
{
    public function boot(){
        Paginator::useBootstrap();
        
        
        // Paginator::useBootstrapFive();    　公式ドキュメント
       //または Paginator::useBootstrapFour();　　   公式ドキュメント
    }
}