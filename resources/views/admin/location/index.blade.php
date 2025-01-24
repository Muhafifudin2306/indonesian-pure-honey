@extends('layouts.app')

@section('page-name', 'Dashboard Admin | Location Setting')

@section('content')
    <div class="left-content">
        <h2 class="h3 mb-3 mt-3 page-title">Location Setting</h2>
    </div>
    <form id="blogForm" enctype="multipart/form-data">
        <div class="bg-white p-3">
            <div class="row mb-3">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="form-group mb-3">
                        <label for="name">Preview Map</label>
                        <iframe style="width: 100%; height: 400px;" src="{{ $locationEmbed }}" frameborder="0"
                            allowfullscreen=""></iframe>
                    </div>
                </div>
                <div class="col-lg-6 ml-auto" data-aos="fade-up" data-aos-delay="100">
                    <div class="form-group mb-3">
                        <label for="gmaps_embed">Map Embed</label>
                        <textarea name="gmaps_embed" class="form-control" id="gmaps_embed" rows="5" placeholder="Input your link gmaps"
                            required>{{ $locationEmbed }}</textarea>
                    </div>
                    <div class="form-group mb-3">
                        <label for="name">Title</label>
                        <textarea name="title" class="form-control" id="title" rows="3" placeholder="Input your location title"
                            required>{{ $locationTitle }}</textarea>
                    </div>
                    <div class="form-group mb-3">
                        <label for="gmaps_link">Map Link</label>
                        <textarea name="gmaps_link" class="form-control" id="gmaps_link" rows="3" placeholder="Input your gmaps link"
                            required>{{ $locationLink }}</textarea>
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

                fetch(`location/add`, {
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
