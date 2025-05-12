<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Client Dashboard</title>
    <link href="https://unpkg.com/@tabler/core@latest/dist/css/tabler.min.css" rel="stylesheet" />
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <style>
        body {
            margin: 0;
            font-family: "Inria Sans", sans-serif;
            font-weight: 400;
            background-color: #EBEBEB;
        }

        h1,
        h2 {
            font-weight: 700;
        }

        .total_posts,
        .total_comments {
            font-size: 30px;
        }

        .create_post {
            background-color: #3D3A3A;
            height: 50px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }

        .view_post {
            background-color: #ffffff;
            color: #000000;
            height: 50px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }

        .publish_btn {
            background-color: #3D3A3A;
        }

        #editor {
            height: 200px;
            background: white;
            border-radius: 4px;
            border: 1px solid #ddd;
        }

        .ql-toolbar {
            border-top-left-radius: 4px;
            border-top-right-radius: 4px;
            border-bottom: none !important;
            z-index: 1;
            position: relative;
        }

        .ql-container {
            border-bottom-left-radius: 4px;
            border-bottom-right-radius: 4px;
            font-size: 16px;
        }

        .search {
            height: 50px;
        }

        .wrapper {
            display: flex;
            min-height: 100vh;
        }

        .sidebar {
            width: 250px;
            background-color: #1e293b;
            color: white;
            min-height: calc(100vh - 56px);
        }

        .main-content {
            flex: 1;
            background: #f9fafb;
            padding: 1.5rem;
        }

        @media (max-width: 768px) {
            .wrapper {
                flex-direction: column;
            }

            .sidebar {
                width: 100%;
                min-height: auto;
            }
        }
    </style>
</head>

<body>
    <!-- Top Navbar -->
    <header class="navbar navbar-expand-md navbar-light bg-white border-bottom">
        <div class="container-fluid">
            <a href="#" class="navbar-brand">Banchoi</a>
            <div class="navbar-nav flex-row order-md-last">
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link d-flex align-items-center text-reset p-0" data-bs-toggle="dropdown">
                        <span class="avatar avatar-sm bg-blue-lt me-2">U</span>
                        <span class="d-none d-md-inline">User</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item" href="#">Profile</a>
                        <a class="dropdown-item" href="#">Logout</a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Layout: Sidebar + Main -->
    <div class="wrapper">
        <!-- Sidebar -->
        <aside class="sidebar p-3">
            <h4 class="text-white mb-3">Menu</h4>
            <ul class="nav nav-pills flex-column">
                <li class="nav-item mb-2">
                    <a class="nav-link text-white" href="#">
                        <i class="ti ti-home me-2"></i>Dashboard
                    </a>
                </li>
                <li class="nav-item mb-2">
                    <a class="nav-link text-white" href="#">
                        <i class="ti ti-users me-2"></i>Stats
                    </a>
                </li>
                <li class="nav-item mb-2">
                    <a class="nav-link text-white" href="#">
                        <i class="ti ti-users me-2"></i>Comments
                    </a>
                </li>
                <li class="nav-item mb-2">
                    <a class="nav-link text-white" href="#">
                        <i class="ti ti-users me-2"></i>View Blog
                    </a>
                </li>
            </ul>
        </aside>

        <main class="flex-grow-1">
            <div class="container mt-5">
                <div class="card">
                    <div class="card-body">
                        <h2 class="fw-bold text-black mb-4">Welcome back, user!</h2>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="card border-0 shadow-sm">
                                    <div class="card-body position-relative">
                                        <div class="position-absolute top-0 end-0 m-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" class="text-primary">
                                                <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z" />
                                                <polyline points="14 2 14 8 20 8" />
                                                <line x1="16" y1="13" x2="8" y2="13" />
                                                <line x1="16" y1="17" x2="8" y2="17" />
                                                <polyline points="10 9 9 9 8 9" />
                                            </svg>
                                        </div>
                                        <h6 class="text-uppercase text-muted small">Total Posts</h6>
                                        <h3 class="total_posts fw-bold mt-2">1,024</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card border-0 shadow-sm">
                                    <div class="card-body position-relative">
                                        <div class="position-absolute top-0 end-0 m-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" class="text-info">
                                                <path
                                                    d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z" />
                                            </svg>
                                        </div>
                                        <h6 class="text-uppercase text-muted small">Total Comments</h6>
                                        <h3 class="total_comments fw-bold mt-2">3,568</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-2 my-4">
                    <div class="col-12 col-md-6">
                        <a href="#" class="create_post btn btn-dark w-100" data-bs-toggle="modal"
                            data-bs-target="#blogModal">Create New Post</a>
                    </div>
                    <div class="col-12 col-md-6">
                        <a href="#" class="view_post btn btn-secondary w-100">View Your Posts</a>
                    </div>
                </div>

                <!-- Search Bar -->
                <div class="row mb-4">
                    <div class="col-12">
                        <div class="input-icon">
                            <span class="input-icon-addon">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-search"
                                    width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <circle cx="10" cy="10" r="7" />
                                    <line x1="21" y1="21" x2="15" y2="15" />
                                </svg>
                            </span>
                            <input type="text" class="search form-control" />
                        </div>
                    </div>
                </div>

                <!-- Blog Cards Grid (2x2) -->
                <div class="row my-4">
                    <!-- Card 1 -->
                    <div class="col-12 col-md-6 col-lg-6 mb-4">
                        <div class="card shadow-sm">
                            <img src="https://picsum.photos/600/300?random=1" class="card-img-top" alt="Blog Image 1">
                            <div class="card-body">
                                <h1 class="mb-2">Title</h1>
                                <h2 class="h6 text-muted">Overview</h2>
                            </div>
                        </div>
                    </div>
                    <!-- Card 2 -->
                    <div class="col-12 col-md-6 col-lg-6 mb-4">
                        <div class="card shadow-sm">
                            <img src="https://picsum.photos/600/300?random=2" class="card-img-top" alt="Blog Image 2">
                            <div class="card-body">
                                <h1 class="mb-2">Title</h1>
                                <h2 class="h6 text-muted">Overview</h2>
                            </div>
                        </div>
                    </div>
                    <!-- Card 3 -->
                    <div class="col-12 col-md-6 col-lg-6 mb-4">
                        <div class="card shadow-sm">
                            <img src="https://picsum.photos/600/300?random=3" class="card-img-top" alt="Blog Image 3">
                            <div class="card-body">
                                <h1 class="mb-2">Title</h1>
                                <h2 class="h6 text-muted">Overview</h2>
                            </div>
                        </div>
                    </div>
                    <!-- Card 4 -->
                    <div class="col-12 col-md-6 col-lg-6 mb-4">
                        <div class="card shadow-sm">
                            <img src="https://picsum.photos/600/300?random=4" class="card-img-top" alt="Blog Image 4">
                            <div class="card-body">
                                <h1 class="mb-2">Title</h1>
                                <h2 class="h6 text-muted">Overview</h2>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pagination (Bottom Right) -->
                <div class="d-flex justify-content-end my-4">
                    <nav aria-label="Page navigation">
                        <ul class="pagination mb-0">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </main>

        <!-- Modal -->
        <div class="modal modal-blur fade" id="blogModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Create Blog Post</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="mb-3">
                                <label class="form-label">Title</label>
                                <input type="text" class="form-control" placeholder="Enter blog title">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Content</label>
                                <div id="editor"></div>
                                <input type="hidden" name="content" id="quill-html">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Blog Image</label>
                                <input type="file" class="form-control" accept="image/*">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="publish_btn btn btn-dark w-100">Publish</button>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.quilljs.com/1.3.6/quill.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@tabler/core@1.2.0/dist/js/tabler.min.js"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var quill = new Quill('#editor', {
                    theme: 'snow',
                    modules: {
                        toolbar: [
                            [{ 'header': '1' }, { 'header': '2' }, { 'font': [] }],
                            [{ 'list': 'ordered' }, { 'list': 'bullet' }],
                            [{ 'align': [] }],
                            ['bold', 'italic', 'underline'],
                            ['link']
                        ]
                    },
                    placeholder: 'Write your blog content here...'
                });

                // Update hidden input with HTML content when form is submitted
                document.querySelector('.publish_btn').addEventListener('click', function() {
                    var html = document.querySelector('.ql-editor').innerHTML;
                    document.getElementById('quill-html').value = html;
                    // Here you would typically submit your form
                    console.log('Content to submit:', html);
                    alert('Blog post would be submitted now with content:\n' + html);
                });
            });
        </script>
</body>

</html>