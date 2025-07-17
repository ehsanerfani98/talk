@extends('admin.layout')
@section('title', 'لیست کدهای تخفیف')
@section('actions')
    <a href="{{ route('discounts.create') }}" class="btn btn-success btn-sm btn-icon-split">
        <span class="text-white-50">
            <i class="fas fa-plus"></i>
        </span>
        <span class="text">افزودن کد تخفیف</span>
    </a>
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <style>
        @media only screen and (max-width: 760px),
        (min-device-width: 768px) and (max-device-width: 1024px) {
            table, thead, tbody, th, td, tr {
                display: block;
            }

            thead tr {
                position: absolute;
                top: -9999px;
                right: -9999px;
            }

            tr {
                border: 1px solid #ccc;
                margin-bottom: 10px;
            }

            td {
                border: none;
                border-bottom: 1px solid #eee;
                position: relative;
                padding-right: 50%;
                display: flex;
                flex-wrap: wrap;
                align-items: center;
                gap: 10px;
            }

            td:before {
                content: attr(data-label);
                font-weight: bold;
                width: 120px;
            }

            .btn {
                font-size: 10px;
                padding: 4px 6px !important;
            }
        }
    </style>
@endsection

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">لیست کدهای تخفیف</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="discounts-table" class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th>عنوان</th>
                            <th>کد تخفیف</th>
                            <th>مبلغ</th>
                            <th>درصد</th>
                            <th>نوع تخفیف</th>
                            <th>تعداد مجاز استفاده</th>
                            <th>تاریخ انقضا</th>
                            <th>وضعیت</th>
                            <th>عملیات</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($discounts as $discount)
                            <tr>
                                <td data-label="عنوان">{{ $discount->title }}</td>
                                <td data-label="کد تخفیف">{{ $discount->code }}</td>
                                <td data-label="مبلغ">{{ number_format($discount->amount) }} تومان</td>
                                <td data-label="درصد">{{ $discount->percent }}%</td>
                                <td data-label="نوع تخفیف">
                                    @if($discount->getRawOriginal('type') == 'amount')
                                        <span class="badge badge-primary">مبلغی</span>
                                    @else
                                        <span class="badge badge-success">درصدی</span>
                                    @endif
                                </td>
                                <td data-label="تعداد مجاز استفاده">
                                    {{ $discount->limitdiscount == 0 ? 'نامحدود' : $discount->limitdiscount }}
                                </td>
                                <td data-label="تاریخ انقضا">{{ $discount->expiration }}</td>
                                <td data-label="وضعیت">
                                    @if($discount->getRawOriginal('status') == 'enable')
                                        <span class="badge badge-success">فعال</span>
                                    @else
                                        <span class="badge badge-danger">غیرفعال</span>
                                    @endif
                                </td>
                                <td data-label="عملیات">
                                    <a href="{{ route('discounts.edit', $discount->id) }}" class="btn btn-primary btn-sm btn-icon-split">
                                        <span class="text-white-50">
                                            <i class="fas fa-edit"></i>
                                        </span>
                                        <span class="text">ویرایش</span>
                                    </a>
                                    <form action="{{ route('discounts.destroy', $discount->id) }}" method="POST" style="display: inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm btn-icon-split" onclick="return confirm('آیا از حذف این کد تخفیف مطمئن هستید؟')">
                                            <span class="text-white-50">
                                                <i class="fas fa-trash"></i>
                                            </span>
                                            <span class="text">حذف</span>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="9" class="text-center">هیچ کد تخفیفی یافت نشد</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

