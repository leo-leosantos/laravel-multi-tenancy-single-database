<?php

namespace App\Http\Middleware\Tenant;

use App\Tenant\ManagerTenant;
use Closure;

class TenantFileSystems
{

    public function handle($request, Closure $next)
    {
        if(auth()->check()){
            $this->setFileSystemsRoot();
        }
        return $next($request);
    }


    public function setFileSystemsRoot()
    {

       $tenant =  app(ManagerTenant::class)->getTenant();

        config()->set(
        'filesystems.disks.tenant.root',
        config('filesystems.disks.tenant.root') . "/{$tenant->uuid}"
      );
    }
}
