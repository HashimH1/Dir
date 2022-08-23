@extends('dashboard.layout.dashboard')

@section('Content')
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->

    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">ALL blogs</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">name</th>

                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Image</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Status</th>

                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">action</th>
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>

                @foreach ($news as $new )

                    <tr>

                        <td style="text-align: center">
                            <p class="text-xs font-weight-bold mb-0">{{ $new->name }} </p>

                          </td>

                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="{{ asset("assets/images/".$new->image."") }}"  class="avatar avatar-sm me-3 border-radius-lg" alt="user5">
                          </div>
                        </div>
                      </td>
                      <td>
                        <p>
                            @if($new->status == 1)
                            available
                        @else
                              unavailable
                        @endif

                    </p>

                      </td>


                      <td class="align-middle text-center">
                        <a class="badge badge-sm bg-gradient-secondary" href="{{ route('admin.news.edit',$new->id) }}" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                          Edit
                        </a>
                        <a style="margin-left: 10px" onclick="return confirm('Are you sure you want to delete this clint?');" href="{{ route('admin.news.destroy',$new->id) }}" class="badge badge-sm bg-gradient-secondary">delete</a>

                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>

      @if(count($news) >9)
      <div style="background-color:#fff; padding: 26px; border-radius: 20px; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);">
        {{ $news->links() }}
      </div>
          @endif
    </div>

  </main>

@endsection
