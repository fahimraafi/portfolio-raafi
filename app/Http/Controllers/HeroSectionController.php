<?php

namespace App\Http\Controllers;

use App\Models\Hero_section;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;
use Intervention\Image\ImageManager;
// use Intervention\Image\Drivers\Imagick\Driver;
use Intervention\Image\Drivers\Gd\Driver;


class HeroSectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {


        return view('layouts.dashboard.hero-section.index', [
            "users" => User::all(),
            "hero_section" => Hero_section::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::all();
        return view('layouts.dashboard.hero-section.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'designation' => 'required',
            'job_title' => 'required',
        ]);

        $hero_section = Hero_section::create($request->except('_token')+[
            'portfolio_photo' => 'null',
            'created_by' => Auth::user()->name,
        ]);

        // ============  Hero Section ImageIntervention  ============

        if ($request->hasFile('portfolio_photo')) {
            $manager = new ImageManager(Driver::class);
            $photo_name = $request->name . "_" . date('Y-m-d') . "." . $request->file('portfolio_photo')->getClientOriginalExtension();
            $image = $manager->read($request->file('portfolio_photo'));

            $destination = base_path('public/uploads/hero_section_portfolio_photo/');
            $image->toJpeg()->save($destination . '/' . $photo_name);

            Hero_section::find($hero_section->id)->update([
                'portfolio_photo' => $photo_name,
            ]);

        }


        session()->flash('success', 'Contents Inserted Suucessfully');
        return back();

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Hero_Section $hero_section)
    {
        return view('layouts.dashboard.hero-section.edit', compact('hero_section'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Hero_Section $hero_section)
    {
        Hero_section::find($hero_section->id)->update([
            'name' => $request-> name,
            'designation' => $request-> designation,
            'job_title' => $request-> designation,
            'short_job_description' => $request-> short_job_description,
            'facebook_link' => $request-> facebook_link,
            'instagram_link' => $request-> instagram_link,
            'linkedin_link' => $request-> linkedin_link,
            'github_link' => $request-> github_link,
            'status' => $request-> status,
            'created_by' => Auth::user()->name ,
        ]);

        // if ($request->hasFile('portfolio_photo')) {
        //     unlink(base_path('public/uploads/hero_section_portfolio_photo/' . Hero_section::find($hero_section->id)->portfolio_photo));

        // };


        return redirect('/hero-section');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Hero_Section $hero_section)
    {
        Hero_section::find($hero_section->id)->delete();
        return back();
    }
}
