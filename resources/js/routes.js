import Vue from "vue"
import Router from 'vue-router'

Vue.use(Router)

export default new Router({
    routes:[
        { path: '/login',name:'login', component: require('./components/modulos/authenticate/login').default },
        { path: '/',name:'dashboard.index', component: require('./components/modulos/dashboard/index').default },
        { path: '/categoria',name:'categoria.index', component: require('./components/modulos/categoria/index').default },
        { path: '/cliente',name:'cliente.index', component: require('./components/modulos/cliente/index').default },
        { path: '/pedido',name:'pedido,index', component: require('./components/modulos/pedido/index').default },
        { path: '/permiso',name:'permiso.index', component: require('./components/modulos/permiso/index').default },
        { path: '/permiso/crear', name:'permiso.crear', component: require('./components/modulos/permiso/create').default },
        { path: '/permiso/editar/:id',name:'permiso.editar', component: require('./components/modulos/permiso/edit').default, props: true },
        
        { path: '/producto',name:'producto.index', component: require('./components/modulos/producto/index').default },
        { path: '/reporte',name:'reporte.index', component: require('./components/modulos/reporte/index').default },
        { path: '/rol',name:'rol.index', component: require('./components/modulos/rol/index').default },
        { path: '/rol/crear',name:'rol.crear', component: require('./components/modulos/rol/create').default },
        { path: '/rol/editar/:id',name:'rol.editar', component: require('./components/modulos/rol/edit').default, props: true },
        { path: '/usuario',name:'usuario.index', component: require('./components/modulos/usuario/index').default },
        { path: '/usuario/create',name:'usuario.create', component: require('./components/modulos/usuario/create').default },
        { path: '/usuario/editar/:id', name:'usuario.editar', component: require('./components/modulos/usuario/edit').default, props: true },
        { path: '/usuario/ver/:id', name:'usuario.ver', component: require('./components/modulos/usuario/view').default, props: true },
        { path: '/usuario/permiso/:id',name:'usuario.permiso', component: require('./components/modulos/usuario/permission').default, props: true },
    ],
    mode: 'history',
    linkExactActiveClass: 'active'
})