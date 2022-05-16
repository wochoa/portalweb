<template>
 <div>
            <div class="container pt-4">
                <div id="enlaces" class="carousel carousel-dark slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#enlaces" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#enlaces" data-bs-slide-to="1" aria-label="Slide 2"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="10000">
                        <div class="row">
                            <div class="col-2">
                                <div class="link" style="width: 12rem;">
                                    <a href="https://www.gob.pe/regionhuanuco" class="btn">
                                    <img :src="ruta+'./../img/enlace-refe/link(1).jpg'" class="d-block w-100" alt="...">
                                    </a>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="link" style="width: 12rem;">
                                    <a href="http://www.pronied.gob.pe/" class="btn">
                                    <img :src="ruta+'./../img/enlace-refe/link(1).png'" class="d-block w-100" alt="...">
                                    </a>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="link" style="width: 12rem;">
                                    <a href="http://www.mintra.gob.pe/migrante/noticias_0.php" class="btn">
                                    <img :src="ruta+'./../img/enlace-refe/link(10).jpg'" class="d-block w-100" alt="...">
                                    </a>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="link" style="width: 12rem;">
                                  <a href="https://www.gob.pe/minam" class="btn">
                                    <img :src="ruta+'./../img/enlace-refe/link(11).jpg'" class="d-block w-100" alt="...">
                                    </a>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="link" style="width: 12rem;">
                                   <a href="https://apps.contraloria.gob.pe/ciudadano/" class="btn">
                                    <img :src="ruta+'./../img/enlace-refe/link(12).jpg'" class="d-block w-100" alt="...">
                                    </a>
                                </div>
                            </div>
                        </div>
                        
                    </div>

                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-2">
                                <div class="link" style="width: 12rem;">
                                    <a href="https://www.inei.gob.pe/" class="btn">
                                    <img :src="ruta+'./../img/enlace-refe/link(13).jpg'" class="d-block w-100" alt="...">
                                    </a>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="link" style="width: 12rem;">
                                    <a href="https://www.gob.pe/indeci" class="btn">
                                    <img :src="ruta+'./../img/enlace-refe/link(14).jpg'" class="d-block w-100" alt="...">
                                    </a>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="link" style="width: 12rem;">
                                    <a href="https://www.gob.pe/iiap" class="btn">
                                    <img :src="ruta+'./../img/enlace-refe/link(15).jpg'" class="d-block w-100" alt="...">
                                    </a>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="link" style="width: 12rem;">
                                    <a href="https://www.fondep.gob.pe/" class="btn">
                                    <img :src="ruta+'./../img/enlace-refe/link(16).jpg'" class="d-block w-100" alt="...">
                                    </a>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="link" style="width: 12rem;">
                                   <a href="https://www.sanciones.gob.pe/rnssc/#/transparencia/acceso" class="btn">
                                    <img :src="ruta+'./../img/enlace-refe/link(17).jpg'" class="d-block w-100" alt="...">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#enlaces" data-bs-slide="prev" >
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#enlaces" data-bs-slide="next" >
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
                </div>
                
            </div>

 </div>
</template>

<script>
 export default {
     props:['ruta'],
  
 }
</script>

<style lang="css" scoped>
.link{
    text-align: center;
    vertical-align: middle;
    padding: 0.375rem 0.75rem;
}
.row {
    align-items: center;
}
</style>
