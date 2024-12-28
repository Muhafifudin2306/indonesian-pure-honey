@extends('layouts.app')

@section('page-name', 'Dashboard Admin | Contact Setting')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <div class="left-content">
            <h2 class="h3 mb-2 mt-4 page-title"> Contact Setting</h2>
        </div>
        <div class="right-content">
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#basicModal"> <i class="bx bx-plus"></i>
                Add</button>
        </div>
    </div> <!-- /.col-12 -->
    <div class="row">
        @foreach ($contact as $item)
            <div class="col-lg-4 col-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                            </div>
                            <div class="dropdown">
                                <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                                    <a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal"
                                        data-bs-target="#basicModal-{{ $item->id }}">Edit</a>
                                    <a class="dropdown-item contact-delete" href="javascript:void(0);"
                                        data-card-id="{{ $item->id }}">Delete</a>
                                </div>
                            </div>
                        </div>

                        <div class="image-contact mt-0 mt-md-3 me-3 me-md-0">
                            <img src="{{ Storage::url($item->image) }}" height="400" alt="Image" class="w-100 rounded"
                                style="object-fit: cover">
                        </div>
                        <div class="desc-contact mt-0 mt-md-4 mb-md-3">
                            <h6 class="fw-bold">{{ $item->name }}</h6>
                            <h6>{{ $item->title }}</h6>
                            <a target="_blank" href="{{ $item->contact_link }}">{{ $item->contact }}</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <!-- Modal -->
    <div class="modal fade" id="basicModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel1">Add Contact</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="blogForm" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="form-group mb-3">
                            <label for="name">Photo</label>
                            <input type="file" id="image" class="form-control" name="image" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="name">Name</label>
                            <input type="text" placeholder="Input your name" id="name" class="form-control"
                                name="name" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="position">Position</label>
                            <input type="text" placeholder="Input your position" id="title" class="form-control"
                                name="title" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="contact">Whatsapp Contact</label>
                            <input type="text" placeholder="Input your contact" id="contact" class="form-control"
                                name="contact" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @foreach ($contact as $item)
        <div class="modal fade" id="basicModal-{{ $item->id }}" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel1">Edit Contact</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form class="update-form" data-action="{{ url('/contact/update/' . $item->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <div class="modal-body">
                                <img src="{{ Storage::url($item->image) }}" alt="..." height="400" alt="Image"
                                    class="w-100 rounded" style="object-fit: cover">
                                <div class="form-group mb-3">
                                    <label for="name">Photo</label>
                                    <input type="file" id="image" class="form-control" name="image">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="name">Name</label>
                                    <input type="text" placeholder="Input your name" id="name"
                                        class="form-control" value="{{ $item->name }}" name="name" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="position">Position</label>
                                    <input type="text" placeholder="Input your position" id="title"
                                        class="form-control" value="{{ $item->title }}" name="title" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="contact">Whatsapp Contact</label>
                                    <input type="text" placeholder="Input your contact" id="contact"
                                        class="form-control" value="{{ $item->contact }}" name="contact" required>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const blogForm = document.getElementById('blogForm');
            blogForm.addEventListener('submit', function(event) {
                event.preventDefault();
                const formData = new FormData(blogForm);

                fetch(`contact/add`, {
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

    <script>
        const deleteCredit = document.querySelectorAll('.contact-delete');

        deleteCredit.forEach(button => {
            button.addEventListener('click', function() {
                const cardId = button.dataset.cardId;

                Notiflix.Confirm.show('Konfirmasi', 'Apakah Anda yakin ingin menghapus data ini?', 'Ya',
                    'Cancel',
                    function() {
                        fetch(`contact/delete/${cardId}`, {
                                method: 'DELETE',
                                headers: {
                                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                                }
                            })
                            .then(response => response.json())
                            .then(data => {
                                Notiflix.Notify.success("Data berhasil dihapus!", {
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
                            Notiflix.Notify.success("Data berhasil diperbarui!", {
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
