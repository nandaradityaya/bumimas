<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Verify Email</title>
    <style>
        .main {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
    </style>
</head>
<body>
    <div class="main">
        <div class="card">
            <div class="card-header">
                Please Check and Verify Your Email Address
            </div>
            {{-- <div class="card-body">
                @if (session('resent'))
                    <div class="alert alert-success" role="alert">
                        A fresh verification link has been sent to your email address.
                    </div>
                @endif
                Before proceeding, please check your email for a verification link.
                If you did not receive the email,
                <a href="{{ route('verification.resend') }}">click here to request another</a>.
            </div> --}}
        </div>
    </div>
</body>
</html>