<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\User;
use Dflydev\DotAccessData\Data;
use Illuminate\Http\Request;
use App\Http\Requests\StoreUserRequest;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Str;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Factory|View
     */
    public function index()
    {
        $users = User::latest()->paginate(5);

        return view('admin.users.index', compact('users'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreUserRequest $request
     * @return array
     */
    public function store(StoreUserRequest $request)
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $this->route('user'),
            'password' => 'nullable|min:6|confirmed',
        ];
    }


    /**
     * Display the specified resource.
     *
     * @param User $User
     * @return void
     */
    public function show(User $User)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param User $user
     * @return Factory|View
     */
    public function edit(User $user)
    {
        return view('admin.users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param User $user
     * @return RedirectResponse
     */

    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'nullable|email|unique:users,email,' . $user->id,
            'password' => 'nullable|min:6|confirmed',
            'password_confirmation' => 'nullable',
        ]);

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => empty($request->password) ? $user->password : bcrypt($request->password),
        ]);

        return redirect()->back()->with('success', 'User updated successfully');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param User $User
     * @return RedirectResponse
     */
    public function destroy(User $User)
    {
        $User->delete();

        return redirect()->route('users.index')
            ->with('success', 'User deleted successfully');
    }

    public function updateRole(Request $request, User $user)
    {
        $request->validate([
            'role' => 'required|in:1,0', // Assuming the role is passed as '1' (admin) or '0' (user)
        ]);

        // Update the is_admin value based on the selected role
        $user->is_admin = $request->input('role');
        $user->save();

        return redirect()->route('users.index')
            ->with('success', 'User role updated successfully');
    }

}
