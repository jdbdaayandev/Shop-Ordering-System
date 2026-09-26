<x-layouts.auth>
    <!-- Register Page Custom Styles -->
    <style>
        .register-container {
            min-height: 80vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem 1rem;
        }
        .register-card {
            width: 100%;
            max-width: 500px;
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
        /* Custom input focus color for Nature theme */
        .form-control:focus, .form-check-input:focus {
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

    <div class="register-container">
        <div class="card register-card shadow-sm border-0 bg-white">
            <div class="card-body p-4 p-md-5">
                
                <!-- Header -->
                <div class="text-center mb-4">
                    <h4 class="fw-bold text-dark mb-1">Create an Account</h4>
                    <p class="text-muted" style="font-size: 0.9rem;">Join MyShop and start shopping sustainably.</p>
                </div>

                <!-- Registration Form -->
                <form method="POST" action="{{ route('auth.store') }}">
                    @csrf <!-- Laravel CSRF Token -->

                    <!-- Full Name Input -->
                    <div class="mb-3">
                        <label for="name" class="form-label text-secondary fw-semibold" style="font-size: 0.85rem;">Full Name</label>
                        <div class="input-group">
                            <span class="input-group-text rounded-start-2">
                                <ion-icon name="person-outline" class="fs-5"></ion-icon>
                            </span>
                            <input type="text" class="form-control form-control-icon rounded-end-2 py-2" id="name" name="name" placeholder="Juan Dela Cruz" required autofocus>
                        </div>
                        <!-- @error('name') <span class="text-danger small">{{ $message }}</span> @enderror -->
                    </div>

                    <!-- Email Input -->
                    <div class="mb-3">
                        <label for="email" class="form-label text-secondary fw-semibold" style="font-size: 0.85rem;">Email Address</label>
                        <div class="input-group">
                            <span class="input-group-text rounded-start-2">
                                <ion-icon name="mail-outline" class="fs-5"></ion-icon>
                            </span>
                            <input type="email" class="form-control form-control-icon rounded-end-2 py-2" id="email" name="email" placeholder="name@example.com" required>
                        </div>
                        <!-- @error('email') <span class="text-danger small">{{ $message }}</span> @enderror -->
                    </div>

                    <!-- Password Input -->
                    <div class="mb-3">
                        <label for="password" class="form-label text-secondary fw-semibold mb-1" style="font-size: 0.85rem;">Password</label>
                        <div class="input-group">
                            <span class="input-group-text rounded-start-2">
                                <ion-icon name="lock-closed-outline" class="fs-5"></ion-icon>
                            </span>
                            <input type="password" class="form-control form-control-icon rounded-end-2 py-2" id="password" name="password" placeholder="Create a password" required>
                        </div>
                        <!-- @error('password') <span class="text-danger small">{{ $message }}</span> @enderror -->
                    </div>

                    <!-- Confirm Password Input -->
                    <div class="mb-4">
                        <label for="password_confirmation" class="form-label text-secondary fw-semibold mb-1" style="font-size: 0.85rem;">Confirm Password</label>
                        <div class="input-group">
                            <span class="input-group-text rounded-start-2">
                                <ion-icon name="checkmark-circle-outline" class="fs-5"></ion-icon>
                            </span>
                            <input type="password" class="form-control form-control-icon rounded-end-2 py-2" id="password_confirmation" name="password_confirmation" placeholder="Confirm your password" required>
                        </div>
                    </div>

                    <!-- Terms and Conditions -->
                    <div class="mb-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="terms" id="terms" required>
                            <label class="form-check-label text-secondary" for="terms" style="font-size: 0.85rem;">
                                I agree to the <a href="#" class="text-nature text-decoration-none fw-semibold">Terms of Service</a> and <a href="#" class="text-nature text-decoration-none fw-semibold">Privacy Policy</a>
                            </label>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="btn btn-nature w-100 py-2 fs-6 fw-semibold mb-3 rounded-2">
                        Sign Up
                    </button>

                    <!-- Login Link -->
                    <div class="text-center" style="font-size: 0.9rem;">
                        <span class="text-muted">Already have an account?</span> 
                        <a href="/login" class="text-nature text-decoration-none fw-bold">Log In</a>
                    </div>

                </form>
            </div>
        </div>
    </div>
</x-layouts.auth>