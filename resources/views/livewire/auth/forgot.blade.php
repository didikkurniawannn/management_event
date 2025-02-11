@section('title', 'Lupa Password')
<!--begin::Authentication - Sign-in -->
<div class="d-flex flex-column flex-lg-row flex-column-fluid">
  <!--begin::Body-->
  <div class="d-flex flex-column flex-lg-row-fluid w-lg-50 p-10 order-2 order-lg-1">
      <!--begin::Form-->
      <div class="d-flex flex-center flex-column flex-lg-row-fluid">
          <!--begin::Wrapper-->
          <div class="w-lg-500px p-10">

              <!--begin::Form-->
              <form wire:submit.prevent="sendPasswordResetLink">

                  <!--begin::Heading-->
                  <div class="text-center mb-11">
                      <!--begin::Title-->

                      <a href="javascript:void(0)" class="text-center d-block m-b-10">
                        <img src="{{ Storage::disk('public')->url(getApp()->logo_url) }}" class="max-h-75px" height="75px" alt="{{ getApp()->name }}" />
                      </a>

                      <h1 class="text-gray-900 fw-bolder mb-3">
                        @yield('title')
                      </h1>
                      <!--end::Title-->

                      <!--begin::Subtitle-->
                      <div class="text-gray-500 fw-semibold fs-6">
                        {{-- {{getAppName()}} --}}
                      </div>
                      <!--end::Subtitle--->
                  </div>
                  <!--begin::Heading-->


                  <!--begin::Input group--->
                  <div class="fv-row mb-8">
                      <!--begin::Email-->
                      <input placeholder="Email Aktif" class="form-control  bg-transparent @error('email') is-invalid @enderror"
                      type="text" name="email" autocomplete="off" wire:model.live="email" />
                  @error('username')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                      <!--end::Email-->
                  </div>

                  <!--begin::Wrapper-->
                  <div class="d-flex flex-stack flex-wrap gap-3 fs-base fw-semibold mb-8">
                      <div></div>

                      <!--begin::Link-->
                      <a href="{{ route('login') }}" class="link-success">
                          Sudah Punya Akun ?
                      </a>
                      
                      <!--end::Link-->
                  </div>
                  <!--end::Wrapper-->

                  <!--begin::Submit button-->
                  <div class="d-grid mb-10">
                      <button type="submit" class="btn btn-success">

                          <!--begin::Indicator label-->
                          <span class="indicator-label">
                              Reset Password</span>
                          <!--end::Indicator label-->

                          <!--begin::Indicator progress-->
                          <span class="indicator-progress" wire:loading wire:target="signin">
                              Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                          </span>
                          <!--end::Indicator progress-->
                      </button>
                  </div>
                  <!--end::Submit button-->
         
           
              <!--end::Form-->
          </div>
          <!--end::Wrapper-->
      </div>
      <!--end::Form-->
    </form>
    

  </div>
  <!--end::Body-->

  <!--begin::Aside-->
  <div class="d-flex flex-lg-row-fluid w-lg-50 bgi-size-cover bgi-position-center order-1 order-lg-2 bg-success">
    <!--begin::Content-->
    <div class="d-flex flex-column flex-center py-7 py-lg-15 px-5 px-md-15 w-100">
        <!--begin::Image-->
        <img class="d-none d-lg-block mx-auto w-275px w-md-50 w-xl-500px mb-10 mb-lg-20"
            src="{!! asset('backend/themes/assets/media/misc/intro-data.svg') !!}" alt="" />
        <!--end::Image-->

        <!--begin::Title-->
        <h1 class="d-none d-lg-block text-white fs-2qx fw-bolder text-center mb-7">
          {{getAppName()}}
        </h1>
        <!--end::Title-->

        <!--begin::Text-->
        <div class="d-none d-lg-block text-white fs-base text-center">
          {{getDescriptionName()}}
        </div>
        <!--end::Text-->
    </div>
    <!--end::Content-->
</div>
<!--end::Aside-->
</div>
<!--end::Authentication - Sign-in-->