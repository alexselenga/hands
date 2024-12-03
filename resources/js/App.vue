<script setup>
import {ref} from 'vue'

const drawer = ref(null)
</script>

<template>
  <v-app id="inspire">
    <v-navigation-drawer v-model="drawer">
      <v-list density="compact" nav>
        <v-list-item>
          <router-link :to="{ name: 'Default' }" class="mr-4">
            Главная
          </router-link>
        </v-list-item>

        <v-list-item>
          <router-link :to="{ name: 'Articles' }" class="mr-4">
            Каталог статей
          </router-link>
        </v-list-item>
      </v-list>
    </v-navigation-drawer>

    <v-app-bar>
      <v-app-bar-nav-icon @click="drawer = !drawer"></v-app-bar-nav-icon>

      <v-app-bar-title>Hands</v-app-bar-title>
    </v-app-bar>

    <v-main>
      <router-view/>
    </v-main>
  </v-app>
</template>

<style scoped>

</style>
