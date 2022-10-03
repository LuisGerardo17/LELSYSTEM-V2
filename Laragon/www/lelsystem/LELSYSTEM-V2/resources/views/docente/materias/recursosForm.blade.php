<div class="form-group label-floating">
    <label class="control-label">Codigo</label>
    <input class="form-control" type="text" name="codigo_recurso" value="{{ isset($datos) ? $datos->codigo_recurso : old('codigo_recurso') }}">
    @error('codigo_recurso')
        <p class="alertas">*{{$message}}</p>
    @enderror
  </div>
  <div class="form-group label-floating">
    <label class="control-label">Nombre</label>
    <input class="form-control" type="text" name="nombre_recurso" value="{{ isset($datos) ? $datos->nombre_recurso : old('nombre_recurso') }}">
    @error('nombre_recurso')
        <p class="alertas">*{{$message}}</p>
    @enderror
  </div>
  <div class="form-group label-floating">
    <label class="control-label">Descripcion</label>
    <textarea class="form-control" name="descripcion">{{ isset($datos) ? $datos->descripcion : old('descripcion') }}</textarea>
    @error('descripcion')
        <p class="alertas">*{{$message}}</p>
    @enderror
  </div>
  <div class="form-group label-floating">
    <label class="control-label">Tipo archivo</label>
    <select class="form-control" name="id_tipo_archivo">
        <option>tipo archivo-----</option>
        @foreach($forms as $form)
        <option value="{{ $form->id_tipo_archivo }}" {{(isset($datos) && $form->id_tipo_archivo==$datos->id_tipo_archivo) ? 'selected' : ''}}>{{ $form->tipo }}</option>
        @endforeach
    </select>
    @error('id_tipo_archivo')
        <p class="alertas">*{{$message}}</p>
    @enderror
  </div>
  <p class="text-center">
      <button type="submit" class="btn btn-info btn-raised btn-sm"><i class="zmdi zmdi-floppy"></i> Guardar</button>
  </p>
