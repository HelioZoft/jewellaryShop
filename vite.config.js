import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';

export default defineConfig({
    plugins: [
        laravel({
            input: [ 'resources/js/app.js'],
            refresh: true,
        }),
        vue(),
    ],
    build: {
        emptyOutDir: true, // Ensures the build directory is cleaned properly
        rollupOptions: {
            input: 'resources/js/app.js', // Main entry point
        },
    },
    resolve: {
        alias: {
            vue: 'vue/dist/vue.esm-bundler.js',
        },
    },
});
