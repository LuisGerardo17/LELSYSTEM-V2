<div class="form-group label-floating">
    <label class="control-label">Cedula Estudinate</label>
    <select class="form-control" name="cedula">
        <option>Cedula del Estudiante</option>
        @foreach($estudiantes as $estudiante)
        <option value="{{ $estudiante->cedula }}" {{(isset($datos) && $estudiante->cedula==$datos->cedula) ? 'selected' : ''}}>{{ $estudiante->cedula}}</option>
        @endforeach
    </select>
    @error('cedula')
        <p class="alertas">*{{$message}}</p>
    @enderror
  </div>

  <div class="form-group label-floating">
    <label class="control-label">Codigo Curso</label>
    <select class="form-control" name="codigo_curso">
        <option>Codigo Curso</option>
        @foreach($cursos as $curso)
        <option value="{{ $curso->codigo_curso }}" {{(isset($datos) && $curso->codigo_curso==$datos->codigo_curso) ? 'selected' : ''}}>{{ $curso->codigo_curso}}</option>
        @endforeach
    </select>
    @error('codigo_curso')
        <p class="alertas">*{{$message}}</p>
    @enderror
  </div>
<div class="form-group label-floating">
    <label class="control-label"> Estado </label>
      <select class="form-select" name="estado"  value = "{{ isset($datos) ? $datos->estado : old('estado') }}">
          <option value="Activo">Activo</option>
          <option value="Inactivo">Inactivo</option>
       </select>
       @error('estado')
      <p class="alertas">*{{$message}}</p>
      @enderror
 </div>
  <p class="text-center">
      <button type="submit" class="btn btn-info btn-raised btn-sm"><i class="zmdi zmdi-floppy"></i> Guardar</button>
  </p>

