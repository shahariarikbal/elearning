<template>
    <div>
        <header class="header-section">
            <nav class="nav-items-wrapper">
                <NavLink href="/" class="navbar-brand">
                    <img class="brand" :src="'/setting/' + $page.props.setting.allSetting.logo" alt="Logo">
                </NavLink>
                <div class="nav-toggle-btn" onclick="myFunction()">
                    <div class="btn-inner"></div>
                </div>
                <ul class="nav-list" id="navList">
                    <li class="nav-item">
                        <NavLink href="/" class="nav-item-link active">
                            হোম
                        </NavLink>
                    </li>
                    <li class="nav-item">
                        <NavLink href="/courses" class="nav-item-link">
                            কোর্স সমূহ
                        </NavLink>
                    </li>
                    <li class="nav-item">
                        <NavLink href="/blogs" class="nav-item-link">
                            ব্লগ
                        </NavLink>
                    </li>
                    <li class="nav-item">
                        <NavLink href="/team/members" class="nav-item-link">
                            টীম
                        </NavLink>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-item-link">
                            লাইভ ব্যাচ
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-item-link">
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
