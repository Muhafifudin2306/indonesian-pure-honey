@extends('layouts.app')

@section('page-name', 'Dashboard Admin | About Setting')

@section('content')
    <div class="left-content">
        <h2 class="h3 mb-3 mt-3 page-title">About Setting</h2>
    </div>
    <form id="blogForm" enctype="multipart/form-data">
        <div class="bg-white p-3">
            <div class="row mb-3">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <img src="{{ Storage::url($aboutImage) }}" alt="Image" class="w-100 mb-3">
                    <div class="form-group mb-3">
                        <label for="name">Change Image</label>
                        <input type="file" id="image" class="form-control" name="image">
                    </div>
                </div>
                <div class="col-lg-6 ml-auto" data-aos="fade-up" data-aos-delay="100">
                    <div class="form-group mb-3">
                        <label for="name">Title</label>
                        <input type="text" placeholder="Input your title" id="title" class="form-control"
                            name="title" required value="{{ $aboutTitle }}">
                    </div>
                    <div class="form-group mb-3">
                        <label for="content">Description</label>
                        <textarea name="description" class="form-control" rows="7" placeholder="Input your description" required>{{ $aboutDescription }}</textarea>
                    </div>
                </div>
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

                fetch(`about/add`, {
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
