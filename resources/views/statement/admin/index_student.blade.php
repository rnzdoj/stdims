@extends('layouts.admin')
@section('content')

<div class="container-fluid w-75">
    <div class="d-sm-flex justify-content-between align-items-center mb-4" placeholder="search by name">
        <h3 class="text-dark mb-0">Statement&nbsp;</h3>
        @include('components.previous')
    </div>
    <div class="card shadow">
        <div class="card-body">
            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                <table class="table table-sm table-bordered dataTable my-0" id="dataTable">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th class="text-left">Student Number</th>
                            <th class="text-left">Name</th>
                            <th class="text-center">#Statement</th>
                            <th class="text-left">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($students as $student)
                        <tr>
                            <td class="text-center">{{ $i++ }}</td>
                            <td>{{ $student->code }}</td>
                            <td>{{ $student->name }}</td>
                            <td class="text-center">{{$student->statementCount() }}</td>
                            <td class="text-dark">
                                @if ($student->statementCount() > 0)    
                                <a href="{{ route('index.student.statement.index', $student->id) }}">
                                    <button class="btn btn-sm btn-primary">
                                        view
                                    </button>
                                </a>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <td class="text-center"><strong>#</strong></td>
                            <td><strong>Student Number</strong></td>
                            <td><strong>Name</strong></td>
                            <td class="text-center"><strong>#Statement</strong></td>
                            <td class="text-left"><strong>Actions</strong></td>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <div class="row justify-content-end">
                <div class="col-md-6">
                    <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers">
                        <ul class="pagination">
                             {{-- {{ $students->links() }} --}}
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection