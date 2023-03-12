<!--<template>
    <Head title="Dashboard" />
    <AuthenticatedLayout>
        <div class="container-fluid page-body-wrapper">
            <Sidebar />

            <h1>Courses pages</h1>
        </div>
    </AuthenticatedLayout>
</template>

<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import Sidebar from '../../Shared/Backend/Sidebar.vue';
</script>

<style scoped>

</style>-->
<template>
    <Head title="Dashboard" />
    <AuthenticatedLayout>
        <div class="container-fluid page-body-wrapper">
            <Sidebar />

            <div class="main-panel">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Course List</h4>
                            <NavLink :href="route('add-courses')" class="btn btn-sm btn-primary float-end"> Add Course</NavLink>
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th> SL </th>
                                    <th> Image </th>
                                    <th> Title </th>
                                    <th> Short Description </th>
                                    <th> Course Type </th>
                                    <th> Real Price </th>
                                    <th> Discount Price </th>
                                    <th> Trainer </th>
                                    <th> Action </th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr v-for="(course, index) in courses">
                                        <td class="py-1">{{ index + 1 }}</td>
                                        <td>
                                            <img :src="'/course/' + course.image" height="100" width="100" />
                                        </td>
                                        <td>{{ course.title }}</td>
                                        <td> {{ course.short_description }} </td>
                                        <td> {{ course.type }} </td>
                                        <td> {{ course.real_price }} </td>
                                        <td> {{ course.discount_price }} </td>
                                        <td> {{ course.trainer.name }} </td>
                                        <td>
                                            <NavLink :href="'/course/edit/' + course.id" class="btn btn-sm btn-primary"><i class="mdi mdi-pencil"></i></NavLink>
                                            <button type="button" @click="destroy(course.id)" class="btn btn-sm btn-danger" style="margin-left: 15px;"><i class="mdi mdi-delete"></i></button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import Sidebar from '../../Shared/Backend/Sidebar.vue';
import NavLink from '@/Components/NavLink.vue';
import { useForm } from "@inertiajs/vue3";

const props = defineProps({
    courses: {
        type: Object,
        default: () => ({})
    }
});
const form = useForm({});
function destroy(id) {
    if (confirm("Are you sure you want to Delete")) {
        form.delete(route('delete.courses', id));
    }
}
</script>

<style scoped>

</style>

