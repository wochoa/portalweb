<template>
<div class="container">


     <div class="main_title">
         <br>
         <h1 class="text-center" style=" font-weight: bold;">GOREHCO Y MIDIS ARTICULAN PARA REDUCIR BRECHAS SOCIALES EN SECTORES</h1>
         <hr>
         <br>
     </div>

      <!-- CARRUSEL MAIN -->
      <div class="container" >
                <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner" style="max-width: 800px; height: 500px; margin: auto; object-fit: cover;" >
                    <div class="carousel-item active" data-bs-interval="10000"  >
                            <div class="content_item">
                                <img :src="ruta+'./../img/notaprensa(1).jpg'" class="d-block w-100" alt="..." style="object-fit: cover;" >
                            </div>
                    </div>

                    <div class="carousel-item">
                        <div class="content_item">
                        <img :src="'../'+ruta+'./../img/notaprensa(2).jpg'" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="content_item">
                        <img :src="'../'+ruta+'./../img/notaprensa(3).jpg'" class="d-block w-100" alt="...">
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
            <div class="container">
               <div class="row">
                  <div class="col text-center">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                      <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                      <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                      </svg>
                      <p style="text-align:center;">14 VISTOS</p>
                 </div>
                <div class="col">
                  <p style="text-align:center;">PUBLICADO EL: --/--/----</p>
                </div>
              </div>
            </div>
            <br>
            <div>
              <p>Con el objetivo de disminuir la anemia y desnutrición infantil, intervenir y fortalecer el desarrollo de niños y adolescentes, inclusión económica y protección al adulto mayor, se aprobara el plan de trabajo del programa, Plataformas de Acción para la Inclusión Social - PAIS y se realizará las sesiones de la IAR con presencia de los directores sectoriales a través de los programas sociales del Ministerio de Desarrollo e Inclusión social y el Gobierno Regional Huánuco a favor de la primera infancia. El gerente regional de Desarrollo Social, Gustavo Alvarado Coz, sustentó la importancia de articular esfuerzos para lograr los objetivos y que los beneficiados son los más vulnerables. Agradeció la asistencia de los representantes de los programas a la reunión de trabajo; “es señal de que hay compromiso y apuesto por el desarrollo de Huánuco. finalizó. nEntre tanto; Rosario Estela Valdiviezo, coordinadora de enlace territorial del MIDIS, indicó que todos los programas sociales están retomando la presencialidad en las 11 provincias del departamento y están trabajando en fortalecer la atención a través del programa Pensión 65, Qali Warma, País, Juntos, Fondo de Estímulo al Desempeño (Fed) y el programa nacional Cuna Mas. De esta manera la Gerencia Regional de Desarrollo Social, lidera la Instancia de Articulación Regional (IAR), conformada por los programas sociales, gobiernos provinciales y distritales de Huánuco.</p>
            </div>

           <!-- FIN DE CARRUSEL -->

           <!-- like -->
           <div>
             <meta charset="UTF-8">
             <title> ¿Te gustó este artículo? </title>
             <link rel="stylesheet" href="">
           </div>
           <!-- FIN DE like -->



</div>
</template>

<script>
 import Header  from './Header'
 export default {
     props:['ruta'],
   components:{Header}
 }
</script>

<style>

p{
  text-align: justify;
  justify-content: center;
  font-size: 18px;
  font-size-adjust: initial;
}











/* *{
  box-sizing: border-box;
  transition: all 01s cubic-bezier(0.64, -0.58, .31, 1.5);
} */

</style>
