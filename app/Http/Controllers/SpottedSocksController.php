<?php

namespace App\Http\Controllers;

use App\Models\SpottedSocks;
use Illuminate\Http\Request;

class SpottedSocksController extends Controller
{
    public function index()
    {
        $spottedSocks = SpottedSocks::all();
        return view('backend.spottedSocks.index', compact('spottedSocks'));
    }

    public function create()
    {
        return view('backend.spottedSocks.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'sku' => 'required|string',
            'fnsku' => 'required|string',
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
            $spottedSocks = new SpottedSocks();

            $spottedSocks->sku = $request->input('sku');
            $spottedSocks->fnsku = $request->input('fnsku');
            $spottedSocks->whinventory = $request->input('whinventory');
            $spottedSocks->amazoninventory = $request->input('amazoninventory');
            $spottedSocks->inboundorders = $request->input('inboundorders');
            $spottedSocks->totalinventory = $request->input('totalinventory');
            $spottedSocks->thirtydayssales = $request->input('thirtydayssales');
            $spottedSocks->ninetydayamazon = $request->input('ninetydayamazon');
            $spottedSocks->coverinmonths = $request->input('coverinmonths');
            $spottedSocks->coverinmonthsinbound = $request->input('coverinmonthsinbound');
            $spottedSocks->orderquantity = $request->input('orderquantity');
            $spottedSocks->unitstoorder = $request->input('unitstoorder');
            $need_air_ship = $request->has('needairship');
            if ($need_air_ship == 'on') {
                $spottedSocks->needairship = 'true';
            } else {
                $spottedSocks->needairship = 'false';
            }

            $spottedSocks->save();

            return redirect()->route('spottedSocks.index')->with(['msg' => 'Spotted Sock Added Successfully', 'type' => 'success']);

        } catch (\Throwable $e) {
            //dd($e);
            return redirect()->back()->with(['msg' => 'Something went wrong, please check and try again', 'type' => 'failed']);
        }
    }


    public function show(SpottedSocks $spottedSocks)
    {
        //
    }

    public function edit($id)
    {
        $spottedSocks = SpottedSocks::find($id);
        return view('backend.spottedSocks.edit', compact('spottedSocks',));

    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'sku' => 'required|string',
            'fnsku' => 'required|string',
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
            $spottedSocks = SpottedSocks::find($id);

            $spottedSocks->sku = $request->input('sku');
            $spottedSocks->fnsku = $request->input('fnsku');
            $spottedSocks->whinventory = $request->input('whinventory');
            $spottedSocks->amazoninventory = $request->input('amazoninventory');
            $spottedSocks->inboundorders = $request->input('inboundorders');
            $spottedSocks->totalinventory = $request->input('totalinventory');
            $spottedSocks->thirtydayssales = $request->input('thirtydayssales');
            $spottedSocks->ninetydayamazon = $request->input('ninetydayamazon');
            $spottedSocks->coverinmonths = $request->input('coverinmonths');
            $spottedSocks->coverinmonthsinbound = $request->input('coverinmonthsinbound');
            $spottedSocks->orderquantity = $request->input('orderquantity');
            $spottedSocks->unitstoorder = $request->input('unitstoorder');
            $need_air_ship = $request->has('needairship');
            if ($need_air_ship == 'on') {
                $spottedSocks->needairship = 'true';
            } else {
                $spottedSocks->needairship = 'false';
            }

            //dd($request->all());
            $spottedSocks->save();

            return redirect()->route('spottedSocks.edit', $spottedSocks->id )->with(['msg' => 'Spotted Sock Updated Successfully', 'type' => 'success']);

        } catch (\Throwable $e) {
            //dd($e);
            return redirect()->back()->with(['msg' => 'Something went wrong, please check and try again', 'type' => 'failed']);
        }
    }

    public function destroy($id)
    {
        $spottedSocks = SpottedSocks::find($id);
        $spottedSocks->delete();
        return redirect()->route('spottedSocks.index')->with(['msg' => 'Spotted Sock Deleted Successfully', 'type' => 'success']);
    }
}
