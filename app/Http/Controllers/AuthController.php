<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    /**
     * Show the login form.
     *
     * @return \Illuminate\View\View
     */
    public function showLoginForm()
    {
        return view('pages.auth.login');
    }
    
    /**
     * Show the register form.
     *
     * @return \Illuminate\View\View
     */
    public function showRegisterForm()
    {
        return view('pages.auth.register');
    }
    
    /**
     * Show the forgot password form.
     *
     * @return \Illuminate\View\View
     */
    public function showForgotPasswordForm()
    {
        return view('pages.auth.forgot-password');
    }

    /**
     * Handle login request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\JsonResponse
     */
    public function login(Request $request)
    {
        // Check if AJAX request
        if ($request->ajax()) {
            return $this->handleAjaxLogin($request);
        }
        
        // Traditional form submission
        return $this->handleTraditionalLogin($request);
    }
    
    /**
     * Handle AJAX login request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    protected function handleAjaxLogin(Request $request)
    {
        // Validate input
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|min:6',
        ], [
            'email.required' => 'Email wajib diisi',
            'email.email' => 'Format email tidak valid',
            'password.required' => 'Password wajib diisi',
            'password.min' => 'Password minimal 6 karakter',
        ]);
        
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Terdapat kesalahan pada form',
                'errors' => $validator->errors()
            ], 422);
        }
        
        // Attempt to login
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $request->filled('remember'))) {
            $request->session()->regenerate();
            
            return response()->json([
                'success' => true,
                'message' => 'Login berhasil! Selamat datang.',
                'redirect' => route('dashboard')
            ]);
        }
        
        // Login failed
        return response()->json([
            'success' => false,
            'message' => 'Email atau password salah'
        ], 401);
    }
    
    /**
     * Handle traditional form login.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    protected function handleTraditionalLogin(Request $request)
    {
        // Validate input
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ], [
            'email.required' => 'Email wajib diisi',
            'email.email' => 'Format email tidak valid',
            'password.required' => 'Password wajib diisi',
            'password.min' => 'Password minimal 6 karakter',
        ]);

        // Attempt to login
        if (Auth::attempt($credentials, $request->filled('remember'))) {
            $request->session()->regenerate();
            
            return redirect()->intended(route('dashboard'))
                ->with('success', 'Selamat datang!');
        }

        // Login failed
        return back()
            ->withErrors([
                'email' => 'Email atau password salah',
            ])
            ->withInput($request->only('email'));
    }

    /**
     * Handle logout request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout(Request $request)
    {
        Auth::logout();
        
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        
        return redirect()->route('login')
            ->with('success', 'Anda telah logout');
    }
    
    /**
     * Handle register request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\JsonResponse
     */
    public function register(Request $request)
    {
        // Check if AJAX request
        if ($request->ajax()) {
            return $this->handleAjaxRegister($request);
        }
        
        // Traditional form submission
        return $this->handleTraditionalRegister($request);
    }
    
    /**
     * Handle AJAX register request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    protected function handleAjaxRegister(Request $request)
    {
        // Validate input
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8|confirmed',
            'terms' => 'accepted',
        ], [
            'name.required' => 'Nama wajib diisi',
            'email.required' => 'Email wajib diisi',
            'email.email' => 'Format email tidak valid',
            'email.unique' => 'Email sudah terdaftar',
            'password.required' => 'Password wajib diisi',
            'password.min' => 'Password minimal 8 karakter',
            'password.confirmed' => 'Konfirmasi password tidak cocok',
            'terms.accepted' => 'Anda harus menyetujui Syarat & Ketentuan',
        ]);
        
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Terdapat kesalahan pada form',
                'errors' => $validator->errors()
            ], 422);
        }
        
        // Create user
        $user = \App\Models\User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        
        if ($user) {
            return response()->json([
                'success' => true,
                'message' => 'Registrasi berhasil! Silakan login.',
                'redirect' => route('login')
            ]);
        }
        
        return response()->json([
            'success' => false,
            'message' => 'Terjadi kesalahan saat membuat akun'
        ], 500);
    }
    
    /**
     * Handle traditional form register.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    protected function handleTraditionalRegister(Request $request)
    {
        // Validate input
        $credentials = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8|confirmed',
            'terms' => 'accepted',
        ], [
            'name.required' => 'Nama wajib diisi',
            'email.required' => 'Email wajib diisi',
            'email.email' => 'Format email tidak valid',
            'email.unique' => 'Email sudah terdaftar',
            'password.required' => 'Password wajib diisi',
            'password.min' => 'Password minimal 8 karakter',
            'password.confirmed' => 'Konfirmasi password tidak cocok',
            'terms.accepted' => 'Anda harus menyetujui Syarat & Ketentuan',
        ]);
        
        // Create user
        $user = \App\Models\User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        
        if ($user) {
            return redirect()->route('login')
                ->with('success', 'Registrasi berhasil! Silakan login.');
        }
        
        return back()
            ->withErrors(['error' => 'Terjadi kesalahan saat membuat akun'])
            ->withInput($request->only('name', 'email'));
    }
    
    /**
     * Handle forgot password request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\JsonResponse
     */
    public function forgotPassword(Request $request)
    {
        // Check if AJAX request
        if ($request->ajax()) {
            return $this->handleAjaxForgotPassword($request);
        }
        
        // Traditional form submission
        return $this->handleTraditionalForgotPassword($request);
    }
    
    /**
     * Handle AJAX forgot password request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    protected function handleAjaxForgotPassword(Request $request)
    {
        // Validate input
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|exists:users,email',
        ], [
            'email.required' => 'Email wajib diisi',
            'email.email' => 'Format email tidak valid',
            'email.exists' => 'Email tidak terdaftar di sistem kami',
        ]);
        
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Terdapat kesalahan pada form',
                'errors' => $validator->errors()
            ], 422);
        }
        
        // TODO: Send password reset email
        // For now, we'll just return success
        // In production, use: Password::sendResetLink($request->only('email'))
        
        return response()->json([
            'success' => true,
            'message' => 'Link reset password telah dikirim ke email Anda'
        ]);
    }
    
    /**
     * Handle traditional form forgot password.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    protected function handleTraditionalForgotPassword(Request $request)
    {
        // Validate input
        $credentials = $request->validate([
            'email' => 'required|email|exists:users,email',
        ], [
            'email.required' => 'Email wajib diisi',
            'email.email' => 'Format email tidak valid',
            'email.exists' => 'Email tidak terdaftar di sistem kami',
        ]);
        
        // TODO: Send password reset email
        // For now, we'll just redirect with success message
        // In production, use: Password::sendResetLink($request->only('email'))
        
        return back()
            ->with('success', 'Link reset password telah dikirim ke email Anda');
    }
}
