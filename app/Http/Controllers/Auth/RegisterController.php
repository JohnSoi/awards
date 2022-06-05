<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Classes\UserClass;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    use RegistersUsers;

    protected $redirectTo = RouteServiceProvider::HOME;



    public function __construct()
    {
        $this->middleware('guest');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required',
            'city' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|confirmed',
        ]);
    }

    public function register(Request $request){
        $data = $request->validate([
            'name' => ["required", "string"],
            'city' => ["required", "string"],
            'email' => ["required","email","unique:users,email"],
            'password' => ["required"," min:8" , "confirmed"],
        ]);

        $user = User::create([
           "name" => $data["name"],
           "city" => $data["city"],
           "email" => $data["email"],
           "password" => bcrypt($data["password"]),
        ]);
        if ($user){
            auth("web")->login($user);
        }
        return redirect(route("index"));
    }

//    public function register(Request $request)
//    {
//        $this->validator($request->all())->validate();
//
//        event(new Registered($user = $this->create($request->all())));
//
//        $this->guard()->login($user);
//
//        return $request->ajax()
//            ? ['success' => true]
//            : redirect($this->redirectPath());
//    }

    protected function create(array $data)
    {
        $data['password'] = Hash::make($data['password']);

        // Имя Отчество и фамилия
        $name = UserClass::getName($data['name']);
        $data['name'] = trim($name['name'] . ' ' . $name['father_name']);
        $data['surname'] = $name['surname'];

        return User::create($data);
    }

    protected function showRegistrationForm()
    {
        return view('auth.register');
    }
}
