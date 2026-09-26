<x-layouts.auth>
    <style>
        .login-container {
            min-height: 75vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem 1rem;
        }

        .login-card {
            width: 100%;
            max-width: 450px;
            border-radius: 12px;
        }

        .btn-nature {
            background-color: #2e7d32;
            color: white;
            transition: background-color 0.2s;
        }

        .btn-nature:hover {
            background-color: #1b5e20;
            color: white;
        }

        .form-control:focus,
        .form-check-input:focus {
            border-color: #2e7d32;
            box-shadow: 0 0 0 0.25rem rgba(46, 125, 50, 0.25);
        }

        .form-check-input:checked {
            background-color: #2e7d32;
            border-color: #2e7d32;
        }

        .text-nature {
            color: #2e7d32 !important;
        }

        .input-group-text {
            background-color: #f8f9fa;
            border-right: none;
            color: #6c757d;
        }

        .form-control-icon {
            border-left: none;
        }
    </style>

    <div class="login-container">
        <div class="card login-card shadow-sm border-0 bg-white">
            <div class="card-body p-4 p-md-5">

                <div class="text-center mb-4">
                    <a href="/" class="text-decoration-none d-inline-flex align-items-center text-nature fs-2 fw-bold mb-3">
                        <ion-icon name="basket-outline" class="me-2"></ion-icon>
                        MyStore
                    </a>

                    <h5 class="fw-semibold text-dark mb-1">
                        Welcome Back!
                    </h5>

                    <p class="text-muted" style="font-size: 0.9rem;">
                        Please sign in to your account
                    </p>
                </div>

                @if ($errors->any())
                    <div class="alert alert-danger py-2 small">
                        {{ $errors->first() }}
                    </div>
                @endif

                <form method="POST" action="{{ route('auth.login.attempt') }}">
                    @csrf

                    <!-- Email -->
                    <div class="mb-3">
                        <label
                            for="email"
                            class="form-label text-secondary fw-semibold"
                            style="font-size: 0.85rem;"
                        >
                            Email Address
                        </label>

                        <div class="input-group">
                            <span class="input-group-text rounded-start-2">
                                <ion-icon name="mail-outline" class="fs-5"></ion-icon>
                            </span>

                            <input
                                type="email"
                                class="form-control form-control-icon rounded-end-2 py-2 @error('email') is-invalid @enderror"
                                id="email"
                                name="email"
                                placeholder="Enter your email"
                                value="{{ old('email') }}"
                                required
                                autofocus
                            >
                        </div>

                        @error('email')
                            <div class="text-danger small mt-1">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <!-- Password -->
                    <div class="mb-3">
                        <div class="d-flex justify-content-between align-items-center mb-1">
                            <label
                                for="password"
                                class="form-label text-secondary fw-semibold mb-0"
                                style="font-size: 0.85rem;"
                            >
                                Password
                            </label>

                            <a
                                href="#"
                                class="text-nature text-decoration-none fw-semibold"
                                style="font-size: 0.85rem;"
                            >
                                Forgot Password?
                            </a>
                        </div>

                        <div class="input-group">
                            <span class="input-group-text rounded-start-2">
                                <ion-icon name="lock-closed-outline"></ion-icon>
                            </span>

                            <input
                                type="password"
                                class="form-control form-control-icon rounded-end-2 py-2 @error('password') is-invalid @enderror"
                                id="password"
                                name="password"
                                placeholder="Enter your password"
                                required
                            >
                        </div>

                        @error('password')
                            <div class="text-danger small mt-1">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <!-- Remember Me -->
                    <div class="mb-4">
                        <div class="form-check">
                            <input
                                class="form-check-input"
                                type="checkbox"
                                name="remember"
                                id="remember"
                                {{ old('remember') ? 'checked' : '' }}
                            >

                            <label
                                class="form-check-label text-secondary"
                                for="remember"
                                style="font-size: 0.85rem;"
                            >
                                Remember me for 30 days
                            </label>
                        </div>
                    </div>

                    <button
                        type="submit"
                        class="btn btn-nature w-100 py-2 fs-6 fw-semibold mb-3 rounded-2"
                    >
                        Log In
                    </button>

                    <div class="text-center" style="font-size: 0.9rem;">
                        <span class="text-muted">
                            Don't have an account yet?
                        </span>

                        <a
                            href="{{ route('auth.register') }}"
                            class="text-nature text-decoration-none fw-bold"
                        >
                            Sign Up
                        </a>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-layouts.auth>