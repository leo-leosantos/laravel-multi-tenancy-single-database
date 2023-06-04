<?php

namespace App\Scopes\Tenant;

use App\Tenant\ManagerTenant;
use Illuminate\Database\Eloquent\{
    Builder,
    Model,
    Scope
};


class TenantScope implements Scope
{


    public function apply(Builder $builder, Model $model)
    {
        $tenant = app(ManagerTenant::class)->getTenantIdentify();
        $builder->where('tenant_id', $tenant);
    }
}
