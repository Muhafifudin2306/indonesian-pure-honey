@extends('layouts.app')

@section('page-name', 'Dashboard Admin | Video Setting')

@section('content')
    <div class="left-content">
        <h2 class="h3 mb-3 mt-3 page-title">Video Setting</h2>
    </div>
    <div class="bg-white p-3">
        <form id="blogForm" enctype="multipart/form-data">
            <div class="form-group mb-3">
                <label for="cover">Video Cover</label>
                <img class="w-100 my-3" src="{{ Storage::url($videoCover) }}" alt="" style="object-fit: contain"">
                <input type="file" id="cover" class="form-control" name="cover" value="{{ $videoCover }}">
            </div>
            <div class="form-group mb-3">
                <label for="link">Video</label>
                <div class="video-link my-3">
                    <a href="{{ Storage::url($videoLink) }}" target="_blank">Watch Video</a>
                </div>
                <input type="file" id="link" class="form-control" name="link">
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const blogForm = document.getElementById('blogForm');
            blogForm.addEventListener('submit', function(event) {
                event.preventDefault();
                const formData = new FormData(blogForm);

                fetch(`video/add`, {
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        body: formData
                    })
                    .then(response => response.json())
                    .then(data => {
                        Notiflix.Notify.success("Data berhasil disimpan!", {
                            timeout: 10000
                        });
                        location.reload();
                    })
                    .catch(error => {
                        Notiflix.Notify.failure('Error:', error);
                    });
            });
        });
    </script>
@endsection
