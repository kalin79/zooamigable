<template>
     <div>
          <div class="boxModal">
               <div class="d-flex flex-column justify-content-center align-items-center fullHeight">
                    <div class="boxContentCenter relative">
                         <div class="boxLinks">
                              <a class="punto1" href="https://www.google.com/maps/place/MegaPlaza,+Las+Americas,+Pisco+11601/@-13.71175,-76.197422,17z/data=!4m13!1m7!3m6!1s0x911065f68455cfbd:0xec24ad3d2e5b3117!2sMegaPlaza,+Las+Americas,+Pisco+11601!3b1!8m2!3d-13.7116159!4d-76.1953996!3m4!1s0x911065f68455cfbd:0xec24ad3d2e5b3117!8m2!3d-13.7116159!4d-76.1953996"></a>
                              <a class="punto2" href="https://www.google.com/maps/place/Megaplaza+express+Chincha+Alta/@-13.4136142,-76.1484004,15z/data=!4m5!3m4!1s0x0:0x18c77ad67c1da423!8m2!3d-13.4136142!4d-76.1484004"></a>
                              <a class="punto3" href="https://www.google.com/maps/place/MegaPlaza+-+CA%C3%91ETE/@-13.0751984,-76.3732374,15z/data=!4m2!3m1!1s0x0:0x33556b3e9727bc35?sa=X&ved=2ahUKEwjHm5Ptnd33AhUQE7kGHQayAAUQ_BJ6BAhPEAU"></a>
                              <a class="punto4" href="https://www.google.com/maps/place/El+Quinde+Shopping+Plaza+Ica/@-14.0743938,-75.7418816,17z/data=!3m1!4b1!4m5!3m4!1s0x9110e2ec5f515db5:0x6fabc73b25a5aa2e!8m2!3d-14.074399!4d-75.7396929"></a>
                              <a class="punto5" href="https://www.google.com/maps/place/Lambramani,+Arequipa+04002/@-16.4089468,-71.5389458,15z/data=!3m1!4b1!4m5!3m4!1s0x91424b022b4291ad:0xf9f68a50f4ae09a3!8m2!3d-16.4095669!4d-71.5241735"></a>
                              <a class="punto6" href="https://www.google.com/maps/place/Mega+Plaza/@-11.9942325,-77.0634276,17z/data=!3m1!4b1!4m5!3m4!1s0x9105ce543477f8d9:0x9d64f6794789376b!8m2!3d-11.9942378!4d-77.0612389"></a>
                              <a class="punto7" href="https://www.google.com/maps/place/Megaplaza+Express/@-12.2311079,-76.914899,17z/data=!3m1!4b1!4m5!3m4!1s0x9105bc0c289c8c7f:0x47a4a2cc00a09b27!8m2!3d-12.2311132!4d-76.9106718"></a>
                              <a class="punto8" href="https://www.google.com/maps/place/InOutlet+Premium+Lur%C3%ADn/@-12.2870466,-76.8773585,17z/data=!3m1!4b1!4m5!3m4!1s0x9105bcdea4c97e69:0x1fe63a2e56426bc0!8m2!3d-12.2870519!4d-76.8751698"></a>
                              <a class="punto9" href="https://www.google.com/maps/place/Megaplaza+Huaral/@-11.5019508,-77.2298919,17z/data=!3m1!4b1!4m5!3m4!1s0x91068a3b2e71edab:0x6d0474dd774642ad!8m2!3d-11.5019561!4d-77.2256647"></a>
                              <a class="punto10" href="https://www.google.com/maps/place/Mega+Plaza/@-9.1023622,-78.5621497,17z/data=!3m1!4b1!4m5!3m4!1s0x91ab840382eb656d:0x756cb259716ea2e3!8m2!3d-9.1023675!4d-78.5579225"></a>
                              <a class="punto11" href="https://www.google.com/maps/place/El+Quinde+Shopping+Plaza/@-7.1530124,-78.517815,16z/data=!4m5!3m4!1s0x91b25af1e7af25f1:0x856e5d75fafb351d!8m2!3d-7.1492954!4d-78.5096431"></a>
                              <a class="punto12" href="https://www.google.com/maps/place/MegaPlaza+Ja%C3%A9n/@-5.7278165,-78.798438,17z/data=!4m12!1m6!3m5!1s0x91b4fb0bb0671969:0xda003ac4000b3cc2!2sMegaPlaza+Ja%C3%A9n!8m2!3d-5.7278218!4d-78.7962493!3m4!1s0x91b4fb0bb0671969:0xda003ac4000b3cc2!8m2!3d-5.7278218!4d-78.7962493"></a>
                         </div>
                         <div class="btnClosePopUp">
                              <a href="javascript:void(0)" v-on:click="closePopUp()">
                                   <img src="/frontend/images/close2.png" />
                              </a>
                         </div>
                         <img src="/frontend/images/mapaglobalfin.png" />
                    </div>
               </div>
          </div>
     </div>
</template>
<script>
export default {
     methods: {
          closePopUp: function () {
               $('.boxModal').removeClass('active')
          }
     }
}
</script>