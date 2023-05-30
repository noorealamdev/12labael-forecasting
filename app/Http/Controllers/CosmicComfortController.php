<?php

namespace App\Http\Controllers;

use App\Models\CosmicComfort;
use Illuminate\Http\Request;

class CosmicComfortController extends Controller
{
    public function index()
    {
        $cosmicComfort = CosmicComfort::all();
        return view('backend.cosmicComfort.index', compact('cosmicComfort'));
    }

    public function create()
    {
        return view('backend.cosmicComfort.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'nullable',
            'sku' => 'required|string',
            'upcasinfnsku' => 'required|string',
            'whinventory' => 'numeric',
            'amazoninventory' => 'numeric',
            'inboundorders' => 'numeric',
            'totalinventory' => 'numeric',
            'thirtydayssales' => 'numeric',
            'ninetydayamazon' => 'numeric',
            'coverinmonths' => 'numeric',
            'coverinmonthsinbound' => 'numeric',
            'casestoorder' => 'numeric|nullable',
        ]);

        try {
            $cosmicComfort = new CosmicComfort();

            $cosmicComfort->title = $request->input('title');
            $cosmicComfort->sku = $request->input('sku');
            $cosmicComfort->upcasinfnsku = $request->input('upcasinfnsku');
            $cosmicComfort->whinventory = $request->input('whinventory');
            $cosmicComfort->amazoninventory = $request->input('amazoninventory');
            $cosmicComfort->inboundorders = $request->input('inboundorders');
            $cosmicComfort->totalinventory = $request->input('totalinventory');
            $cosmicComfort->thirtydayssales = $request->input('thirtydayssales');
            $cosmicComfort->ninetydayamazon = $request->input('ninetydayamazon');
            $cosmicComfort->coverinmonths = $request->input('coverinmonths');
            $cosmicComfort->coverinmonthsinbound = $request->input('coverinmonthsinbound');
            $cosmicComfort->orderquantity = $request->input('orderquantity');
            $cosmicComfort->casestoorder = $request->input('casestoorder');
            $need_air_ship = $request->has('needairship');
            if ($need_air_ship == 'on') {
                $cosmicComfort->needairship = 'true';
            } else {
                $cosmicComfort->needairship = 'false';
            }

            $cosmicComfort->save();

            return redirect()->route('cosmicComfort.index')->with(['msg' => 'Cosmic Comfort Added Successfully', 'type' => 'success']);

        } catch (\Throwable $e) {
            dd($e);
            return redirect()->back()->with(['msg' => 'Something went wrong, please check and try again', 'type' => 'failed']);
        }
    }


    public function show(CosmicComfort $cosmicComfort)
    {
        //
    }

    public function edit($id)
    {
        $cosmicComfort = CosmicComfort::find($id);
        return view('backend.cosmicComfort.edit', compact('cosmicComfort',));

    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'nullable',
            'sku' => 'required|string',
            'upcasinfnsku' => 'required|string',
            'whinventory' => 'numeric',
            'amazoninventory' => 'numeric',
            'inboundorders' => 'numeric',
            'totalinventory' => 'numeric',
            'thirtydayssales' => 'numeric',
            'ninetydayamazon' => 'numeric',
            'coverinmonths' => 'numeric',
            'coverinmonthsinbound' => 'numeric',
            'casestoorder' => 'numeric|nullable',
        ]);

        try {
            $cosmicComfort = CosmicComfort::find($id);

            $cosmicComfort->title = $request->input('title');
            $cosmicComfort->sku = $request->input('sku');
            $cosmicComfort->upcasinfnsku = $request->input('upcasinfnsku');
            $cosmicComfort->whinventory = $request->input('whinventory');
            $cosmicComfort->amazoninventory = $request->input('amazoninventory');
            $cosmicComfort->inboundorders = $request->input('inboundorders');
            $cosmicComfort->totalinventory = $request->input('totalinventory');
            $cosmicComfort->thirtydayssales = $request->input('thirtydayssales');
            $cosmicComfort->ninetydayamazon = $request->input('ninetydayamazon');
            $cosmicComfort->coverinmonths = $request->input('coverinmonths');
            $cosmicComfort->coverinmonthsinbound = $request->input('coverinmonthsinbound');
            $cosmicComfort->orderquantity = $request->input('orderquantity');
            $cosmicComfort->casestoorder = $request->input('casestoorder');
            $need_air_ship = $request->has('needairship');
            if ($need_air_ship == 'on') {
                $cosmicComfort->needairship = 'true';
            } else {
                $cosmicComfort->needairship = 'false';
            }

            //dd($request->all());
            $cosmicComfort->save();

            return redirect()->route('cosmicComfort.edit', $cosmicComfort->id )->with(['msg' => 'Cosmic Comfort Updated Successfully', 'type' => 'success']);

        } catch (\Throwable $e) {
            //dd($e);
            return redirect()->back()->with(['msg' => 'Something went wrong, please check and try again', 'type' => 'failed']);
        }
    }

    public function destroy($id)
    {
        $cosmicComfort = CosmicComfort::find($id);
        $cosmicComfort->delete();
        return redirect()->route('cosmicComfort.index')->with(['msg' => 'Cosmic Comfort Deleted Successfully', 'type' => 'success']);
    }
}
