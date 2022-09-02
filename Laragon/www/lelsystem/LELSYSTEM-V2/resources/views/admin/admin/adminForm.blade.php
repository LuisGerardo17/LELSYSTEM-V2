<div class="form-group label-floating">
    <label class="control-label">Cédula</label>
    <input class="form-control" type="text" name="cedula" id="cedula" value="{{ isset($admin) ? $admin->cedula : old('cedula') }}">
  </div>
  <div class="form-group label-floating">
    <label class="control-label">Nombres</label>
    <input class="form-control" type="text" name="nombres" value="{{ isset($admin) ? $admin->nombres : old('nombres') }}">
  </div>

  <div class="form-group label-floating">
      <label class="control-label">Apellidos</label>
      <input class="form-control" type="text" name="apellidos" value="{{ isset($admin) ? $admin->apellidos : old('apellidos') }}">
    </div>
  <div class="form-group label-floating">
    <label class="control-label">Correo</label>
    <input class="form-control" type="text" name="correo" value="{{ isset($admin) ? $admin->correo : old('correo') }}">
  </div>
  <div class="form-group label-floating">
    <label class="control-label">Dirección</label>
    <input class="form-control" type="text" name="direccion" value="{{ isset($admin) ? $admin->direccion : old('direccion') }}">
  </div>
  <div class="form-group label-floating">
    <label class="control-label">Telefono</label>
    <input class="form-control" type="text" name="telefono" value="{{ isset($admin) ? $admin->telefono : old('telefono') }}">
  </div>
  <div class="form-group label-floating">
    <label class="control-label">Contraseña</label>
    <input class="form-control" type="password" name="contrasena" {{ isset($admin) ? 'disabled' : '' }}>
  </div>
  <div class="form-group label-floating">
      <label class="control-label">Confirmar Contraseña</label>
      <input class="form-control" type="password" name="contrasena_verified_at" {{ isset($admin) ? 'disabled' : '' }}>
    </div>
  <div class="form-group">
    <div>
      <input type="text" readonly="" class="form-control" value="{{ isset($admin) ? $admin->imagen : '' }}" placeholder="Foto...">
      <input type="file" name="imagen" >
    </div>
  </div>
  <p class="text-center">
      <button type="submit" class="btn btn-info btn-raised btn-sm"><i class="zmdi zmdi-floppy"></i> Save</button>
  </p>
