<?php

namespace VendorName\Skeleton;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use VendorName\Skeleton\Commands\SkeletonCommand;

class SkeletonServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
        ->name('mail-notification')  // Đặt tên cho package của bạn ở đây
        ->hasRoutes()
        ->hasMigration('create_skeleton_table');
        // /*
        //  * This class is a Package Service Provider
        //  *
        //  * More info: https://github.com/spatie/laravel-package-tools
        //  */
        // $package
        //     ->name('skeleton')
        //     ->hasConfigFile()
        //     ->hasViews()
        //     ->hasMigration('create_migration_table_name_table')
        //     ->hasCommand(SkeletonCommand::class);
    }
}
