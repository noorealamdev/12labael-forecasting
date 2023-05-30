<?php

namespace App\Http\Controllers;

use App\Models\PostFlag;
use Illuminate\Http\Request;

class PostFlagController extends Controller
{
    public function index()
    {
        $postFlag = PostFlag::all();
        return view('backend.postFlag.index', compact('postFlag'));
    }

    public function create()
    {
        return view('backend.postFlag.create');
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
            $postFlag = new PostFlag();

            $postFlag->title = $request->input('title');
            $postFlag->sku = $request->input('sku');
            $postFlag->whinventory = $request->input('whinventory');
            $postFlag->amazoninventory = $request->input('amazoninventory');
            $postFlag->inboundorders = $request->input('inboundorders');
            $postFlag->totalinventory = $request->input('totalinventory');
            $postFlag->thirtydayssales = $request->input('thirtydayssales');
            $postFlag->ninetydayamazon = $request->input('ninetydayamazon');
            $postFlag->coverinmonths = $request->input('coverinmonths');
            $postFlag->coverinmonthsinbound = $request->input('coverinmonthsinbound');
            $postFlag->orderquantity = $request->input('orderquantity');
            $postFlag->unitstoorder = $request->input('unitstoorder');

            $postFlag->save();

            return redirect()->route('postFlag.index')->with(['msg' => 'Post Flag Added Successfully', 'type' => 'success']);

        } catch (\Throwable $e) {
            //dd($e);
            return redirect()->back()->with(['msg' => 'Something went wrong, please check and try again', 'type' => 'failed']);
        }
    }


    public function show(PostFlag $postFlag)
    {
        //
    }

    public function edit($id)
    {
        $postFlag = PostFlag::find($id);
        return view('backend.postFlag.edit', compact('postFlag',));

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
            $postFlag = PostFlag::find($id);

            $postFlag->title = $request->input('title');
            $postFlag->sku = $request->input('sku');
            $postFlag->whinventory = $request->input('whinventory');
            $postFlag->amazoninventory = $request->input('amazoninventory');
            $postFlag->inboundorders = $request->input('inboundorders');
            $postFlag->totalinventory = $request->input('totalinventory');
            $postFlag->thirtydayssales = $request->input('thirtydayssales');
            $postFlag->ninetydayamazon = $request->input('ninetydayamazon');
            $postFlag->coverinmonths = $request->input('coverinmonths');
            $postFlag->coverinmonthsinbound = $request->input('coverinmonthsinbound');
            $postFlag->orderquantity = $request->input('orderquantity');
            $postFlag->unitstoorder = $request->input('unitstoorder');

            $postFlag->save();

            return redirect()->route('postFlag.edit', $postFlag->id )->with(['msg' => 'Post Flag Updated Successfully', 'type' => 'success']);

        } catch (\Throwable $e) {
            //dd($e);
            return redirect()->back()->with(['msg' => 'Something went wrong, please check and try again', 'type' => 'failed']);
        }
    }

    public function destroy($id)
    {
        $postFlag = PostFlag::find($id);
        $postFlag->delete();
        return redirect()->route('postFlag.index')->with(['msg' => 'Post Flag Deleted Successfully', 'type' => 'success']);
    }
}
