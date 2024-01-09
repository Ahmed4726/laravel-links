<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Banner;
use Auth;

class UserController extends Controller
{
    public function show(User $user, Banner $banner)
    {
        $backgroundColor = $user->background_color;
        $textColor = $user->text_color;
        $banners = $user->banners;
        $user->load('links');
        $username = $user->username; 
        $bio = $user->bio;
        $profile_link = $user->profile_link;
        return view('users.show', [
            'banners'=>$banners,
            'banner'=>$banner,
            'user' => $user,
            'username' => $username,
            'bio'=> $bio,
            'profile_link'=> $profile_link,
            'backgroundColor' => $backgroundColor,
            'textColor' => $textColor
        ]);
    }
    public function edit()
    {
        return view('users.edit', [
            'user' => Auth::user()
        ]);
    }
    public function update(Request $request)
    {
        $request->validate([
            'background_color' => 'required|size:7|starts_with:#',
            'text_color' => 'required|size:7|starts_with:#',
        ]);
        Auth::user()->update($request->only(['background_color', 'text_color','bio','profile_link']));

        return redirect()->back()
            ->with(['success' => 'Changes saved successfully!']);
    }

}
