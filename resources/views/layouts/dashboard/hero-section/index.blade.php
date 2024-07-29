@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Content List</h5>

                    </div>
                    <div class="card-body table-border-style">
                        <div class="table-responsive">
                            <table class="table table-styling table-info">
                                <thead>
                                    <tr class="text-center">
                                        <th>#SN</th>
                                        <th>Name</th>
                                        <th>Designation</th>
                                        <th>Job Title</th>
                                        <th>short job description</th>
                                        <th>portfolio photo</th>
                                        <th>facebook link</th>
                                        <th>instagram link</th>
                                        <th>linkedin link</th>
                                        <th>github link</th>
                                        <th>status</th>
                                        <th>Created By</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($hero_section as $hero_content)
                                        <tr>
                                            <td class="text-wrap w-10"> {{ $loop->iteration }} </td>
                                            <td class="text-wrap w-10"> {{ $hero_content->name }} </td>
                                            <td class="text-wrap w-10"> {{ $hero_content->designation }} </td>
                                            <td class="text-wrap w-10"> {{ $hero_content->job_title }} </td>
                                            <td class="text-wrap w-10"> {{ $hero_content->short_job_description }} </td>

                                            <td class="text-wrap w-10">
                                                @if ($hero_content->portfolio_photo =! "null")
                                                    <img src="{{ asset('uploads/hero_section_portfolio_photo/' . $hero_content->portfolio_photo) }}" class="img-fluid w-10 h-10" alt="">
                                                @else

                                                @endif

                                            </td>



                                            <td class="text-wrap w-10"> {{ $hero_content->facebook_link }} </td>
                                            <td class="text-wrap w-10"> {{ $hero_content->instagram_link }} </td>
                                            <td class="text-wrap w-10"> {{ $hero_content->linkedin_link }} </td>
                                            <td class="text-wrap w-10"> {{ $hero_content->github_link }} </td>
                                            <td class="text-wrap w-10"> {{ $hero_content->status }} </td>
                                            <td class="text-wrap w-10"> {{ $hero_content->created_by }} </td>
                                            <td>
                                                <div class="d-flex">

                                                    <a href="{{ route('hero-section.edit', $hero_content->id) }}"
                                                        class="btn btn-glow-primary btn-primary" data-bs-toggle="tooltip"
                                                        data-bs-original-title="btn btn-glow-primary btn-primary">
                                                        <i class="feather icon-edit"></i>

                                                    </a>

                                                    <form action="{{ route('hero-section.destroy', $hero_content->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button href="#" class="btn btn-glow-danger btn-danger"
                                                            data-bs-toggle="tooltip"
                                                            data-bs-original-title="btn btn-glow-danger btn-danger"
                                                            type="submit">
                                                            <i class="feather icon-trash-2"></i>
                                                        </button>
                                                    </form>

                                                </div>
                                            </td>

                                        </tr>

                                    @empty
                                        <td>
                                            <div class="alert alert-warning" role="alert">
                                                No Contents Found
                                            </div>
                                        </td>
                                    @endforelse

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
