<div class="form-group label-floating">
	<label class="control-label">Cedula</label>
	<input class="form-control" type="text" name="cedula" value="{{ isset($matri) ? $matri->cedula : old('cedula') }}" {{ isset($matri) ? 'disabled' : '' }}">
</div>
<div class="form-group label-floating">
	<label class="control-label">Nombres</label>
	<input class="form-control" type="text" name="nombres" value="{{ isset($matri) ? $matri->nombres : old('nombres') }}" {{ isset($matri) ? 'disabled' : '' }}">
</div>
<div class="form-group label-floating">
	<label class="control-label">Apellidos</label>
	<input class="form-control" type="text" name="apellidos" value="{{ isset($matri) ? $matri->apellidos : old('apellidos') }}" {{ isset($matri) ? 'disabled' : '' }}">
</div>
<div class="form-group label-floating">
	<label class="control-label">Correo</label>
	<input class="form-control" type="text" name="correo" value="{{ isset($matri) ? $matri->correo : old('correo') }}" {{ isset($matri) ? 'disabled' : '' }}">
</div>
<div class="form-group label-floating">
	<label class="control-label">Codigo curso</label>
	<input class="form-control" type="text" name="codigo_curso" value="{{$matri->codigo_curso}}">
</div>
<div class="form-group label-floating">
	<label class="control-label">Estado</label>
	<br>
	<input name="estado" type="radio" value="{{$matri->estado}}">
	<label>Activa</label>
	<input name="estado" type="radio" value="{{$matri->estado}}">
	<label>Inactiva</label>
</div>
<p class="text-center">
	<button href="#!" class="btn btn-info btn-raised btn-sm"><i class="zmdi zmdi-floppy"></i> Guardar</button>
</p>