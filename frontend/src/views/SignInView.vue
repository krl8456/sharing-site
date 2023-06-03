<script setup lang="ts">
  import { ref } from 'vue';
  
  let email = ref("");
  let password = ref("");


  function onSubmit(){}
</script>

<template>
  <form method="post" class="form" @submit.prevent="onSubmit">
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" class="signin-input" required v-model="email"/>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" class="signin-input" required v-model="password"/>
    <button class="signin-button">Sign in</button>
    <div class="create-account"><p>Dont have an account?</p> <RouterLink to="/signup">Create one</RouterLink></div>
  </form>
</template>

<style scoped>
@import url('https://fonts.googleapis.com/css2?family=Righteous&display=swap');

.form {
  font-family: 'Righteous', cursive;
  display: flex;
  flex-direction: column;
  width: 20em;
  margin-top: 6em;
  gap: 1em;
  padding: 2em;
  /* border: 2px solid gray; */
  border-radius: 5px;
  box-shadow: rgba(255, 255, 255, 0.2) 0px 7px 29px 0px;
  color: lightgrey;
}
.signin-input {
  height: 2.5em;
  background-color: rgba(255, 255, 255, 0.2);
  color: whitesmoke;
  padding-left: 0.3em;
}
.signin-button {
  font-family: 'Righteous', cursive;
  background-color: green;
  border: 0;
  height: 3em;
  width: 7em;
  border-radius: 10px;
  align-self: center;
  margin-top: 2em;
  color: whitesmoke;
}

.create-account {
  display: flex;
  flex-direction: column;
  align-items: center;
  margin-top: 2em;
}
@media (min-width: 494px) {
  .form {
    width: 22em;
  }
  .create-account {
    flex-direction: row;
    gap: 1em;
  }
}
</style>
