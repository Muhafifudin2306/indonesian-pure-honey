@extends('layouts.app')

@section('page-name', 'Dashboard Admin | Contact Setting')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <div class="left-content">
            <h2 class="h3 mb-2 mt-4 page-title"> Team Setting</h2>
        </div>
        <div class="right-content">
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#basicModal"> <i class="bx bx-plus"></i>
                Add</button>
        </div>
    </div> <!-- /.col-12 -->
    <div class="row">
        @foreach ($team as $item)
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
                            <h6>{{ $item->position }}</h6>
                        </div>
                    </div>
                    <div class="card-footer">
                        @if ($item->instagram != null)
                            <a href="{{ $item->instagram }}" target="_blank" class="text-decoration-none">
                                <i class="fs-2 bx bxl-instagram"></i>
                            </a>
                        @endif
                        @if ($item->linkedin != null)
                            <a href="{{ $item->linkedin }}" target="_blank" class="text-decoration-none">
                                <i class="fs-2 bx bxl-linkedin"></i>
                            </a>
                        @endif
                        @if ($item->email != null)
                            <a href="{{ $item->email }}" target="_blank" class="text-decoration-none">
                                <i class="fs-3 bx bxl-google"></i>
                            </a>
                        @endif
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
                    <h5 class="modal-title" id="exampleModalLabel1">Add Team</h5>
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
                            <input type="text" placeholder="Input your position" id="position" class="form-control"
                                name="position" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="linkedin">LinkedIn</label>
                            <input type="text" placeholder="Input your likedIn" id="likedIn" class="form-control"
                                name="linkedin">
                        </div>
                        <div class="form-group mb-3">
                            <label for="instagram">Instagram</label>
                            <input type="text" placeholder="Input your instagram" id="instagram" class="form-control"
                                name="instagram">
                        </div>
                        <div class="form-group mb-3">
                            <label for="email">Email</label>
                            <input type="email" placeholder="Input your email" id="email" class="form-control"
                                name="email">
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
    @foreach ($team as $item)
        <div class="modal fade" id="basicModal-{{ $item->id }}" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel1">Edit Team</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form class="update-form" data-action="{{ url('/team/update/' . $item->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <div class="modal-body">
                                <img src="{{ Storage::url($item->image) }}" alt="..." height="400"
                                    alt="Image" class="w-100 rounded" style="object-fit: cover">
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
                                    <input type="text" placeholder="Input your position" id="position"
                                        class="form-control" value="{{ $item->position }}" name="position" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="linkedin">LinkedIn</label>
                                    <input type="text" placeholder="Input your linkedIn" id="linkedin"
                                        class="form-control" name="linkedin" value="{{ $item->linkedin }}">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="instagram">Instagram</label>
                                    <input type="text" placeholder="Input your instagram" id="instagram"
                                        class="form-control" name="instagram" value="{{ $item->instagram }}">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="email">Email</label>
                                    <input type="email" placeholder="Input your email" id="email"
                                        class="form-control" name="email" value="{{ $item->email }}">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </div>
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

                fetch(`team/add`, {
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
                        fetch(`team/delete/${cardId}`, {
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
