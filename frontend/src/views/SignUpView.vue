<script>
import { ref } from 'vue'

let username = ref('')
let email = ref('')
let password = ref('')

function onSubmit() {}
</script>

<template>
  <form method="post" class="form" @submit.prevent="onSubmit">
    <label for="username">Username:</label>
    <input
      type="username"
      id="username"
      name="username"
      class="signup-input"
      required
      v-model="username"
    />
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" class="signup-input" required v-model="email" />
    <label for="password">Password:</label>
    <input
      type="password"
      id="password"
      name="password"
      class="signup-input"
      required
      v-model="password"
    />
    <button class="signup-button">Sign up</button>
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
.signup-input {
  height: 2.5em;
  background-color: rgba(255, 255, 255, 0.2);
  color: whitesmoke;
  padding-left: 0.3em;
}
.signup-button {
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
@media (min-width: 494px) {
  .form {
    width: 22em;
  }
}
</style>
