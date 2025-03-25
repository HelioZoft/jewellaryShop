<template>
    <div class="index-page">
        <nav-bar />
        <main class="main">
            <router-view></router-view>
        </main>
    </div>
</template>

<script>
   import NavBar from '../components/NavBar.vue';
   export default {
        components : {
            NavBar
        }
   }
</script>
