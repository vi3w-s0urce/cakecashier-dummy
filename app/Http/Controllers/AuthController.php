<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function indexLogin() {
        $data = [
            'title' => 'Login',
        ];
        return view('pages.auth.login', $data);
    }
    public function indexSignup() {
        $data = [
            'title' => 'Daftar',
        ];
        return view('pages.auth.signup', $data);
    }
    public function login(Request $request) {
        $user = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);
        if(Auth::attempt($user)) {
            $request->session()->regenerate();
            return redirect()->intended('/home');
        } else {
            echo "<script>alert('Username atau Password salah coba lagi!'); window.location.href = '/login'</script>";
        }
    }
    public function signup(Request $request) {
        $validatedData = $request->validate([
            'fullname' => 'required',
            'username' => 'required',
            'password' => 'required'
        ]);
        $validatedData['password'] = Hash::make($validatedData['password']);
        $user = User::create($validatedData);
        return redirect('/login');
    }
    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
