<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.4/components/logins/login-12/assets/css/login-12.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <title>Sign Up</title>
    <style>
        * {
            transition: all 0.6s;
        }
    </style>
</head>

<body>
    <section class="py-3 py-md-5 py-xl-8">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="mb-5">
                        <h2 class="display-5 fw-bold text-center">Sign up</h2>
                        <p class="text-center m-0">Already have an account? <a href="{{ route('login') }}">Sign in</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10 col-xl-8">
                    <div class="row gy-5 justify-content-center">
                        <div class="col-12 col-lg-5">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="row gy-3 overflow-hidden">
                                    <div class="col-12">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control border-0 border-bottom rounded-0"
                                                name="name" id="name" placeholder="Full Name"
                                                value="{{ old('name') }}" required autofocus>
                                            <label for="name" class="form-label">Full Name</label>
                                            @error('name')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating mb-3">
                                            <input type="email" class="form-control border-0 border-bottom rounded-0"
                                                name="email" id="email" placeholder="name@example.com"
                                                value="{{ old('email') }}" required>
                                            <label for="email" class="form-label">Email</label>
                                            @error('email')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating mb-3">
                                            <input type="password" class="form-control border-0 border-bottom rounded-0"
                                                name="password" id="password" placeholder="Password" required>
                                            <label for="password" class="form-label">Password</label>
                                            @error('password')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating mb-3">
                                            <input type="password" class="form-control border-0 border-bottom rounded-0"
                                                name="password_confirmation" id="password_confirmation"
                                                placeholder="Confirm Password" required>
                                            <label for="password_confirmation" class="form-label">Confirm
                                                Password</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="d-grid">
                                            <button class="btn btn-lg btn-dark rounded-0 fs-6" type="submit">Sign
                                                up</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div
                            class="col-12 col-lg-2 d-flex align-items-center justify-content-center gap-3 flex-lg-column">
                            <div class="bg-dark h-100 d-none d-lg-block" style="width: 1px; --bs-bg-opacity: .1;"></div>
                            <div class="bg-dark w-100 d-lg-none" style="height: 1px; --bs-bg-opacity: .1;"></div>
                            <div>or</div>
                            <div class="bg-dark h-100 d-none d-lg-block" style="width: 1px; --bs-bg-opacity: .1;"></div>
                            <div class="bg-dark w-100 d-lg-none" style="height: 1px; --bs-bg-opacity: .1;"></div>
                        </div>
                        <div class="col-12 col-lg-5 d-flex align-items-center">
                            <div class="d-flex gap-3 flex-column w-100">
                                <a href="#!"
                                    class="btn bsb-btn-2xl btn-outline-dark rounded-0 d-flex align-items-center">
                                    <i class="fab fa-google text-danger"></i>
                                    <span class="ms-2 fs-6 flex-grow-1">Continue with Google</span>
                                </a>
                                <a href="#!"
                                    class="btn bsb-btn-2xl btn-outline-dark rounded-0 d-flex align-items-center">
                                    <i class="fab fa-telegram text-primary"></i>
                                    <span class="ms-2 fs-6 flex-grow-1">Continue with Telegram</span>
                                </a>
                                <a href="#!"
                                    class="btn bsb-btn-2xl btn-outline-dark rounded-0 d-flex align-items-center">
                                    <i class="fab fa-facebook text-primary"></i>
                                    <span class="ms-2 fs-6 flex-grow-1">Continue with Facebook</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
