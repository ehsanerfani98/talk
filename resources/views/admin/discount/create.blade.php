@extends('admin.layout')
@section('title', 'افزودن کد تخفیف')
@section('actions')
    <a href="{{ route('discounts.index') }}" class="btn btn-primary btn-sm btn-icon-split">
        <span class="text-white-50">
            <i class="fas fa-arrow-right"></i>
        </span>
        <span class="text">برگشت</span>
    </a>
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('admin/persian-datepicker/css/persian-datepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/select2/dist/css/select2.min.css') }}">
@endsection

@section('content')

    @session('success')
        <div class="alert alert-success">{{ $value }}</div>
    @endsession
    
    <form action="{{ route('discounts.store') }}" method="POST">
        @csrf
        <div class="card">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">اطلاعات کد تخفیف</h6>
            </div>
            <div class="card-body">
                <div class="row">
                    {{-- دسترسی --}}
                    <div class="col-lg-4 mb-3">
                        <label for="access">نوع دسترسی</label>
                        <select name="access" id="access" class="form-control @error('access') is-invalid @enderror">
                            <option value="public" {{ old('access') === 'public' ? 'selected' : '' }}>عمومی</option>
                            <option value="private" {{ old('access') === 'private' ? 'selected' : '' }}>خصوصی</option>
                        </select>
                        @error('access')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- کاربران --}}
                    <div class="col-lg-4 mb-3">
                        <label for="user_ids">شامل کاربران</label>
                        <select name="user_ids[]" id="user_ids"
                            class="form-control select2 @error('user_ids') is-invalid @enderror" multiple>
                            @foreach ($users as $user)
                                @if (optional($user->document)->first_name)
                                    <option value="{{ $user->id }}"
                                        {{ collect(old('user_ids'))->contains($user->id) ? 'selected' : '' }}>
                                        {{ optional($user->document)->first_name }}</option>
                                @endif
                            @endforeach
                        </select>
                        @error('user_ids')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- محدودیت استفاده --}}
                    <div class="col-lg-4 mb-3">
                        <label for="limitdiscount">تعداد دفعات مجاز استفاده</label>
                        <select name="limitdiscount" id="limitdiscount"
                            class="form-control @error('limitdiscount') is-invalid @enderror">
                            <option value="0">نامحدود</option>
                            @for ($i = 1; $i <= 10; $i++)
                                <option value="{{ $i }}" {{ old('limitdiscount') == $i ? 'selected' : '' }}>
                                    {{ $i }}</option>
                            @endfor
                        </select>
                        @error('limitdiscount')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- عنوان --}}
                    <div class="col-lg-4 mb-3">
                        <label for="title">عنوان</label>
                        <input type="text" name="title" id="title" value="{{ old('title') }}" placeholder="عنوان"
                            class="form-control @error('title') is-invalid @enderror">
                        @error('title')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- کد تخفیف --}}
                    <div class="col-lg-4 mb-3">
                        <label for="code">کد تخفیف</label>
                        <input type="text" name="code" id="code" value="{{ old('code') }}"
                            placeholder="کد تخفیف" class="form-control @error('code') is-invalid @enderror">
                        @error('code')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- نوع تخفیف --}}
                    <div class="col-lg-4 mb-3">
                        <label for="type">نوع تخفیف</label>
                        <select name="type" id="type" class="form-control @error('type') is-invalid @enderror">
                            <option value="amount" {{ old('type') === 'amount' ? 'selected' : '' }}>مبلغی</option>
                            <option value="percent" {{ old('type') === 'percent' ? 'selected' : '' }}>درصدی</option>
                        </select>
                        @error('type')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- مقدار عددی --}}
                    <div class="col-lg-3 mb-3">
                        <label for="amount">مبلغ</label>
                        <input type="number" name="amount" id="amount" value="{{ old('amount') }}" placeholder="مبلغ"
                            class="form-control @error('amount') is-invalid @enderror">
                        @error('amount')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- درصد --}}
                    <div class="col-lg-3 mb-3">
                        <label for="percent">درصد</label>
                        <input type="number" name="percent" id="percent" value="{{ old('percent') }}" placeholder="درصد"
                            class="form-control @error('percent') is-invalid @enderror">
                        @error('percent')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- تاریخ انقضا --}}
                    <div class="col-lg-3 mb-3">
                        <label for="expiration">تاریخ انقضا</label>
                        <input type="text" name="expiration" id="expiration" value="{{ old('expiration') }}"
                            class="form-control has-gregorian-datepicker expiration tahoma text-right @error('expiration') is-invalid @enderror"
                            placeholder="تاریخ انقضا">
                        @error('expiration')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- وضعیت --}}
                    <div class="col-lg-3 mb-3">
                        <label for="status">وضعیت</label>
                        <select name="status" id="status" class="form-control @error('status') is-invalid @enderror">
                            <option value="disable" {{ old('status') === 'disable' ? 'selected' : '' }}>غیرفعال</option>
                            <option value="enable" {{ old('status') === 'enable' ? 'selected' : '' }}>فعال</option>
                        </select>
                        @error('status')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12 text-right px-0">
                    <button ype="submit" class="btn btn-success btn-sm btn-icon-split">
                        <span class="text-white-50">
                            <svg fill="#ffffff" height="16px" width="16px" version="1.1" id="Layer_1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve"
                                stroke="#ffffff">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <g id="Floppy-disk">
                                        <path
                                            d="M35.2673988,6.0411h-7.9999981v10h7.9999981V6.0411z M33.3697014,14.1434002h-4.2046013V7.9387999h4.2046013V14.1434002z">
                                        </path>
                                        <path
                                            d="M41,47.0410995H21c-0.5527992,0-1,0.4472008-1,1c0,0.5527,0.4472008,1,1,1h20c0.5527,0,1-0.4473,1-1 C42,47.4883003,41.5527,47.0410995,41,47.0410995z">
                                        </path>
                                        <path
                                            d="M41,39.0410995H21c-0.5527992,0-1,0.4472008-1,1c0,0.5527,0.4472008,1,1,1h20c0.5527,0,1-0.4473,1-1 C42,39.4883003,41.5527,39.0410995,41,39.0410995z">
                                        </path>
                                        <path d="M12,56.0410995h38v-26H12V56.0410995z M14,32.0410995h34v22H14V32.0410995z">
                                        </path>
                                        <path
                                            d="M49.3811989,0.0411L49.3610992,0H7C4.7908001,0,3,1.7909,3,4v56c0,2.2092018,1.7908001,4,4,4h50 c2.2090988,0,4-1.7907982,4-4V11.6962996L49.3811989,0.0411z M39.9604988,2.0804999v17.9211006H14.0394001V2.0804999H39.9604988z M59,60c0,1.1027985-0.8972015,2-2,2H7c-1.1027999,0-2-0.8972015-2-2V4c0-1.1027999,0.8972001-2,2-2h5v20.0410995h30V2h6.5099983 L59,12.5228996V60z">
                                        </path>
                                    </g>
                                </g>
                            </svg>
                        </span>
                        <span class="text">ذخیره</span>
                    </button>
                </div>
            </div>
        </div>
    </form>
@endsection

@section('js')
    <script src="{{ asset('admin/persian-date/persian-date.min.js') }}"></script>
    <script src="{{ asset('admin/persian-datepicker/js/persian-datepicker.min.js') }}"></script>
    <script src="{{ asset('admin/calendar.js') }}"></script>
    <script src="{{ asset('admin/select2/dist/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('admin/select2/dist/js/i18n/fa.js') }}"></script>
    <script>
        $(".select2").select2({
            rtl: true
        });

        // $('.expiration').persianDatepicker({
        //     observer: true,
        //     format: 'YYYY/MM/DD',
        //     altField: '.observer-example-alt'
        // });
    </script>
@endsection
