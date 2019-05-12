<template>
       <div>sdaf
                   <ul>
                       <li v-for="er in titles" v-bind:key="er.id">{{er.title}}</li>
                   </ul>
       </div>
</template>
<script>


    export default {
        data() {
            return {
                titles: []
            }
            
                
                
        },
        created() {
            axios.get('./api/profile')
            .then(response => this.titles = response.data);
        }
    }
</script>
<style scoped>
    
</style>