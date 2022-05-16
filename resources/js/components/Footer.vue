<template>
    <footer class="footer mt-auto py-3 bg-secondary" style="background:#2745a0 !important;">
        <div class="container">
            <div class="row">
                
                   <!-- REDES SOCIALES -->
                   <div class="col-md-6  mb-4">
                        <h3 class="text-light">REDES SOCIALES</h3>
                            <div class="row mt-4">
            
                            <div class="col-2">
                                <a href="https://www.facebook.com/gobiernoregionalhuanuco" class="btn btn-primary btn-circle btn-xm">
                                <i class="fa-brands fa-facebook fa-1x"></i>                                
                                </a>
                            </div>

                           <div class="col-2">
                                <a  href="https://www.instagram.com/gorehco"  class="btn btn-info btn-circle btn-xm">
                                <i class="fa-brands fa-instagram fa-1x"></i>                                
                                </a>
                           </div>

                           <div class="col-2 mt-1">
                                <a href="https://twitter.com/HuanucoGobierno?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" class="btn btn-primary btn-circle btn-xm">
                                <i class="fa-brands fa-twitter fa-1x"></i>                                
                                </a>
                          </div>

                          <div class="col-2 mt-1">
                               <a href="https://www.youtube.com/channel/UCFCS1cmD-9iM6nqetz-qXoA" class="btn btn-danger btn-circle btn-xm">
                               <i class="fa-brands fa-youtube  fa-1x"></i>                              
                               </a>
                         </div>
                       </div>
                   </div>
                   <div class="col-md-6 footer-col">
                        <h4 class="text-light">TRANSPARENCIA WEB</h4>
                        <hr/>
                        <h5 class="text-light">ADMINISTRACIÓN:</h5>
                   </div>
                
            </div>
            <!-- FIN REDES SOCIALES -->
        </div>

        <div class="footer mt-auto py-3 bg-secondary" style="background:#000000 !important;">
            <span class="text-light">Copyright  2022 Gobierno Regional Huánuco. Todos los derechos reservados Diseñado y programado por la Sub gerencia de Modernización y Transformación Digital</span>
        </div>
    </footer>
    
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
<style>
.footer {
  text-align: center;
}
hr{
   height: 3px;
  width: 10%;
  background-color:#d3daee;
  margin:0 auto;
  margin-bottom: 3px;
}
.btn-circle.btn-xl {
    width: 70px;
    height: 70px;
    padding: 10px 16px;
    border-radius: 35px;
    font-size: 24px;
    line-height: 1.33;
}

.btn-circle.btn-xm {
    width: 50px;
    height: 50px;
    padding: 9px 3px;
    border-radius: 35px;
    font-size: 24px;
    line-height: 1.33;
}

.btn-circle {
    width: 30px;
    height: 30px;
    padding: 6px 0px;
    border-radius: 15px;
    text-align: center;
    font-size: 12px;
    line-height: 1.42857;
}

</style>