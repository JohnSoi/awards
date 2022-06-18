<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function showLoginForm()
    {
        return view('auth.register');
    }

    protected function validateLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|string|exists:users,email',
            'password' => 'required|string',
        ], [
            'email.exists' => 'Неверная электронная почта'
        ]);

        if (!$this->attemptLogin($request)) {
            throw ValidationException::withMessages([
                'password' => ['Неверный пароль'],
            ]);
        }
    }

    protected function sendLoginResponse(Request $request)
    {
        $request->session()->regenerate();

        $this->clearLoginAttempts($request);

        if (in_array($request->user()->group_id, [3, 4])) {
            return $request->ajax() ? [
                'redirect' => route('evaluation.index')
            ] : redirect()->intended(route('evaluation.index'));
        }

        if ($request->user()->group_id == 5) {
            return $request->ajax() ? [
                'redirect' => route('evaluation.projects')
            ] : redirect()->intended(route('evaluation.projects'));
        }

        return $request->ajax()
            ? ['success' => true]
            : redirect()->intended($this->redirectPath());
    }
}
