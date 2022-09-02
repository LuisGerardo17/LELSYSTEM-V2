<div class="form-group label-floating">
    <label class="control-label">Cédula</label>
    <input class="form-control" type="text" name="cedula" value="{{ ($admin==True) ? $admin->cedula : old('cedula') }}">
  </div>
  <div class="form-group label-floating">
    <label class="control-label">Nombres</label>
    <input class="form-control" type="text" name="nombres" value="{{ ($admin==True) ? $admin->nombres : old('nombres') }}">
  </div>

  <div class="form-group label-floating">
      <label class="control-label">Apellidos</label>
      <input class="form-control" type="text" name="apellidos" value="{{ ($admin==True) ? $admin->apellidos : "" }}">
    </div>
  <div class="form-group label-floating">
    <label class="control-label">Correo</label>
    <input class="form-control" type="text" name="correo" value="{{ ($admin==True) ? $admin->correo : "" }}">
  </div>
  <div class="form-group label-floating">
    <label class="control-label">Dirección</label>
    <input class="form-control" type="text" name="direccion" value="{{ ($admin==True) ? $admin->direccion : "" }}">
  </div>
  <div class="form-group label-floating">
    <label class="control-label">Telefono</label>
    <input class="form-control" type="text" name="telefono" value="{{ ($admin==True) ? $admin->telefono : "" }}">
  </div>
  <div class="form-group label-floating">
    <label class="control-label">Contraseña</label>
    <input class="form-control" type="password" name="contrasena" {{ ($admin==True) ? 'disabled' : "" }}>
  </div>
  <div class="form-group label-floating">
      <label class="control-label">Confirmar Contraseña</label>
      <input class="form-control" type="password" name="contrasena_verified_at" {{ ($admin==True) ? 'disabled' : "" }}>
    </div>
  <div class="form-group">
    <div>
      <input type="text" readonly="" class="form-control" value="{{ ($admin==True) ? $admin->imagen : "" }}" placeholder="Foto...">
      <input type="file" name="imagen" >
    </div>
  </div>
  <p class="text-center">
      <button type="submit" class="btn btn-info btn-raised btn-sm"><i class="zmdi zmdi-floppy"></i> Save</button>
  </p>
