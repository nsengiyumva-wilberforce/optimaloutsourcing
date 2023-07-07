@extends('layouts.sidebar')
@section('content')
            <div class="pxp-dashboard-content-details">
                <h1>Applications</h1>
                <p class="pxp-text-light">Detailed list of your job applications.</p>

                <div class="mt-4 mt-lg-5">
                    <div class="row justify-content-between align-content-center">
                        <div class="col-auto order-2 order-sm-1">
                            <div class="pxp-candidate-dashboard-jobs-bulk-actions mb-3">
                                <select class="form-select">
                                    <option>Bulk actions</option>
                                    <option>Delete</option>
                                </select>
                                <button class="btn ms-2">Apply</button>
                            </div>
                        </div>
                        <div class="col-auto order-1 order-sm-2">
                            <div class="pxp-candidate-dashboard-jobs-search mb-3">
                                <div class="pxp-candidate-dashboard-jobs-search-results me-3">16 job applications</div>
                                <div class="pxp-candidate-dashboard-jobs-search-search-form">
                                    <div class="input-group">
                                        <span class="input-group-text"><span class="fa fa-search"></span></span>
                                        <input type="text" class="form-control" placeholder="Search jobs...">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover align-middle">
                            <thead>
                                <tr>
                                    <th class="pxp-is-checkbox" style="width: 1%;"><input type="checkbox" class="form-check-input"></th>
                                    <th style="width: 25%;">Job</th>
                                    <th style="width: 15%;">Company</th>
                                    <th style="width: 20%;">Category</th>
                                    <th style="width: 12%;">Type</th>
                                    <th>Date<span class="fa fa-angle-up ms-3"></span></th>
                                    <th>&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($applications as $application)
                                <tr>
                                    <td><input type="checkbox" class="form-check-input"></td>
                                    <td>
                                        <a href="#">
                                            <div class="pxp-candidate-dashboard-job-title">{{$application->job->job_title}}</div>
                                            <div class="pxp-candidate-dashboard-job-location"><span class="fa fa-globe me-1"></span>{{$application->job->location}}</div>
                                        </a>
                                    </td>
                                    <td><a href="#" class="pxp-candidate-dashboard-job-company">{{$application->job->user->first_name.' '.$application->job->user->last_name}}</a></td>
                                    <td><div class="pxp-candidate-dashboard-job-category">{{$application->job->category}}</div></td>
                                    <td><div class="pxp-candidate-dashboard-job-type">{{$application->job->employment_type}}</div></td>
                                    <td><div class="pxp-candidate-dashboard-job-date mt-1">{{$application->created_at}}</div></td>
                                    <td>
                                        <div class="pxp-dashboard-table-options">
                                            <ul class="list-unstyled">
                                                <li><button title="Preview"><span class="fa fa-eye"></span></button></li>
                                                <li><button title="Delete"><span class="fa fa-trash-o"></span></button></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <div class="row mt-4 mt-lg-5 justify-content-between align-items-center">
                            <div class="col-auto">
                                <nav class="mt-3 mt-sm-0" aria-label="Applications list pagination">
                                    <ul class="pagination pxp-pagination">
                                        <li class="page-item active" aria-current="page">
                                            <span class="page-link">1</span>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="col-auto">
                                <a href="#" class="btn rounded-pill pxp-section-cta mt-3 mt-sm-0">Show me more<span class="fa fa-angle-right"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection
