@extends('adminlte::page')

@section('title', 'Job Details')

@section('content')

    <div class="container mt-2 p-0">
        <div class="card bg-primary text-black">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="d-flex align-items-center">
                        <!-- Company Logo -->
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAgVBMVEX/////uQEBpO9/ugDyUCL//v8AoO////3/tQB4twD/7sHzTiL///z72tDk8MmN0vb+6rjK6vvB3YvY6rT3rZryRQvA6Pu24/rf7sEBpe76//8AoOz/+//518n4qJP67ejp9dzvPAD5+ejZ8Prr+fj89uIAnO6F0vP86bG/5f7++fDYoUMTAAACL0lEQVR4nO3cy05bMRiFUUNx3IApUEgLh/u1tO//gPUhFZ1WYqsKaH1ibHnZThjlL0WSJEmSJEmSJEmS/rHWWq+B1ovVXucVU9XaA8KLt6/xulYZ0N6CC7YaWKRcXp1kurqufT74m6+pblrguHq5ul1lur0cq/VSj5epTgOPdLyrk9VOoL2dvdX+eBHj73j5KdPytATukJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkPD9Ccss3Av0R1g3U5hpQ4XzK01c4Whjhbnf478KY7/Hj7zSdr2f6qIPYK93X1LdlczIgcQqZT1D5OUOE4NEXop8zQzhNKVGkUxjS33cYmq90hOH/7JS7NTn5UpsfktJDP4o48RrbEd1fBAz21rvbXyoA6tMmSOf1xr7GZ/q4Im1xHdpCw4FupiJdXr7pv5uLnGH9f57qoc63199PAz1/Bi5w37wtAh0fr54Olq/rMPPqXYT/zCGcLEd6Oxs+/xVuJXp4wu3CP+rcERISEhISEhISEhISEhISEhISEhISEhISEhISEhISEhISEhISEhISEhISEhISEhISEhISEhISEj47oSLTRW2H5Hf44+ejvo8MKI8536PPwVmKtR+//NbqIdae2/lcTfVr564w6nE5sm0Os0DTkKDNkpoPs049si0lfk59TZeVW60SZvHbCT2JkmSJEmSJEmSJEkfpN90CIpO9TYYXgAAAABJRU5ErkJggg==" alt="Company Logo" class="rounded-circle me-5" style="width: 50px; height: 50px; object-fit:contain;">
                        <!-- Job Title and Company -->
                        <div class="p-3">
                            <h5 class="card-title">Software Engineer</h5>
                            <p class="card-text">Microsoft</p>
                        </div>
                    </div>
                    <i class="fas fa-bookmark bookmark"></i>
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
