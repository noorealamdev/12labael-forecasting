<?php

namespace App\Http\Controllers;

use App\Models\JiangxiZhicheng;
use Illuminate\Http\Request;

class JiangxiZhichengController extends Controller
{
    public function index()
    {
        $jiangxiZhicheng = JiangxiZhicheng::all();
        return view('backend.jiangxiZhicheng.index', compact('jiangxiZhicheng'));
    }

    public function create()
    {
        return view('backend.jiangxiZhicheng.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'nullable',
            'upcfnsku' => 'required|string',
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
            $jiangxiZhicheng = new JiangxiZhicheng();

            $jiangxiZhicheng->title = $request->input('title');
            $jiangxiZhicheng->upcfnsku = $request->input('upcfnsku');
            $jiangxiZhicheng->sku = $request->input('sku');
            $jiangxiZhicheng->whinventory = $request->input('whinventory');
            $jiangxiZhicheng->amazoninventory = $request->input('amazoninventory');
            $jiangxiZhicheng->inboundorders = $request->input('inboundorders');
            $jiangxiZhicheng->totalinventory = $request->input('totalinventory');
            $jiangxiZhicheng->thirtydayssales = $request->input('thirtydayssales');
            $jiangxiZhicheng->ninetydayamazon = $request->input('ninetydayamazon');
            $jiangxiZhicheng->coverinmonths = $request->input('coverinmonths');
            $jiangxiZhicheng->coverinmonthsinbound = $request->input('coverinmonthsinbound');
            $jiangxiZhicheng->orderquantity = $request->input('orderquantity');
            $jiangxiZhicheng->unitstoorder = $request->input('unitstoorder');
            $need_air_ship = $request->has('needairship');
            if ($need_air_ship == 'on') {
                $jiangxiZhicheng->needairship = 'true';
            } else {
                $jiangxiZhicheng->needairship = 'false';
            }

            $jiangxiZhicheng->save();

            return redirect()->route('jiangxiZhicheng.index')->with(['msg' => 'Jiangxi Zhicheng Added Successfully', 'type' => 'success']);

        } catch (\Throwable $e) {
            return redirect()->back()->with(['msg' => 'Something went wrong, please check and try again', 'type' => 'failed']);
        }
    }


    public function show(JiangxiZhicheng $jiangxiZhicheng)
    {
        //
    }

    public function edit($id)
    {
        $jiangxiZhicheng = JiangxiZhicheng::find($id);
        return view('backend.jiangxiZhicheng.edit', compact('jiangxiZhicheng',));

    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'nullable',
            'upcfnsku' => 'required|string',
            'sku' => 'required|string',
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
            $jiangxiZhicheng = JiangxiZhicheng::find($id);

            $jiangxiZhicheng->title = $request->input('title');
            $jiangxiZhicheng->upcfnsku = $request->input('upcfnsku');
            $jiangxiZhicheng->sku = $request->input('sku');
            $jiangxiZhicheng->whinventory = $request->input('whinventory');
            $jiangxiZhicheng->amazoninventory = $request->input('amazoninventory');
            $jiangxiZhicheng->inboundorders = $request->input('inboundorders');
            $jiangxiZhicheng->totalinventory = $request->input('totalinventory');
            $jiangxiZhicheng->thirtydayssales = $request->input('thirtydayssales');
            $jiangxiZhicheng->ninetydayamazon = $request->input('ninetydayamazon');
            $jiangxiZhicheng->coverinmonths = $request->input('coverinmonths');
            $jiangxiZhicheng->coverinmonthsinbound = $request->input('coverinmonthsinbound');
            $jiangxiZhicheng->orderquantity = $request->input('orderquantity');
            $jiangxiZhicheng->unitstoorder = $request->input('unitstoorder');
            $need_air_ship = $request->has('needairship');
            if ($need_air_ship == 'on') {
                $jiangxiZhicheng->needairship = 'true';
            } else {
                $jiangxiZhicheng->needairship = 'false';
            }

            //dd($request->all());
            $jiangxiZhicheng->save();

            return redirect()->route('jiangxiZhicheng.edit', $jiangxiZhicheng->id )->with(['msg' => 'Jiangxi Zhicheng Updated Successfully', 'type' => 'success']);

        } catch (\Throwable $e) {
            //dd($e);
            return redirect()->back()->with(['msg' => 'Something went wrong, please check and try again', 'type' => 'failed']);
        }
    }

    public function destroy($id)
    {
        $jiangxiZhicheng = JiangxiZhicheng::find($id);
        $jiangxiZhicheng->delete();
        return redirect()->route('jiangxiZhicheng.index')->with(['msg' => 'Jiangxi Zhicheng Deleted Successfully', 'type' => 'success']);
    }
}
