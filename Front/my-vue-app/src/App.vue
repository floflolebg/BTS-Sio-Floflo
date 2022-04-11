<script setup>
// This starter template is using Vue 3 <script setup> SFCs
// Check out https://v3.vuejs.org/api/sfc-script-setup.html#sfc-script-setup
import Menu from './components/Menu.vue'
import Acceuil from "./components/Acceuil.vue";
import crn from "./components/crm.vue";
</script>
<template>
  <Menu></Menu>
  <router-view/>
</template>
<style>
#app {
  text-align: center;
}
</style>
