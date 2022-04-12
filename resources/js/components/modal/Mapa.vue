<template>
     <div>
          <div class="boxModal">
               <div class="d-flex flex-column justify-content-center align-items-center fullHeight">
                    <div class="boxContentCenter relative">
                         <div class="btnClosePopUp">
                              <a href="javascript:void(0)" v-on:click="closePopUp()">
                                   <img src="/frontend/images/close2.png" />
                              </a>
                         </div>
                         <img src="/frontend/images/mapaglobal.png" />
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