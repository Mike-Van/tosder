<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Province;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'image' => 'max:10240',
            'firstName' => 'required|string|max:255',
            'lastName' => 'required|string|max:255',
            'about' => 'string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'username' => 'required|string|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'role' => 'required|string',
            'province_id' => 'required|integer'
        ]);
    }

    public function showRegistrationForm()
    {
        $provinces = Province::all();
        return view('auth.register', ['provinces' => $provinces]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */

    protected function create(array $data)
    {
        $imgPath = Storage::putFile('public/photos/users', $data['image']);
        $imgPath = 'photos/users/' . basename(Storage::putFile('public/photos/users', $data['image']));

        return User::create([
            'imgPath' => $imgPath,
            'firstName' => $data['firstName'],
            'lastName' => $data['lastName'],
            'about' => $data['about'],
            'email' => $data['email'],
            'username' => $data['username'],
            'password' => Hash::make($data['password']),
            'role' => $data['role'],
            'province_id' => $data['province_id'],
        ]);
    }
}
