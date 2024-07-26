@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5> Counter Up Contents </h5>
                    </div>
                    <div class="card-body table-border-style">
                        <div class="table-responsive">
                            <table class="table text-center">
                                <thead>
                                    <tr class="border-bottom-danger">
                                        <th>#SN</th>
                                        <th>Name</th>
                                        <th>Years of Experience</th>
                                        <th>Number of Completed Projects</th>
                                        <th> Number of Clients Served </th>
                                        <th> Retention Rate </th>
                                        <th> Status </th>
                                        <th> Created By </th>
                                        <th> Action </th>
                                    </tr>
                                </thead>
                                @forelse ($counterups as $counterup)
                                    <tbody>
                                        <tr class="border-bottom-primary">
                                            <td> {{ $loop->iteration }} </td>
                                            <td> {{ $counterup->name }} </td>
                                            <td> {{ $counterup->experience }} </td>
                                            <td> {{ $counterup->number_of_projects }} </td>
                                            <td> {{ $counterup->number_of_clients }} </td>
                                            <td> {{ $counterup->retention_rate }} </td>
                                            <td> {{ $counterup->status }} </td>
                                            <td> {{ $counterup->created_by }} </td>
                                            <td>
                                                <div class="d-flex">

                                                    <a href="{{ route('counterup.edit', $counterup->id) }}" class="btn btn-glow-primary btn-primary"
                                                        data-bs-toggle="tooltip"
                                                        data-bs-original-title="btn btn-glow-primary btn-primary">
                                                        <i class="feather icon-edit"></i>

                                                    </a>

                                                    <form action="{{ route('counterup.destroy', $counterup->id) }}"
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

                                    </tbody>
                                @empty
                                @endforelse
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
