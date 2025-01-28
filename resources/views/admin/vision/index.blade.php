@extends('layouts.app')

@section('page-name', 'Dashboard Admin | Vision Setting')

@section('content')
    <div class="left-content">
        <h2 class="h3 mb-3 mt-3 page-title">Vision Setting</h2>
    </div>
    <form id="blogForm" enctype="multipart/form-data">
        <div class="bg-white p-3">
            <div class="form-group mb-3">
                <label for="content">Vision</label>
                <textarea name="vision" class="form-control" rows="7" placeholder="Input your vision" required>{{ $vision }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </form>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const blogForm = document.getElementById('blogForm');
            blogForm.addEventListener('submit', function(event) {
                event.preventDefault();
                const formData = new FormData(blogForm);

                fetch(`vision/add`, {
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
