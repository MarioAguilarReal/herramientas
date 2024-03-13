<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Zone;

class ZonesController extends Controller
{
    public function all()
    {
        $zones = Zone::all();
        return view('zones.all', ['zones' => $zones]);
    }
    public function create(Request $request)
    {
        $zone = new Zone();
        $zone->name = $request->name;
        $zone->save();
        return redirect()->route('zones');
    }

    public function edit(Request $request)
    {
        $zone = Zone::find($request->id);
        return view('zones.edit', compact('zone'));
    }

    public function update(Request $request, $id)
    {
        $zone = Zone::findOrFail($id);
        $zone->update($request->all());
        return redirect()->route('zones');
    }

    public function delete($id)
    {
        $zone = Zone::findOrFail($id);
        $zone->delete();
        return redirect()->route('zones');
    }
}
