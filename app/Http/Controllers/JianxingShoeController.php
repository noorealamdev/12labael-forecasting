<?php

namespace App\Http\Controllers;

use App\Models\JianxingShoe;
use Illuminate\Http\Request;

class JianxingShoeController extends Controller
{
    public function index()
    {
        $jianxingShoe = JianxingShoe::all();
        return view('backend.jianxingShoe.index', compact('jianxingShoe'));
    }

    public function create()
    {
        return view('backend.jianxingShoe.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'nullable',
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
            $jianxingShoe = new JianxingShoe();

            $jianxingShoe->title = $request->input('title');
            $jianxingShoe->sku = $request->input('sku');
            $jianxingShoe->fnsku = $request->input('fnsku');
            $jianxingShoe->whinventory = $request->input('whinventory');
            $jianxingShoe->amazoninventory = $request->input('amazoninventory');
            $jianxingShoe->inboundorders = $request->input('inboundorders');
            $jianxingShoe->totalinventory = $request->input('totalinventory');
            $jianxingShoe->thirtydayssales = $request->input('thirtydayssales');
            $jianxingShoe->ninetydayamazon = $request->input('ninetydayamazon');
            $jianxingShoe->coverinmonths = $request->input('coverinmonths');
            $jianxingShoe->coverinmonthsinbound = $request->input('coverinmonthsinbound');
            $jianxingShoe->orderquantity = $request->input('orderquantity');
            $jianxingShoe->unitstoorder = $request->input('unitstoorder');
            $need_air_ship = $request->has('needairship');
            if ($need_air_ship == 'on') {
                $jianxingShoe->needairship = 'true';
            } else {
                $jianxingShoe->needairship = 'false';
            }

            $jianxingShoe->save();

            return redirect()->route('jianxingShoe.index')->with(['msg' => 'Jianxing Shoe Added Successfully', 'type' => 'success']);

        } catch (\Throwable $e) {
            //dd($e);
            return redirect()->back()->with(['msg' => 'Something went wrong, please check and try again', 'type' => 'failed']);
        }
    }


    public function show(JianxingShoe $jianxingShoe)
    {
        //
    }

    public function edit($id)
    {
        $jianxingShoe = JianxingShoe::find($id);
        return view('backend.jianxingShoe.edit', compact('jianxingShoe',));

    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'nullable',
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
            $jianxingShoe = JianxingShoe::find($id);

            $jianxingShoe->title = $request->input('title');
            $jianxingShoe->sku = $request->input('sku');
            $jianxingShoe->fnsku = $request->input('fnsku');
            $jianxingShoe->whinventory = $request->input('whinventory');
            $jianxingShoe->amazoninventory = $request->input('amazoninventory');
            $jianxingShoe->inboundorders = $request->input('inboundorders');
            $jianxingShoe->totalinventory = $request->input('totalinventory');
            $jianxingShoe->thirtydayssales = $request->input('thirtydayssales');
            $jianxingShoe->ninetydayamazon = $request->input('ninetydayamazon');
            $jianxingShoe->coverinmonths = $request->input('coverinmonths');
            $jianxingShoe->coverinmonthsinbound = $request->input('coverinmonthsinbound');
            $jianxingShoe->orderquantity = $request->input('orderquantity');
            $jianxingShoe->unitstoorder = $request->input('unitstoorder');
            $need_air_ship = $request->has('needairship');
            if ($need_air_ship == 'on') {
                $jianxingShoe->needairship = 'true';
            } else {
                $jianxingShoe->needairship = 'false';
            }

            $jianxingShoe->save();

            return redirect()->route('jianxingShoe.edit', $jianxingShoe->id )->with(['msg' => 'Jianxing Shoe Updated Successfully', 'type' => 'success']);

        } catch (\Throwable $e) {
            //dd($e);
            return redirect()->back()->with(['msg' => 'Something went wrong, please check and try again', 'type' => 'failed']);
        }
    }

    public function destroy($id)
    {
        $jianxingShoe = JianxingShoe::find($id);
        $jianxingShoe->delete();
        return redirect()->route('jianxingShoe.index')->with(['msg' => 'Jianxing Shoe Deleted Successfully', 'type' => 'success']);
    }
}
