<?php

namespace App\Http\Controllers;

use App\Models\Hero_section;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

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

        ]);

        // ============  Hero Section ImageIntervention  ============
        // $portfolio_photo_name = $request->name . "_" . date('Y-m-d') . "." . $request->file('category_photo')->getClientOriginalExtension();
        // $img = Image::make($request->file('category_photo'))->resize(437, 475);
        // $img->save(base_path('public/uploads/hero_section_portfolio_photo/' . $portfolio_photo_name));

        $hero_content = Hero_section::create($request->except('_token')+[
            'portfolio_photo' => 'NULL',
            'created_by' => Auth::user()->name,
        ]);


        // Hero_section::insert([
        //     'name' => $request-> name,
        //     'designation' => $request-> designation,
        //     'short_job_description' => $request-> short_job_description,
        //     'portfolio_photo' => 'NULL',
        //     'facebook_link' => $request-> facebook_link,
        //     'instagram_link' => $request-> instagram_link,
        //     'linkedin_link' => $request-> linkedin_link,
        //     'github_link' => $request-> github_link,
        //     'status' => $request-> status,
        //     'created_by' => Auth::user()->name ,
        // ]);


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
            'portfolio_photo' => 'NULL',
            'facebook_link' => $request-> facebook_link,
            'instagram_link' => $request-> instagram_link,
            'linkedin_link' => $request-> linkedin_link,
            'github_link' => $request-> github_link,
            'status' => $request-> status,
            'created_by' => Auth::user()->name ,
        ]);
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
