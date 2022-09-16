
  <div class="form-group label-floating">
    <label class="control-label">Nombre</label>
    <input class="form-control" type="text" name="nombre_curso" value="{{ isset($datos) ? $datos->nombre_curso : old('nombre_curso') }}">
    @error('nombre_curso')
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
    <label class="control-label">Fecha de Inicio</label>
    <input class="form-control" name="fecha_inicio" type="date" value = "{{ isset($datos) ? $datos->fecha_inico : old('fecha_inicio') }}">
    @error('fecha_inicio')
        <p class="alertas">*{{$message}}</p>
    @enderror
  </div> 


  <div class="form-group label-floating">
    <label class="control-label">Fecha de Finalización</label>
    <input class="form-control" name="fecha_fin" type="date" value = "{{ isset($datos) ? $datos->fecha_fin : old('fecha_fin') }}">
    @error('fecha_fin')
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
  <div class="form-group label-floating">
    <label class="control-label">Cedula Docente</label>
    <select class="form-control" name="cedula">
        <option>Cedula del Docente</option>
        @foreach($docentes as $docente)
        <option value="{{ $docente->cedula }}" {{(isset($datos) && $docente->cedula==$datos->cedula) ? 'selected' : ''}}>{{ $docente->cedula}}</option>
        @endforeach
    </select>
    @error('cedula')
        <p class="alertas">*{{$message}}</p>
    @enderror
  </div>

  <p class="text-center">
      <button type="submit" class="btn btn-info btn-raised btn-sm"><i class="zmdi zmdi-floppy"></i> Guardar</button>
  </p>
