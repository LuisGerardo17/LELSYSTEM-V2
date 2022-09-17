<div class="form-group label-floating">
  <label class="control-label">Cedula</label>
  <select class="form-control" name="cedula">
    <option>Cedula</option>
    @foreach($estudiantes as $estudiante)
    <option value="{{ $estudiante->cedula}}" {{(isset($listadoEstudiante) && $estudiante->cedula==$listadoEstudiante->cedula) ? 'selected': ''  }}>{{ $estudiante->cedula}}</option>
    @endforeach

    <div class="form-group label-floating">
      <label class="control-label">Fecha</label>
      <input class="form-control" type="date" name="fecha" value="{{ isset($listadoEstudiante) ? $listadoEstudiante->fecha : old('fecha') }}">
    </div>
    <div class="form-group label-floating">
      <label class="control-label"> Descripcion </label>


      <select class="form-select" name="descripcion" value="{{ isset($listadoEstudiante) ? $listadoEstudiante->descripcion : old('descripcion') }}">
        <option value="Presente">Presente</option>
        <option value="Atraso">Atraso</option>
        <option value="Falta Justificada">Falta Justificada</option>
        <option value="Falta injustificada">Falta Injustificada</option>
      </select>

    </div>
    <p class="text-center">
      <button href="#!" class="btn btn-info btn-raised btn-sm"><i class="zmdi zmdi-floppy"></i> Registrar asistencia</button>
    </p>