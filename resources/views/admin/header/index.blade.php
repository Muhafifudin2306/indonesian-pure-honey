@extends('layouts.app')

@section('page-name', 'Dashboard Admin | Header Setting')

@section('content')
    <div class="left-content">
        <h2 class="h3 mb-3 mt-3 page-title">Header Setting</h2>
    </div>

    <div class="row">
        <div class="col-lg-4">
            <div class="bg-white p-3">
                <div class="preview-image mb-3">
                    <p class="fw-bold">Preview logo</p>
                    <img src="{{ Storage::url($headerLogo) }}" class="w-100 p-3" alt="">
                </div>
                <form class="update-form" data-action="{{ url('/header/add') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="name">Ganti Logo Web</label>
                        <input type="file" id="logo" class="form-control" name="logo" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="bg-white p-3">
                <div class="preview-image mb-3">
                    <p class="fw-bold">Preview Background</p>
                    <img src="{{ Storage::url($headerBackground) }}" class="w-100 p-3" alt="">
                </div>

                <form class="update-form" data-action="{{ url('/header/add') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="name">Ganti Background Web</label>
                        <input type="file" id="background" class="form-control" name="background" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const updateForms = document.querySelectorAll('.update-form');

            updateForms.forEach(form => {
                form.addEventListener('submit', function(event) {
                    event.preventDefault();

                    const formData = new FormData(form);

                    fetch(form.getAttribute('data-action'), {
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
        });
    </script>
@endsection
