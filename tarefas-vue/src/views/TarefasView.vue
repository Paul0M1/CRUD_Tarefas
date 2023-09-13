<template>
    <div class="corpo">
      <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Lista de tarefas</a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarText"
            aria-controls="navbarText"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Logar</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Cadastrar</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <div>
        <h1>Lista de Tarefas</h1>
        <ul>
          <li v-for="tarefa in tarefas" :key="tarefa.id">
            {{ tarefa ? titulo.titulo : ''}}
          </li>
        </ul>
      </div>
      <div class="lado-D">
        <p>Entradas</p>
        <p>Tarefas de hoje</p>
        <p>Vencidos</p>
      </div>
    </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        tarefas: [], // Inicializa os dados com um array vazio
      };
    },
    created() {
  // Chamada à API usando fetch no ciclo de vida created
  fetch('http://localhost:8000/api/tarefas/')
    .then(response => {
      if (!response.ok) {
        throw new Error('Erro na resposta da API');
      }
      return response.json();
    })
    .then(data => {
      console.log(data);
      this.tarefas = (data); // Preenche a lista com os dados da API
    })
    .catch(error => {
      console.error('Erro ao buscar dados da API:', error);
    });
},

  };
  </script>
  
  <style>
  .corpo {
    height: 694px;
  }
  
  .lado-D {
    width: 300px;
    height: 159px;
    padding: 20px; /* Reduzido o padding para ajustar melhor o layout */
    margin: 31px;
  }
  </style>
  