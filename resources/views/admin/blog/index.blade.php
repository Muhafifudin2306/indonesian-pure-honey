@extends('layouts.app')

@section('page-name', 'Dashboard Admin | Blog Management')

@section('content')
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote-lite.min.css" rel="stylesheet">

    <div class="d-flex justify-content-between align-items-center mb-3">
        <div class="left-content">
            <h2 class="h3 mb-2 mt-4 page-title"> Blog Management</h2>
        </div>
        <div class="right-content">
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#basicModal"> <i class="bx bx-plus"></i>
                Add</button>
        </div>
    </div> <!-- /.col-12 -->
    <div class="row">
        @foreach ($blog as $item)
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
                                        data-bs-target="#detailModal-{{ $item->id }}">Detail</a>
                                    <a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal"
                                        data-bs-target="#basicModal-{{ $item->id }}">Edit</a>
                                    <a class="dropdown-item contact-delete" href="javascript:void(0);"
                                        data-card-id="{{ $item->id }}">Delete</a>
                                </div>
                            </div>
                        </div>

                        <div class="image-contact mt-0 mt-md-3 me-3 me-md-0">
                            <img src="{{ Storage::url($item->cover) }}" height="200" alt="Image" class="w-100 rounded"
                                style="object-fit: cover">
                        </div>
                        <div class="desc-contact mt-0 mt-md-4 mb-md-3">
                            <h6>{{ $item->title }}</h6>
                            <div class="category text-primary">
                                <small>{{ $item->category }}</small>
                            </div>
                            <div class="writer">
                                <small>{{ $item->writer }}</small>
                            </div>
                            <div class="date">
                                <small>{{ $item->created_at->format('d F Y') }}</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    @foreach ($blog as $item)
        <div class="modal fade" id="basicModal-{{ $item->id }}" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel1">Edit Blog</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form class="update-form" data-action="{{ url('/blog/update/' . $item->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <div class="modal-body">
                                <img src="{{ Storage::url($item->cover) }}" alt="..." height="400" alt="cover"
                                    class="w-100 rounded" style="object-fit: cover">
                                <div class="form-group mb-3">
                                    <label for="name">Photo</label>
                                    <input type="file" id="cover" class="form-control" name="cover">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="title">Title</label>
                                    <input type="text" value="{{ $item->title }}" id="title" class="form-control"
                                        name="title" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="writer">Writer</label>
                                    <input type="text" value="{{ $item->writer }}" id="writer" class="form-control"
                                        name="writer" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="category">Category</label>
                                    <input type="text" value="{{ $item->category }}" id="category" class="form-control"
                                        name="category" required>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
    <!-- Modal -->
    @foreach ($blog as $item)
        <div class="modal fade" id="detailModal-{{ $item->id }}" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel1">Detail Blog</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="modal-body">
                            <img src="{{ Storage::url($item->cover) }}" alt="..." height="400" alt="Image"
                                class="w-100 rounded" style="object-fit: cover">
                            <div class="title-part mb-1 mt-3">
                                <h3 class="text-center fw-bold">{{ $item->title }}</h3>
                            </div>
                            <div class="creator-part mb-3">
                                <p class="text-center">{{ $item->writer }} | {{ $item->category }} |
                                    {{ $item->created_at->format('d F Y') }}</p>
                            </div>
                            <div class="content-part mb-3">
                                {!! $item->content !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    <div class="modal fade" id="basicModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel1">Add Blog</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="blogForm" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="form-group mb-3">
                            <label for="image">Cover</label>
                            <input type="file" id="image" class="form-control" name="cover" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="title">Title</label>
                            <input type="text" placeholder="Input your title" id="title" class="form-control"
                                name="title" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="writer">Writer</label>
                            <input type="text" placeholder="Input your writer" id="writer" class="form-control"
                                name="writer" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="category">Category</label>
                            <input type="text" placeholder="Input your position" id="category" class="form-control"
                                name="category" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="content">Content</label>
                            <textarea name="content" class="form-control" id="content-add" placeholder="Input your content" required></textarea>
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

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const blogForm = document.getElementById('blogForm');
            blogForm.addEventListener('submit', function(event) {
                event.preventDefault();
                const formData = new FormData(blogForm);

                fetch(`blog/add`, {
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
                        fetch(`blog/delete/${cardId}`, {
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

    <script src="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote-lite.min.js"></script>

    <script>
        $('#content-add').summernote({
            placeholder: 'Input your description',
            tabsize: 2,
            height: 220,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ]
        });
    </script>
@endsection
