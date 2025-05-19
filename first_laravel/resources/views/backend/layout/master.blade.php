@extends("backend.layout.app")


@section("app_content")

<div class="wrapper">
  <!-- Navbar -->
    @include("backend.inc.navbar")
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->

  @include("backend.inc.sidebar")

  <div class="content-wrapper p-2">
        @yield("master_content")
  </div>
@include("backend.inc.footer")
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>

@endsection
