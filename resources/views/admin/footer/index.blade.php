@extends('layouts.app')

@section('page-name', 'Dashboard Admin | Footer Setting')

@section('content')
    <div class="left-content">
        <h2 class="h3 mb-3 mt-3 page-title">Footer Setting</h2>
    </div>
    <form id="blogForm" enctype="multipart/form-data">
        <div class="bg-white p-3">
            <div class="form-group mb-3">
                <label for="company">Nama Perusahaan</label>
                <input name="company" class="form-control" id="company" rows="5" value="{{ $company }}"
                    placeholder="Input your company name" required>
            </div>
            <div class="form-group mb-3">
                <label for="instagram">Instagram</label>
                <textarea name="instagram" class="form-control" id="instagram" rows="3" placeholder="Input your instagram"
                    required>{{ $instagram }}</textarea>
            </div>
            <div class="form-group mb-3">
                <label for="linked_in">Linked In</label>
                <textarea name="linked_in" class="form-control" id="linked_in" rows="3" placeholder="Input your linked In">{{ $linkedIn }}</textarea>
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

                fetch(`footer/add`, {
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
