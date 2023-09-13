<template>
  <div class="body">
    <div>
      <h1>Cadastrar-se</h1>
    </div>
    <div class="dados">
      <p>Nome completo</p>
       <div class="input-group mb-3">
         <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
       </div>
      <p>Endereço de e-mail</p>
       <div class="input-group mb-3">
         <input type="email" class="form-control" placeholder="email@email.com" aria-label="Username" aria-describedby="basic-addon1">
        </div>
      <p>Senha de acesso</p>
       <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="*********" aria-label="Username" aria-describedby="basic-addon1">
       </div>
       <div>
         <router-link to="/">Já tenho uma conta</router-link>
         <button type="button"><router-link id="rota" to="/tarefas">Entrar</router-link></button>
        </div>
    </div>
  </div>
</template>

<style>
body{
  background-color: rgba(255, 255, 255, 0.575);
  
}

h1{
  display: flex;
  text-align: center;
}

.dados{
  text-align: center;
  width: 50%;
}

input{
  display: flex;
  text-align: center;
  margin: 20px;
}

a{
  margin: 50px;
}
</style>
