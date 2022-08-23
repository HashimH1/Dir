
@extends('panel.layouts.panel')

@section('content')
    <!-- Start Main -->
    <section class="main row-cols-lg-2 p-4">
        <div class="container">
            @include('dashboard.includes.alerts.success')
            @include('dashboard.includes.alerts.errors')
            <form action="{{route('apply.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="mb-3 col-6">
                        <label class="form-label">First Name</label>
                        <input required type="text" name="first_name" class="form-control">
                    </div>
                    <div class="mb-3 col-6">
                        <label class="form-label">Last Name</label>
                        <input required type="text" name="last_name" class="form-control">
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input required type="email" name="email" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Title</label>
                    <input required name="title" type="text" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Phone Number</label>
                    <input required type="text" name="phone" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Address</label>
                    <input required type="text" name="address" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Upload your photo:</label>
                    <input required class="form-control" name="imagePath" type="file">
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Summary</label>
                    <div class="form-floating">
                        <textarea class="form-control" required
                         placeholder="Leave a comment here"
                         name="summary"
                        id="floatingTextarea"></textarea>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Resume</label>
                    <input class="form-control" name="resumePath" type="file">
                </div>
                <button type="submit" class="btn bg-main text-white w-100">Submit</button>

            </form>
        </div>
    </section>
    <!-- End Main -->

@endsection
