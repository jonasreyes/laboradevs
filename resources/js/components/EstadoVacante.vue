<template>
  <div>
    <span 
      class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full"
      :class="claseEstadoVacante()"
      @click="cambiarEstado"
      :key="estadoVacanteData"
    >
      <span 
      class="material-icons"
      v-if="estadoVacanteData === 1"
      >toggle_on</span>
      <span 
      class="material-icons"
      v-else>toggle_off</span>
      {{ estadoVacante }}
    </span>
  </div>
</template>

<script>
export default {
  props: ['estado', 'vacanteId'],
  mounted(){
      this.estadoVacanteData = Number(this.estado)
    },
  data: function(){
      return{
          estadoVacanteData: null
        }
    },
  methods: {
    claseEstadoVacante(){
        return this.estadoVacanteData === 1 ? "bg-teal-100 text-teal-500" : "bg-grey-300 text-grey-500 shadow"
      },
    cambiarEstado(){
        console.log()
        if(this.estadoVacanteData === 1){
            this.estadoVacanteData = 0;
          } else {
              this.estadoVacanteData = 1;
          }

          // Enviar a axios; definición de variable de datos a remitir "params"
          const params = {
              estado: this.estadoVacanteData
            }
          // Envío de datos con axios..  
          axios
          .post('/vacantes/' + this.vacanteId, params)
          .then(respuesta => console.log(respuesta))
          .catch(error => console.log(error))
      }
    },
  computed:{
      estadoVacante(){
          return this.estadoVacanteData === 1 ? 'Activa' : 'Inactiva'
        }
    }
    
}
</script>
