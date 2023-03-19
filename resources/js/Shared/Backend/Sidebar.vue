<template>
    <div>
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <ul class="nav">
                <li class="nav-item nav-profile">
                    <a href="#" class="nav-link">
                        <div class="nav-profile-image">
                            <img :src="'/Backend/assets/images/faces/face1.jpg'" alt="profile">
                            <span class="login-status online"></span>
                            <!--change to offline or busy as needed-->
                        </div>
                        <div class="nav-profile-text d-flex flex-column">
                            <span class="font-weight-bold mb-2">{{ $page.props.auth.user.name }}</span>
                            <span class="text-secondary text-small">Owner</span>
                        </div>
                        <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <NavLink class="nav-link" :href="route('dashboard')">
                        <span class="menu-title">Dashboard</span>
                        <i class="mdi mdi-home menu-icon"></i>
                    </NavLink>
                </li>
                <li class="nav-item">
                    <NavLink class="nav-link" :href="route('services')">
                        <span class="menu-title">Services</span>
                        <i class="mdi mdi-contacts menu-icon"></i>
                    </NavLink>
                </li>
                <li class="nav-item">
                    <NavLink class="nav-link" :href="route('course-list')">
                        <span class="menu-title">Courses</span>
                        <i class="mdi mdi-contacts menu-icon"></i>
                    </NavLink>
                </li>
                <li class="nav-item">
                    <NavLink class="nav-link" :href="route('trainer-list')">
                        <span class="menu-title">Trainers</span>
                        <i class="mdi mdi-contacts menu-icon"></i>
                    </NavLink>
                </li>
                <li class="nav-item">
                    <NavLink class="nav-link" :href="route('enroll-list')">
                        <span class="menu-title">Enroll</span>
                        <i class="mdi mdi-contacts menu-icon"></i>
                    </NavLink>
                </li>
                <li class="nav-item">
                    <NavLink class="nav-link" :href="'frontend-slider'">
                        <span class="menu-title">Slider</span>
                        <i class="mdi mdi-contacts menu-icon"></i>
                    </NavLink>
                </li>
                <li class="nav-item">
                    <NavLink class="nav-link" :href="'settings'">
                        <span class="menu-title">Settings</span>
                        <i class="mdi mdi-contacts menu-icon"></i>
                    </NavLink>
                </li>
            </ul>
        </nav>
    </div>
</template>

<script setup>
import NavLink from '@/Components/NavLink.vue';
</script>

<style scoped>

</style>
