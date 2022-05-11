<template>
     <div>
          <section class="homeIntro toscew" id="intro">
               <div class="boxBackground ">
                    <div class="boxContent tounscew">
                         <div class="container-fluid">
                              <div class="boxTitle">
                                   <h3 class="txtCenter mb-2">¡Descubre nuestra exposición con</h3>
                                   <h2 class="txtCenter txtUppercase">
                                        esculturas a tamaño real!
                                   </h2>
                              </div>
                              <div class="boxDescription mt-3">
                                   <p class="txtCenter">
                                        Porque en MegaPlaza Chincha, nos va MUCHO MEJOR protegiendo a nuestros animalitos, <br>
                                        evitando sacarlos de su hábitat natural y apostando por un mundo más sostenible. <br>
                                        ¿Estás listo para conocerlos?
                                   </p>
                              </div>
                              <div class="boxAnimals d-flex justify-content-center align-items-center flex-wrap">
                                   <a href="javascript:void(0)" v-on:click="irAnimal('Elefante')" class="d-flex justify-content-end align-items-center flex-column">
                                        <img src="/frontend/images/icoelefante.png" alt="ELMER">
                                        <p class="txtCenter">ELMER</p>
                                   </a>
                                   <a href="javascript:void(0)" v-on:click="irAnimal('Jirafa')" class="d-flex justify-content-end align-items-center flex-column">
                                        <img src="/frontend/images/icojirafa.png" alt="ZAFA">
                                        <p class="txtCenter">ZAFA</p>
                                   </a>
                                   <a href="javascript:void(0)" v-on:click="irAnimal('Rex')" class="d-flex justify-content-end align-items-center flex-column">
                                        <img src="/frontend/images/icorex.png" alt="Rex">
                                        <p class="txtCenter">GERARD</p>
                                   </a>
                                   <a href="javascript:void(0)" v-on:click="irAnimal('Canguro')" class="d-flex justify-content-end align-items-center flex-column">
                                        <img src="/frontend/images/icocanguro.png" alt="LULI Y MAURA">
                                        <p class="txtCenter">LULI Y MAURA</p>
                                   </a>
                                   <a href="javascript:void(0)" v-on:click="irAnimal('Zorro')" class="d-flex justify-content-end align-items-center flex-column">
                                        <img src="/frontend/images/icozorro.png" alt="ZUN ZUN">
                                        <p class="txtCenter">ZUN ZUN</p>
                                   </a>
                              </div>
                         </div>
                    </div>
               </div>
               
          </section>
     </div>
</template>
<script>
export default {
     methods: {
          irAnimal: function (animal) {
               gsap.to(window, {
                    scrollTo: {
                         y: $(`#view${animal}`),
                         autoKill: false
                    },
                    duration: .5
               })
          }
     }
}
</script>