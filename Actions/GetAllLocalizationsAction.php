<?php

namespace App\Containers\VendorSection\Localization\Actions;

use App\Ship\Parents\Actions\Action;
use Apiato\Core\Foundation\Facades\Apiato;
use Illuminate\Support\Collection;

class GetAllLocalizationsAction extends Action
{
    public function run(): Collection
    {
        return Apiato::call('Localization@GetAllLocalizationsTask');
    }
}
