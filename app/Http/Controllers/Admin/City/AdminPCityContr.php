<?php

namespace App\Http\Controllers\Admin\City;

use App\Models\City;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;

class AdminPCityContr
{
    public function city(): View
    {
        return view('adminPanel.city.city', [
            'cities' => City::all(),
        ]);
    }
    public function create(): View
    {
        return view('adminPanel.city.cityCreate', []);
    }
    public function do_create(Request $request): RedirectResponse
    {
        // todo


        return Redirect::route('ap_city')->with('status', 'city_created');
    }
    public function edit(int $id): View
    {
        // todo

        return view('adminPanel.city.cityEdit', [

        ]);
    }
    public function do_edit(Request $request): RedirectResponse
    {
        // todo

        return Redirect::route('ap_city_edit')->with('status', 'city_edited');
    }
    public function do_delete(Request $request): RedirectResponse
    {
        // todo

        return Redirect::route('ap_city')->with('status', 'city_deleted');
    }
}
