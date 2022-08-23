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
                <h6 class="text-white text-capitalize ps-3">ALL messages </h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">name</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">phone</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">email</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">subject</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">message</th>


                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">action</th>
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>

                @foreach ($messages as $message )

                    <tr>

                        <td style="text-align: center">
                            <p class="text-xs font-weight-bold mb-0">{{ $message->name }} </p>

                          </td>

                          <td style="text-align: center">
                            <p class="text-xs font-weight-bold mb-0">{{ $message->phone }} </p>

                          </td>
                          <td style="text-align: center">
                            <p class="text-xs font-weight-bold mb-0">{{ $message->email }} </p>

                          </td>

                          <td style="text-align: center">
                            <p class="text-xs font-weight-bold mb-0">{{ $message->subject }} </p>

                          </td>

                          <td style="text-align: center">
                            <p class="text-xs font-weight-bold mb-0">{{ $message->message }} </p>

                          </td>



                      <td class="align-middle text-center">

                        <a style="margin-left: 10px" onclick="return confirm('Are you sure you want to delete this message?');" href="{{ route('apply.delete',$message->id) }}" class="badge badge-sm bg-gradient-secondary">delete</a>

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

      @if(count($messages) >9)
      <div style="background-color:#fff; padding: 26px; border-radius: 20px; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);">
        {{ $messages->links() }}
      </div>
          @endif
    </div>

  </main>

@endsection
