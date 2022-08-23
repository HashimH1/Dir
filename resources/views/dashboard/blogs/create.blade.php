


@extends('dashboard.layout.dashboard')

@section('Content')



{{--  <main>

    <form role="form" action="{{ route('admin.news.store') }}" enctype="multipart/form-data" method="POST">
@csrf
		<div class="grid-container">
			<div class="grid-width-100">
				<textarea name="dd" id="editor">


				</textarea>
			</div>
		</div>

        <input type="submit" value="C">
    </form>


</main>  --}}










 <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->

    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
            @include('dashboard.includes.alerts.success')
            @include('dashboard.includes.alerts.errors')

          <div style="padding: 45px" class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Add new blog</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">

                <form role="form" action="{{ route('admin.news.store') }}" enctype="multipart/form-data" method="POST">

                   @csrf


                        <div class="row">

                            <div class="input-group input-group-outline mb-3">

                                <input name="imagePath" type="file" class="form-control">
                              </div>

                            <div class="col-md-3">
                                <div class="input-group input-group-outline my-3 ">
                                <p>title arabic</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group input-group-outline my-3 ">

                                    <input  type="name" name="name_ar" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="row">

                            <div class="col-md-3">
                                <div class="input-group input-group-outline my-3 ">
                                <p>title english</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group input-group-outline my-3 ">

                                    <input  type="name" name="name_en" class="form-control">
                                </div>
                            </div>
                        </div>



                        <div class="row">

                            <div class="col-md-3">
                                <div class="input-group input-group-outline my-3 ">
                                <p>details arabic</p>
                                </div>
                            </div>
                         <div class="form-check form-check-info text-start ps-0">
                        <div class="grid-container">
                            <div class="grid-width-100">
                                <textarea name="desc_ar" id="editor">


                                </textarea>
                            </div>
                        </div>

                      </div>
                </div>
<br>

                <div class="row">

                    <div class="col-md-3">
                        <div class="input-group input-group-outline my-3 ">
                        <p>details english</p>
                        </div>
                    </div>
                      <div class="form-check form-check-info text-start ps-0">
                        <div class="grid-container">
                            <div class="grid-width-100">
                                <textarea name="desc_en" id="editor_">


                                </textarea>
                            </div>
                        </div>

                      </div>

                </div>

                      <div class="form-check form-check-info text-start ps-3">

                        <input name="status" class="form-check-input" type="checkbox" checked value="" id="flexCheckDefault" >
                        <label class="form-check-label" for="flexCheckDefault">
                            blog status
                         </label>
                      </div>

                      <div class="form-check">
                        <input name="tag[]" class="form-check-input" type="checkbox" value="Digital Marketing" id="Digital">
                        <label class="form-check-label" for="Digital">
                            {{ __('messages.Digital Marketing') }}
                        </label>
                      </div>
                      <div class="form-check">
                        <input name="tag[]" class="form-check-input" type="checkbox" value="Advertising" id="Advertising" >
                        <label  class="form-check-label" for="Advertising">
                            {{ __('messages.Advertising') }}
                        </label>
                      </div>

                      <div class="form-check">
                        <input name="tag[]" class="form-check-input" type="checkbox" value="Branding" id="Branding" >
                        <label  class="form-check-label" for="Branding">
                            {{ __('messages.Branding') }}
                        </label>
                      </div>

                      <div class="form-check">
                        <input name="tag[]" class="form-check-input" type="checkbox" value="Visual Identity" id="Visual" >
                        <label  class="form-check-label" for="Visual">
                            {{ __('messages.Visual Identity') }}
                        </label>
                      </div>

                      <div class="form-check">
                        <input name="tag[]" class="form-check-input" type="checkbox" value="Social Media" id="Social" >
                        <label  class="form-check-label" for="Social">
                            {{ __('messages.Social Media') }}
                        </label>
                      </div>

                      <div class="form-check">
                        <input name="tag[]" class="form-check-input" type="checkbox" value="Graphic Design" id="Graphic" >
                        <label  class="form-check-label" for="Graphic">
                            {{ __('messages.Graphic Design') }}
                        </label>
                      </div>

                      <div class="form-check">
                        <input name="tag[]" class="form-check-input" type="checkbox" value="Marketing" id="Marketing" >
                        <label  class="form-check-label" for="Marketing">
                            {{ __('messages.Marketing') }}
                        </label>
                      </div>
                      <div class="form-check">
                        <input name="tag[]" class="form-check-input" type="checkbox" value="Mobile Application" id="Mobile" >
                        <label  class="form-check-label" for="Mobile">
                            {{ __('messages.Mobile Application') }}
                        </label>
                      </div>

                      <div class="form-check">
                        <input name="tag[]" class="form-check-input" type="checkbox" value="Website Development" id="Website" >
                        <label  class="form-check-label" for="Website">
                            {{ __('messages.Website Development') }}
                        </label>
                      </div>

                      <div class="form-check">
                        <input name="tag[]" class="form-check-input" type="checkbox" value="SEO" id="SEO" >
                        <label  class="form-check-label" for="SEO">
                            {{ __('messages.SEO') }}
                        </label>
                      </div>

                    <div class="text-center">
                      <input type="submit" class="btn btn-lg bg-gradient-primary btn-lg w-30 mt-4 mb-0" value="Save">
                    </div>
<br>
<br>
                  </form>

              </div>
            </div>

          </div>
        </div>
      </div>



    </div>
  </main>



  <script>
	initSample();
    initSample_();
</script>
  @endsection

