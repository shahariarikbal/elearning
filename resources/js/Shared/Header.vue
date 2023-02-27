<template>
    <div>
        <header class="header-section">
            <nav class="nav-items-wrapper">
                <NavLink href="/" class="navbar-brand">
                    <img class="brand" :src="'/frontend/images/logo.png'" alt="Logo">
                </NavLink>
                <div class="nav-toggle-btn">
                    <div class="btn-inner"></div>
                </div>
                <ul class="nav-list">
                    <li class="nav-item">
                        <NavLink href="/" class="nav-item-link active">
                            <i class="fas fa-home"></i>
                            হোম
                        </NavLink>
                    </li>
                    <li class="nav-item">
                        <NavLink href="/courses" class="nav-item-link">
                            <i class="fab fa-discourse"></i>
                            কোর্স সমূহ
                        </NavLink>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-item-link">
                            <i class="fas fa-video"></i>
                            লাইভ ব্যাচ
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-item-link">
                            <i class="fas fa-fire"></i>
                            অফার
                        </a>
                    </li>
                    <li class="nav-item">
                        <NavLink href="/user/login" class="nav-item-link login-logout">
                            লগ ইন / সাইন আপ
                        </NavLink>
                    </li>
                </ul>
            </nav>
        </header>
    </div>
</template>

<script>
import NavLink from "./NavLink.vue";
export default {
    name: "Header",
    components:{
        NavLink
    }
}
</script>

<style scoped>

</style>
