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
<a href="{{ url('/job-details') }}" class="text-decoration-none text-black">
    <div class="container mt-2 p-0">
        <div class="card bg-primary text-black">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="d-flex align-items-center">
                        <!-- Company Logo -->
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAgVBMVEX/////uQEBpO9/ugDyUCL//v8AoO////3/tQB4twD/7sHzTiL///z72tDk8MmN0vb+6rjK6vvB3YvY6rT3rZryRQvA6Pu24/rf7sEBpe76//8AoOz/+//518n4qJP67ejp9dzvPAD5+ejZ8Prr+fj89uIAnO6F0vP86bG/5f7++fDYoUMTAAACL0lEQVR4nO3cy05bMRiFUUNx3IApUEgLh/u1tO//gPUhFZ1WYqsKaH1ibHnZThjlL0WSJEmSJEmSJEmS/rHWWq+B1ovVXucVU9XaA8KLt6/xulYZ0N6CC7YaWKRcXp1kurqufT74m6+pblrguHq5ul1lur0cq/VSj5epTgOPdLyrk9VOoL2dvdX+eBHj73j5KdPytATukJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkPD9Ccss3Av0R1g3U5hpQ4XzK01c4Whjhbnf478KY7/Hj7zSdr2f6qIPYK93X1LdlczIgcQqZT1D5OUOE4NEXop8zQzhNKVGkUxjS33cYmq90hOH/7JS7NTn5UpsfktJDP4o48RrbEd1fBAz21rvbXyoA6tMmSOf1xr7GZ/q4Im1xHdpCw4FupiJdXr7pv5uLnGH9f57qoc63199PAz1/Bi5w37wtAh0fr54Olq/rMPPqXYT/zCGcLEd6Oxs+/xVuJXp4wu3CP+rcERISEhISEhISEhISEhISEhISEhISEhISEhISEhISEhISEhISEhISEhISEhISEhISEhISEj47oSLTRW2H5Hf44+ejvo8MKI8536PPwVmKtR+//NbqIdae2/lcTfVr564w6nE5sm0Os0DTkKDNkpoPs049si0lfk59TZeVW60SZvHbCT2JkmSJEmSJEmSJEkfpN90CIpO9TYYXgAAAABJRU5ErkJggg==" alt="Company Logo" class="rounded-circle me-5" style="width: 50px; height: 50px; object-fit:contain;">
                        <!-- Job Title and Company -->
                        <div class="p-3">
                            <h5 class="card-title">Software Engineer</h5>
                            <p class="card-text">Microsoft</p>
                        </div>
                    </div>
                    <i class="fas fa-bookmark bookmark"></i>
                </div>
                <div class="ml-2 ">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque luctus eros lorem, sit amet pharetra lorem accumsan quis</p>
                </div>
                <div class="mt-3 p-1">
                    <span class="badge bg-secondary text-white p-2">Full Time</span>
                    <span class="badge bg-secondary text-white p-2">Senior Level</span>
                </div>
                <div class="d-flex justify-content-between mt-4">
                    <p>New York</p>
                    <p>Posted: 20 hours ago</p>
                </div>
            </div>
        </div>
    </div>
</a>

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
