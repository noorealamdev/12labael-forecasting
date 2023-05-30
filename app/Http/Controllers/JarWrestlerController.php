<?php

namespace App\Http\Controllers;

use App\Models\JarWrestler;
use Illuminate\Http\Request;

class JarWrestlerController extends Controller
{
    public function index()
    {
        $jarWrestler = JarWrestler::all();
        return view('backend.jarWrestler.index', compact('jarWrestler'));
    }

    public function create()
    {
        return view('backend.jarWrestler.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'nullable',
            'sku' => 'required|string',
            'whinventory' => 'numeric',
            'amazoninventory' => 'numeric',
            'inboundorders' => 'numeric',
            'totalinventory' => 'numeric',
            'thirtydayssales' => 'numeric',
            'ninetydayamazon' => 'numeric',
            'coverinmonths' => 'numeric',
            'coverinmonthsinbound' => 'numeric',
            'unitstoorder' => 'numeric|nullable',
        ]);

        try {
            $jarWrestler = new JarWrestler();

            $jarWrestler->title = $request->input('title');
            $jarWrestler->sku = $request->input('sku');
            $jarWrestler->whinventory = $request->input('whinventory');
            $jarWrestler->amazoninventory = $request->input('amazoninventory');
            $jarWrestler->inboundorders = $request->input('inboundorders');
            $jarWrestler->totalinventory = $request->input('totalinventory');
            $jarWrestler->thirtydayssales = $request->input('thirtydayssales');
            $jarWrestler->ninetydayamazon = $request->input('ninetydayamazon');
            $jarWrestler->coverinmonths = $request->input('coverinmonths');
            $jarWrestler->coverinmonthsinbound = $request->input('coverinmonthsinbound');
            $jarWrestler->orderquantity = $request->input('orderquantity');
            $jarWrestler->unitstoorder = $request->input('unitstoorder');
            $need_air_ship = $request->has('needairship');
            if ($need_air_ship == 'on') {
                $jarWrestler->needairship = 'true';
            } else {
                $jarWrestler->needairship = 'false';
            }

            $jarWrestler->save();

            return redirect()->route('jarWrestler.index')->with(['msg' => 'JarWrestler Added Successfully', 'type' => 'success']);

        } catch (\Throwable $e) {
            //dd($e);
            return redirect()->back()->with(['msg' => 'Something went wrong, please check and try again', 'type' => 'failed']);
        }
    }


    public function show(JarWrestler $jarWrestler)
    {
        //
    }

    public function edit($id)
    {
        $jarWrestler = JarWrestler::find($id);
        return view('backend.jarWrestler.edit', compact('jarWrestler',));

    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'nullable',
            'sku' => 'required|string',
            'whinventory' => 'numeric',
            'amazoninventory' => 'numeric',
            'inboundorders' => 'numeric',
            'totalinventory' => 'numeric',
            'thirtydayssales' => 'numeric',
            'ninetydayamazon' => 'numeric',
            'coverinmonths' => 'numeric',
            'coverinmonthsinbound' => 'numeric',
            'unitstoorder' => 'numeric|nullable',
        ]);

        try {
            $jarWrestler = JarWrestler::find($id);

            $jarWrestler->title = $request->input('title');
            $jarWrestler->sku = $request->input('sku');
            $jarWrestler->whinventory = $request->input('whinventory');
            $jarWrestler->amazoninventory = $request->input('amazoninventory');
            $jarWrestler->inboundorders = $request->input('inboundorders');
            $jarWrestler->totalinventory = $request->input('totalinventory');
            $jarWrestler->thirtydayssales = $request->input('thirtydayssales');
            $jarWrestler->ninetydayamazon = $request->input('ninetydayamazon');
            $jarWrestler->coverinmonths = $request->input('coverinmonths');
            $jarWrestler->coverinmonthsinbound = $request->input('coverinmonthsinbound');
            $jarWrestler->orderquantity = $request->input('orderquantity');
            $jarWrestler->unitstoorder = $request->input('unitstoorder');
            $need_air_ship = $request->has('needairship');
            if ($need_air_ship == 'on') {
                $jarWrestler->needairship = 'true';
            } else {
                $jarWrestler->needairship = 'false';
            }

            $jarWrestler->save();

            return redirect()->route('jarWrestler.edit', $jarWrestler->id )->with(['msg' => 'JarWrestler Updated Successfully', 'type' => 'success']);

        } catch (\Throwable $e) {
            //dd($e);
            return redirect()->back()->with(['msg' => 'Something went wrong, please check and try again', 'type' => 'failed']);
        }
    }

    public function destroy($id)
    {
        $jarWrestler = JarWrestler::find($id);
        $jarWrestler->delete();
        return redirect()->route('jarWrestler.index')->with(['msg' => 'JarWrestler Deleted Successfully', 'type' => 'success']);
    }
}
