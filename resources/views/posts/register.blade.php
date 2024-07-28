<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - Dataku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #000; /* Background hitam */
            color: #fff; /* Warna teks putih */
        }
        .signup-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .signup-box {
            padding: 2rem;
            background: #333; /* Background form abu-abu gelap */
            border-radius: 0.5rem;
            box-shadow: 0 0.5rem 1rem rgba(255, 255, 255, 0.1); /* Bayangan putih */
        }
        .signup-title {
            margin-bottom: 1.5rem;
        }
        .form-control {
            background: #555; /* Background input abu-abu */
            border: none;
            color: #fff;
        }
        .form-control::placeholder {
            color: #ddd; /* Placeholder abu-abu terang */
        }
        .form-label {
            color: #ccc; /* Warna label abu-abu terang */
        }
        .btn-primary {
            background-color: #007bff;
            border: none;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
        .text-center a {
            color: #007bff;
        }
        .text-center a:hover {
            color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="signup-container">
        <div class="signup-box">
            <h2 class="signup-title text-center">Sign Up</h2>
            <form method="POST" action="{{ route('profile.register') }}">
                @csrf
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Enter your name" value="{{ old('name') }}" required autofocus>
                    @error('name')
                        <span>{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Username</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="{{ old('email') }}" required>
                    @error('email')
                        <span>{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                    @error('password')
                        <span>{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="cpassword" class="form-label">Konfirmasi Password</label>
                    <input type="password" class="form-control" id="cpassword" name="password_confirmation" placeholder="Confirm Password" required>
                    @error('cpassword')
                        <span>{{ $message }}</span>
                    @enderror
                    <br>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary w-100">Register</button>
                </div>
            </form>
        </div>
    </div>

    <!-- JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
</body>
</html>
