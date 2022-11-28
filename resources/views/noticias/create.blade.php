@extends('layouts.backend')

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
        </div>
        <div class="block-content">
            <form action="{{ Route('noticias.store') }}" method="POST">
                @csrf
                <div class="mb-2">
                    <label class="form-label " for="example-text-input">Título <span class="text-danger">*</span></label>
                    <input type="text" class="form-control {{ $errors->has("titulo") ? "is-invalid" : "" }}" id="titulo" name="titulo" placeholder="Título" value="{{ old('titulo')}}">
                    @error('titulo')
                        <br><div class="invalid-feedback">*{{$message}}</div><br>
                    @enderror<br>
                </div>
                <div class="mb-2">
                    <label class="form-label" for="example-text-input">Slug</label>
                    <input type="text" class="form-control" id="slug" name="slug" placeholder="Slug" value="{{ old('titulo')}}">
                    @error('slug')
                        <br><small>*{{$message}}</small><br>
                    @enderror<br>
                </div>

                <div class="mb-2">
                    <label class="form-label" for="example-text-input">Fecha Noticia</label>
                    <input type="text"  class="js-flatpickr form-control" id="fecha_noticia" name="fecha_noticia" placeholder="d-m-Y" data-date-format="Y-m-d" readonly="readonly">
                    @error('fecha_noticia')
                        <br><small>*{{$message}}</small><br>
                    @enderror<br>
                 </div>
                <div class="mb-4">
                    <!-- CKEditor Container -->
                    <label class="form-label" for="example-text-input">Resumen</label>
                    <textarea class="js-simplemde" id="resumen" name="resumen" style="display: none;" rows="3">{{ old('resumen')}}</textarea>
                    @error('resumen')
                    <br><small>*{{$message}}</small><br>
                @enderror<br>
                </div>
                <div class="mb-4">
                    <!-- CKEditor Container -->
                    <label class="form-label" for="example-text-input">Texto</label>

                    <textarea class="js-simplemde" id="texto" name="texto" style="display: none;" rows="3">{{ old('texto')}}</textarea>
                </div>
                <div class="mb-4">
                    <label class="form-label" for="example-text-input">Autor</label>
                    <input type="text" class="form-control" id="id_usuario" name="id_usuario" placeholder="autor" value="{{ old('id_usuario')}}">
                </div>

                <div class="mb-4">
                    <label class="form-label" for="example-text-input">Categoría</label>
                    <input type="text" class="form-control" id="id_categoria" name="id_categoria" placeholder="Categoría" value="{{ old('id_categoria')}}">
                </div>
                <div class="mb-4">
                    <button type="submit" class="btn btn-success float-right">Guardar</button>
                    <a href="{{ route('noticias.index') }}" type="submit" class="btn btn-secondary float-right">Regresar</a>
                </div>

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



@endsection
