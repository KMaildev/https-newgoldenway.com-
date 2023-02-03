<?php

namespace App\Http\Controllers;

use App\Http\Requests\accountUpdate;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{
    public function accountShow()
    {
        $user = auth()->user();
        return view('account.show', compact('user'));
    }

    public function accountEdit()
    {
        $user = auth()->user();
        return view('account.edit', compact('user'));
    }

    public function accountUpdate(accountUpdate $request)
    {
        $user = auth()->user();
        $id = auth()->user()->id;
        $employee = User::findOrFail($id);
        $employee->name = $request->name;
        $employee->phone = $request->phone;
        $employee->birthday = $request->birthday;
        $employee->gender = $request->gender;
        $employee->address = $request->address;
        $employee->password = $request->password ? Hash::make($request->password) : $employee->password;
        $employee->update();
        return redirect()->back()->with('success', 'Employee is successfully updated.');
    }
}
