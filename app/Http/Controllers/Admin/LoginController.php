<?php
/**
 * Mr.Phan
 */
namespace App\Http\Controllers\Admin;

use App\Validators\LoginValidator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;
use Prettus\Validator\Exceptions\ValidatorException;


class LoginController extends Controller
{
	protected $validator;

	public function __construct (LoginValidator $loginValidator)
	{
		$this->validator = $loginValidator;
	}

	public function login ()
	{
		if (Auth::guard('admin')->check()) {
			return redirect()->route('admin.dashboard');
		}

		return view('login');
	}

	public function postLogin (Request $request)
	{
		try {
			$loginParams = $request->only(['email', 'password']);
			$this->validator->with($loginParams)->passesOrFail(LoginValidator::RULE_LOGIN);

			$isLogin = Auth::guard('admin')->attempt($loginParams);
			if ($isLogin) {
				return redirect()->route('admin.dashboard');
			}

			return redirect()->back()->withErrors(['error' => 'Email or password wrong. Please enter right information.']);

		} catch (ValidatorException $e) {
			return redirect()->back()->withInput($request->input())->withErrors($e->getMessageBag());
		} catch (\Exception $e) {
			Log::error('Login error : ' . $e->get());

			return redirect()->back()->withErrors(['error' => 'Server error.']);
		}
	}

	/**
	 * Logout Admin
	 * @return Redirect
	 */
	public function logout ()
	{
		Auth::guard('admin')->logout();
		return redirect()->route('admin.login');
	}
}
