<!DOCTYPE html>
<html lang="en">
<head>
    @include('master-admin.meta')
    @include('master-admin.css')
</head>
<body>
    <!-- Layout -->
    <div id="layout-wrapper">

        <!-- Topbar -->
            @include('components-admin.topbar')
        <!-- End Topbar -->


        <!-- Sidebar -->
            @include('components-admin.sidebar')
        <!-- End Sidebar -->

        <!-- Konten Admin -->
           <div class="main-content">

            <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">Hero Section</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        @foreach ($hero as $hero)
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        @if ($message = Session::get('success'))
                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <i class="mdi mdi-check-all me-2"></i>
                                            {{ $message }}
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                    @endif
                                        <h4 class="card-title mb-4">Edit Hero Section</h4>
                                        <form action="{{ route('hero.update', $hero->id) }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                            <div class="row mb-4">
                                                <label for="projectname" class="col-form-label col-lg-2">Title</label>
                                                <div class="col-lg-10">
                                                    <input name="title" id="projectname" type="text" class="form-control" placeholder="Masukan Judul Title" value="{{ $hero->title }}">
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <label for="projectname" class="col-form-label col-lg-2">Subtitle</label>
                                                <div class="col-lg-10">
                                                    <input name="subtitle" id="projectname" type="text" class="form-control" placeholder="Masukan Judul Subtitle" value="{{ $hero->subtitle }}">
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <label for="projectdesc" class="col-form-label col-lg-2">Deskripsi</label>
                                                <div class="col-lg-10">
                                                    <textarea name="deskripsi" class="form-control" id="projectdesc" rows="3" placeholder="Masukan Deskripsi">{{ $hero->deskripsi }}</textarea>
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <label for="projectname" class="col-form-label col-lg-2">Link Download App</label>
                                                <div class="col-lg-10">
                                                    <input name="link" id="projectname" type="text" class="form-control" placeholder="Masukan Link Download" value="{{ $hero->link }}">
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                            <label   for="cover" class="col-form-label col-lg-2">Gambar Ilustrasi</label>
                                                <div class="col-lg-5">
                                                    <label for="cover" class="form-label">Upload Ilustrasi baru</label>
                                                    <input class="form-control" name="gambar" type="file" id="cover">
                                                </div>
                                                <div class="col-md-5 text-center">
                                                    <img class="rounded me-2" alt="200x200" src="/images/{{$hero->gambar}}" data-holder-rendered="true" width="200">
                                                </div>
                                        </div>
                                        <div class="row justify-content-end">
                                            <div class="col-lg-10">
                                                <button type="submit" class="btn btn-primary">Update Data Hero</button>
                                            </div>
                                        </div>
                                           
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                    </div> <!-- container-fluid -->
                </div>
            @endforeach

            @include('components-admin.footer')
           </div>
        <!-- End Konten Admin -->

    </div>
    <!-- End Layout -->





    <!-- Vendor Script -->
        @include('master-admin.script')
    <!-- End Vendor Script -->
</body>
</html>