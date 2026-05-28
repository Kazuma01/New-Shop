<template>
  <div class="page">

    <h1>Usuários</h1>

    <button @click="fetchUsers" :disabled="loading">
      {{ loading ? 'Carregando...' : 'Buscar' }}
    </button>

    <!-- skeletons -->
    <div v-if="loading" class="list">
      <div class="skeleton" v-for="n in 5" :key="n" />
    </div>

    <!-- dados -->
    <div v-else class="list">
      <div class="card" v-for="user in users" :key="user.id">
        <span class="name">{{ user.advice   }}</span>
        <span class="id">#{{ user.id }}</span>
      </div>
    </div>

  </div>
</template>

<script setup>
import { ref } from 'vue'

const users   = ref([])
const loading = ref(false)

async function fetchUsers() {
  loading.value = true
  // sua URL aqui
  const res = await fetch(`https://api.adviceslip.com/advice/${Math.floor(Math.random() * 100) + 1}`)
  users.value = await res.json()
  loading.value = false
}
</script>

<style scoped>
.page {
  padding: 2rem;
  display: flex;
  flex-direction: column;
  gap: 1.5rem;
  max-width: 500px;
}

button {
  width: fit-content;
  padding: .5rem 1.25rem;
  cursor: pointer;
}

.list {
  display: flex;
  flex-direction: column;
  gap: .75rem;
}

.card {
  display: flex;
  justify-content: space-between;
  padding: .75rem 1rem;
  border: 1px solid #ccc;
  border-radius: 8px;
}

.id { color: #999; font-size: .85rem; }

.skeleton {
  height: 48px;
  border-radius: 8px;
  background: linear-gradient(90deg, #e0e0e0 25%, #f0f0f0 50%, #e0e0e0 75%);
  background-size: 200% 100%;
  animation: shimmer 1.2s infinite;
}

@keyframes shimmer {
  from { background-position: 200% 0; }
  to   { background-position: -200% 0; }
}
</style>