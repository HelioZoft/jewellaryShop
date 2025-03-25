<template>
    <home-hero />
    <home-about />
    <home-whyus />
    <home-stats />
    <home-manu />
    <home-testi />
    <home-gallery />
</template>

<script>
    import HomeAbout from '../components/Home/HomeAbout.vue';
    import HomeGallery from '../components/Home/HomeGallery.vue';
    import HomeHero from '../components/Home/HomeHero.vue';
    import HomeManu from '../components/Home/HomeManu.vue';
    import HomeStats from '../components/Home/HomeStats.vue';
    import HomeTesti from '../components/Home/HomeTesti.vue';
    import HomeWhyUs from '../components/Home/HomeWhyUs.vue';

    export default {
        name : 'Home' ,
        components : {
            HomeAbout,
            HomeGallery,
            HomeHero,
            HomeManu,
            HomeStats,
            HomeTesti,
            HomeWhyUs
        }
    }
</script>