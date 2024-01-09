<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Banner;
use Auth;

class BannerController extends Controller
{

   public function create() {
        return view('banners.create');
    }
    public function index()
    {
        $banners = Auth::user()->banners()
            ->get();

        return view('banners.index', [
            'banners' => $banners,
            
        ]);
    }
    public function show(Banner $banner)
    {
    
        $website_link = $banner->website_link;
        $banner_link = $banner->banner_link;
        return view('banners.show', [
            'user' => $user,
            'banner'=>$banner,
            'website_link' => $website_link,
            'banner_link'=> $banner_link
        ]);
    }
    public function store(Request $request)
    {
        $banner = Auth::user()->banners()
            ->create($request->only(['website_link', 'banner_link']));

        if ($banner) {
            return redirect()->route('banners.index')
            ->with(['success' => 'Banner saved successfully!']);
        }

        return redirect()->back();
    }
    public function edit(Banner $banner)
    {
        if ($banner->user_id !== Auth::id()) {
            return abort(404);
        }
        return view('banners.edit', [
            'banner'=>$banner
        ]);
    }

   public function update(Request $request, Banner $banner)
{
    $banner->update($request->only(['website_link', 'banner_link']));

    return redirect()->back()
        ->with(['success' => 'Changes saved successfully!']);
}


}
