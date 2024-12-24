@extends('layouts.app')

@section('page-name', 'Dashboard Admin | Section One')

@section('content')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">


    @foreach ($one as $item)
        <div class="modal fade" id="blogEditModal-{{ $item->id }}" tabindex="-1" aria-labelledby="blogModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="blogModalLabel">Edit Ebok</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form class="update-form" data-action="{{ url('/ebook/update/' . $item->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <div class="form-group">
                                <img src="{{ Storage::url($item->cover) }}" alt="..." class="avatar-img rounded w-100">
                                <label for="name">Cover</label>
                                <input type="file" id="file" class="form-control" name="cover">
                            </div>
                            <div class="form-group">
                                <label for="title">File</label>
                                <a href="{{ Storage::url($item->file) }}" target="_blank"> : Lihat
                                    File</a>
                                <input type="file" id="file" class="form-control" name="file">
                            </div>
                            <div class="form-group">
                                <label for="content">Sumber</label>
                                <textarea id="content-edit" name="source" class="form-control" cols="30" rows="10"
                                    placeholder="Masukkan Sumber" required>{{ $item->source }}</textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach


    <div class="d-flex justify-content-between align-items-center">
        <div class="left-content">
            <h2 class="h3 mb-2 mt-4 page-title">Hero Section Setting</h2>
        </div>
        <div class="right-content">
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#basicModal"> <i class="bx bx-plus"></i>
                Add</button>
        </div>
    </div> <!-- /.col-12 -->
    <div class="row my-4">
        <!-- Small table -->
        <div class="col-md-12">
            <div class="card shadow">
                <div class="card-body">
                    <table class="table datatables" id="dataTable-1">
                        <thead>
                            <tr>
                                <th><strong>No</strong></th>
                                <th><strong>Image</strong></th>
                                <th><strong>Title</strong></th>
                                <th><strong>Description</strong></th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($one as $item)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>
                                        <div class="avatar">
                                            <img src="{{ Storage::url($item->image) }}" alt="..."
                                                class="avatar-img rounded" width="200">
                                        </div>
                                    </td>
                                    <td>
                                        {{ $item->title }}
                                    </td>
                                    <td>
                                        {!! $item->description !!}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div> <!-- simple table -->
    </div> <!-- end section -->
    <!-- Modal -->
    <div class="modal fade" id="basicModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel1">Add Hero</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="blogForm" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="form-group mb-3">
                            <label for="name">Image</label>
                            <input type="file" id="image" class="form-control" name="image" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="name">Title</label>
                            <input type="text" placeholder="Input your title" id="title" class="form-control"
                                name="title" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="content">Description</label>
                            <textarea id="content-add" name="source" class="form-control" id="content" cols="30" rows="10"
                                placeholder="Input your description" required></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#dataTable-1').DataTable();
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#content-add').summernote();
            $('#content-edit').summernote();
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const blogForm = document.getElementById('blogForm');
            blogForm.addEventListener('submit', function(event) {
                event.preventDefault();
                const formData = new FormData(blogForm);

                fetch(`section-one/add`, {
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        body: formData
                    })
                    .then(response => response.json())
                    .then(data => {
                        Notiflix.Notify.success("Data berhasil dibuat!", {
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
