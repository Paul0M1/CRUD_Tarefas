<template>
  <div class="home">
    <div class="right">
      <h1>Area de login</h1>
       <p>Entre com seu E-mail</p>
          <div class="input-group mb-3">
            <input type="email" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="email@email.com" required>
          </div>
       <p>Entre com senha</p>
       <div class="input-group mb-3">
         <input type="password" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="**********" required>
       </div>
        <div class="btn">
         <router-link to="/about">Cadastrar</router-link>
         <button type="button"><router-link id="rota" to="/tarefas">Entrar</router-link></button>
        </div>
    </div>
    <div class="left">
      <h2>A fortuna fica ao lado daquele que ousa.</h2>
      <p>Todo progresso acorre fora da zona de conforto.</p>
    </div>
  </div>
</template>

<script>
// @ is an alias to /src
import HelloWorld from '@/components/HelloWorld.vue'

export default {
  name: 'HomeView',
  components: {
    HelloWorld
  }
}
</script>

<style>
#rota{
  text-decoration: none;
}
</style>
