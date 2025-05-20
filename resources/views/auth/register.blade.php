<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Akun - SIAKAD</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a2e5e6fa4c.js" crossorigin="anonymous"></script>
    <style>
        * {
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background-color: #f5f6fa;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            margin: 0;
        }

        .register-container {
            background-color: #ffffff;
            padding: 40px 30px;
            border-radius: 18px;
            max-width: 420px;
            width: 100%;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.08);
        }

        h2 {
            text-align: center;
            font-size: 24px;
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 30px;
        }

        .input-group {
            position: relative;
            margin-bottom: 20px;
        }

        .input-group input,
        .input-group select {
            width: 100%;
            padding: 14px 45px;
            border: 1px solid #dcdde1;
            border-radius: 12px;
            background-color: #f1f2f6;
            font-size: 14px;
            color: #2c3e50;
            transition: 0.3s;
            appearance: none;
        }

        .input-group input:focus,
        .input-group select:focus {
            border-color: #4b6cb7;
            background-color: #fff;
            outline: none;
        }

        .input-group i {
            position: absolute;
            top: 50%;
            left: 15px;
            transform: translateY(-50%);
            color: #a4b0be;
        }

        .btn-register {
            width: 100%;
            padding: 14px;
            background: linear-gradient(135deg, #4b6cb7, #182848);
            border: none;
            border-radius: 12px;
            color: #fff;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: 0.3s;
        }

        .btn-register:hover {
            opacity: 0.95;
        }

        .login-link {
            text-align: center;
            font-size: 14px;
            margin-top: 20px;
            color: #636e72;
        }

        .login-link a {
            color: #4b6cb7;
            text-decoration: none;
        }

        .login-link a:hover {
            text-decoration: underline;
        }

        @media (max-width: 480px) {
            .register-container {
                padding: 30px 20px;
            }
        }
    </style>
</head>
<body>

    <div class="register-container">
        <h2>Daftar Akun 📝</h2>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Role -->
<div class="input-group">
    <i class="fas fa-user-tag"></i>
    <select name="role" required style="
        width: 100%;
        padding: 14px 45px;
        border: 1px solid #dcdde1;
        border-radius: 12px;
        background-color: #f1f2f6;
        font-size: 14px;
        color: #2C3E50;
        appearance: none;
        background-image: url('data:image/svg+xml;utf8,<svg fill=\'%236b7280\' height=\'24\' viewBox=\'0 0 24 24\' width=\'24\' xmlns=\'http://www.w3.org/2000/svg\'><path d=\'M7 10l5 5 5-5z\'/></svg>');
        background-repeat: no-repeat;
        background-position: right 15px center;
        background-size: 16px 16px;
    ">
        <option disabled selected>Pilih Role</option>
        <option value="mahasiswa">Mahasiswa</option>
        <option value="dosen">Dosen</option>
    </select>
</div>


            <!-- Name -->
            <div class="input-group">
                <i class="fas fa-user"></i>
                <input type="text" name="name" placeholder="Nama Lengkap" required>
            </div>

            <!-- Email -->
            <div class="input-group">
                <i class="fas fa-envelope"></i>
                <input type="email" name="email" placeholder="Email" required>
            </div>

            <!-- Password -->
            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" placeholder="Password" required>
            </div>

            <!-- Confirm Password -->
            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="password" name="password_confirmation" placeholder="Konfirmasi Password" required>
            </div>

            <!-- Submit -->
            <button type="submit" class="btn-register">Daftar</button>
        </form>

        <div class="login-link">
            Sudah punya akun? <a href="{{ route('login') }}">Login di sini</a>
        </div>
    </div>

</body>
</html>
