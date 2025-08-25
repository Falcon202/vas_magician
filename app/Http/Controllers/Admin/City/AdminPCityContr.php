<?php

namespace App\Http\Controllers\Admin\City;

use App\Models\Blog;
use App\Models\City;
use App\Models\CityView;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;

class AdminPCityContr
{
    public function city(): View
    {
        return view('adminPanel.city.city', [
            'cityViews' => CityView::all(),
        ]);
    }
    public function create(): View
    {
        return view('adminPanel.city.cityCreate', []);
    }
    public function do_create(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', Rule::unique(City::class, 'name')],
        ], [
            'name.required' => 'Zadejte název města.',
            'name.string' => 'Zadejte název města.',
            'name.unique' => 'Název města musí být unikátní.',
        ]);

        $city = new City();
        $city->name = $validated['name'];
        $city->save();

        return Redirect::route('ap_city')->with('status', 'city_created');
    }
    public function edit(int $id): View
    {
        $cityView = CityView::where('id', $id)->first();
        if(!$cityView){
            abort(404, 'MĚSTO NEEXISTUJE');
        }

        return view('adminPanel.city.cityEdit', [
            'cityView' => $cityView,
        ]);
    }
    public function do_edit(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'id' => ['required', 'integer', Rule::exists(City::class, 'id')],
            'name' => ['required', 'string', Rule::unique(City::class, 'name')->ignore($request->id)],
        ], [
            'id' => 'Stala se chyba, opakujte akci.',
            'name.required' => 'Zadejte název města.',
            'name.string' => 'Zadejte název města.',
            'name.unique' => 'Název města musí být unikátní.',
        ]);

        $city = City::where('id', $validated['id'])->first();
        $city->name = $validated['name'];
        $city->save();

        return Redirect::route('ap_city_edit', ['id' => $city->id])->with('status', 'city_edited');
    }
    public function do_delete(Request $request): RedirectResponse
    {
        $validated = $request->validateWithBag('deleteCity',[
            'id' => ['required', 'integer', Rule::exists(City::class, 'id')],
        ], [
            'id.required' => 'Stala se chyba, opakujte akci.',
            'id.integer' => 'Stala se chyba, opakujte akci.',
            'id.exists' => 'Stala se chyba, opakujte akci.',
        ]);

        $city = City::findOrFail($validated['id']);

        // dodatečná validace – jestli má blogy
        if (Blog::where('city_id', $city->id)->exists()) {
            return back()
                ->withErrors(
                    ['id' => 'Město nelze smazat, protože je přiřazeno k blogům.'],
                    'deleteCity'
                );
        }

        $city->delete();

        return Redirect::route('ap_city')->with('status', 'city_deleted');
    }
}
