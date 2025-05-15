<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Profile - SIAKAD</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a2e5e6fa4c.js" crossorigin="anonymous"></script>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background-color: #f5f6fa;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 60px 20px;
            min-height: 100vh;
        }

        .profile-container {
            background-color: #ffffff;
            padding: 40px 30px;
            border-radius: 18px;
            width: 100%;
            max-width: 500px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.08);
        }

        .profile-container h2 {
            text-align: center;
            margin-bottom: 30px;
            font-size: 24px;
            font-weight: 600;
            color: #2c3e50;
        }

        .input-group {
            position: relative;
            margin-bottom: 25px;
        }

        .input-group input {
            width: 100%;
            padding: 14px 45px;
            border: 1px solid #dcdde1;
            border-radius: 12px;
            background-color: #f1f2f6;
            font-size: 14px;
            color: #2C3E50;
            transition: 0.3s;
        }

        .input-group input:focus {
            border-color: #4b6cb7;
            background-color: #ffffff;
            outline: none;
        }

        .input-group i {
            position: absolute;
            top: 50%;
            left: 15px;
            transform: translateY(-50%);
            color: #a4b0be;
        }

        .btn-save {
            width: 100%;
            padding: 14px;
            background: linear-gradient(135deg, #4b6cb7, #182848);
            border: none;
            border-radius: 12px;
            color: #fff;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: 0.3s ease;
        }

        .btn-save:hover {
            opacity: 0.95;
        }

        .success-message {
            text-align: center;
            margin-bottom: 20px;
            padding: 10px;
            background-color: #dff0d8;
            color: #3c763d;
            border-radius: 10px;
            font-size: 14px;
        }

        .error-message {
            font-size: 13px;
            color: #e74c3c;
            margin-top: 5px;
        }

        @media (max-width: 480px) {
            .profile-container {
                padding: 30px 20px;
            }
        }
    </style>
</head>
<body>

    <div class="profile-container">
        <h2>Edit Profile 👤</h2>

        @if (session('status') === 'profile-updated')
            <div class="success-message">
                Profile updated successfully!
            </div>
        @endif

        <form method="POST" action="{{ route('profile.update') }}">
            @csrf
            @method('PATCH')

            <!-- Name -->
            <div class="input-group">
                <i class="fas fa-user"></i>
                <input type="text" name="name" value="{{ old('name', auth()->user()->name) }}" placeholder="Full Name" required>
                @error('name')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>

            <!-- Email -->
            <div class="input-group">
                <i class="fas fa-envelope"></i>
                <input type="email" name="email" value="{{ old('email', auth()->user()->email) }}" placeholder="Email" required>
                @error('email')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>

            <!-- Password -->
            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" placeholder="New Password (optional)">
                @error('password')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>

            <!-- Confirm Password -->
            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="password" name="password_confirmation" placeholder="Confirm New Password">
            </div>

            <button type="submit" class="btn-save">Save Changes</button>
        </form>
    </div>

</body>
</html>
