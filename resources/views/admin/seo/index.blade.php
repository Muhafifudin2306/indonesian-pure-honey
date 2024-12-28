@extends('layouts.app')

@section('page-name', 'Dashboard Admin | SEO Setting')

@section('content')
    <div class="left-content">
        <h2 class="h3 mb-3 mt-3 page-title">SEO Setting</h2>
    </div>
    <div class="bg-white p-3">
        <form id="blogForm" enctype="multipart/form-data">
            <div class="form-group mb-3">
                <label for="name">SEO Title</label>
                <input type="text" placeholder="Input your title" id="title" class="form-control" name="title"
                    required value="{{ $seoTitle }}">
            </div>
            <div class="form-group mb-3">
                <label for="content">SEO Description</label>
                <textarea name="description" class="form-control" rows="7" placeholder="Input your description" required>{{ $seoDescription }}</textarea>
            </div>
            <div class="form-group mb-3">
                <label for="content">SEO Keyword</label>
                <textarea name="keyword" class="form-control" rows="7" placeholder="Input your keyword" required>{{ $seoKeyword }}</textarea>
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

                fetch(`seo/add`, {
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
