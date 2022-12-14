@extends('admin.layouts.backend')

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
          <h3 class="block-title">Listado de Noticias</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </div>
        </div>
        <div class="block-content">

          <div class="float-end my-3">
            <a href="{{ Route('admin.noticias.create') }} " class="btn btn-info "><i class="fa fa-plus"></i> Nueva Noticia</a>
          </div>

          <table class="table table-bordered table-striped table-vcenter">
            <thead>
              <tr>

                <th style="min-width:30%">Título</th>
                <th class="d-none d-md-table-cell" >Resumen</th>
                <th class="d-none d-sm-table-cell" >Categoría</th>
                <th class="text-center" style="width: 100px;">Actions</th>
              </tr>
            </thead>
            <tbody>

             @foreach ($noticias as $noticia)
                <tr>

                <td class="fw-semibold fs-sm">
                  <a href="{{ Route('admin.noticias.edit',$noticia) }}">{{ $noticia->titulo }}</a>
                </td>
                <td class="d-none d-md-table-cell fs-sm">{{ $noticia->resumen }}</td>
                <td class="d-none d-sm-table-cell">
                  <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">{{ $noticia->id_categoria }}</span>
                </td>
                <td class="text-center">
                  <div class="btn-group">
                    <a href="{{ Route('admin.noticias.edit',$noticia) }}"{{ $noticia->titulo }}" class="btn btn-sm btn-alt-secondary js-bs-tooltip-enabled" data-bs-toggle="tooltip" aria-label="Edit">
                      <i class="fa fa-fw fa-pencil-alt"></i>
                    </a>
                    <a type="button" class="btn btn-sm btn-alt-secondary js-bs-tooltip-enabled" data-bs-toggle="tooltip" aria-label="Delete">
                      <i class="fa fa-fw fa-times"></i>
                    </a>
                  </div>
                </td>
              </tr>
              @endforeach

            </tbody>
          </table>
        </div>
      </div>
    <!-- END Your Block -->
  </div>
  <!-- END Page Content -->
@endsection
