@extends('layouts.sidebar')
@section('content')
    <div class="pxp-dashboard-content-details">
        <h1>Settings</h1>
        <p class="pxp-text-light">Manage your application's setting</p>
        <form action="/settings/job-category" method="POST">
            @csrf
            <fieldset>
                <legend>Job Category</legend>
                <div class="mb-3 pxp-candidate-dashboard-skills ">
                    <ul class="list-unstyled">
                        @foreach ($categories as $category)
                            <li>{{ $category->name }}<span class="fa fa-trash-o"></span></li>
                        @endforeach
                    </ul>
                </div>
                <div class="mb-3">
                    <label for="category" class="form-label">job Category</label>
                    <input type="text" id="category" name="name" class="form-control" placeholder="Enter Category">
                </div>
                <button type="submit" class="btn btn-primary">Add</button>
            </fieldset>
        </form>
        <form action="/settings/employment-type" method="POST">
            @csrf
            <fieldset>
                <legend>Type of Employment</legend>
                <div class="mb-3 pxp-candidate-dashboard-skills ">
                    <ul class="list-unstyled">
                        @foreach ($employmentTypes as $employment_type)
                            <li>{{ $employment_type->name }}<span class="fa fa-trash-o"></span></li>
                        @endforeach
                    </ul>
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Type of Employment</label>
                    <input type="text" id="name" name="name" class="form-control"
                        placeholder="Type of employment">
                </div>
                <button type="submit" class="btn btn-primary">Add</button>
            </fieldset>
        </form>
        <form action="/settings/experience-level" method="POST">
            @csrf
            <fieldset>
                <legend>Experience Level</legend>
                <div class="mb-3 pxp-candidate-dashboard-skills ">
                    <ul class="list-unstyled">
                        @foreach ($experienceLevels as $experience_level)
                            <li>{{ $experience_level->name }}<span class="fa fa-trash-o"></span></li>
                        @endforeach
                    </ul>
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Experience Level</label>
                    <input type="text" id="name" name="name" class="form-control" placeholder="Experience Level">
                </div>
                <button type="submit" class="btn btn-primary">Add</button>
            </fieldset>
        </form>
        <form action="/settings/salary-range" method="POST">
            @csrf
            <fieldset>
                <legend>Salary Range</legend>
                <div class="mb-3 pxp-candidate-dashboard-skills ">
                    <ul class="list-unstyled">
                        @foreach ($salaryRanges as $salary_range)
                            <li>{{ $salary_range->starting_salary }} - {{ $salary_range->ending_salary }}<span
                                    class="fa fa-trash-o"></span></li>
                        @endforeach
                    </ul>
                </div>
                <div class="mb-3">
                    <label for="lower_salary" class="form-label">Lower Salary</label>
                    <input type="number" id="lower_salary" name="starting_salary" class="form-control"
                        placeholder="Lower Salary">
                </div>
                <div class="mb-3">
                    <label for="upper_salary" class="form-label">Upper Salary</label>
                    <input type="number" id="upper_salary" name="ending_salary" class="form-control"
                        placeholder="Upper Salary">
                </div>
                <button type="submit" class="btn btn-primary">Add</button>
            </fieldset>
        </form>
    </div>

    <footer>
        <div class="pxp-footer-copyright pxp-text-light">© 2023 Optimal Outsourcing. All Right Reserved.</div>
    </footer>
    </div>
@endsection
