@extends('layouts.dashboard')

@section('content')
    <div class="row align-items-center">
        <div class="col-md-12">
            <div class="page-header-title">
                <h5>Hero Section</h5>
            </div>
            <ul class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="index.html">
                        <i class="feather icon-folder"></i>
                    </a>
                </li>
                <li class="breadcrumb-item"><a href="{{ route('hero-section.index') }}">View Contents</a>
                </li>
            </ul>
        </div>

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5>Hero Section >> Insert Information </h5>
                </div>
                <div class="card-body">

                    @if (session('success'))
                        <div class="alert alert-success mb-2">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ route('hero-section.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label class="col-lg-2 col-form-label">Name:</label>
                            <div class="col-lg-3">
                                <input type="text" class="form-control" placeholder="Enter full name"
                                    data-has-listeners="true" name="name">
                            </div>
                            @error('name')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror

                            <label class="col-lg-2 col-form-label">Designation:</label>
                            <div class="col-lg-3">
                                <input type="text" class="form-control" placeholder="Enter your Job Title"
                                    data-has-listeners="true" name="designation">
                            </div>
                            @error('designation')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror


                        </div>

                        <div class="form-group row">

                            <label class="col-lg-2 col-form-label">Job Title:</label>
                            <div class="col-lg-3">
                                <input type="text" class="form-control" placeholder="Enter your Job Title"
                                    data-has-listeners="true" name="job_title">
                            </div>

                            <label class="col-lg-2 col-form-label">Job Title 02:</label>
                            <div class="col-lg-3">
                                <input type="text" class="form-control" placeholder="Enter your Job Title"
                                    data-has-listeners="true" name="job_title_02">
                            </div>




                        </div>



                        <div class="form-group row">
                            <label class="col-lg-2 col-form-label">Short Job Description:</label>
                            <div class="col-lg-3">
                                <div class="input-group search-form">

                                    <textarea name="short_job_description" class="form-control" placeholder="Short JD" data-has-listeners="true"
                                        cols="10" rows="3"></textarea>
                                </div>
                            </div>

                            <label class="col-lg-2 col-form-label">Portfolio Photo:</label>
                            <div class="col-lg-3">
                                <div class="input-group search-form">
                                    <input type="file" class="form-control" data-has-listeners="true" name="portfolio_photo">
                                </div>
                            </div>

                        </div>

                        <div class="form-group row">
                            <label class="col-lg-2 col-form-label">Facebook Profile Link:</label>
                            <div class="col-lg-3">
                                <div class="input-group search-form">
                                    <input type="url" class="form-control" placeholder="FB Link"
                                        data-has-listeners="true" name="facebook_link">

                                </div>
                            </div>

                            <label class="col-lg-2 col-form-label">Instagram Profile Link:</label>
                            <div class="col-lg-3">
                                <div class="input-group search-form">
                                    <input type="url" class="form-control" placeholder="Enter your Profile URL"
                                        data-has-listeners="true" name="instagram_link">
                                </div>
                            </div>

                        </div>



                        <div class="form-group row">
                            <label class="col-lg-2 col-form-label">Linkedin Profile Link:</label>
                            <div class="col-lg-2">
                                <div class="input-group search-form">
                                    <input type="url" class="form-control" placeholder="FB Link"
                                        data-has-listeners="true" name="linkedin_link">

                                </div>
                            </div>

                            <label class="col-lg-2 col-form-label">Github Profile Link:</label>
                            <div class="col-lg-2">
                                <div class="input-group search-form">
                                    <input type="url" class="form-control" placeholder="Enter your Profile URL"
                                        data-has-listeners="true" name="github_link">
                                </div>
                            </div>

                            <label class="col-lg-2 col-form-label">Portfolio Status:</label>
                            <div class="col-lg-2">
                                <select class="form-control input-group search-form" name='status'>
                                    <option>Active</option>
                                    <option>Inactive</option>
                                </select>

                            </div>
                        </div>



                            <button type="submit" class="btn btn-glow-success btn-success mt-5" data-bs-toggle="tooltip"
                                data-bs-original-title="btn btn-glow-success btn-success">Save</button>




                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
