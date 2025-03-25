<template>
    <div class="index-page">
        <nav-bar />
        <main>
            <router-view></router-view>
        </main>
    </div>
</template>

<script>
  import NavBar from './layouts/NavBar.vue';
  export default {
    name : "UserApp",
    components : {
        NavBar,
    }
  }
</script>
