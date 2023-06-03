<script setup lang="ts">
import { RouterLink, RouterView } from 'vue-router'
import Navbar from './components/Navbar.vue'
</script>

<template>
  <header>
    <Navbar />
  </header>

  <RouterView />
</template>

<style>
  * {
    margin: 0;
    padding: 0;
  }
</style>

