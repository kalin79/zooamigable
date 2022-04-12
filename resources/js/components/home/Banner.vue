<template>
     <div>
          <section class="homeBanner toscew">
               <div class="boxBackground fullScreen ">
                    <div class="boxContent tounscew">
                         <div class="container-fluid relative">
                              <div class="boxMuchoMejor">
                                   <a href="javascript:void(0)">
                                        <img  src="/frontend/images/mucho.svg" alt="Mucho Mejor" title="Mucho Mejor">
                                   </a>
                              </div>
                              <div class="boxElefante">
                                   <a href="javascript:void(0)">
                                        <img  src="/frontend/images/elefante2.png" alt="" title="">
                                   </a>
                              </div>
                              <div class="boxJirafa">
                                   <a href="javascript:void(0)">
                                        <img  src="/frontend/images/jirafa2.png" alt="" title="">
                                   </a>
                              </div>
                              <div class="d-flex justify-content-center align-items-center">
                                   <div class="centerTitle">
                                        <div class="titleBanner">
                                             <img src="/frontend/images/bienvenido.svg" alt="Bienvenido" title="Bienvenido">
                                        </div>
                                        <div class="boxZoo">
                                             <img src="/frontend/images/zoo.svg" alt="Zoo lógico amigable" title="Zoo lógico amigable">
                                        </div>
                                        <div class="textZoo">
                                             <img src="/frontend/images/amigable2.svg" alt="Amigable" title="Amigable">
                                        </div>
                                        <div class="boxParqueArauco d-flex justify-content-center align-items-center">
                                             <img src="/frontend/images/pa.svg" alt="Parque Arauco" title="Parque Arauco">
                                        </div>
                                        <div class="boxLogos d-flex justify-content-between align-items-center">
                                             <a href="javascript:void(0)">
                                                  <img src="/frontend/images/mega.svg" alt="Mega Plaza" title="Mega Plaza">
                                             </a>
                                             <a href="javascript:void(0)">
                                                  <img src="/frontend/images/quinde.svg" alt="Quinde" title="Quinde">
                                             </a>
                                             <a href="javascript:void(0)">
                                                  <img src="/frontend/images/parque.svg" alt="Parque Lambramani" title="Parque Lambramani">
                                             </a>
                                             <a href="javascript:void(0)">
                                                  <img src="/frontend/images/io.svg" alt="InOutlet" title="InOutlet">
                                             </a>
                                        </div>
                                        <div class="boxScroll d-flex justify-content-center align-items-center">
                                             <a href="javascript:void(0)" v-on:click="irAnimal('intro')" class="d-flex justify-content-center align-items-center flex-column">
                                                  <img src="/frontend/images/mouse.svg" alt="Scroll" title="Scroll">
                                                  <p class="txtCenter">sigue escroleando</p>
                                             </a>
                                        </div>
                                   </div>
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
                         y: $(`#${animal}`),
                         autoKill: false
                    },
                    duration: .5
               })
          }
     }
}
</script>