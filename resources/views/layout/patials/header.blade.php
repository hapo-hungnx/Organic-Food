<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Thực phẩm sạch Đoàn Đen</title>
</head>
<body class="bg-white">
    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="contact float-left py-2">
                        <span class="email d-inline-block mr-4">
                            <i class="fa fa-envelope text-success"></i>
                            Email: doanden@gmail.com
                        </span>
                        <span class="skype">
                            <i class="fa fa-phone text-success"></i>
                            {{ __('Phone') }}: (+84) 12345678
                        </span>
                    </div>
                    <div class="user float-right py-2 px-4 h-100">
                        <div class="dropdown account">
                            <span class="dropdown-toggle font-weight-bold text-white text-uppercase h-100" id="account-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{ __('Tài khoản') }}
                            </span>
                            <div class="dropdown-menu option pb-0" aria-labelledby="account-dropdown">
                                <a class="dropdown-item py-2 item" href="#"><i class="fa fa-cog mr-2"></i>Tài khoản của tôi</a>
                                <a class="dropdown-item py-2 item" href="#"><i class="fa fa-sign-in-alt mr-2"></i>Đăng nhập</a>
                                <a class="dropdown-item py-2 item border-0" href="#"><i class="fa fa-user mr-2"></i>Đăng ký</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
