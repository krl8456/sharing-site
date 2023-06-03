<script setup lang="ts">
import { RouterLink, RouterView } from 'vue-router'
import Navbar from './components/Navbar.vue'
</script>

<template>
  <header>
    <Navbar />
  </header>
  <main>
    <RouterView />
  </main>
</template>

<style>
  * {
    margin: 0;
    padding: 0;
  }
  main {
    display: flex;
    flex-direction: column;
    align-items: center;
  }
</style>

