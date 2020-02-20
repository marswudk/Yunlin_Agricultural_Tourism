<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>REGISTER</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
        integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/guest_login_style.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="p-3 register_form">
                <div class="form_width mb-3">
                    <h3 class="title">註冊</h3>
                </div>

                <div class="form_width mb-3 choice">

                    <div class="choice_inner d-flex justify-content-center">
                        <div class="email p-2 option">電子郵件</div>
                        <!-- <div class="phone p-2 option">手機號碼</div> -->
                    </div>
                </div>
                <form class="mx-auto mt-4 email_login" action="{{ route('register') }}" method="post">
                    @csrf
                    <div class="form-row mb-3">
                        <label for="name" class="col-md-4 col-form-label text-md-right" hidden>{{ __('Name') }}</label>


                        <input id="name" type="text" class="form-control form_width" @error('name') is-invalid @enderror
                            name="name" value="{{ old('name') }}" placeholder="姓名" required autocomplete="name"
                            autofocus>

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                    </div>
                    <div class="form-row mb-3">
                        <label for="email" hidden>電子郵件</label>
                        <input type="email" class="form-control form_width" id="email" name="email" placeholder="電子郵件"
                            value="" required>
                    </div>
                    <div class="form-row mb-3">
                        <label for="password" hidden>密碼</label>
                        <input type="password" class="form-control form_width" id="password" name="password"
                            placeholder="密碼" autocomplete="new-password" required>
                    </div>
                    <div class="form-row mb-3">
                        <label for="password-confirm"
                        class="form-control form_width" hidden>{{ __('Confirm Password') }}</label>


                        <input id="password-confirm" type="password" class="form-control form_width" name="password_confirmation" placeholder="確認密碼"
                            required autocomplete="new-password">

                    </div>
                    <div class="form-group">
                        <div class="form-check form_width">
                            <span>
                                <input class="form-check-input" type="checkbox" value="" id="isRmbPwd" name="isRmbPwd"
                                    required style="width: 20px;height: 20px;" checked="checked">
                                <label class="form-check-label text-black-50 ml-1" for="remember_password"
                                    style="height: 20px;">
                                    記住帳號
                                </label>
                            </span>
                            <a href="" class="right text-black-50">忘記密碼?</a>
                        </div>
                    </div>
                    <div class="form-row mb-3 text-center">
                        <button class="log_in_btn form_width text-white p-2"
                            type="submit">註冊
                        </button>
                    </div>
                </form>
                <form class="mx-auto mt-5 phone_login" action="" method="post" style="display: none;">
                    @csrf
                    <div class="form-row mb-3">
                        <label for="phone" hidden>手機號碼</label>
                        <input type="tel" class="form-control form_width" id="phone" name="phone" placeholder="手機號碼"
                            value="" required>
                    </div>
                    <div class="form-row mb-3">

                        <label for="password" hidden>密碼</label>
                        <input type="password" class="form-control form_width" id="password" name="password"
                            placeholder="密碼" required>
                    </div>
                    <div class="form-group">
                        <div class="form-check form_width">
                            <input class="form-check-input" type="checkbox" value="" id="isRmbPwd" name="isRmbPwd"
                                required style="width: 20px;height: 20px;" checked="checked">
                            <label class="form-check-label text-black-50 ml-1" for="remember_password"
                                style="height: 20px;">
                                記住帳號
                            </label>
                            <a href="" class="right text-black-50">忘記密碼?</a>
                        </div>
                    </div>
                    <div class="form-row mb-3 text-center">
                        <button class="log_in_btn form_width text-white p-2"
                            type="submit">登入
                        </button>
                    </div>
                </form>
                <div class="form_width mb-3 mt-5 d-flex justify-content-between">
                    <span style="font-size: 14px;">已有帳號？
                    </span>
                    <a href="/login" class="log_in">登入</a>
                </div>
            </div>
        </div>
    </div>




    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
        integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
        integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous">
    </script>

    <!-- <script>
        const form_type = document.querySelector('.choice');
        const email = form_type.querySelector('.email');
        const phone = form_type.querySelector('.phone');
        const email_login = document.querySelector('.email_login');
        const phone_login = document.querySelector('.phone_login');



        email.addEventListener('click', () => {
            email_login.style.display = "block"
            phone_login.style.display = "none"
            email.classList.remove('active');
            phone.classList.remove('active');
            email.classList.add('active');
        })
        phone.addEventListener('click', () => {
            email_login.style.display = "none"
            phone_login.style.display = "block"
            email.classList.remove('active');
            phone.classList.remove('active');
            phone.classList.add('active');
        })
    </script> -->
</body>

</html>
