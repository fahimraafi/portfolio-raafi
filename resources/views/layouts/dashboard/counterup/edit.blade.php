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
                <li class="breadcrumb-item"><a href="{{ route('counterup.index') }}">View Contents</a>
                </li>
            </ul>
        </div>

        <div class="col-md-8 m-auto">
            <div class="card">
                <div class="card-header">
                    <h5>Counter Up Section >> Edit Information </h5>
                </div>
                <div class="card-body">

                    @if (session('updated'))
                        <div class="alert alert-success mb-2">
                            {{ session('updated') }}
                        </div>
                    @endif
                    <form action="{{ route('counterup.update', $counterup->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label class="form-label">Name:</label>
                            <input type="text" class="form-control" placeholder="Enter full name"
                                data-has-listeners="true" name="name">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Experience:</label>
                            <input class="form-control" type="number" id="demo-number-input" data-has-listeners="true"
                                name="experience">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Number of Projects Completed: </label>
                            <input class="form-control" type="number" id="demo-number-input" data-has-listeners="true"
                                name="number_of_projects">
                        </div>

                        <div class="form-group">
                            <label class="form-label">Number of Clients: </label>
                            <input class="form-control" type="number" id="demo-number-input" data-has-listeners="true"
                                name="number_of_clients">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Referrals & Retention Rate: </label>
                            <input class="form-control" type="text" id="demo-number-input" data-has-listeners="true"
                                name="retention_rate">
                        </div>
                        <div class="form-group">
                            <label class="form-label"> Status: </label>
                            <div class="col-lg-3">
                                <select class="form-control input-group search-form" name='status'>
                                    <option>Active</option>
                                    <option>Inactive</option>
                                </select>
                            </div>

                            <button type="submit" class="btn btn-glow-success btn-success mt-4" data-bs-toggle="tooltip"
                                data-bs-original-title="btn btn-glow-success btn-success">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
