<template>
     <a href="javascript:void(0)" class="navmobil" v-on:click="viewMenu(1)">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
               <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
          </svg>
     </a>
     
     <div class="headerNavMain">
          <a href="javascript:void(0)" class="closeNav" v-on:click="viewMenu(0)">
               <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
               <path fill-rule="evenodd" d="M13.854 2.146a.5.5 0 0 1 0 .708l-11 11a.5.5 0 0 1-.708-.708l11-11a.5.5 0 0 1 .708 0Z"/>
               <path fill-rule="evenodd" d="M2.146 2.146a.5.5 0 0 0 0 .708l11 11a.5.5 0 0 0 .708-.708l-11-11a.5.5 0 0 0-.708 0Z"/>
               </svg>
          </a>
          <div class="boxLogoNav ">
               <div class="d-flex justify-content-center  align-items-center">
                    <img src="/frontend/images/lmenu.png" alt="Parque Arauco" title="Parque Arauco">
               </div>
          </div>
          <nav class="d-flex flex-column justify-content-center align-items-xl-center align-items-start">
               <div class="d-flex justify-content-center align-items-center">
                    <a href="javascript:void(0)" v-on:click="irAnimal('Elefante')" class="relative">
                         <div class="iconNav">
                              <div class="iconCircle">
                                   <div class="iconCircle2 d-flex justify-content-center align-items-center">
                                        <img src="/frontend/images/elefante.png" alt="Elefante" title="Elefante" />
                                   </div>
                              </div>
                         </div>
                    </a>
                    <p v-on:click="irAnimal('Elefante')">ELMER</p>
               </div>
               <div class="d-flex justify-content-center align-items-center">
                    <a href="javascript:void(0)" v-on:click="irAnimal('Jirafa')" class="relative iconBlue">
                         <div class="iconNav">
                              <div class="iconCircle">
                                   <div class="iconCircle2 d-flex flex-column justify-content-center align-items-center">
                                        <img src="/frontend/images/jirafa.png" alt="Jirafa" title="Jirafa" />
                                   </div>
                              </div>
                         </div>
                    </a>
                    <p v-on:click="irAnimal('Jirafa')">ZAFA</p>
               </div>
               <div class="d-flex justify-content-center align-items-center">
                    <a href="javascript:void(0)" v-on:click="irAnimal('Rex')" class="relative iconOrange dino">
                         <div class="iconNav">
                              <div class="iconCircle">
                                   <div class="iconCircle2 d-flex flex-column justify-content-center align-items-center">
                                        <img src="/frontend/images/rex.png" alt="Rex" title="Rex" />
                                   </div>
                              </div>
                         </div>
                    </a>
                    <p v-on:click="irAnimal('Rex')">GERARD</p>
               </div>
               <div class="d-flex justify-content-center align-items-center">
                    <a href="javascript:void(0)" v-on:click="irAnimal('Canguro')" class="relative iconBlueDark canguro">
                         <div class="iconNav">
                              <div class="iconCircle">
                                   <div class="iconCircle2 d-flex flex-column justify-content-center align-items-center">
                                        <img src="/frontend/images/canguro.png" alt="Canguro" title="Canguro" />
                                   </div>
                              </div>
                         </div>
                    </a>
                    <p v-on:click="irAnimal('Canguro')">MAURA & MAURA  </p>
               </div>
               <div class="d-flex justify-content-center align-items-center">
                    <a href="javascript:void(0)" v-on:click="irAnimal('Zorro')" class="relative">
                         <div class="iconNav">
                              <div class="iconCircle">
                                   <div class="iconCircle2 d-flex flex-column justify-content-center align-items-center">
                                        <img src="/frontend/images/zorro.png" alt="Zorro" title="Zorro" />
                                   </div>
                              </div>
                         </div>
                    </a>
                    <p v-on:click="irAnimal('Zorro')">ZUN ZUN</p>
               </div>
               <div class="d-flex justify-content-center align-items-center">
                    <a href="/mucho-mejor" class="relative iconLightBlue mucho">
                         <div class="iconNav">
                              <div class="iconCircle">
                                   <div class="iconCircle2 d-flex flex-column justify-content-center align-items-center">
                                        <img src="/frontend/images/mucho.png" alt="Mucho Mejor" title="Mucho Mejor" />
                                   </div>
                              </div>
                         </div>
                    </a>
                    <p v-on:click="linkPage('mucho-mejor')">MUCHO MEJOR</p>
               </div>
               <div class="d-flex justify-content-center align-items-center">
                    <a href="javascript:void(0)" class="relative iconOrange" v-on:click="openPopUp()">
                         <div class="iconNav">
                              <div class="iconCircle">
                                   <div class="iconCircle2 d-flex flex-column justify-content-center align-items-center">
                                        <img src="/frontend/images/mapa.png" alt="Mapa" title="Mapa" />
                                   </div>
                              </div>
                         </div>
                    </a>
                    <p>MAPA</p>
               </div>
          </nav>
     </div>
</template>

<script>
export default {
     methods: {
          linkPage: function(link){
               top.location.href = `/${link}`
          },
          openPopUp: function () {
               $('.boxModal').addClass('active')
          },
          viewMenu: function (valor) {
               if (valor === 1){
                    $('.headerNavMain').addClass('active');
               }else{
                    $('.headerNavMain').removeClass('active');
               }
          },
          irAnimal: function (animal) {
               gsap.to(window, {
                    scrollTo: {
                         y: $(`#view${animal} .boxBackground2`),
                         autoKill: false
                    },
                    duration: .5
               })
          }
     }
}
</script>