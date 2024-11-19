@extends('admin.layouts.master')

@section('title')
    {{ $title }}
@endsection

@section('content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">{{ $title }}</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{ route('admin.products.index') }}">Sản phẩm</a></li>
                        <li class="breadcrumb-item active">{{ $title }}</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between items-content-center">
                        <div>
                            <h5 class="card-title mb-0">Danh sách sản phẩm đã bị xóa</h5>
                            <div class="d-flex gap-2">
                                <span>Tất cả ({{ $totalTrashedProducts }})</span>
                            </div>
                        </div>
                        <div class="me-0">
                            <a href="{{ route('admin.products.index') }}" class="btn btn-warning">Quay lại</a>
                        </div>
                    </div>

                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif
                    <div class="card-body">
                        <table id="example" class="table table-bordered dt-responsive nowrap table-striped align-middle"
                            style="width:100%">
                            <thead class="table-dark">
                                <tr>
                                    <th data-ordering="false">ID</th>
                                    <th data-ordering="false">Tên</th>
                                    <th data-ordering="false">Danh mục</th>
                                    <th data-ordering="false">Hãng</th>
                                    <th>Ảnh</th>
                                    <th>Giá</th>
                                    <th>Lượt xem</th>
                                    <th>Thao tác</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($trashedProducts as $product)
                                    <tr>
                                        <td>{{ $product->id }}</td>
                                        <td>{{ $product->name }}</td>
                                        <td>
                                            {!! $product->categories->pluck('name')->implode('<br>') !!}
                                        </td>
                                        <td>{{ $product->brand->name }}</td>
                                        <td>
                                            @if ($product->productImgs->isNotEmpty())
                                                @php
                                                    // Lấy ảnh chính
                                                    $mainImage = $product->productImgs->firstWhere('is_main', true);
                                                @endphp

                                                @if ($mainImage)
                                                    <img width="150px" height="150px"
                                                        src="{{ asset('storage/' . $mainImage->img) }}" alt="Ảnh chính"
                                                        style="object-fit: cover;">
                                                @else
                                                    <p>No main image available</p>
                                                @endif
                                            @else
                                                <p>No image available</p>
                                            @endif

                                        </td>
                                        <td>{{ $product->price }}</td>
                                        <td>{{ $product->view }}</td>
                                        <td>
                                            <form action="{{ route('admin.products.restore', $product->id) }}"
                                                method="POST">
                                                @csrf
                                                <button type="submit" class="btn btn-info">Khôi phục</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('style-libs')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" />
    <!--datatable responsive css-->
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css" />

    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">
@endsection

@section('script-libs')
    <!--datatable js-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>

    <script src="{{ asset('theme/admin/assets/js/pages/datatables.init.js') }}"></script>
@endsection
