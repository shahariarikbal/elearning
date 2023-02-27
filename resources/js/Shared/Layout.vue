<template>
    <Header />
    <slot />
</template>

<script>
    import Header from './Header.vue';
export default {
    components: {
        Header
    },
    name: "Layout"
}
</script>

<style scoped>

</style>
