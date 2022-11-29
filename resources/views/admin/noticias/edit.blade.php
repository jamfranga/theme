@extends('admin.layouts.backend')

@section('css')
<link rel="stylesheet" href="{{ asset('js/plugins/simplemde/simplemde.min.css')}}">
<link rel="stylesheet" href="{{ asset('js/plugins/flatpickr/flatpickr.min.css')}}">
@endsection

@section('content')
  <!-- Hero -->
  <div class="bg-body-light">
    <div class="content content-full">
      <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center py-2">
        <div class="flex-grow-1">
          <h1 class="h3 fw-bold mb-2">
            Page Title
          </h1>
          <h2 class="fs-base lh-base fw-medium text-muted mb-0">
            Subtitle
          </h2>
        </div>
        <nav class="flex-shrink-0 mt-3 mt-sm-0 ms-sm-3" aria-label="breadcrumb">
          <ol class="breadcrumb breadcrumb-alt">
            <li class="breadcrumb-item">
              <a class="link-fx" href="javascript:void(0)">Examples</a>
            </li>
            <li class="breadcrumb-item" aria-current="page">
              Blank
            </li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
  <!-- END Hero -->

  <!-- Page Content -->
  <div class="content">
    <!-- Your Block -->
    <div class="block block-rounded">
        <div class="block-header block-header-default">
          <h3 class="block-title">Crear nueva noticia</h3>
          <div class="block-options">
            <a href="{{ Route('admin.noticias.index') }}" type="submit" class="btn btn-secondary float-right"><i class="fa fa-undo"></i> Regresar</a>

          </div>
        </div>
        <div class="block-content">
            <form action="{{ Route('admin.noticias.update',$noticia) }}" method="POST">
                @method('put')
                 <x-Noticia-form :noticia="$noticia"/>
            </form>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        </div>
    </div>
    <!-- END Your Block -->
  </div>
  <!-- END Page Content -->
@endsection

@section('scripts')

    <script src="{{ asset('js/oneui.app.min.js')}}"></script>

    <script src="{{ asset('js/lib/jquery.min.js')}}"></script>
    <!-- Page JS Plugins -->
    <script src="{{ asset('js/plugins/ckeditor/ckeditor.js')}}"></script>

    <script src="{{ asset('js/plugins/simplemde/simplemde.min.js')}}"></script>

    <script src="{{ asset('js/plugins/flatpickr/flatpickr.min.js')}}"></script>
    <script src="{{ asset('js/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>

    <!-- Page JS Helpers (CKEditor + SimpleMDE plugins) -->
    <script>One.helpersOnLoad(['js-flatpickr', 'js-simplemde']);</script>

    <!-- Page JS Plugins -->
    <script src="{{ asset('js/plugins/bootstrap-notify/bootstrap-notify.min.js')}}"></script>

    <script>
        @if(Session::has('message'))
         One.helpers('jq-notify', {type: 'success', icon: 'fa fa-check me-1', message: '{{ session('message') }}'});
        @endif

        @if(Session::has('error'))
            One.helpers('jq-notify', {type: 'warning', icon: 'fa fa-check me-1', message: '{{ session('error') }}'});
        @endif

        @if(Session::has('info'))
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
                toastr.info("{{ session('info') }}");
        @endif

        @if(Session::has('warning'))
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
                toastr.warning("{{ session('warning') }}");
        @endif


      </script>


@endsection
