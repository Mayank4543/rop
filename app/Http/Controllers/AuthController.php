<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function register()
    {
        return view('auth/register');
    }
    public function registerSave(Request $request)
    {
        Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed'
        ])->validate();
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'mobile_no' => $request->mobile_no,
            'address' => $request->address,
            'status' => $request->status,
            'level' => 'Admin'
        ]);
        return redirect()->route('login');
    }
    public function login()
    {
        return view('auth/login');
    }
    public function loginAction(Request $request)
    {
        Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required'
        ])->validate();
        if (!Auth::attempt($request->only('email', 'password'), $request->boolean('remember'))) {
            throw ValidationException::withMessages([
                'email' => trans('auth.failed')
            ]);
        }
        $request->session()->regenerate();
        return redirect()->route('dashboard');
    }
    public function logout(Request $request)
    {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        return redirect('/');
    }
    public function profile()
    {
        return view('profile');
    }
    public function index()
    {

        $Admin = User::orderBy('created_at', 'DESC')->get();

        return view('admin.index', compact('Admin'));

    }
    public function create(Request $request)
    {


        return view('admin.create
        ');
    }
    public function store(Request $request)
    {
        Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',

        ])->validate();
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'mobile_no' => $request->mobile_no,
            'address' => $request->address,
            'status' => $request->status,
            'level' => 'Admin'
        ]);
        // return redirect()->route('login');

        return redirect()->route('admin')->with('success', 'Admin added successfully');
    }
    public function edit(string $id)
    {
        $Admin = User::findOrFail($id);

        return view('admin.edit', compact('Admin'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $Admin = User::findOrFail($id);

        $Admin->update($request->all());

        return redirect()->route('admin')->with('success', 'Admin updated successfully');
    }
    public function destroy(string $id)
    {
        $Admin = User::findOrFail($id);


        $Admin->delete();

        return redirect()->route('admin')->with('success', 'Admin deleted successfully');
    }

}