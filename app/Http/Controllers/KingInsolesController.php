<?php

namespace App\Http\Controllers;

use App\Models\KingInsoles;
use Illuminate\Http\Request;

class KingInsolesController extends Controller
{
    public function index()
    {
        $kingInsoles = KingInsoles::all();
        return view('backend.kingInsoles.index', compact('kingInsoles'));
    }

    public function create()
    {
        return view('backend.kingInsoles.create');
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
            $kingInsoles = new KingInsoles();

            $kingInsoles->title = $request->input('title');
            $kingInsoles->sku = $request->input('sku');
            $kingInsoles->upcasinfnsku = $request->input('upcasinfnsku');
            $kingInsoles->whinventory = $request->input('whinventory');
            $kingInsoles->amazoninventory = $request->input('amazoninventory');
            $kingInsoles->inboundorders = $request->input('inboundorders');
            $kingInsoles->totalinventory = $request->input('totalinventory');
            $kingInsoles->thirtydayssales = $request->input('thirtydayssales');
            $kingInsoles->ninetydayamazon = $request->input('ninetydayamazon');
            $kingInsoles->coverinmonths = $request->input('coverinmonths');
            $kingInsoles->coverinmonthsinbound = $request->input('coverinmonthsinbound');
            $kingInsoles->orderquantity = $request->input('orderquantity');
            $kingInsoles->casestoorder = $request->input('casestoorder');
            $need_air_ship = $request->has('needairship');
            if ($need_air_ship == 'on') {
                $kingInsoles->needairship = 'true';
            } else {
                $kingInsoles->needairship = 'false';
            }

            $kingInsoles->save();

            return redirect()->route('kingInsoles.index')->with(['msg' => 'Insole Added Successfully', 'type' => 'success']);

        } catch (\Throwable $e) {
            return redirect()->back()->with(['msg' => 'Something went wrong, please check and try again', 'type' => 'failed']);
        }
    }


    public function show(KingInsoles $kingInsoles)
    {
        //
    }

    public function edit($id)
    {
        $kingInsoles = kingInsoles::find($id);
        return view('backend.kingInsoles.edit', compact('kingInsoles',));

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
            $kingInsoles = KingInsoles::find($id);

            $kingInsoles->title = $request->input('title');
            $kingInsoles->sku = $request->input('sku');
            $kingInsoles->upcasinfnsku = $request->input('upcasinfnsku');
            $kingInsoles->whinventory = $request->input('whinventory');
            $kingInsoles->amazoninventory = $request->input('amazoninventory');
            $kingInsoles->inboundorders = $request->input('inboundorders');
            $kingInsoles->totalinventory = $request->input('totalinventory');
            $kingInsoles->thirtydayssales = $request->input('thirtydayssales');
            $kingInsoles->ninetydayamazon = $request->input('ninetydayamazon');
            $kingInsoles->coverinmonths = $request->input('coverinmonths');
            $kingInsoles->coverinmonthsinbound = $request->input('coverinmonthsinbound');
            $kingInsoles->orderquantity = $request->input('orderquantity');
            $kingInsoles->casestoorder = $request->input('casestoorder');
            $need_air_ship = $request->has('needairship');
            if ($need_air_ship == 'on') {
                $kingInsoles->needairship = 'true';
            } else {
                $kingInsoles->needairship = 'false';
            }

            //dd($request->all());
            $kingInsoles->save();

            return redirect()->route('kingInsoles.edit', $kingInsoles->id )->with(['msg' => 'Insole Updated Successfully', 'type' => 'success']);

        } catch (\Throwable $e) {
            //dd($e);
            return redirect()->back()->with(['msg' => 'Something went wrong, please check and try again', 'type' => 'failed']);
        }
    }

    public function destroy($id)
    {
        $kingInsoles = kingInsoles::find($id);
        $kingInsoles->delete();
        return redirect()->route('kingInsoles.index')->with(['msg' => 'Insole Deleted Successfully', 'type' => 'success']);
    }

}
