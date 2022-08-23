


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
                <h6 class="text-white text-capitalize ps-3">Add new client</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">

                <form role="form" action="{{ route('admin.client.store') }}" enctype="multipart/form-data" method="POST">

                   @csrf


                        <div class="row">

                            <div class="input-group input-group-outline mb-3">

                                <input name="image" type="file" class="form-control">
                              </div>

                        </div>


<br>

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

