<template>
  <div>

    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark" aria-label="Main navigation" style="background:#2745a0 !important;">
          
          <div class="container">
            
              <router-link to="/" class="navbar-brand">
                  <img :src="ruta+'./../img/logo.png'" alt="" height="40">
              </router-link>
              
            
            <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
        
            <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">

              </ul>
              <ul class="navbar-nav ms-auto">
                <li class="nav-item"><router-link to="/noticias" class="nav-link">Institucional</router-link></li>
                <li class="nav-item"><a class="nav-link" href="#"> Menu </a></li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"> Dropdown right </a>
                    <ul class="dropdown-menu dropdown-menu-end fade-down">
                    <li><a class="dropdown-item" href="#"> Submenu item 1</a></li>
                    <li><a class="dropdown-item" href="#"> Submenu item 2 </a></li>
                    </ul>
                </li>
              </ul>
              <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
              </form>
            </div>
          </div>
    </nav>
        
    <div class="nav-scroller bg-body shadow-sm " style="background-color: rgba(5, 74, 145, 0.376) !important;">
      <nav class="container nav nav-underline" aria-label="Secondary navigation">
        <a class="nav-link active" aria-current="page" href="#">Dashboard</a>
        <a class="nav-link" href="#">
          Friends
          <span class="badge bg-light text-dark rounded-pill align-text-bottom">27</span>
        </a>
        <a class="nav-link" href="#">Explore</a>
        <a class="nav-link" href="#">Suggestions</a>
        <a class="nav-link" href="#">Link</a>
        <a class="nav-link" href="#">Link</a>
        <a class="nav-link" href="#">Link</a>
        <a class="nav-link" href="#">Link</a>
        <a class="nav-link" href="#">Link</a>
      </nav>
    </div>

     
  </div>
</template>
<script>
    export default {
       props:['ruta'],
       
        data() {
          return {
            menus:'',
            idpagina:'',
            NombreUnidad:'',
          }
        },
         mounted() {//  esta funcion hace que cargue por defecto
            this.Getmenus();
        },
        methods: {
          async  Getmenus(){
            //  url='/menus';
             axios.get('/menus')
            .then(response=>{
              // cargar datos
              this.menus = response.data
            })
            .catch(error=>{
              alert(error)
            })


          }
        }
        
    }
</script>
<style>
/* html,
body {
  overflow-x: hidden; /* Prevent scroll on narrow devices 
} */

/* body {
  padding-top: 65px;
} */

@media (max-width: 991.98px) {
  .offcanvas-collapse {
    position: fixed;
    top: 56px; /* Height of navbar */
    bottom: 0;
    left: 100%;
    width: 100%;
    padding-right: 1rem;
    padding-left: 1rem;
    overflow-y: auto;
    visibility: hidden;
    background-color: #343a40;
    transition: transform .3s ease-in-out, visibility .3s ease-in-out;
  }
  .offcanvas-collapse.open {
    visibility: visible;
    transform: translateX(-100%);
  }
}

.nav-scroller {
  position: relative;
  z-index: 2;
  height: 2.75rem;
  overflow-y: hidden;
}

.nav-scroller .nav {
  display: flex;
  flex-wrap: nowrap;
  padding-bottom: 1rem;
  margin-top: -1px;
  overflow-x: auto;
  color: rgba(255, 255, 255, .75);
  text-align: center;
  white-space: nowrap;
  -webkit-overflow-scrolling: touch;
}

.nav-underline .nav-link {
  padding-top: .75rem;
  padding-bottom: .75rem;
  font-size: .875rem;
  color: #6c757d;
}

.nav-underline .nav-link:hover {
  color: #007bff;
}

.nav-underline .active {
  font-weight: 500;
  color: #343a40;
}

.bg-purple {
  background-color: #6f42c1;
}

@media all and (min-width: 992px) {
	.navbar .dropdown-menu-end{ right:0; left: auto;  }
	.navbar .nav-item .dropdown-menu{  display:block; opacity: 0;  visibility: hidden; transition:.3s; margin-top:0;  }
	.navbar .nav-item:hover .nav-link{ color: #fff;  }
	.navbar .dropdown-menu.fade-down{ top:80%; transform: rotateX(-75deg); transform-origin: 0% 0%; }
	.navbar .dropdown-menu.fade-up{ top:180%;  }
	.navbar .nav-item:hover .dropdown-menu{ transition: .3s; opacity:1; visibility:visible; top:100%; transform: rotateX(0deg); }
}
/* .nav-underline .nav-link{
    padding-top: 0.75rem;
    padding-bottom: 0.5rem!important;
    font-size: .875rem;
} */
</style>