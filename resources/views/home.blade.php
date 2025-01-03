@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<div class="d-flex justify-content-between align-items-center">
    <h1>Admin Dashboard</h1>
    <!-- <a href="" class="btn btn-primary">New Post</a> -->
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#newPostModal">
    New Post
</button>
<!-- Modal -->
<div class="modal fade" id="newPostModal" tabindex="-1" role="dialog" aria-labelledby="newPostModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newPostModalLabel">New Job Post</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('job-post.store') }}" id="jobPostForm">
                    @csrf
                    <div id="step1">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="company_name">Company Name</label>
                                <input type="text" name="company_name" class="form-control" id="company_name" placeholder="Enter company name" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="company_logo">Company Logo (URL)</label>
                                <input type="text" name="company_logo" class="form-control" id="company_logo" placeholder="Enter logo URL">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="position">Position</label>
                                <input type="text" name="position" class="form-control" id="position" placeholder="Enter position" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="location">Location</label>
                                <input type="text" name="location" class="form-control" id="location" placeholder="Enter location" required>
                            </div>
                        </div>
                    </div>
                    <div id="step2" style="display: none;">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="posted_on">Posted On</label>
                                <input type="date" name="posted_on" class="form-control" id="posted_on" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="closing_date">Closing Date</label>
                                <input type="date" name="closing_date" class="form-control" id="closing_date" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="job_type">Job Type</label>
                                <select name="job_type" class="form-control" id="job_type" required>
                                    <option value="">Select Job Type</option>
                                    <option value="Internship">Internship</option>
                                    <option value="Part Time">Part Time</option>
                                    <option value="Full Time">Full Time</option>
                                    <option value="Contract">Contract</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="level">Level</label>
                                <select name="level" class="form-control" id="level" required>
                                    <option value="">Select Level</option>
                                    <option value="Low Level">Low Level</option>
                                    <option value="Mid Level">Mid Level</option>
                                    <option value="Senior">Senior Level</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div id="step3" style="display: none;">
                        <div class="form-group">
                            <label for="about_company">About Company</label>
                            <textarea name="about_company" class="form-control" id="about_company" rows="3" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="about_position">About Position</label>
                            <textarea name="about_position" class="form-control" id="about_position" rows="3" required></textarea>
                        </div>
                    </div>
                    <div id="step4" style="display: none;">
                        <div class="form-group">
                            <label for="responsibilities">Responsibilities</label>
                            <textarea name="responsibilities" class="form-control" id="responsibilities" rows="5" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="qualifications">Qualifications</label>
                            <textarea name="qualifications" class="form-control" id="qualifications" rows="5" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="application">Application Instructions</label>
                            <textarea name="application" class="form-control" id="application" rows="3" required></textarea>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" onclick="showStep(1)" id="backButton" style="display: none;">Back</button>
                <button type="button" class="btn btn-primary" onclick="showStep(2)" id="nextButton1">Next</button>
                <button type="button" class="btn btn-primary" onclick="showStep(3)" id="nextButton2" style="display: none;">Next</button>
                <button type="button" class="btn btn-primary" onclick="showStep(4)" id="nextButton3" style="display: none;">Next</button>
                <button type="submit" class="btn btn-primary" id="submitButton" style="display: none;">Submit</button>
            </div>
            </form>
        </div>
    </div>
</div>

@if (session('success'))
    <!-- Modal -->
<div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content text-center py-4">
            <h5 class="modal-title" id="successModalLabel"></h5>
            <div class="modal-body">
                <p class="m-0">{{ session('success') }}</p>
            </div>
        </div>
    </div>
</div>

<!-- Auto-trigger and hide the modal -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const modal = new bootstrap.Modal(document.getElementById('successModal'));
        modal.show();

        // Automatically hide the modal after 3 seconds
        setTimeout(() => {
            modal.hide();
        }, 3000);
    });
</script>

@endif
<script>
    function showStep(step) {
        for (let i = 1; i <= 4; i++) {
            document.getElementById('step' + i).style.display = 'none';
        }
        document.getElementById('step' + step).style.display = 'block';

        document.getElementById('backButton').style.display = step > 1 ? 'inline-block' : 'none';
        document.getElementById('nextButton1').style.display = step === 1 ? 'inline-block' : 'none';
        document.getElementById('nextButton2').style.display = step === 2 ? 'inline-block' : 'none';
        document.getElementById('nextButton3').style.display = step === 3 ? 'inline-block' : 'none';
        document.getElementById('submitButton').style.display = step === 4 ? 'inline-block' : 'none';
    }
</script>
@stop


@section('content_header')
    <h1>Job Listings</h1>
@stop

@section('content')
@foreach ($jobposts as $jobposts)
<a href="{{ url('/job-details/' . $jobposts->id) }}" class="text-decoration-none text-black">
    <div class="container mt-2 p-0">
        <div class="card bg-primary text-black">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="d-flex align-items-center">
                        <!-- Company Logo -->
                        <img src="{{ $jobposts->company_logo }}" alt="Company Logo" class="rounded-circle me-5" style="width: 50px; height: 50px; object-fit:contain;">
                        <!-- Job Title and Company -->
                        <div class="p-3">
                            <h5 class="card-title"> {{$jobposts->position}} </h5>
                            <p class="card-text"> {{$jobposts->company_name}} </p>
                        </div>
                    </div>
                    <i class="fas fa-bookmark bookmark"></i>
                </div>
                <div class="ml-2 ">
                    <p> {{ Str::limit($jobposts->about_position, 100)}} </p>
                </div>
                <div class="mt-3 p-1">
                    <span class="badge bg-secondary text-white p-2"> {{$jobposts->job_type}} </span>
                    <span class="badge bg-secondary text-white p-2">{{$jobposts->level}}</span>
                </div>
                <div class="d-flex justify-content-between mt-4">
                    <p> {{$jobposts->location}}</p>
                    <p>Posted: {{$jobposts->created_at->diffForHumans()}} </p>
                </div>
            </div>
        </div>
    </div>
</a>
@endforeach
@stop

@section('css')
@push('css')
    <style>
        .bookmark {
            font-size: 18px;
            cursor: pointer;
        }
    </style>
@endpush
    {{-- <link rel="stylesheet" href="/css/style.css"> --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
<script>
   
</script>
@stop
