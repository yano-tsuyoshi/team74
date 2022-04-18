<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;
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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
        $this->middleware('guest:admin');
    }

    /**
     * 管理者ログイン用
     */
    protected function adminValidator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:admins'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    public function showAdminRegisterForm()
    {
        return view('auth.register', ['authgroup' => 'admin']);
    }

    public function registerAdmin(Request $request)
    {
        $this->adminValidator($request->all())->validate();

        event(new Registered($user = $this->createAdmin($request->all())));

        Auth::guard('admin')->login($user);

        if ($response = $this->registeredAdmin($request, $user)) {
            return $response;
        }

        return $request->wantsJson()
                    ? new JsonResponse([], 201)
                    : redirect(route('admin-home'));
    }

    protected function createAdmin(array $data)
    {
        return Admin::create([
            'name' => $data['name'],
            'password' => Hash::make($data['password']),
        ]);
    }

    protected function registeredAdmin(Request $request, $user)
    {
        return view(register.blade.php);
    }

    protected function registerValidator(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|between:0,15',
            'password' => 'required',
        ]);
        
        $admin = new admin();
        $admin->name = $request->name;
        $admin->password = $request->password;
        $admin->save();


        return redirect('/register/home');
    }

    //管理者画面へ
    public function adminHome()
    {
        return view('register_home');
    }
}
