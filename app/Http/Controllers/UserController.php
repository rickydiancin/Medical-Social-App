<?php
namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
	public function getHome()
	{
		return view('admin/index');
	}
		public function postSignUp(Request $request)
		{
			//VALIDATE
			$this->validate($request, [
				'email' => 'required|email|unique:users',
				'name' => 'required|max:120',
				'password' => 'required|min:4|confirmed',
				'password_confirmation' => 'required|min:4'

			]);

			$email = $request['email'];
			$name = $request['name'];
			$password = bcrypt($request['password']);

			$user = new User();
			$user->email = $email;
			$user->name = $name;
			$user->password = $password;

			$user->save();

			Auth::login($user);

			return redirect()->route('home');
		}

		public function postSignIn(Request $request)
		{
			$this->validate($request, [
				'email' => 'required',
				'password' => 'required'
			]);

			if (Auth::attempt(['email' => $request['email'], 'password' => $request['password']]))
			{
				return redirect()->route('home');
			}
			return redirect()->back();
		}
}
?>
