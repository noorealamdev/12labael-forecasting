@extends('backend.layouts.master')
@section('title') {{'Edit Insole'}} @endsection
@section('content')
    @include('backend.partials.alert')

    <!-- Start::page-header -->
    <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
        <h1 class="page-title fw-semibold fs-18 mb-0">Edit Insole</h1>
    </div>
    <!-- End::page-header -->

    <!-- Start::row-1 -->
    <div class="row">
        <div class="col-xl-12">
            <div class="card custom-card">
                <div class="card-body add-products p-0">
                    <form action="{{ route('kingInsoles.update', $kingInsoles->id) }}" method="POST">
                        @method('PUT')
                        @csrf
                        <div class="p-4">
                            <div class="row gx-5">
                                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12">
                                    <div class="card custom-card shadow-none mb-0 border-0">
                                        <div class="card-body p-0">
                                            <div class="row gy-3">
                                                <div class="col-xl-12">
                                                    <label for="product-name-add" class="form-label">Title</label>
                                                    <input type="text" class="@error('title') is-invalid @enderror form-control" name="title" placeholder="Title" value="{{ $kingInsoles->title }}">
                                                </div>
                                                <div class="col-xl-6">
                                                    <label for="product-name-add" class="form-label">SKU <span>*</span></label>
                                                    <input type="text" class="@error('sku') is-invalid @enderror form-control" name="sku" placeholder="SKU" value="{{ $kingInsoles->sku }}">
                                                </div>
                                                <div class="col-xl-6">
                                                    <label for="product-name-add" class="form-label">UPC/ASIN/FNSKU <span>*</span></label>
                                                    <input type="text" class="@error('upcasinfnsku') is-invalid @enderror form-control" name="upcasinfnsku" placeholder="UPC/ASIN/FNSKU" value="{{ $kingInsoles->upcasinfnsku }}">
                                                </div>
                                                <div class="col-xl-6">
                                                    <label for="product-name-add" class="form-label">WH Inventory</label>
                                                    <input type="text" class="@error('whinventory') is-invalid @enderror form-control" name="whinventory" placeholder="WH Inventory" value="{{ $kingInsoles->whinventory }}">
                                                </div>
                                                <div class="col-xl-6">
                                                    <label for="product-name-add" class="form-label">Amazon Inventory</label>
                                                    <input type="text" class="@error('amazoninventory') is-invalid @enderror form-control" name="amazoninventory" placeholder="Amazon Inventory" value="{{ $kingInsoles->amazoninventory }}">
                                                </div>
                                                <div class="col-xl-6">
                                                    <label for="product-name-add" class="form-label">Inbound Orders</label>
                                                    <input type="text" class="@error('inboundorders') is-invalid @enderror form-control" name="inboundorders" placeholder="Inbound Orders" value="{{ $kingInsoles->inboundorders }}">
                                                </div>
                                                <div class="col-xl-6">
                                                    <label for="product-name-add" class="form-label">Total Inventory</label>
                                                    <input type="text" class="@error('totalinventory') is-invalid @enderror form-control" name="totalinventory" placeholder="Total Inventory" value="{{ $kingInsoles->totalinventory }}">
                                                </div>
                                                <div class="col-xl-6">
                                                    <label for="product-name-add" class="form-label">30 Days Sales</label>
                                                    <input type="text" class="@error('thirtydayssales') is-invalid @enderror form-control" name="thirtydayssales" placeholder="30 Days Sales" value="{{ $kingInsoles->thirtydayssales }}">
                                                </div>
                                                <div class="col-xl-6">
                                                    <label for="product-name-add" class="form-label">90 Day Amazon</label>
                                                    <input type="text" class="@error('ninetydayamazon') is-invalid @enderror form-control" name="ninetydayamazon" placeholder="90 Day Amazon" value="{{ $kingInsoles->ninetydayamazon }}">
                                                </div>
                                                <div class="col-xl-6">
                                                    <label for="product-name-add" class="form-label">Cover in Months (not including inbound)</label>
                                                    <input type="text" class="@error('coverinmonths') is-invalid @enderror form-control" name="coverinmonths" placeholder="Cover in Months (not including inbound)" value="{{ $kingInsoles->coverinmonths }}">
                                                </div>
                                                <div class="col-xl-6">
                                                    <label for="product-name-add" class="form-label">Cover in Months (including inbound)</label>
                                                    <input type="text" class="@error('coverinmonthsinbound') is-invalid @enderror form-control" name="coverinmonthsinbound" placeholder="Cover in Months (including inbound)" value="{{ $kingInsoles->coverinmonthsinbound }}">
                                                </div>
                                                <div class="col-xl-6">
                                                    <label for="product-name-add" class="form-label">Order Quantity</label>
                                                    <input type="text" class="@error('orderquantity') is-invalid @enderror form-control" name="orderquantity" placeholder="Order Quantity" value="{{ $kingInsoles->orderquantity }}">
                                                </div>
                                                <div class="col-xl-6">
                                                    <label for="product-name-add" class="form-label">Cases to Order</label>
                                                    <input type="text" class="@error('casestoorder') is-invalid @enderror form-control" name="casestoorder" placeholder="Cases to Order" value="{{ $kingInsoles->casestoorder }}">
                                                </div>
                                                <div class="col-xl-6">
                                                    <div class="form-check form-check-lg form-switch mt-3">
                                                        <label class="form-check-label" for="switch-lg">Need to airship?</label>
                                                        <input class="form-check-input" type="checkbox" role="switch"
                                                               name="needairship" id="switch-lg" {{ $kingInsoles->needairship == 'true' ? 'checked' : '' }}>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="px-4 py-3 border-top border-block-start-dashed d-sm-flex justify-content-end">
                            <input type="submit" class="btn btn-success m-1 save-button" value="Update">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--End::row-1 -->
@endsection
