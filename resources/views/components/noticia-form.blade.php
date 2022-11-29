@csrf
<div class="mb-2">
    <label class="form-label " for="example-text-input">Título <span class="text-danger">*</span></label>
    <input type="text" class="form-control {{ $errors->has("titulo") ? "is-invalid" : "" }}" id="titulo" name="titulo" placeholder="Título" value="{{ old('titulo',$noticia->titulo)}}">
    @error('titulo')
        <br><div class="invalid-feedback">*{{$message}}</div><br>
    @enderror<br>
</div>
<div class="mb-2">
    <label class="form-label" for="example-text-input">Slug</label>
    <input type="text" class="form-control" id="slug" name="slug" placeholder="Slug" value="{{ old('slug',$noticia->slug)}}">
    @error('slug')
        <br><small>*{{$message}}</small><br>
    @enderror<br>
</div>

<div class="mb-2">
    <label class="form-label" for="example-text-input">Fecha Noticia</label>
    <input type="text"  class="js-flatpickr form-control" id="fecha_noticia" name="fecha_noticia" placeholder="d-m-Y" data-date-format="d-m-Y" readonly="readonly" value="{{ old('fecha_noticia',$noticia->fecha_noticia->format('d-m-Y'))}}">
    @error('fecha_noticia')
        <br><small>*{{$message}}</small><br>
    @enderror<br>
 </div>
<div class="mb-4">
    <!-- CKEditor Container -->
    <label class="form-label" for="example-text-input">Resumen</label>
    <textarea class="js-simplemde" id="resumen" name="resumen" style="display: none;" rows="3">{{ old('resumen',$noticia->resumen)}}</textarea>
    @error('resumen')
    <br><small>*{{$message}}</small><br>
@enderror<br>
</div>
<div class="mb-4">
    <!-- CKEditor Container -->
    <label class="form-label" for="example-text-input">Texto</label>

    <textarea class="js-simplemde" id="texto" name="texto" style="display: none;" rows="3">{{ old('texto',$noticia->texto)}}</textarea>
</div>
<div class="mb-4">
    <label class="form-label" for="example-text-input">Autor</label>

    @if(!is_null($noticia->user))
    {{ $noticia->user->name }}
    @endif
    <input type="text" class="form-control" id="user_id" name="user_id" placeholder="autor" value="{{ old('user_id',$noticia->user_id)}}">
</div>

<div class="mb-4">
    <label class="form-label" for="example-text-input">Categoría</label>
    <input type="text" class="form-control" id="noticia_categoria_id" name="noticia_categoria_id" placeholder="Categoría" value="{{ old('noticia_categoria_id',$noticia->noticia_categoria_id)}}">
</div>
<div class="mb-4">
    <button type="submit" class="btn btn-success float-right"><i class="fa fa-save"></i> Guardar</button>
    <a href="{{ route('admin.noticias.index') }}" type="submit" class="btn btn-secondary float-right"><i class="fa fa-undo"></i> Regresar</a>
</div>
