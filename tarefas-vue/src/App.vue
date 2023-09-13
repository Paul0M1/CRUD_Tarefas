<template>
  <div id="app">
    
    <router-view/>
  </div>
</template>

<style lang="scss">
.home {
  display: flex; /* Torna os filhos flexíveis */
  justify-content: space-between; /* Espaço igual entre os filhos */
 
}

.left, .right {
  flex: 1; /* Crescem igualmente para ocupar o espaço disponível */
  padding: 20px; /* Espaçamento interno opcional */
  border: 1px solid #ccc; /* Borda opcional para separação visual */
  height: 688px;
  background-color: rgba(255, 255, 255, 0.575);
}

h1{
  display: flex;
  justify-content: center;
  padding: 30px;
}

.btn{
  display: flex;
  padding: 10px;
}
</style>
