<template>
  <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Usuario</h1>
          </div><!-- /.col -->
         
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
      <div class="content container-fluid">
        <div class="card">
          <div class="card-header">
            <div class="card-tools">
              <router-link class="btn btn-info btn-sm" :to="'/'">
                <i class="fas fa-plus-square text-white"></i> Nuevo Usuario
              </router-link>
            </div>
          </div>
          <div class="card-body">
            <div class="container-fluid">
              <div class="card card-info">
                <div class="card-header">
                  <h3 class="card-title">Criterios de Búsqueda</h3>
                </div>
                <div class="card-body">
                  <form role="form" action="">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form group row">
                          <label class="col-md-3 col-form-label" for="nombre">Nombre</label>
                          <div class="col-md-9">
                            <input type="text" class="form-control">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form group row">
                          <label class="col-md-3 col-form-label" for="usuario">Usuario</label>
                          <div class="col-md-9">
                            <input type="text" class="form-control">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6 mt-3">
                        <div class="form group row">
                          <label class="col-md-3 col-form-label" for="correo">Correo Electronico</label>
                          <div class="col-md-9">
                            <input type="email" class="form-control">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6 mt-3">
                        <div class="form group row">
                          <label class="col-md-3 col-form-label" for="estado">Estado</label>
                          <div class="col-md-9">
                            <input type="text" class="form-control">
                          </div>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
                <div class="card-footer">
                  <div class="row">
                    <div class="col-md-4 offset-4">
                      <button class="btn btn-flat btn-info btnWidth">Buscar</button>
                      <button class="btn btn-flat btn-default btnWidth">Limpiar</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card card-info">
                <div class="card-header">
                  <h3 class="card-title">Bandeja de resultados</h3>
                </div>
                <div class="card-body table-responsive">
                  <table class="table table-hover table-head-fixed text-nowrap projects">
                    <thead>
                      <tr>
                        <th>Fotografía</th>
                        <th>Nombre</th>
                        <th>Correo</th>
                        <th>Usuario</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          <img src="" alt="">
                        </td>
                        <td>Diego Maradona</td>
                        <td>diego@gmail.com</td>
                        <td>d10s</td>
                        <td>
                          <span class="badge badge-success">Activo</span>
                        </td>
                        <td>
                          <button class="btn btn-primary btn-sm">
                            <i class="fas fa-folder"></i> Ver
                          </button>
                          <button class="btn btn-info btn-sm">
                            <i class="fas fa-pencil-alt"></i> Editar
                          </button>
                          <button class="btn btn-success btn-sm">
                            <i class="fas fa-key"></i> Permiso
                          </button>
                          <button class="btn btn-danger btn-sm">
                            <i class="fas fa-trash"></i> Desactivar
                          </button>
                          <button class="btn btn-success btn-sm">
                            <i class="fas fa-check"></i> Activar
                          </button>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
</template>

<script>
export default {

}
</script>

<style>

</style>