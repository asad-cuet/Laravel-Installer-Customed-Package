<?php

namespace AsadCuet\LaravelInstaller\Controllers;

use App\Http\Requests;
use Illuminate\Routing\Controller;
use AsadCuet\LaravelInstaller\Helpers\PermissionsChecker;

class PermissionsController extends Controller
{

    /**
     * @var PermissionsChecker
     */
    protected $permissions;

    /**
     * @param PermissionsChecker $checker
     */
    public function __construct(PermissionsChecker $checker)
    {
        $this->permissions = $checker;
    }

    /**
     * Display the permissions check page.
     *
     * @return \Illuminate\View\View
     */
    public function permissions()
    {
        $permissions = $this->permissions->check(
            [
                'storage/app/'           => '775',
                'storage/framework/'     => '775',
                'storage/logs/'          => '775',
                'bootstrap/cache/'       => '775'
            ]
            // config('installer.permissions')
        );

        return view('vendor.installer.permissions', compact('permissions'));
    }
}
