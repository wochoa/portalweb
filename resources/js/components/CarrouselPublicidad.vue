<template>
 <div style="background:#ccc;">
            <div class="container-fluid" style="padding:0px !important;">
                <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner" > <!-- style="max-width: 1300px; height: 700px; margin: auto; object-fit: cover;" -->
                    <div class="carousel-item active" data-bs-interval="10000">
                        <img :src="ruta+'./../img/1_town-1500x430.jpg'" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                           <!-- <h5>First slide label</h5>
                            <p>Some representative placeholder content for the first slide.</p>-->
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img :src="'../'+ruta+'./../img/1_steps-1500x430.jpg'" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <!--<h5>First slide label</h5>
                            <p>Some representative placeholder content for the first slide.</p>-->
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img :src="'../'+ruta+'./../img/1_board-1500x430.jpg'" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <!--<h5>First slide label</h5>
                            <p>Some representative placeholder content for the first slide.</p>-->
                        </div>
                    </div>
                </div>
                <!-- <button class="carrolser_control" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev" style="right: 50px !important;margin-botom:-5px">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carrolser_control" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next" style="right: 0px !important;">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button> -->
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
.container {
    top: 0;
    left: 0;
    /* min-height: 500px; */
}
</style>
