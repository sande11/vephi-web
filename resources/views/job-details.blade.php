<!-- @extends('adminlte::page') -->

@section('title', 'Job Details')

@section('content')

<div class="d-flex justify-content-between align-items-center">
<a href="javascript:history.back()" class="btn btn-secondary mr-2">
    <i class="fas fa-arrow-left"></i>
    </a><h1>Job Details</h1>
  
    <!-- <a href="" class="btn btn-primary">New Post</a> -->
<!-- Button trigger modal -->
<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#newPostModal">
    Delete
</button>
<!-- Modal -->
<div class="modal fade" id="newPostModal" tabindex="-1" role="dialog" aria-labelledby="newPostModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="newPostModalLabel">Confirm Delete</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
        Are you sure you want to delete this post?
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <form action="" method="POST">
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
        </div>
    </div>
    </div>
</div>
</div>
    <div class="container mt-2 p-0">
    <div class="card" style="height: calc(100vh - 150px); overflow-y: auto;">
        <div class="card-header bg-primary text-white">
            
             <div class="d-flex ">
            <!-- Company Logo -->
            <img src="" alt="Company Logo" class="rounded-circle me-3" style="width: 50px; height: 50px; object-fit:contain;">
            <!-- Job Title and Company -->
            <div class="p-2">
            <h5 class="card-title mb-0"> {{$jobposts->position}} </h5>
            <p class="card-text mb-0"> {{$jobposts->company_name}} </p>      
            </div>
            </div>
        </div>
        
        
        <div class="card-body">
        <h5>About Company</h5>
        <p> {{$jobposts->about_company}} </p>
        <h5>About Job</h5>
        <p> {{$jobposts->about_position}} </p>
        <h5>Requirements</h5>
        <ul>
        @foreach ($jobpost->requirements as $requirement)
                    <li>{{ $requirement }}</li>
                @endforeach
        </ul>
        <h5>Responsibilities</h5>
        <ul>
        @foreach ($jobpost->responsibilities as $responsibility)
                    <li>{{ $responsibility }}</li>
                @endforeach
        </ul>
        </div>
    </div>
    </div>
</div>
@stop

@section('css')
@push('css')
    <style>
    .content-wrapper {
        overflow: hidden;
        height: calc(100vh - 56px);
    }
    .bookmark {
        font-size: 18px;
        cursor: pointer;
    }
    </style>
@endpush
    {{-- <link rel="stylesheet" href="/css/style.css"> --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop
