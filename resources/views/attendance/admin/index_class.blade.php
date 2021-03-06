@extends('layouts.admin')
@section('content')

<div class="container-fluid w-75">
    <div class="d-sm-flex justify-content-between align-items-center mb-4">
        <h3 class="text-dark mb-0">Class teacher list</h3>
        @include('components.previous')
    </div>
    <div class="card shadow">
        <div class="card-body">
            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                <table class="table table-bordered table-sm dataTable my-0" id="dataTable">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th class="text-left">Class/Grade</th>
                            <th class="text-left">Section/Division</th>
                            <th class="text-left">Stream</th>
                            <th class="text-left">Class Teacher</th>
                            <th class="text-left">Number of Student</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($teachers as $teacher)
                            
                        <tr>
                            <td class="text-center">{{ $i++ }}</td>
                            <td>{{ $teacher->classDivision->grade->numeric }}</td>
                            <td>{{ $teacher->classDivision->division->name }}</td>
                            @if ($teacher->classDivision->stream != null)
                            <td class="text-capitalize">
                                {{ $teacher->classDivision->stream->name }}
                            </td>
                            @else
                                <td>NA</td>
                            @endif
                            <td>{{ $teacher->name }}</td>
                            <td>{{ $teacher->totalStudents()}}</td>
                            <td class="text-center">
                                @if ($teacher->totalStudents() !=0)  
                                <a href="{{ route('index.class.attendance', $teacher->id) }}">
                                    <button class="btn btn-sm btn-primary" type="submit">
                                        view
                                    </button>
                                </a>
                                @else
                                NA
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <td><strong>#</strong></td>
                            <td><strong>Class/Grade&nbsp;</strong></td>
                            <td><strong>Section/Division</strong></td>
                            <td><strong>Stream</strong></td>
                            <td class="text-left"><strong class="text-center">Class Teacher</strong></td>
                            <td class="text-left"><strong>Number of Student</strong></td>
                            <td class="text-center"><strong>Actions</strong></td>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <div class="row justify-content-end">
                <div class="col-md-6">
                    <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers">
                        {{ $teachers->links() }}
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection