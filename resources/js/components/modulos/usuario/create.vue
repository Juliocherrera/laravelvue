<template>
  <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Crear Usuario</h1>
          </div><!-- /.col -->
         
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
      <div class="content container-fluid">
        <div class="card">
          <div class="card-header">
            <div class="card-tools">
              <router-link class="btn btn-info btn-sm" :to="'/usuario'">
                <i class="fas fa-arrow-left text-white"></i> Regresar
              </router-link>
            </div>
          </div>
          <div class="card-body">
            <div class="container-fluid">
              <div class="card card-info">
                <div class="card-header">
                  <h3 class="card-title">Formulario Registrar Usuario</h3>
                </div>
                <div class="card-body">
                  <form role="form" action="">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form group row">
                          <label class="col-md-3 col-form-label">Primer Nombre</label>
                          <div class="col-md-9">
                            <input type="text" class="form-control" v-model="fillCrearUsuario.cPrimerNombre" @keyup.enter="setRegistrarUsuario">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form group row">
                          <label class="col-md-3 col-form-label">Segundo Nombre</label>
                          <div class="col-md-9">
                            <input type="text" class="form-control" v-model="fillCrearUsuario.cSegundoNombre" @keyup.enter="setRegistrarUsuario">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form group row">
                          <label class="col-md-3 col-form-label">Apellido</label>
                          <div class="col-md-9">
                            <input type="text" class="form-control" v-model="fillCrearUsuario.cApellido" @keyup.enter="setRegistrarUsuario">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form group row">
                          <label class="col-md-3 col-form-label">Usuario</label>
                          <div class="col-md-9">
                            <input type="text" class="form-control" v-model="fillCrearUsuario.cUsuario" @keyup.enter="setRegistrarUsuario">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6 mt-4">
                        <div class="form group row">
                          <label class="col-md-3 col-form-label">Correo Electrónico</label>
                          <div class="col-md-9">
                            <input type="email" class="form-control" v-model="fillCrearUsuario.cCorreo" @keyup.enter="setRegistrarUsuario">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6 mt-4">
                        <div class="form group row">
                          <label class="col-md-3 col-form-label">Contraseña</label>
                          <div class="col-md-9">
                              <el-input placeholder="Please input password" v-model="fillCrearUsuario.cContrasena" @keyup.enter="setRegistrarUsuario" show-password></el-input>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6 mt-3">
                        <div class="form group row">
                          <label class="col-md-3 col-form-label">Fotografía</label>
                          <div class="col-md-9">
                            <input type="file" class="form-control" @change="getFile">
                          </div>
                        </div>
                      </div>
                      
                    </div>
                  </form>
                </div>
                <div class="card-footer">
                  <div class="row">
                    <div class="col-md-4 offset-4">
                      <button type="button" class="btn btn-flat btn-info btnWidth" @click.prevent="setRegistrarUsuario">Registrar</button>
                      <button type="button" class="btn btn-flat btn-default btnWidth" @click.prevent="limpiarCriteriosBsq">Limpiar</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal fade" :class="{show: modalShow}" :style=" modalShow ? mostrarModal : ocultarModal">
          <div class="modal-dialog" role="document">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title"><b>Sistema Laravel y Vue</b></h5>
                      <button class="close" @click="abrirModal"></button>
                  </div>
                  <div class="modal-body">
                      <div class="callout callout-danger msgError" v-for="(item, index) in mensajeError" :key="index" v-text="item"></div>
                  </div>
                  <div class="modal-footer">
                      <button class="btn btn-secondary" @click="abrirModal">Cerrar</button>
                  </div>
              </div>
          </div>
      </div>
    </div>
</template>

<script>
export default {
  data(){
    return {
      fillCrearUsuario: {
        cPrimerNombre: '',
        cSegundoNombre: '',
        cApellido: '',
        cUsuario: '',
        cCorreo: '',
        cContrasena: '',
        oFotografia: ''
      },
      form: new FormData,
      modalShow: false,
      mostrarModal: {
          display: 'block',
          background: '#0000006b',
      },
      ocultarModal: {
          display: 'none',
      },
      error: 0,
      mensajeError: []
    }
  },
    computed: {
    },
    methods: { 
        abrirModal(){
            this.modalShow = !this.modalShow;
        },
        getFile(e){
            //console.log(e);
            this.fillCrearUsuario.oFotografia = e.target.files[0]
        },
        setRegistrarUsuario(){
            //if (this.validarRegistrarUsuario()) {
            //    this.modalShow = true;
            //    return;
            //}
            if (!this.fillCrearUsuario.oFotografia || this.fillCrearUsuario.oFotografia == undefined) {
                this.setGuardarUsuario();
            } else {
                this.setRegistrarArchivo();
            }
        },
        setRegistrarArchivo(){
            this.form.append('file', this.fillCrearUsuario.oFotografia)
            const config = { headers: { 'Content-Type': 'multipart/form-data'}}
            var url = '/archivo/setRegistrarArchivo'
            axios.post(url, this.form, config).then(response =>{
                console.log(response)
            })
        },
        validarRegistrarUsuario(){
            this.error = 0,
            this.mensajeError = [];

            if(!this.fillCrearUsuario.cPrimerNombre){
                this.mensajeError.push("El Primer Nombre es un campo obligatorio")
            }
            if(!this.fillCrearUsuario.cApellido){
                this.mensajeError.push("El Apellido es un campo obligatorio")
            }
            if(!this.fillCrearUsuario.cUsuario){
                this.mensajeError.push("El Usuario es un campo obligatorio")
            }
            if(!this.fillCrearUsuario.cCorreo){
                this.mensajeError.push("El Correo es un campo obligatorio")
            }
            if(!this.fillCrearUsuario.cContrasena){
                this.mensajeError.push("La Contraseña es un campo obligatorio")
            }
            if(this.mensajeError.length){
                this.error = 1;
            }
            return this.error;
        }
    }
}
</script>

<style>

</style>