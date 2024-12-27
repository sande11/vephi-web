@extends('adminlte::page')

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
            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAgVBMVEX/////uQEBpO9/ugDyUCL//v8AoO////3/tQB4twD/7sHzTiL///z72tDk8MmN0vb+6rjK6vvB3YvY6rT3rZryRQvA6Pu24/rf7sEBpe76//8AoOz/+//518n4qJP67ejp9dzvPAD5+ejZ8Prr+fj89uIAnO6F0vP86bG/5f7++fDYoUMTAAACL0lEQVR4nO3cy05bMRiFUUNx3IApUEgLh/u1tO//gPUhFZ1WYqsKaH1ibHnZThjlL0WSJEmSJEmSJEmS/rHWWq+B1ovVXucVU9XaA8KLt6/xulYZ0N6CC7YaWKRcXp1kurqufT74m6+pblrguHq5ul1lur0cq/VSj5epTgOPdLyrk9VOoL2dvdX+eBHj73j5KdPytATukJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkPD9Ccss3Av0R1g3U5hpQ4XzK01c4Whjhbnf478KY7/Hj7zSdr2f6qIPYK93X1LdlczIgcQqZT1D5OUOE4NEXop8zQzhNKVGkUxjS33cYmq90hOH/7JS7NTn5UpsfktJDP4o48RrbEd1fBAz21rvbXyoA6tMmSOf1xr7GZ/q4Im1xHdpCw4FupiJdXr7pv5uLnGH9f57qoc63199PAz1/Bi5w37wtAh0fr54Olq/rMPPqXYT/zCGcLEd6Oxs+/xVuJXp4wu3CP+rcERISEhISEhISEhISEhISEhISEhISEhISEhISEhISEhISEhISEhISEhISEhISEhISEj47oSLTRW2H5Hf44+ejvo8MKI8536PPwVmKtR+//NbqIdae2/lcTfVr564w6nE5sm0Os0DTkKDNkpoPs049si0lfk59TZeVW60SZvHbCT2JkmSJEmSJEmSJEkfpN90CIpO9TYYXgAAAABJRU5ErkJggg==" alt="Company Logo" class="rounded-circle me-3" style="width: 50px; height: 50px; object-fit:contain;">
            <!-- Job Title and Company -->
            <div class="p-2">
            <h5 class="card-title mb-0">Software Engineer</h5>
            <p class="card-text mb-0">Microsoft</p>      
            </div>
            </div>
        </div>
        
        
        <div class="card-body">
        <h5>About Company</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
        <h5>About Job</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
        <h5>Requirements</h5>
        <ul>
            <li>Bachelor's degree in Computer Science or related field</li>
            <li>5+ years of experience in software development</li>
            <li>Proficiency in PHP, JavaScript, and MySQL</li>
        </ul>
        <h5>Responsibilities</h5>
        <ul>
            <li>Develop and maintain web applications</li>
            <li>Collaborate with cross-functional teams</li>
            <li>Write clean, scalable code</li>
            <li>Write clean, scalable code</li>
            <li>Write clean, scalable code</li>
            <li>Write clean, scalable code</li>
            <li>Write clean, scalable code</li>
            <li>Write clean, scalable code</li>
            <li>Write clean, scalable code</li>
            <li>Write clean, scalable code</li>
            <li>Write clean, scalable code</li>
            <li>Write clean, scalable code</li>
            <li>Write clean, scalable code</li>
            <li>Write clean, scalable code</li><li>Write clean, scalable code</li>
            <li>Write clean, scalable code</li>
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
