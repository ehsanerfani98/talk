@extends('admin.layout')
@section('title', 'تنظیمات')
@section('actions')
    <a href="{{ route('dashboard') }}" class="btn btn-primary btn-sm btn-icon-split">
        <span class="text-white-50">
            <i class="fas fa-arrow-right"></i>
        </span>
        <span class="text">برگشت</span>
    </a>
@endsection

@section('content')

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @session('success')
        <div class="alert alert-success" sendbill="alert">
            {{ $value }}
        </div>
    @endsession

    <form method="POST" action="{{ route('settings.update') }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row mb-5">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">نحوه ثبت نام در سامانه</h6>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-3 mb-4">
                                <label for="login_type">نوع ثبت نام و ورود</label>
                                <select name="login_type" class="form-control" id="login_type">
                                    <option value="mobile"
                                        {{ old('login_type', get_setting_collection($settings, 'login_type')) == 'mobile' ? 'selected' : '' }}>
                                        با موبایل</option>
                                    <option value="email"
                                        {{ old('login_type', get_setting_collection($settings, 'login_type')) == 'email' ? 'selected' : '' }}>
                                        با ایمیل</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">تنظیمات ایمیل (SMTP)</h6>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-3 mb-4">
                                <label for="mail_mailer">SMTP Mailer</label>
                                <input type="text" name="mail_mailer" class="form-control"
                                    value="{{ old('mail_mailer', get_setting_collection($settings, 'mail_mailer')) }}">
                            </div>
                            <div class="col-lg-3 mb-4">
                                <label for="mail_host">SMTP Host</label>
                                <input type="text" name="mail_host" class="form-control"
                                    value="{{ old('mail_host', get_setting_collection($settings, 'mail_host')) }}">
                            </div>
                            <div class="col-lg-3 mb-4">
                                <label for="mail_port">SMTP Port</label>
                                <input type="text" name="mail_port" class="form-control"
                                    value="{{ old('mail_port', get_setting_collection($settings, 'mail_port')) }}">
                            </div>
                            <div class="col-lg-3 mb-4">
                                <label for="mail_encryption">SMTP Encryption</label>
                                <input type="text" name="mail_encryption" class="form-control"
                                    value="{{ old('mail_encryption', get_setting_collection($settings, 'mail_encryption')) }}">
                            </div>
                            <div class="col-lg-3 mb-4">
                                <label for="mail_username">نام کاربری</label>
                                <input type="text" name="mail_username" class="form-control"
                                    value="{{ old('mail_username', get_setting_collection($settings, 'mail_username')) }}">
                            </div>
                            <div class="col-lg-3 mb-4">
                                <label for="mail_password">رمز عبور</label>
                                <input type="password" name="mail_password" class="form-control"
                                    value="{{ old('mail_password', get_setting_collection($settings, 'mail_password')) }}">
                            </div>
                            <div class="col-lg-3 mb-4">
                                <label for="mail_from_address">ایمیل فرستنده</label>
                                <input type="email" name="mail_from_address" class="form-control"
                                    value="{{ old('mail_from_address', get_setting_collection($settings, 'mail_from_address')) }}">
                            </div>
                            <div class="col-lg-3 mb-4">
                                <label for="mail_from_name">نام فرستنده</label>
                                <input type="text" name="mail_from_name" class="form-control"
                                    value="{{ old('mail_from_name', get_setting_collection($settings, 'mail_from_name')) }}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">اطلاعات سامانه</h6>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-4 mb-4">
                                <label for="percent_include">نام سامانه</label>
                                <input type="text" name="company_name" class="form-control"
                                    value="{{ old('company_name', get_setting_collection($settings, 'company_name')) }}">
                            </div>
                            <div class="col-lg-8 mb-4">
                                <label for="percent_include">شعار سامانه</label>
                                <input type="text" name="company_content" class="form-control"
                                    value="{{ old('company_content', get_setting_collection($settings, 'company_content')) }}">
                            </div>
                            <div class="col-lg-12 mb-4">
                                <label for="percent_include">آدرس شرکت</label>
                                <textarea type="text" name="company_address" class="form-control">{{ old('company_address', get_setting_collection($settings, 'company_address')) }}</textarea>
                            </div>
                            <div class="col-lg-3 mb-4">
                                <label for="percent_include">شماره ثابت شرکت</label>
                                <input type="text" name="company_phone" class="form-control"
                                    value="{{ old('company_phone', get_setting_collection($settings, 'company_phone')) }}">
                            </div>
                            <div class="col-lg-3 mb-4">
                                <label for="percent_include">شماره فکس شرکت</label>
                                <input type="text" name="company_fax" class="form-control"
                                    value="{{ old('company_fax', get_setting_collection($settings, 'company_fax')) }}">
                            </div>
                            <div class="col-lg-3 mb-4">
                                <label for="percent_include">شماره موبایل</label>
                                <input type="text" name="company_mobile" class="form-control"
                                    value="{{ old('company_mobile', get_setting_collection($settings, 'company_mobile')) }}">
                            </div>
                            <div class="col-lg-3 mb-4">
                                <label for="percent_include">آدرس ایمیل شرکت</label>
                                <input type="text" name="company_email" class="form-control"
                                    value="{{ old('company_email', get_setting_collection($settings, 'company_email')) }}">
                            </div>
                            {{-- <div class="col-lg-3 mb-4">
                                <label for="percent_include">_______</label>
                                <select name="payment_gateway_unit" class="form-control" id="payment_gateway_unit">
                                    <option value="IRR"
                                        {{ old('payment_gateway_unit', get_setting_collection($settings, 'payment_gateway_unit')) == 'IRR' ? 'selected' : '' }}>
                                        ریال</option>
                                    <option value="IRT"
                                        {{ old('payment_gateway_unit', get_setting_collection($settings, 'payment_gateway_unit')) == 'IRT' ? 'selected' : '' }}>
                                        تومان</option>
                                </select>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">درگاه پرداخت زرین پال</h6>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <input type="hidden" name="payment_gateway_type" id="payment_gateway_type"
                                value="zarinpal">
                            <div class="col-lg-3 mb-4">
                                <label for="percent_include">مرچنت کد</label>
                                <input type="text" name="merchantId" class="form-control"
                                    value="{{ old('merchantId', get_setting_collection($settings, 'merchantId')) }}">
                            </div>
                            <div class="col-lg-3 mb-4">
                                <label for="percent_include">وضعیت</label>
                                <select name="payment_gateway_status" class="form-control" id="payment_gateway_status">
                                    <option value="1"
                                        {{ old('payment_gateway_status', get_setting_collection($settings, 'payment_gateway_status')) == '1' ? 'selected' : '' }}>
                                        حالت آزمایشی</option>
                                    <option value="0"
                                        {{ old('payment_gateway_status', get_setting_collection($settings, 'payment_gateway_status')) == '0' ? 'selected' : '' }}>
                                        حالت واقعی</option>
                                </select>
                            </div>
                            <div class="col-lg-3 mb-4">
                                <label for="percent_include">واحد ارز</label>
                                <select name="payment_gateway_unit" class="form-control" id="payment_gateway_unit">
                                    <option value="IRR"
                                        {{ old('payment_gateway_unit', get_setting_collection($settings, 'payment_gateway_unit')) == 'IRR' ? 'selected' : '' }}>
                                        ریال</option>
                                    <option value="IRT"
                                        {{ old('payment_gateway_unit', get_setting_collection($settings, 'payment_gateway_unit')) == 'IRT' ? 'selected' : '' }}>
                                        تومان</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">تنظیمات پیامک (ippanel)</h6>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <input type="hidden" name="payment_gateway_type" id="payment_gateway_type"
                                value="zarinpal">
                            <div class="col-lg-3 mb-4">
                                <label for="percent_include">Api Key</label>
                                <input type="text" name="apiKey" class="form-control"
                                    value="{{ old('apiKey', get_setting_collection($settings, 'apiKey')) }}">
                            </div>
                            <div class="col-lg-3 mb-4">
                                <label for="percent_include">Originator</label>
                                <input type="text" name="originator" class="form-control"
                                    value="{{ old('originator', get_setting_collection($settings, 'originator')) }}">
                            </div>
                            <div class="col-lg-3 mb-4">
                                <label for="percent_include">Pattern Code</label>
                                <input type="text" name="patternCode" class="form-control"
                                    value="{{ old('patternCode', get_setting_collection($settings, 'patternCode')) }}">
                            </div>
                            <div class="col-lg-3 mb-4">
                                <label for="percent_include">وضعیت</label>
                                <select name="sms_status" class="form-control" id="sms_status">
                                    <option value="1"
                                        {{ old('sms_status', get_setting_collection($settings, 'sms_status')) == '1' ? 'selected' : '' }}>
                                        حالت آزمایشی</option>
                                    <option value="0"
                                        {{ old('sms_status', get_setting_collection($settings, 'sms_status')) == '0' ? 'selected' : '' }}>
                                        حالت واقعی</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-right">
                <button type="submit" class="btn btn-success btn-sm btn-icon-split">
                    <span class="text-white-50">
                        <svg fill="#ffffff" height="16px" width="16px" version="1.1" id="Layer_1"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve" stroke="#ffffff">
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
    </form>

@endsection

@section('js')
    {{--
    <script>
        document.getElementById('uploadButton').addEventListener('click', function () {
            document.getElementById('fileInput').click();
        });

        function previewImage(event) {
            const input = event.target;
            const preview = document.getElementById('imagePreview');

            if (input.files && input.files[0]) {
                const reader = new FileReader();

                reader.onload = function (e) {
                    preview.src = e.target.result;
                    preview.style.display = 'block';
                };

                reader.readAsDataURL(input.files[0]);
            } else {
                preview.src = '#';
                preview.style.display = 'none';
            }
        }
    </script> --}}
@endsection
