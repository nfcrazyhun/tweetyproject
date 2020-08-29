<?php

namespace App\Http\Controllers;

use App\User;
use http\Env\Request;
use Illuminate\Validation\Rule;

class ProfileController extends Controller
{

    public function show(User $user)
    {
        //$user = User::where(['username'=>$user])->first();

        return view('profiles.show', [
            'user' => $user,
            'tweets' => $user
                ->tweets()
                ->withLikes()
                ->paginate(50),
        ]);
    }

    public function edit(User $user)
    {
        return view('profiles.edit', compact('user'));
    }

    public function update(User $user)
    {
        $attributes = request()->validate([
            'username' => [
                'string',
                'required',
                'max:255',
                'alpha_dash',
                Rule::unique('users')->ignore($user),
            ],
            'name' => ['string', 'required', 'max:255'],
            'avatar' => ['image'],
            'banner' => ['image'],
            'description' => ['string'],
            'email' => [
                'string',
                'required',
                'email',
                'max:255',
                Rule::unique('users')->ignore($user),
            ],
            'password' => [
                'nullable',
                'string',
                'min:6',
                'max:255',
                'confirmed',
            ],
        ]);



        if (is_null($attributes['password'])){
            unset($attributes['password']);
        }

        if (request('avatar')) {
            $attributes['avatar'] = request('avatar')->store('avatars');
        }

        if (request('banner')) {
            $attributes['banner'] = request('banner')->store('banners');
        }

        $user->update($attributes);

        return redirect($user->path());
    }
}
