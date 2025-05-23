<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Forgot Password - SIAKAD</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a2e5e6fa4c.js" crossorigin="anonymous"></script>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            padding: 20px;
        }

        .forgot-container {
            background-color: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            padding: 50px 40px;
            border-radius: 24px;
            width: 100%;
            max-width: 440px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .forgot-container h2 {
            margin-bottom: 8px;
            font-size: 28px;
            font-weight: 600;
            color: #667eea;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }

        .subtitle {
            color: #8892b0;
            font-size: 14px;
            margin-bottom: 40px;
            font-weight: 400;
            line-height: 1.5;
        }

        .divider {
            width: 60px;
            height: 3px;
            background: linear-gradient(135deg, #667eea, #764ba2);
            margin: 0 auto 40px;
            border-radius: 2px;
        }

        .input-group {
            position: relative;
            margin-bottom: 25px;
            text-align: left;
        }

        .input-group label {
            display: block;
            color: #64748b;
            font-size: 14px;
            font-weight: 500;
            margin-bottom: 8px;
        }

        .input-group input {
            width: 100%;
            padding: 16px 20px;
            border: 2px solid #e2e8f0;
            border-radius: 16px;
            background-color: #ffffff;
            font-size: 14px;
            color: #2d3748;
            transition: all 0.3s ease;
            font-weight: 400;
        }

        .input-group input:focus {
            border-color: #667eea;
            outline: none;
            box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
        }

        .input-group input::placeholder {
            color: #a0aec0;
        }

        .error-message {
            font-size: 12px;
            color: #e53e3e;
            margin-top: 5px;
            font-weight: 400;
        }

        .btn-send {
            width: 100%;
            padding: 16px;
            background: linear-gradient(135deg, #667eea, #764ba2);
            border: none;
            border-radius: 16px;
            color: #fff;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            margin-top: 10px;
            transition: all 0.3s ease;
            letter-spacing: 0.5px;
        }

        .btn-send:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(102, 126, 234, 0.3);
        }

        .btn-send:active {
            transform: translateY(0);
        }

        .back-link {
            margin-top: 25px;
            text-align: center;
        }

        .back-link a {
            color: #667eea;
            text-decoration: none;
            font-size: 14px;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .back-link a:hover {
            color: #764ba2;
        }

        .alert {
            padding: 16px 20px;
            background: linear-gradient(135deg, #48bb78, #38a169);
            color: white;
            border-radius: 16px;
            font-size: 14px;
            margin-bottom: 25px;
            font-weight: 500;
            box-shadow: 0 4px 12px rgba(72, 187, 120, 0.3);
        }

        .alert i {
            margin-right: 8px;
        }

        @media (max-width: 480px) {
            .forgot-container {
                padding: 35px 25px;
                margin: 10px;
            }

            .forgot-container h2 {
                font-size: 24px;
            }

            .subtitle {
                font-size: 13px;
            }
        }
    </style>
</head>
<body>

    <div class="forgot-container">
        <h2>Lupa Password? <i class="fas fa-question-circle"></i></h2>
        <div class="divider"></div>
        <p class="subtitle">Masukkan email Anda dan kami akan mengirimkan link untuk mereset password</p>

        @if (session('status'))
            <div class="alert">
                <i class="fas fa-check-circle"></i>
                {{ session('status') }}
            </div>
        @endif

        <form id="resetForm">
            <!-- Email -->
            <div class="input-group">
                <label for="email">Email</label>
                <input id="email" 
                       type="email" 
                       name="email" 
                       placeholder="Masukkan alamat email Anda" 
                       required 
                       autofocus>
                <p class="error-message" id="emailError" style="display: none;">Email tidak valid atau tidak terdaftar</p>
            </div>

            <!-- Submit -->
            <button type="submit" class="btn-send">
                KIRIM LINK RESET
            </button>
        </form>

        <!-- Back to login -->
        <div class="back-link">
            <a href="{{ route('login') }}">← Kembali ke Login</a>
        </div>
    </div>

    <script>
        document.getElementById('resetForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const email = document.getElementById('email').value;
            const emailError = document.getElementById('emailError');
            
            // Simple email validation
            if (!email || !email.includes('@')) {
                emailError.style.display = 'block';
                return;
            }
            
            emailError.style.display = 'none';
            
            // Show success message and redirect
            const container = document.querySelector('.forgot-container');
            container.innerHTML = `
                <div style="text-align: center; padding: 20px 0;">
                    <div style="width: 80px; height: 80px; background: linear-gradient(135deg, #48bb78, #38a169); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px;">
                        <i class="fas fa-check" style="font-size: 40px; color: white;"></i>
                    </div>
                    <h2 style="color: #48bb78; margin-bottom: 15px; font-size: 24px;">Berhasil!</h2>
                    <p style="color: #64748b; margin-bottom: 30px; line-height: 1.5;">
                        Link reset password telah dikirim ke email Anda.<br>
                        Silakan cek inbox atau folder spam Anda.
                    </p>
                    <button onclick="window.location.href='{{ route('login') }}'" 
                            style="padding: 12px 30px; background: linear-gradient(135deg, #667eea, #764ba2); color: white; border: none; border-radius: 12px; font-weight: 600; cursor: pointer; transition: all 0.3s ease;"
                            onmouseover="this.style.transform='translateY(-2px)'"
                            onmouseout="this.style.transform='translateY(0)'">
                        Kembali ke Login
                    </button>
                </div>
            `;
        });
    </script>

</body>
</html>