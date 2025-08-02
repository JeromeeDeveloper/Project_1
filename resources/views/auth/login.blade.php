<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.head')
    <title>Admin Login - ALL PRO SALES</title>
</head>
<body>
    <!-- ***** Header Area Start ***** -->
    @include('layouts.header')
    <!-- ***** Header Area End ***** -->

    <!-- ***** Login Area Start ***** -->
    <div class="main-banner" style="min-height: 100vh; display: flex; align-items: center;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8">
                    <div class="login-form" style="background: rgba(255, 255, 255, 0.95); padding: 40px; border-radius: 15px; box-shadow: 0 10px 30px rgba(0,0,0,0.1);">
                        <div class="text-center mb-4">
                            <h2 style="color: #333; margin-bottom: 10px;">Admin Login</h2>
                            <p style="color: #666;">Access your dashboard to manage content</p>
                        </div>

                        @if ($errors->any())
                            <div class="alert alert-danger" style="background: #f8d7da; color: #721c24; padding: 15px; border-radius: 5px; margin-bottom: 20px; border: 1px solid #f5c6cb;">
                                <ul style="margin: 0; padding-left: 20px;">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="email" style="display: block; margin-bottom: 8px; color: #333; font-weight: 600;">Email Address</label>
                                <input type="email" 
                                       class="form-control" 
                                       id="email" 
                                       name="email" 
                                       value="{{ old('email') }}" 
                                       required 
                                       style="width: 100%; padding: 12px 15px; border: 2px solid #e1e5e9; border-radius: 8px; font-size: 16px; transition: border-color 0.3s ease;">
                            </div>

                            <div class="form-group mb-4">
                                <label for="password" style="display: block; margin-bottom: 8px; color: #333; font-weight: 600;">Password</label>
                                <input type="password" 
                                       class="form-control" 
                                       id="password" 
                                       name="password" 
                                       required 
                                       style="width: 100%; padding: 12px 15px; border: 2px solid #e1e5e9; border-radius: 8px; font-size: 16px; transition: border-color 0.3s ease;">
                            </div>

                            <div class="form-group mb-4">
                                <button type="submit" 
                                        class="btn btn-primary" 
                                        style="width: 100%; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); border: none; padding: 15px; border-radius: 8px; color: white; font-size: 16px; font-weight: 600; cursor: pointer; transition: transform 0.2s ease;">
                                    Sign In
                                </button>
                            </div>
                        </form>

                        <div class="text-center">
                            <a href="{{ route('home') }}" style="color: #667eea; text-decoration: none; font-weight: 500;">
                                ← Back to Home
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Login Area End ***** -->

    <!-- ***** Footer Area Start ***** -->
    @include('layouts.footer')
    <!-- ***** Footer Area End ***** -->

    <style>
        .form-control:focus {
            border-color: #667eea;
            outline: none;
            box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.25);
        }
        
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(102, 126, 234, 0.4);
        }
    </style>
</body>
</html> 