<template>
 <div>



     <div class="mt-4">
        
         <h1 class="text-center text-secondary">Noticias</h1>
         <hr>

     </div>
     <!-- CARRUSEL MAIN -->
      <div class="container" style="max-width: 1300px; margin: auto; ">
                <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner" style="max-width: 1300px; height: 500px; margin: auto; object-fit: cover;">
                    <div class="carousel-item active" data-bs-interval="10000" >
                            <div class="content_item">
                                <img :src="ruta+'./../img/noticia1.jpg'" class="d-block w-100" alt="..." style="object-fit: cover;" >
                            </div>
                        <div class="carousel-caption d-none d-md-block" >
                           <hr>
                           <h4>GOREHCO Y MIDIS ARTICULAN PARA REDUCIR BRECHAS SOCIALES EN SECTORES</h4>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="content_item">
                        <img :src="'../'+ruta+'./../img/noticia2.jpg'" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-caption d-none d-md-block" >
                            <hr>
                            <h4>CAPACITAN A PRODUCTORES PARA PLANIFICACIÓN DE VENTAS EN SAN MARCOS - UMARI</h4>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="content_item">
                        <img :src="'../'+ruta+'./../img/noticia3.jpg'" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-caption d-none d-md-block" >
                            <hr>
                            <h4>DIVERSAS AUTORIDADES DE HUAMALÍES EN CONJUNTO CON EL GOBERNADOR REGIONAL SOSTIENEN ENTREVISTA CON VICEMINISTRO DE TRANSPORTES, PROVÍAS DESCENTRALIZADO Y PROVÍAS NACIONAL</h4>
                        </div>
                    </div>
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev" >
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>

                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next" >
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
                </div>
                </div>
            <!-- FIN DE CARRUSEL -->
            <!-- NOTICIAS DE ACTUALIDAD -->
            <div class="pt-3 pb-3">
                <div class="container">
                    <div class="actualidad">
                        <div class="title-box">
                        <h4 class="text-center">ACTUALIDAD</h4>
                        </div>
                        <div class="row">
                        <div class="col">
                              <img :src="'../'+ruta+'./../img/noticia1.jpg'" height="400">
                              <h3>GOREHCO Y MIDIS ARTICULAN PARA REDUCIR BRECHAS SOCIALES EN SECTORES</h3>
                              <h6>18 de ABRIL 2022</h6>
                              <router-link :to="'/internoticias'" class="btn btn-outline-primary">Ver Más</router-link>
                        </div>
                        <div class="col">
                            <div class="col">
                                <div class="row">
                                    <div class="col">
                                         <img :src="'../'+ruta+'./../img/noticia2.jpg'" height="200">
                                    </div>
                                    <div class="col">
                                         <h5>CAPACITAN A PRODUCTORES PARA PLANIFICACIÓN DE VENTAS EN SAN MARCOS - UMARI</h5>
                                         <h6>18 de ABRIL 2022</h6>
                                         <a href="#" class="btn btn-outline-primary btn-sm">Ver Más</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="row">
                                    <div class="col">
                                         <img :src="'../'+ruta+'./../img/noticia3.jpg'" height="200">
                                    </div>
                                    <div class="col">
                                         <h5>CAPACITAN A PRODUCTORES PARA PLANIFICACIÓN DE VENTAS EN SAN MARCOS - UMARI</h5>
                                         <h6>18 de ABRIL 2022</h6>
                                         <a href="#" class="btn btn-outline-primary btn-sm">Ver Más</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="row">
                                    <div class="col">
                                         <img :src="'../'+ruta+'./../img/noticia4.jpg'" height="200">
                                    </div>
                                    <div class="col">
                                         <h5>CAPACITAN A PRODUCTORES PARA PLANIFICACIÓN DE VENTAS EN SAN MARCOS - UMARI</h5>
                                         <h6>18 de ABRIL 2022</h6>
                                         <a href="#" class="btn btn-outline-primary btn-sm">Ver Más</a>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <a href="#" class="btn btn-primary">Ver Más Noticias</a>
                            <br>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- FIN DE NOTICIAS DE ACTUALIDAD -->
               <!-- INVESTIGACIÓN-->
            <div class="pt-3 pb-3">
                <div class="container">
                    <div class="actualidad">
                        <div class="title-box1">
                        <h4 class="text-center">INVESTIGACIÓN</h4>
                        </div>
                        <div class="row">
                        <div class="col">
                              <img :src="'../'+ruta+'./../img/noticia1.jpg'" height="400">
                              <h3>GOREHCO Y MIDIS ARTICULAN PARA REDUCIR BRECHAS SOCIALES EN SECTORES</h3>
                              <h6>18 de ABRIL 2022</h6>
                              <a href="#" class="btn btn-outline-danger">Ver Más</a>
                        </div>
                        <div class="col">
                            <div class="col">
                                <div class="row">
                                    <div class="col">
                                         <img :src="'../'+ruta+'./../img/noticia2.jpg'" height="200">
                                    </div>
                                    <div class="col">
                                         <h5>CAPACITAN A PRODUCTORES PARA PLANIFICACIÓN DE VENTAS EN SAN MARCOS - UMARI</h5>
                                         <h6>18 de ABRIL 2022</h6>
                                         <a href="#" class="btn btn-outline-danger btn-sm">Ver Más</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="row">
                                    <div class="col">
                                         <img :src="'../'+ruta+'./../img/noticia3.jpg'" height="200">
                                    </div>
                                    <div class="col">
                                         <h5>CAPACITAN A PRODUCTORES PARA PLANIFICACIÓN DE VENTAS EN SAN MARCOS - UMARI</h5>
                                         <h6>18 de ABRIL 2022</h6>
                                         <a href="#" class="btn btn-outline-danger btn-sm">Ver Más</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="row">
                                    <div class="col">
                                         <img :src="'../'+ruta+'./../img/noticia4.jpg'" height="200">
                                    </div>
                                    <div class="col">
                                         <h5>CAPACITAN A PRODUCTORES PARA PLANIFICACIÓN DE VENTAS EN SAN MARCOS - UMARI</h5>
                                         <h6>18 de ABRIL 2022</h6>
                                         <a href="#" class="btn btn-outline-danger btn-sm">Ver Más</a>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <a href="#" class="btn btn-danger" style="align-content: flex-end;">Ver Más Artículos de Investigación</a>
                            <br>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- FIN DE INVESTIGACIÓN -->
    </div>

</template>

<script>
 import Header  from './Header'
 export default {
     props:['ruta'],
   components:{Header}
 }
</script>

<style lang="css" scoped>


.title-box {
    box-shadow: 1px;
    background-color: #1a368b;
    color: #ffffff;
    font-weight: bold;
   border-radius: 10px;
}
.title-box1 {
    box-shadow: 1px;
    background-color: #E73434;
    color: #ffffff;
    font-weight: bold;

   border-radius: 10px;
}
.actualidad{

    border-radius: 10px;
    box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
}
h1{
   font-weight: normal;
   font-weight: bold;
   color: aliceblue;
}

hr{
   height: 3px;
  width: 10%;
  background-color:#ffffff;
  margin:0 auto;
  margin-bottom: 3px;
}
.container {
    top: 0;
    left: 0;
    min-height: 500px;
    height: 50%;
}

h4{
   font-weight: normal;
   font-weight: bold;
   color: aliceblue;
}

.carouselExampleDark {
    height: 50%;
}

.carousel-item ::before {
    content: '';
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0;
    bottom: 0;
    background: linear-gradient(to bottom, rgba(255,0,0,0),rgba(39, 69, 160, 0.90));
    object-fit: cover;
}


</style>
