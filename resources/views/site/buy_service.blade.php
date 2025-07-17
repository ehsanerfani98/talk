@extends('site.layout')
@section('title', 'خرید سرویس')

@section('css')
    <style>
        .modal-overlay {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.7);
            z-index: 1000;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .modal-container {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            max-width: 500px;
            width: 90%;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
            animation: modalFadeIn 0.3s ease-out;
        }

        @keyframes modalFadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .modal-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .modal-title {
            font-size: 1.5rem;
            color: #d33;
        }

        .modal-close {
            background: none;
            border: none;
            font-size: 1.5rem;
            cursor: pointer;
        }

        .modal-body {
            margin-bottom: 20px;
            line-height: 1.6;
        }

        /* استایل برای اسپینر دکمه */
        .btn-spinner {
            display: none;
            margin-right: 5px;
        }

        .btn-loading .btn-spinner {
            display: inline-block;
        }

        .btn-loading .btn-text {
            margin-left: 5px;
        }
    </style>
@endsection

@section('content')
    {!! $service->description !!}

    <div class="card">
        <div class="card-body">
            <div class="form-group">
                <label for="description" class="mb-2">توضیحات شما</label>
                <textarea name="" class="form-control" id="description"></textarea>
            </div>
            <button id="submitServiceBtn" type="submit" class="btn btn-sm btn-primary mt-3">
                <span class="spinner-border spinner-border-sm btn-spinner" role="status" aria-hidden="true"></span>
                <span class="btn-text">ثبت درخواست</span>
            </button>
        </div>
    </div>

    <!-- Modal Structure -->
    <div id="phoneModal" class="modal-overlay" style="display: none;">
        <div class="modal-container">
            <div class="modal-header">
                <h3 class="modal-title">تکمیل اطلاعات ضروری</h3>
                <button class="modal-close" onclick="closeModal()">&times;</button>
            </div>
            <div class="modal-body">
                <p>برای ثبت درخواست ابتدا باید شماره موبایل خود را در پروفایل تکمیل و احراز هویت کنید.</p>
                <p>لطفاً به بخش <a href="{{ route('user.profile.details') }}"
                        style="color: #3490dc; text-decoration: underline;">پروفایل</a> مراجعه کنید.</p>
            </div>
        </div>
    </div>

    @push('scripts')
        <script>
            document.getElementById('submitServiceBtn').addEventListener('click', function(e) {
                e.preventDefault();
                const btn = this;

                // فعال کردن حالت لودینگ
                btn.classList.add('btn-loading');
                btn.disabled = true;

                // Check phone number via AJAX
                fetch('{{ route('check.user.phone') }}', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        credentials: 'same-origin'
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.has_phone) {
                            // Proceed with service submission
                            submitService();
                        } else {
                            // غیرفعال کردن حالت لودینگ
                            btn.classList.remove('btn-loading');
                            btn.disabled = false;

                            // Show modal
                            document.getElementById('phoneModal').style.display = 'flex';
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        // غیرفعال کردن حالت لودینگ
                        btn.classList.remove('btn-loading');
                        btn.disabled = false;
                    });
            });

            function closeModal() {
                document.getElementById('phoneModal').style.display = 'none';
            }

            function redirectToProfile() {
                window.location.href = '{{ route('users.index') }}';
            }

            async function submitService() {
                const submitBtn = document.getElementById('submitServiceBtn');
                try {
                    const response = await fetch('{{ route('users.service.register') }}', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'Accept': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        body: JSON.stringify({
                            service_id: '{{ $service->id }}',
                            description: document.getElementById('description').value
                        })
                    });

                    const data = await response.json().catch(() => {
                        throw new Error('پاسخ سرور معتبر نیست');
                    });

                    if (!response.ok) {
                        throw new Error(data.message || 'خطا در سرور');
                    }

                    Swal.fire({
                        icon: 'success',
                        title: 'درخواست ثبت شد',
                        confirmButtonText: 'متوجه شدم',
                    });

                } catch (error) {
                    Swal.fire({
                        icon: 'error',
                        title: error.message,
                        confirmButtonText: 'متوجه شدم',
                    });
                } finally {
                    // غیرفعال کردن حالت لودینگ
                    submitBtn.classList.remove('btn-loading');
                    submitBtn.disabled = false;
                }
            }
        </script>
    @endpush
@endsection
