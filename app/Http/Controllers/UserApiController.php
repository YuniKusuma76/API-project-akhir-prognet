<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Validator;
use Auth;

class UserApiController extends Controller
{
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'confirm_password' => 'required|same:password'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Ada Kesalahan dalam Input Data',
                'data' => $validator->errors()
            ]);
        } else {
            $input = $request->all();
            $input['password'] = bcrypt($input['password']);
            $user = User::create($input);

            $success['name'] = $user->name;
            $success['email'] = $user->email;

            return response()->json([
                'success' => true,
                'message' => 'Registrasi Sukses Dilakukan',
                'data' => $success
            ]);
        }
    }

    public function login(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $auth = Auth::user();
            $success['token'] = $auth->createToken('auth_token')->plainTextToken;
            $success['name'] = $auth->name;
            $success['email'] = $auth->email;

            return response()->json([
                'success' => true,
                'message' => 'Login Berhasil Dilakukan',
                'data' => $success
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Ada Kesalahan pada Email dan Password',
                'data' => null
            ]);
        }
    }
}
