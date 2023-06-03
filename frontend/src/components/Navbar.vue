<script setup lang="ts"></script>

<template>
  <nav class="navbar-wrapper">
    <RouterLink class="home-link" to="/">Sharing</RouterLink>
    <div class="authentication-options">
      <RouterLink class="sign-in" to="/signin">Sign in</RouterLink>
      <RouterLink class="sign-up" to="/signup">Sign up</RouterLink>
    </div>
  </nav>
</template>

<style scoped>
@import url('https://fonts.googleapis.com/css2?family=Righteous&display=swap');

.navbar-wrapper {
  font-family: 'Righteous', cursive;
  max-width: 100vw;
  border: 3px solid gray;
  margin: 0;
  padding: 0.5em;
  padding-left: 1.5em;
  display: flex;
  align-items: center;
}
.authentication-options {
  display: flex;
  margin-left: auto;
  margin-right: 5em;
  gap: 2.5em;
}
.home-link {
  font-size: 1.5em;
  color: green;
}
.sign-in, .sign-up {
    color: whitesmoke;
}
.sign-in, .sign-up,
.home-link {
  text-decoration: none;
}
</style>
