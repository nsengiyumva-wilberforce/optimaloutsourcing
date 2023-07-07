@extends('layouts.sidebar')
@section('content')

        <div class="pxp-dashboard-content-details">
            <h1>New Job Offer</h1>
            <p class="pxp-text-light">Add a new job to your company's jobs list.</p>

            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif


            <form method="POST" action="{{ route('storeJob') }}">
                @csrf
                <div class="row mt-4 mt-lg-5">
                    <div class="col-xxl-6">
                        <div class="mb-3">
                            <label for="pxp-company-job-title" class="form-label">Job title</label>
                            <input type="text" name="job_title" id="pxp-company-job-title" class="form-control"
                                placeholder="Add title">
                        </div>
                    </div>
                    <div class="col-md-6 col-xxl-3">
                        <label for="pxp-company-job-location" class="form-label">Location</label>
                        <input type="text" name="location" id="pxp-company-job-location" class="form-control"
                            placeholder="E.g. San Francisco, CA">
                    </div>
                    <div class="col-md-6 col-xxl-3">
                        <div class="mb-3">
                            <label for="pxp-company-job-category" class="form-label">Category</label>
                            <select id="pxp-company-job-category" name="category" class="form-select">
                                <option>Select a category</option>
                                <option>Marketing & Communication</option>
                                <option>Software Engineering</option>
                                <option>Project Management</option>
                                <option>Finance</option>
                                <option>Retail</option>
                                <option>Sales</option>
                                <option>Manufacturing</option>
                                <option>IT</option>
                                <option>Business Development</option>
                                <option>Human Resources</option>
                                <option>Customer Service</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="pxp-company-job-description" class="form-label">Job description</label>
                    <textarea class="form-control" name="description" id="pxp-company-job-description"
                        placeholder="Type the description here..."></textarea>
                </div>

                <div class="row">
                    <div class="col-md-6 col-xxl-3">
                        <div class="mb-3">
                            <label for="pxp-company-job-experience" class="form-label">Experience</label>
                            <input type="text" name="experience" id="pxp-company-job-experience"
                                class="form-control" placeholder="E.g. Minimum 3 years">
                        </div>
                    </div>
                    <div class="col-md-6 col-xxl-3">
                        <div class="mb-3">
                            <label for="pxp-company-job-level" class="form-label">Career level</label>
                            <select id="pxp-company-job-level" name="career_level" class="form-select">
                                <option>No Experience</option>
                                <option>Entry-Level</option>
                                <option>Mid-Level</option>
                                <option>Senior-Level</option>
                                <option>Manager / Executive</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 col-xxl-3">
                        <div class="mb-3">
                            <label for="pxp-company-job-type" class="form-label">Employment type</label>
                            <select id="pxp-company-job-type" name="employment_type" class="form-select">
                                <option>Full Time</option>
                                <option>Part Time</option>
                                <option>Remote</option>
                                <option>Internship</option>
                                <option>Contract</option>
                                <option>Training</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 col-xxl-3">
                        <div class="mb-3">
                            <label for="pxp-company-job-salary" class="form-label">Salary range</label>
                            <select id="pxp-company-job-salary" name="salary_range" class="form-select">
                                <option>Select range</option>
                                <option>UGx700 - UGx1000</option>
                                <option>UGx1000 - UGx1200</option>
                                <option>UGx1200 - UGx1400</option>
                                <option>UGx1500 - UGx1800</option>
                                <option>UGx2000 - UGx3000</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="mt-4 mt-lg-5">
                    <button class="btn rounded-pill pxp-section-cta" type="submit" name="published"
                        value="true">Publish Job</button>
                    <button class="btn rounded-pill pxp-section-cta-o ms-3" type="submit" name="published"
                        value="false">Save Draft</button>
                </div>
            </form>
        </div>

        <footer>
            <div class="pxp-footer-copyright pxp-text-light">© 2023 Optimal Outsourcing. All Right Reserved.</div>
        </footer>
    </div>
@endsection
