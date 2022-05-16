<template>
 <div>
            <div class="container pt-4">
                <div id="noticias" class="carousel carousel-dark slide" data-bs-ride="carousel">
                <!-- <div class="carousel-indicators">
                    <button type="button" data-bs-target="#noticias" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#noticias" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#noticias" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div> -->
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="10000">

                        <div class="row">
                            <div class="col-12 col-sm-3" v-for="(prim,index) in noticias" >
                                <div class="card shadow-sm" v-if="index<4" style="height: 400px;">
                                    <img :src="'http://gestionportales.regionhuanuco.gob.pe/storage/'+prim.img1" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ prim.titulo}}</h5>
                                        <p class=" card-text lh-1 textxs" style="font-size: 12px">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        
                                        
                                    </div>
                                    <div class="card-footer d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <a href="#" class="btn btn-primary btn-sm">Leer más</a>
                                            <!-- <a href="#" class="">Another link</a> -->
                                        </div>
                                        <small class="text-muted">{{ prim.fecha}}</small>
                                    </div>
                                </div>
                            </div>

                        </div>
                        
                    </div>

                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-12 col-sm-3" v-for="(prim,index) in noticias" >
                                <div class="card shadow-sm" v-if="index>3" style="height: 400px;">
                                    <img :src="'http://gestionportales.regionhuanuco.gob.pe/storage/'+prim.img1" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ prim.titulo}}</h5>
                                        <p class=" card-text lh-1 textxs" style="font-size: 12px">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        
                                        
                                    </div>
                                    <div class="card-footer d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <a href="#" class="btn btn-primary btn-sm">Leer más</a>
                                            <!-- <a href="#" class="">Another link</a> -->
                                        </div>
                                        <small class="text-muted">{{ prim.fecha}}</small>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    

                </div>
                <!-- <button class="carousel-control-prev" type="button" data-bs-target="#noticias" data-bs-slide="prev" >
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#noticias" data-bs-slide="next" >
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button> -->
                    <div align="right" class="mt-2 p-2">
                        <button class="carrolser_control btn btn-info btn-sm btn-circle" type="button" data-bs-target="#noticias" data-bs-slide="prev" style="right: 50px !important;margin-botom:-5px">
                            <span class="carousel-control-prev-icon " aria-hidden="true" style="width: 1rem !important; height: 1rem !important;"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carrolser_control btn btn-info btn-sm ml-2 btn-circle" type="button" data-bs-target="#noticias" data-bs-slide="next" style="right: 0px !important;">
                            <span class="carousel-control-next-icon" aria-hidden="true" style="width: 1rem !important; height: 1rem !important;"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                        <router-link :to="'/noticias'" class="btn btn-primary btn-sm">Ver más noticias <i class="fas fa-arrow-circle-right" aria-hidden="true"></i></router-link>
                    </div>
                </div>
                
            </div>

 </div>
</template>

<script>
import axios from 'axios'
 export default {
     props:['ruta'],
     data() {
         return {
       noticias:{}
     }
     },
     mounted() {
         this.noticiasini();
     },
     methods: {
        noticiasini()
        {
            var url='api/noticiasini';
            axios.get(url)
                .then(response=>{
                    this.noticias=response.data.noticias;
                    
                });
        }
   }
   
 }
</script>

<style lang="css" scoped>

</style>
