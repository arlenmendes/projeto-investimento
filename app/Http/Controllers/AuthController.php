<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\UserRepository;
use App\Validators\UserValidator;
use Illuminate\Support\Facades\Auth;
use \Exception;

class AuthController extends Controller
{

    /**
     * @var UserRepository
     */
    protected $repository;

    /**
     * @var UserValidator
     */
    protected $validator;
    public function __construct(UserRepository $repository, UserValidator $validator)
    {
        $this->repository = $repository;
        $this->validator  = $validator;
    }

    public function login(){
        return view('user.login');
    }

    public function auth(Request $request) {
//        dd($request->all());
        $data = [
            'email' => $request->get('name'),
            'password' => $request->get('password'),
        ];
        try {
            Auth::attempt($data, false);
            return redirect()->route('user.dashboard');
        } catch (Exception $e) {
            return $e->getMessage();
        }

        echo "auth method";
    }
}
