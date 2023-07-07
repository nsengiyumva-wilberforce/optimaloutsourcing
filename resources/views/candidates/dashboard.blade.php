@extends('layouts.sidebar')
@section('content')
<div class="pxp-dashboard-content-details">
                <h1>Candidates</h1>
                <p class="pxp-text-light">Detailed list of candidates that applied for your job offers.</p>

                <div class="mt-4 mt-lg-5">
                    <div class="row justify-content-between align-content-center">
                        <div class="col-auto order-2 order-sm-1">
                            <div class="pxp-company-dashboard-jobs-bulk-actions mb-3">
                                <select class="form-select">
                                    <option>Bulk actions</option>
                                    <option>Approve</option>
                                    <option>Reject</option>
                                    <option>Delete</option>
                                </select>
                                <button class="btn ms-2">Apply</button>
                            </div>
                        </div>
                        <div class="col-auto order-1 order-sm-2">
                            <div class="pxp-company-dashboard-jobs-search mb-3">
                                <div class="pxp-company-dashboard-jobs-search-results me-3">{{$number_of_candidates}} candidates</div>
                                <div class="pxp-company-dashboard-jobs-search-search-form">
                                    <div class="input-group">
                                        <span class="input-group-text"><span class="fa fa-search"></span></span>
                                        <input type="text" class="form-control" placeholder="Search candidates...">
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
                                    <th colspan="2" style="width: 25%;">Name</th>
                                    <th style="width: 20%;">Applied for</th>
                                    <th style="width: 15%;">Status</th>
                                    <th>Date<span class="fa fa-angle-up ms-3"></span></th>
                                    <th>&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($candidates as $candidate)
                                <tr>
                                    <td><input type="checkbox" class="form-check-input"></td>
                                    <td style="width: 3%;">
                                        <div class="pxp-company-dashboard-candidate-avatar pxp-cover" style="background-image: url(images/ph-small.jpg);"></div>
                                    </td>
                                    <td>
                                        <a href="#">
                                            <div class="pxp-company-dashboard-job-title">{{$candidate->job->user->first_name.' '.$candidate->job->last_name}}</div>
                                            <div class="pxp-company-dashboard-job-location"><span class="fa fa-globe me-1"></span>{{$candidate->user->profile->location??'unknown'}}</div>
                                        </a>
                                    </td>
                                    <td><div class="pxp-company-dashboard-job-category">{{$candidate->job->job_title}}</div></td>
                                    <td><div class="pxp-company-dashboard-job-status"><span class="badge rounded-pill bg-danger">{{$candidate->status}}</span></div></td>
                                    <td>
                                        <div class="pxp-company-dashboard-job-date">{{$candidate->created_at}}</div>
                                    </td>
                                    <td>
                                        <div class="pxp-dashboard-table-options">
                                            <ul class="list-unstyled">
                                                <li><button title="View profile"><span class="fa fa-eye"></span></button></li>
                                                <li><button title="Send message"><span class="fa fa-envelope-o"></span></button></li>
                                                <li><button title="Approve"><span class="fa fa-check"></span></button></li>
                                                <li><button title="Reject"><span class="fa fa-ban"></span></button></li>
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
                                <nav class="mt-3 mt-sm-0" aria-label="Candidates pagination">
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
