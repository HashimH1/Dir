


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
                <h6 class="text-white text-capitalize ps-3">Add new project</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">

                <form role="form" action="{{ route('admin.project.store') }}" enctype="multipart/form-data" method="POST">

                   @csrf


                        <div class="row">

                            <div class="input-group input-group-outline mb-3">

                                <input multiple name="imagePath[]" type="file" class="form-control">
                              </div>

                            <div class="col-md-3">
                                <div class="input-group input-group-outline my-3 ">
                                <p>title arabic</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group input-group-outline my-3 ">

                                    <input  type="name" name="title_ar" class="form-control">
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

                                    <input  type="name" name="title_en" class="form-control">
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

                <div class="row">
                    <div class="col-md-3">
                        <div class="input-group input-group-outline my-3 ">
                        <p>client name</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group input-group-outline my-3 ">

                            <input  type="name" name="client" class="form-control">
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-3">
                        <div class="input-group input-group-outline my-3 ">
                        <p>Date</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group input-group-outline my-3 ">

                            <input  type="date" name="date" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-3">
                        <div class="input-group input-group-outline my-3 ">
                        <p>category</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group input-group-outline my-3 ">


                            <select name="category" class="form-control">

                                <option >{{ __('messages.Advertising') }}</option>
                                <option >{{ __('messages.Digital Marketing') }}</option>
                                <option>{{ __('messages.Branding') }}</option>
                                <option >{{ __('messages.Visual Identity') }}</option>
                                <option >{{ __('messages.Social Media') }}</option>
                                <option >{{ __('messages.Graphic Design') }}</option></li>
                                <option >{{ __('messages.Marketing') }}</option>
                                <option >{{ __('messages.Mobile Application') }}</option>
                                <option >{{ __('messages.Website Development') }}</option>
                                <option >{{ __('messages.SEO') }}</option>

                            </select>

                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-3">
                        <div class="input-group input-group-outline my-3 ">
                        <p>Facebook</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group input-group-outline my-3 ">

                            <input  type="name" name="facebook" class="form-control">
                        </div>
                    </div>
                </div>



                <div class="row">
                    <div class="col-md-3">
                        <div class="input-group input-group-outline my-3 ">
                        <p>Twitter</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group input-group-outline my-3 ">

                            <input  type="name" name="twitter" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-3">
                        <div class="input-group input-group-outline my-3 ">
                        <p>Pinterest</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group input-group-outline my-3 ">

                            <input  type="name" name="pinterest" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-3">
                        <div class="input-group input-group-outline my-3 ">
                        <p>Instagram</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group input-group-outline my-3 ">

                            <input  type="name" name="instagram" class="form-control">
                        </div>
                    </div>
                </div>

                      <div class="form-check form-check-info text-start ps-0">
                        <input name="status" class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
                        <label class="form-check-label" for="flexCheckDefault">
                           Active
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

