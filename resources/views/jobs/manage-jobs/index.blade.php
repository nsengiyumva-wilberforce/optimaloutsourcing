        @extends('layouts.sidebar')
        @section('content')
            <div class="pxp-dashboard-content-details">
                <h1>Manage Jobs</h1>
                <p class="pxp-text-light">Detailed list with all your job offers.</p>

                <div class="mt-4 mt-lg-5">
                    <div class="row justify-content-between align-content-center">
                        <div class="col-auto order-2 order-sm-1">
                            <div class="pxp-company-dashboard-jobs-bulk-actions mb-3">
                                <select class="form-select">
                                    <option>Bulk actions</option>
                                    <option>Edit</option>
                                    <option>Delete</option>
                                </select>
                                <button class="btn ms-2">Apply</button>
                            </div>
                        </div>
                        <div class="col-auto order-1 order-sm-2">
                            <div class="pxp-company-dashboard-jobs-search mb-3">
                                <div class="pxp-company-dashboard-jobs-search-results me-3">{{ $number_of_jobs }} jobs</div>
                                <div class="pxp-company-dashboard-jobs-search-search-form">
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
                                    <th class="pxp-is-checkbox" style="width: 1%;"><input type="checkbox"
                                            class="form-check-input"></th>
                                    <th style="width: 25%;">Job</th>
                                    <th style="width: 20%;">Category</th>
                                    <th style="width: 12%;">Type</th>
                                    <th style="width: 15%;">Applications</th>
                                    <th>Date<span class="fa fa-angle-up ms-3"></span></th>
                                    <th>&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($availableJobs as $job)
                                    <tr>
                                        <td><input type="checkbox" class="form-check-input"></td>
                                        <td>
                                            <a href="#">
                                                <div class="pxp-company-dashboard-job-title">{{ $job->job_title }}</div>
                                                <div class="pxp-company-dashboard-job-location"><span
                                                        class="fa fa-globe me-1"></span>{{ $job->location }}</div>
                                            </a>
                                        </td>
                                        <td>
                                            <div class="pxp-company-dashboard-job-category">{{ $job->category }}</div>
                                        </td>
                                        <td>
                                            <div class="pxp-company-dashboard-job-type">{{ $job->experience }}</div>
                                        </td>
                                        <td><a href="#"
                                                class="pxp-company-dashboard-job-applications">{{ $job->application_count }}
                                                Candidates</a></td>
                                        <td>
                                            <div class="pxp-company-dashboard-job-status">
                                                @if ($job->published)
                                                    <span class="badge rounded-pill bg-success">Published</span>
                                                @else
                                                    <span class="badge rounded-pill bg-secondary">Draft</span>
                                                @endif

                                            </div>
                                            <div class="pxp-company-dashboard-job-date mt-1">{{ $job->created_at }}</div>
                                        </td>
                                        <td>
                                            <div class="pxp-dashboard-table-options">
                                                <ul class="list-unstyled">
                                                    <li><button title="Edit"><span class="fa fa-pencil"></span></button>
                                                    </li>
                                                    <li><button title="Preview"><span class="fa fa-eye"></span></button>
                                                    </li>
                                                    <li><button title="Delete"><span class="fa fa-trash-o"></span></button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        {{ $availableJobs->links() }}
                    </div>
                </div>
            </div>
        @endsection
