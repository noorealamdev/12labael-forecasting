@extends('backend.layouts.master')
@section('title') {{'Jiangxi Zhicheng'}} @endsection
@section('content')
    @include('backend.partials.alert')

    <!-- Start::page-header -->
    <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
        <h1 class="page-title fw-semibold fs-18 mb-0">Jiangxi Zhicheng <a href="{{ route('jiangxiZhicheng.create') }}"
                                                                      class="btn btn-primary-light m-1 ml-4">Add New<i
                        class="bi bi-plus-lg ms-2"></i></a></h1>
    </div>
    <!-- End::page-header -->

    <!-- Start::row-1 -->
    <div class="row">
        <div class="col-xl-12">
            <div class="card custom-card">
                <div class="card-body">
                    <div class="table-responsive mb-4">
                        <table class="table text-nowrap table-bordered">
                            <thead>
                            <tr>
                                <th scope="col">
                                    <input class="form-check-input check-all" type="checkbox" id="all-products" value=""
                                           aria-label="...">
                                </th>
                                <th scope="col">Title</th>
                                <th scope="col">UPC/FNSKU</th>
                                <th scope="col">SKU</th>
                                <th scope="col">WH Inventory</th>
                                <th scope="col">Amazon Inventory</th>
                                <th scope="col">Total Inventory</th>
                                <th scope="col">90 Day Amazon</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($jiangxiZhicheng as $jiangxi)
                                <tr class="product-list">
                                    <td class="product-checkbox"><input class="form-check-input" type="checkbox"
                                                                        id="product1" value="" aria-label="..."></td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="fw-semibold">
                                                {{ $jiangxi->title }}
                                            </div>
                                        </div>
                                    </td>
                                    <td>{{ $jiangxi->upcfnsku }}</td>
                                    <td>{{ $jiangxi->sku }}</td>
                                    <td>{{ $jiangxi->whinventory }}</td>
                                    <td>{{ $jiangxi->amazoninventory }}</td>
                                    <td>{{ $jiangxi->totalinventory }}</td>
                                    <td>{{ $jiangxi->ninetydayamazon }}</td>
                                    <td>
                                        <div class="hstack gap-2 fs-15">
                                            <a href="{{ route('jiangxiZhicheng.edit', $jiangxi->id) }}" class="btn btn-icon btn-sm btn-info-light"><i
                                                        class="ri-edit-line"></i></a>
                                            <a href="javascript:void(0);" data-bs-toggle="modal"
                                               data-bs-target="#deleteModal{{ $jiangxi->id }}" data-original-title="Delete" class="btn btn-icon btn-sm btn-danger-light product-btn">
                                                <i class="ri-delete-bin-line"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>

                                <!-- Modal Delete -->
                                <div class="modal fade" id="deleteModal{{ $jiangxi->id }}" tabindex="-1" role="dialog"
                                     aria-labelledby="teamModalCenterTitle" aria-hidden="false">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="teamModalCenterTitle">Delete</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body text-center"><h5>Are you sure?</h5></div>
                                            <div class="modal-footer">
                                                <form class="d-inline-block"
                                                      action="{{ route('jiangxiZhicheng.destroy', $jiangxi->id) }}" method="POST">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel
                                                    </button>
                                                    <button type="submit" class="btn btn-success">Yes, delete</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    {{--                    <div class="d-flex align-items-center justify-content-between flex-wrap">--}}
                    {{--                        <nav aria-label="...">--}}
                    {{--                            <ul class="pagination mb-0">--}}
                    {{--                                <li class="page-item disabled">--}}
                    {{--                                    <span class="page-link">Previous</span>--}}
                    {{--                                </li>--}}
                    {{--                                <li class="page-item"><a class="page-link" href="#">1</a></li>--}}
                    {{--                                <li class="page-item active" aria-current="page">--}}
                    {{--                                    <span class="page-link">2</span>--}}
                    {{--                                </li>--}}
                    {{--                                <li class="page-item"><a class="page-link" href="#">3</a></li>--}}
                    {{--                                <li class="page-item">--}}
                    {{--                                    <a class="page-link" href="#">Next</a>--}}
                    {{--                                </li>--}}
                    {{--                            </ul>--}}
                    {{--                        </nav>--}}
                    {{--                        <button class="btn btn-danger btn-wave m-1">Delete All</button>--}}
                    {{--                    </div>--}}
                </div>
            </div>
        </div>
    </div>
    <!--End::row-1 -->
@endsection
