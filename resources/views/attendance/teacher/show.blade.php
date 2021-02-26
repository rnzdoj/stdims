@extends('layouts.teacher')
@section('content')
   
<div class="container-fluid">
    <div class="card shadow">
        <div class="card-header d-flex flex justify-content-between">
            <div class="card-text">
            <p class="pb-0 mb-0 text-dark">Student Name : Dorji</p>   
            </div>
            @include('components.previous') 
        </div>
        <div class="card-body">
            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                <table class="table dataTable my-0" id="dataTable">
                    <thead>
                        <tr>
                            <th class="text-left">Serial Number</th>
                            <th class="text-left">Date</th>
                            <th class="text-left">Day</th>
                            <th class="text-center">Status</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>2376821</td>
                            <td>20/07/2021</td>
                            <td></td>
                            <td style="padding: 0;">
                                <form>
                                    <div class="form-group align-content-center" style="margin-bottom: 0;"><input type="checkbox" style="margin: 0px;margin-right: 0;margin-left: 46%;margin-top: 19px;" checked=""></div>
                                </form>
                            </td>
                            <td class="text-center"><button class="btn btn-sm text-uppercase text-dark" type="submit"><a class="text-dark" href="#">&nbsp;save&nbsp;<i class="icon ion-arrow-up-a"></i></a></button></td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td><strong>Serial Number</strong></td>
                            <td><strong>Date</strong></td>
                            <td class="text-left"><strong>Day</strong></td>
                            <td class="text-center"><strong>Status</strong></td>
                            <td class="text-center"><strong>Actions</strong></td>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <div class="row justify-content-end">
                <div class="col-md-6">
                    <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers">
                        <ul class="pagination">
                            <li class="page-item disabled"><a class="page-link" href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
       
@endsection