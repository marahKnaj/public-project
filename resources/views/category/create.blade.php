@extends('backend.layouts.master')
@section('content')
<section class="section">
        <div class="container-fluid">
          <!-- ========== title-wrapper start ========== -->
          <div class="title-wrapper pt-30">
            <div class="row align-items-center">
              <div class="col-md-6">
                <div class="title">
                  <h2>category</h2>
                </div>
              </div>
              <!-- end col -->

          <!-- ========== title-wrapper end ========== -->
<div class="container">
          <div class="row">

<div class="col-2"></div>
            <div class="col-lg-8">
              <div class="card-style settings-card-2 mb-30">
                <div class="title mb-30">
                  <h6>category</h6>
                </div>
                <form action="{{route('category.store')}}" method="POST"  enctype="multipart/form-data" >
                @csrf

                  <div class="row">
                    <div class="col-12">
                      <div class="input-style-1">
                        <label> name</label>
                        <input type="text" placeholder="name" name="name" />
                      </div></div>


                    </div>
                    <div class="col-12">
                      <button class="main-btn primary-btn btn-hover">
                        Add category
                      </button>
                    </div>
                  </div>
                </form>
              </div>
              <!-- end card -->
            </div>
            <!-- end col -->
          </div>
          <!-- end row -->
        </div></div>
        <!-- end container -->
      </section>
      <!-- ========== section end ========== -->

@endsection
