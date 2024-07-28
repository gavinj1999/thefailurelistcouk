<template>

        <div class="bg-slate-400">
            <Header />
        </div>

        <div class="container mx-auto">
            <slot />
            <Footer />
        </div>

</template>

<script setup>
import Header from "@/Components/Header.vue";
import Footer from "@/Components/Footer.vue";
</script>

<style scoped></style>
