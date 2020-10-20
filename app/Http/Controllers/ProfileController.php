<?php

namespace App\Http\Controllers;

use App\User;
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
                'required',
                'string',
                'max:255',
                'alpha_dash',
                Rule::unique('users')->ignore($user),
            ],
            'name' => [
                'required',
                'string',
                'max:255',
            ],
            'avatar' => ['image'],
            'banner' => ['image'],
            'description' => ['string'],
            'email' => [
                'required',
                'string',
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
            $avatar = request('avatar');
            $filename = implode('.',[ $user->username, $avatar->extension() ]); // => username.ext

            $imageURL = $avatar->storeAs('avatars',$filename,'public'); //store into 'avatars' folder on 'public' disc
            $attributes['avatar'] = $imageURL;
        }

        if (request('banner')) {
            $banner = request('banner');
            $filename = implode('.',[ $user->username, $banner->extension() ]);

            $imageURL = $banner->storeAs('banners',$filename,'public');
            $attributes['banner'] = $imageURL;
        }

        $user->update($attributes);

        return redirect($user->path());
    }
}
