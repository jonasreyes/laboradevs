<template>
<div>

<ul class="flex flex-wrap justify-center">
  <li 
  class="border border-grey-500 px-10 py-3 mb-3 mr-4 rounded"
  :class="verificarClaseActiva(skill.nombre)"
  v-for="( skill, i ) in this.skills"
  v-bind:key="i" 
  @click="activar($event)"
  >{{ skill.nombre }}</li>
</ul>

<input type="hidden" name="skills" id="skills">

</div>
</template>


<script>
export default {
  props: ['skills', 'oldskills'],
    data: function(){
      return {
          habilidades: new Set()
        }
      },
      created: function(){
          if(this.oldskills){
              const skillsArray = this.oldskills.split(',');
              skillsArray.forEach(skill => this.habilidades.add(skill));
            }
        },
      mounted: function() {
        document.querySelector('#skills').value = this.oldskills;
        },
    methods: {
        activar(e){
           if(e.target.classList.contains('bg-teal-400')){
               // el skill está activo
                e.target.classList.remove('bg-teal-400')

                // Eliminar del set de habilidades
                this.habilidades.delete(e.target.textContent);

             } else{
                // No está activo, lo añadimos entonces.
                e.target.classList.add('bg-teal-400')
                
                // agregar al set de habilidades
                this.habilidades.add(e.target.textContent);
               }

               // agregar habilidades al input hidden
               const stringHabilidades = [...this.habilidades];
               document.querySelector('#skills').value = stringHabilidades;
          },
          verificarClaseActiva(skill){
              return this.habilidades.has(skill) ? 'bg-teal-400' : '';
            }
      }
}
</script>
