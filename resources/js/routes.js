
import Inicio  from './components/Inicio'
import Noticias from './components/Noticias.vue';
import InterNoticias from './components/InterNoticias.vue';
import Convocatorias from './components/Convocatorias.vue';
import Mesaspartesvirtual from './components/Mesaspartesvirtual.vue';
import Pagina from './components/Pagina.vue';
// import Profile from './components/admin/ProfileComponent.vue'
// import User from './components/admin/UserComponent.vue'

export const routes = [
    {
        path:'/',
        component:Inicio
    },
    {
        path:'/noticias',
        component:Noticias
    },
    {
        path:'/internoticias',
        component:InterNoticias
    },
    {
        path:'/Mesaspartevirtual',
        component:Mesaspartesvirtual
    },
    {
        path:'/lconvocatorias',
        component:Convocatorias
    },
    {
        path:'/pagina/:id',
        name:'Paginaid',
        component:Pagina
    },
    // { 
    //     path:'/users',
    //     component:User
    // },

];