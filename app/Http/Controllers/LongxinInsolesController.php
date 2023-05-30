<?php

namespace App\Http\Controllers;

use App\Models\LongxinInsoles;
use Illuminate\Http\Request;

class LongxinInsolesController extends Controller
{
    public function index()
    {
        $longxinInsoles = LongxinInsoles::all();
        return view('backend.longxinInsoles.index', compact('longxinInsoles'));
    }

    public function create()
    {
        return view('backend.longxinInsoles.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'nullable',
            'upc' => 'required|string',
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
            $longxinInsoles = new LongxinInsoles();

            $longxinInsoles->title = $request->input('title');
            $longxinInsoles->upc = $request->input('upc');
            $longxinInsoles->sku = $request->input('sku');
            $longxinInsoles->fnsku = $request->input('fnsku');
            $longxinInsoles->whinventory = $request->input('whinventory');
            $longxinInsoles->amazoninventory = $request->input('amazoninventory');
            $longxinInsoles->inboundorders = $request->input('inboundorders');
            $longxinInsoles->totalinventory = $request->input('totalinventory');
            $longxinInsoles->thirtydayssales = $request->input('thirtydayssales');
            $longxinInsoles->ninetydayamazon = $request->input('ninetydayamazon');
            $longxinInsoles->coverinmonths = $request->input('coverinmonths');
            $longxinInsoles->coverinmonthsinbound = $request->input('coverinmonthsinbound');
            $longxinInsoles->orderquantity = $request->input('orderquantity');
            $longxinInsoles->unitstoorder = $request->input('unitstoorder');
            $need_air_ship = $request->has('needairship');
            if ($need_air_ship == 'on') {
                $longxinInsoles->needairship = 'true';
            } else {
                $longxinInsoles->needairship = 'false';
            }

            $longxinInsoles->save();

            return redirect()->route('longxinInsoles.index')->with(['msg' => 'Longxin Insole Added Successfully', 'type' => 'success']);

        } catch (\Throwable $e) {
            //dd($e);
            return redirect()->back()->with(['msg' => 'Something went wrong, please check and try again', 'type' => 'failed']);
        }
    }


    public function show(LongxinInsoles $longxinInsoles)
    {
        //
    }

    public function edit($id)
    {
        $longxinInsoles = LongxinInsoles::find($id);
        return view('backend.longxinInsoles.edit', compact('longxinInsoles',));

    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'nullable',
            'upc' => 'required|string',
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
            $longxinInsoles = LongxinInsoles::find($id);

            $longxinInsoles->title = $request->input('title');
            $longxinInsoles->upc = $request->input('upc');
            $longxinInsoles->sku = $request->input('sku');
            $longxinInsoles->fnsku = $request->input('fnsku');
            $longxinInsoles->whinventory = $request->input('whinventory');
            $longxinInsoles->amazoninventory = $request->input('amazoninventory');
            $longxinInsoles->inboundorders = $request->input('inboundorders');
            $longxinInsoles->totalinventory = $request->input('totalinventory');
            $longxinInsoles->thirtydayssales = $request->input('thirtydayssales');
            $longxinInsoles->ninetydayamazon = $request->input('ninetydayamazon');
            $longxinInsoles->coverinmonths = $request->input('coverinmonths');
            $longxinInsoles->coverinmonthsinbound = $request->input('coverinmonthsinbound');
            $longxinInsoles->orderquantity = $request->input('orderquantity');
            $longxinInsoles->unitstoorder = $request->input('unitstoorder');
            $need_air_ship = $request->has('needairship');
            if ($need_air_ship == 'on') {
                $longxinInsoles->needairship = 'true';
            } else {
                $longxinInsoles->needairship = 'false';
            }

            //dd($request->all());
            $longxinInsoles->save();

            return redirect()->route('longxinInsoles.edit', $longxinInsoles->id )->with(['msg' => 'Longxin Insole Updated Successfully', 'type' => 'success']);

        } catch (\Throwable $e) {
            //dd($e);
            return redirect()->back()->with(['msg' => 'Something went wrong, please check and try again', 'type' => 'failed']);
        }
    }

    public function destroy($id)
    {
        $longxinInsoles = LongxinInsoles::find($id);
        $longxinInsoles->delete();
        return redirect()->route('longxinInsoles.index')->with(['msg' => 'Longxin Insole Deleted Successfully', 'type' => 'success']);
    }
}
