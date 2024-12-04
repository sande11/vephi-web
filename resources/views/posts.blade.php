@extends('adminlte::page')

@section('title', 'Posts')

@section('content_header')
<h1>Posts</h1>
@stop

@section('content')
<div class="row">
    <div class="col-md-12">
        <!-- Box to hold the content -->
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h3 class="card-title mb-0">Posts</h3>
                <button class="btn btn-primary ml-auto" data-toggle="modal" data-target="#createPostModal">New Post</button>
            </div>
            <div class="card-body">
                <!-- Content goes here -->
                <table class="table">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Date</th>
                            <th>Post</th>
                            <th>Actions</th> <!-- New column for actions -->
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                        <tr>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->date }}</td>
                            <td>{{ $post->post }}</td>
                            <td>
                                <!-- Update and Delete Buttons -->
                                <button
                                    class="btn btn-success btn-sm"
                                    data-toggle="modal"
                                    data-target="#updatePostModal"
                                    data-id="{{ $post->id }}"
                                    data-title="{{ $post->title }}"
                                    data-date="{{ $post->date }}"
                                    data-post="{{ $post->post }}">
                                    Update
                                </button>

                                <form action="{{ route('posts.delete', $post->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>

                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                <!-- Add New Post Button -->

            </div>
        </div>


        <!-- Modal -->
        <div class="modal fade" id="createPostModal" tabindex="-1" aria-labelledby="createPostModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="{{ route('posts.store') }}" method="POST">
                        @csrf
                        <div class="modal-header">
                            <h5 class="modal-title" id="createPostModalLabel">Create New Post</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" id="title" name="title" required>
                            </div>
                            <div class="form-group">
                                <label for="date">Date</label>
                                <input type="date" class="form-control" id="date" name="date" required>
                            </div>
                            <div class="form-group">
                                <label for="post">Post</label>
                                <textarea class="form-control" id="post" name="post" rows="4" required></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save Post</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="modal fade" id="updatePostModal" tabindex="-1" aria-labelledby="updatePostModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form id="updatePostForm" method="POST" action="">
                        @csrf
                        @method('PUT')
                        <!-- Form fields -->
                        <div class="modal-header">
                            <h5 class="modal-title" id="updatePostModalLabel">Update Post</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="update-title">Title</label>
                                <input type="text" class="form-control" id="update-title" name="title" required>
                            </div>
                            <div class="form-group">
                                <label for="update-date">Date</label>
                                <input type="date" class="form-control" id="update-date" name="date" required>
                            </div>
                            <div class="form-group">
                                <label for="update-post">Post</label>
                                <textarea class="form-control" id="update-post" name="post" rows="4" required></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Update Post</button>
                        </div>
                    </form>


                </div>
            </div>
        </div>

    </div>
</div>
<script>
    $('#updatePostModal').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget); // Button that triggered the modal
        var id = button.data('id'); // Extract post ID from data attributes
        var title = button.data('title'); // Extract post title
        var date = button.data('date'); // Extract post date
        var post = button.data('post'); // Extract post content

        var modal = $(this);
        // Populate form fields with data
        modal.find('#update-title').val(title);
        modal.find('#update-date').val(date);
        modal.find('#update-post').val(post);

        // Set the form action dynamically
        var actionUrl = "{{ url('/posts') }}/" + id;
        modal.find('#updatePostForm').attr('action', actionUrl);
    });
</script>



@stop
