@extends('layouts.app')

@section('page-name', 'Dashboard Admin | Product Setting')

@section('content')
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote-lite.min.css" rel="stylesheet">

    <div class="d-flex justify-content-between align-items-center">
        <div class="left-content">
            <h2 class="h3 mb-2 mt-4 page-title">Product Setting</h2>
        </div>
        <div class="right-content">
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#basicModal"> <i class="bx bx-plus"></i>
                Add</button>
        </div>
    </div> <!-- /.col-12 -->
    <div class="row">
        @foreach ($product as $item)
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
                                        data-bs-target="#editModal-{{ $item->id }}">Edit</a>
                                    <a class="dropdown-item product-delete" href="javascript:void(0);"
                                        data-card-id="{{ $item->id }}">Delete</a>
                                </div>
                            </div>
                        </div>

                        <div class="image-contact mt-0 mt-md-3 me-3 me-md-0">
                            <img src="{{ Storage::url($item->cover) }}" height="400" alt="Image" class="w-100 rounded"
                                style="object-fit: cover">
                        </div>
                        <div class="desc-contact mt-0 mt-md-4 mb-md-3">
                            <h6>{{ $item->category }}</h6>
                            <h6 class="fw-bold">{{ $item->product_name }}</h6>
                            <button class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#detailModal-{{ $item->id }}">More Detail</button>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <!-- Modal -->
    <div class="modal fade" id="basicModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel1">Add Product</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="blogForm" enctype="multipart/form-data">
                    <div class="modal-body">
                        <h5><strong>Product Info</strong></h5>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group mb-3">
                                    <label for="cover">Product Cover</label>
                                    <input type="file" id="cover" class="form-control" name="cover" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="product_name">Product Name</label>
                                    <input type="text" id="product_name" placeholder="Input your product name"
                                        class="form-control" name="product_name" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="category">Product Category</label>
                                    <input type="text" id="category" placeholder="Input your product category"
                                        class="form-control" name="category" required>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <h5><strong>Product Image</strong></h5>
                        <div class="row" id="product-images-container">
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="name">Product Image</label>
                                    <input type="file" id="image" class="form-control" name="image[]" required>
                                </div>
                            </div>
                        </div>
                        <button type="button" id="add-input" class="btn btn-primary mb-3">
                            <span>Add Input Field</span><i class="bx bx-plus"></i>
                        </button>
                        <button type="button" id="delete-input" class="btn btn-danger mb-3" style="display: none;">
                            <span>Delete Input Field</span><i class="bx bx-minus"></i>
                        </button>
                        <hr>
                        <h5><strong>Product Detail</strong></h5>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="specification">Product Specification</label>
                                    <textarea name="specification" id="specification" class="form-control" placeholder="Input your Specification"
                                        required></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="knowledge">Product Knowledge</label>
                                    <textarea name="knowledge" id="knowledge" class="form-control" placeholder="Input your Knowledge" required></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="benefit">Product Benefit</label>
                                    <textarea name="benefit" id="benefit" class="form-control" placeholder="Input your Benefit" required></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="advantage">Product Advantage</label>
                                    <textarea name="advantage" id="advantage" class="form-control" placeholder="Input your Advantage" required></textarea>
                                </div>
                            </div>
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
    @foreach ($product as $item)
        <!-- Modal -->
        <div class="modal fade" id="editModal-{{ $item->id }}" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel1">Add Product</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form class="update-form" data-action="{{ url('/product/update/' . $item->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <h5><strong>Product Info</strong></h5>
                            <div class="row">
                                <div class="col-12">
                                    <img src="{{ Storage::url($item->cover) }}" alt="..." height="400"
                                        class="w-100 rounded" style="object-fit: contain">
                                    <div class="form-group mb-3">
                                        <label for="cover">Product Cover</label>
                                        <input type="file" id="cover" class="form-control" name="cover">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label for="product_name">Product Name</label>
                                        <input type="text" id="product_name" placeholder="Input your product name"
                                            class="form-control" value="{{ $item->product_name }}" name="product_name"
                                            required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label for="category">Product Category</label>
                                        <input type="text" id="category" placeholder="Input your product category"
                                            class="form-control" value="{{ $item->category }}" name="category" required>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <h5><strong>Product Image</strong></h5>
                            <div class="row" id="product-images-container-{{ $item->id }}">
                                @foreach ($item->images as $image)
                                    <div class="col-md-4 mb-3">
                                        <div class="image-container">
                                            <img src="{{ Storage::url($image->image) }}" alt="Product Image"
                                                class="img-fluid rounded"
                                                style="object-fit: contain; height: 200px; width: 100%;">
                                        </div>
                                    </div>
                                @endforeach
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label for="name">Product Image</label>
                                        <input type="file" id="image" class="form-control" name="image[]">
                                    </div>
                                </div>
                            </div>
                            <button type="button" id="add-{{ $item->id }}-input" class="btn btn-primary mb-3">
                                <span>Add Input Field</span><i class="bx bx-plus"></i>
                            </button>
                            <button type="button" class="btn btn-danger mb-3" data-bs-toggle="modal"
                                data-bs-target="#deleteImage-{{ $item->id }}">
                                <span>Delete Some Photo</span><i class="bx bx-minus"></i>
                            </button>
                            <button type="button" id="delete-{{ $item->id }}-input" class="btn btn-danger mb-3"
                                style="display: none;">
                                <span>Delete Input Field</span><i class="bx bx-minus"></i>
                            </button>
                            <hr>
                            <h5><strong>Product Detail</strong></h5>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label for="specification">Product Specification</label>
                                        <textarea name="specification" id="specification-{{ $item->id }}" class="form-control"
                                            placeholder="Input your Specification" required>{{ $item->specification }}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label for="knowledge">Product Knowledge</label>
                                        <textarea name="knowledge" id="knowledge-{{ $item->id }}" class="form-control"
                                            placeholder="Input your Knowledge" required>{{ $item->knowledge }}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label for="benefit">Product Benefit</label>
                                        <textarea name="benefit" id="benefit-{{ $item->id }}" class="form-control" placeholder="Input your Benefit"
                                            required>{{ $item->benefit }}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label for="advantage">Product Advantage</label>
                                        <textarea name="advantage" id="advantage-{{ $item->id }}" class="form-control"
                                            placeholder="Input your Advantage" required>{{ $item->advantage }}</textarea>
                                    </div>
                                </div>
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

    @foreach ($product as $item)
        <!-- Modal -->
        <div class="modal fade" id="deleteImage-{{ $item->id }}" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel1">Delete Image Product</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <h5><strong>Product Image</strong></h5>
                        <div class="row" id="product-images-container-{{ $item->id }}">
                            @foreach ($item->images as $image)
                                <div class="col-md-4 mb-3">
                                    <div class="image-container">
                                        <img src="{{ Storage::url($image->image) }}" alt="Product Image"
                                            class="img-fluid rounded"
                                            style="object-fit: contain; height: 200px; width: 100%;">
                                        <button class="btn btn-danger image-delete w-100"
                                            data-card-id="{{ $image->id }}">Delete</button>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    @foreach ($product as $item)
        <!-- Modal -->
        <div class="modal fade" id="detailModal-{{ $item->id }}" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel1">Detail Product</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <h5><strong>Product Info</strong></h5>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group mb-3">
                                    <label for="cover">Product Cover</label>
                                    <div class="image-cover">
                                        <img src="{{ Storage::url($item->cover) }}" alt="..." height="400"
                                            class="w-100 rounded" style="object-fit: contain">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="product_name">Product Name</label>
                                    <input type="text" id="product_name" class="form-control" name="product_name"
                                        value="{{ $item->product_name }}" disabled>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="category">Product Category</label>
                                    <input type="text" id="category" class="form-control" name="category"
                                        value="{{ $item->category }}" disabled>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <h5><strong>Product Images</strong></h5>
                        <div class="row">
                            @foreach ($item->images as $image)
                                <div class="col-md-4 mb-3">
                                    <div class="image-container">
                                        <img src="{{ Storage::url($image->image) }}" alt="Product Image"
                                            class="img-fluid rounded"
                                            style="object-fit: contain; height: 200px; width: 100%;">
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <hr>
                        <h5><strong>Product Detail</strong></h5>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="specification">Product Specification</label>
                                    <p>{!! $item->specification !!}</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="knowledge">Product Knowledge</label>
                                    <p>{!! $item->knowledge !!}</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="benefit">Product Benefit</label>
                                    <p>{!! $item->benefit !!}</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="advantage">Product Advantage</label>
                                    <p>{!! $item->advantage !!}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach


    <script src="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote-lite.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const addButton = document.getElementById("add-input");
            const deleteButton = document.getElementById("delete-input");
            const container = document.getElementById("product-images-container");

            // Event listener untuk tombol Add Input Field
            addButton.addEventListener("click", function() {
                // Buat elemen baru
                const newInputDiv = document.createElement("div");
                newInputDiv.classList.add("col-md-6");
                newInputDiv.innerHTML = `
            <div class="form-group mb-3">
                <label for="name">Product Image</label>
                <input type="file" id="image" class="form-control" name="image[]">
            </div>
        `;

                // Tambahkan elemen baru ke dalam container
                container.appendChild(newInputDiv);

                // Tampilkan tombol Delete jika elemen lebih dari 1
                if (container.children.length > 1) {
                    deleteButton.style.display = "inline-block";
                }
            });

            // Event listener untuk tombol Delete Input Field
            deleteButton.addEventListener("click", function() {
                if (container.children.length > 1) {
                    // Hapus elemen terakhir
                    container.removeChild(container.lastElementChild);
                }

                // Sembunyikan tombol Delete jika hanya ada satu elemen
                if (container.children.length <= 1) {
                    deleteButton.style.display = "none";
                }
            });
        });
    </script>

    @foreach ($product as $item)
        <script>
            $('#specification-{{ $item->id }}').summernote({
                placeholder: 'Input your specification',
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
            $('#knowledge-{{ $item->id }}').summernote({
                placeholder: 'Input your knowledge',
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
            $('#benefit-{{ $item->id }}').summernote({
                placeholder: 'Input your benefit',
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
            $('#advantage-{{ $item->id }}').summernote({
                placeholder: 'Input your advantage',
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
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const addButton = document.getElementById("add-{{ $item->id }}-input");
                const deleteButton = document.getElementById("delete-{{ $item->id }}-input");
                const container = document.getElementById("product-images-container-{{ $item->id }}");

                // Event listener untuk tombol Add Input Field
                addButton.addEventListener("click", function() {
                    // Buat elemen baru
                    const newInputDiv = document.createElement("div");
                    newInputDiv.classList.add("col-md-6");
                    newInputDiv.innerHTML = `
    <div class="form-group mb-3">
        <label for="name">Product Image</label>
        <input type="file" id="image" class="form-control" name="image[]">
    </div>
`;

                    // Tambahkan elemen baru ke dalam container
                    container.appendChild(newInputDiv);

                    // Tampilkan tombol Delete jika elemen lebih dari 1
                    if (container.children.length > 1) {
                        deleteButton.style.display = "inline-block";
                    }
                });

                // Event listener untuk tombol Delete Input Field
                deleteButton.addEventListener("click", function() {
                    if (container.children.length > 1) {
                        // Hapus elemen terakhir
                        container.removeChild(container.lastElementChild);
                    }

                    // Sembunyikan tombol Delete jika hanya ada satu elemen
                    if (container.children.length <= 1) {
                        deleteButton.style.display = "none";
                    }
                });
            });
        </script>
    @endforeach

    <script>
        $('#specification').summernote({
            placeholder: 'Input your specification',
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
        $('#knowledge').summernote({
            placeholder: 'Input your knowledge',
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
        $('#benefit').summernote({
            placeholder: 'Input your benefit',
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
        $('#advantage').summernote({
            placeholder: 'Input your advantage',
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

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const blogForm = document.getElementById('blogForm');
            blogForm.addEventListener('submit', function(event) {
                event.preventDefault();
                const formData = new FormData(blogForm);

                fetch(`product/add`, {
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

    <script>
        const deleteCredit = document.querySelectorAll('.product-delete');

        deleteCredit.forEach(button => {
            button.addEventListener('click', function() {
                const cardId = button.dataset.cardId;

                Notiflix.Confirm.show('Konfirmasi', 'Apakah Anda yakin ingin menghapus data ini?', 'Ya',
                    'Cancel',
                    function() {
                        fetch(`product/delete/${cardId}`, {
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
        const deleteImage = document.querySelectorAll('.image-delete');

        deleteImage.forEach(button => {
            button.addEventListener('click', function() {
                const cardId = button.dataset.cardId;

                Notiflix.Confirm.show('Konfirmasi', 'Apakah Anda yakin ingin menghapus data ini?', 'Ya',
                    'Cancel',
                    function() {
                        fetch(`product/image/delete/${cardId}`, {
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
