<?php

namespace App\Http\Controllers;

use App\Models\Zerosock;
use Illuminate\Http\Request;

class ZerosockController extends Controller
{
    public function index()
    {
        $zerosock = Zerosock::all();
        return view('backend.zerosock.index', compact('zerosock'));
    }

    public function create()
    {
        return view('backend.zerosock.create');
    }

    public function store(Request $request)
    {
        $request->validate([
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
            $zerosock = new Zerosock();

            $zerosock->sku = $request->input('sku');
            $zerosock->whinventory = $request->input('whinventory');
            $zerosock->amazoninventory = $request->input('amazoninventory');
            $zerosock->inboundorders = $request->input('inboundorders');
            $zerosock->totalinventory = $request->input('totalinventory');
            $zerosock->thirtydayssales = $request->input('thirtydayssales');
            $zerosock->ninetydayamazon = $request->input('ninetydayamazon');
            $zerosock->coverinmonths = $request->input('coverinmonths');
            $zerosock->coverinmonthsinbound = $request->input('coverinmonthsinbound');
            $zerosock->orderquantity = $request->input('orderquantity');
            $zerosock->unitstoorder = $request->input('unitstoorder');
            $need_air_ship = $request->has('needairship');
            if ($need_air_ship == 'on') {
                $zerosock->needairship = 'true';
            } else {
                $zerosock->needairship = 'false';
            }

            $zerosock->save();

            return redirect()->route('zerosock.index')->with(['msg' => 'ZeroSock Added Successfully', 'type' => 'success']);

        } catch (\Throwable $e) {
            //dd($e);
            return redirect()->back()->with(['msg' => 'Something went wrong, please check and try again', 'type' => 'failed']);
        }
    }


    public function show(Zerosock $zerosock)
    {
        //
    }

    public function edit($id)
    {
        $zerosock = Zerosock::find($id);
        return view('backend.zerosock.edit', compact('zerosock',));

    }

    public function update(Request $request, $id)
    {
        $request->validate([
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
            $zerosock = Zerosock::find($id);

            $zerosock->sku = $request->input('sku');
            $zerosock->whinventory = $request->input('whinventory');
            $zerosock->amazoninventory = $request->input('amazoninventory');
            $zerosock->inboundorders = $request->input('inboundorders');
            $zerosock->totalinventory = $request->input('totalinventory');
            $zerosock->thirtydayssales = $request->input('thirtydayssales');
            $zerosock->ninetydayamazon = $request->input('ninetydayamazon');
            $zerosock->coverinmonths = $request->input('coverinmonths');
            $zerosock->coverinmonthsinbound = $request->input('coverinmonthsinbound');
            $zerosock->orderquantity = $request->input('orderquantity');
            $zerosock->unitstoorder = $request->input('unitstoorder');
            $need_air_ship = $request->has('needairship');
            if ($need_air_ship == 'on') {
                $zerosock->needairship = 'true';
            } else {
                $zerosock->needairship = 'false';
            }

            //dd($request->all());
            $zerosock->save();

            return redirect()->route('zerosock.edit', $zerosock->id )->with(['msg' => 'ZeroSock Updated Successfully', 'type' => 'success']);

        } catch (\Throwable $e) {
            //dd($e);
            return redirect()->back()->with(['msg' => 'Something went wrong, please check and try again', 'type' => 'failed']);
        }
    }

    public function destroy($id)
    {
        $zerosock = Zerosock::find($id);
        $zerosock->delete();
        return redirect()->route('cosmicComfort.index')->with(['msg' => 'ZeroSock Deleted Successfully', 'type' => 'success']);
    }
}
