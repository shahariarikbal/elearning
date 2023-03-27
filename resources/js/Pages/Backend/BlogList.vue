<template>
    <Head title="Dashboard" />
    <AuthenticatedLayout>
        <div class="container-fluid page-body-wrapper">
            <Sidebar />

            <div class="main-panel">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Blog List</h4>
                            <NavLink :href="'/blog/add'" class="btn btn-sm btn-primary float-end"> Add Blog</NavLink>
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th> SL </th>
                                    <th> Image </th>
                                    <th> Title </th>
                                    <th> Action </th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr v-for="(blog,index) in blogList">
                                    <td class="py-1">{{ index+1 }}</td>
                                    <td>
                                        <img :src="'/blog/' + blog.image" height="100" width="100" alt="blog" />
                                    </td>
                                    <td>{{ blog.title }}</td>
                                    <td>
                                        <NavLink :href="'/blog/edit/' + blog.id" class="btn btn-sm btn-primary"><i class="mdi mdi-pencil"></i></NavLink>
                                        <button type="button" @click="destroy(blog.id)" class="btn btn-sm btn-danger" style="margin-left: 15px;"><i class="mdi mdi-delete"></i></button>
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
    blogList: {
        type: Object,
        default: () => ({})
    }
});
const form = useForm({});
function destroy(id) {
    if (confirm("Are you sure you want to Delete")) {
        form.delete(route('delete.blog', id));
    }
}
</script>

<style scoped>

</style>
