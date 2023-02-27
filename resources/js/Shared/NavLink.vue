<template>
    <Link href="/">
    <slot/>
    </Link>
</template>

<script>
import { Link } from '@inertiajs/vue3'
export default {
    name: "NavLink",
    components:{
        Link
    }
}
</script>

<style scoped>

</style>
