<template>
    <Head title="Dashboard" />
    <AuthenticatedLayout>
        <div class="container-fluid page-body-wrapper">
            <Sidebar />

            <div class="main-panel">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Enroll List</h4>
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th> SL </th>
                                    <th> Image </th>
                                    <th> Name </th>
                                    <th> Phone </th>
                                    <th> Email </th>
                                    <th> Course Name </th>
                                    <th> Course Type </th>
                                    <th> Action </th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr v-for="(enroll,index) in enrolls">
                                    <td class="py-1">{{ index+1 }}</td>
                                    <td>
                                        <img :src="'/avatar/' + enroll.user.avatar" height="100" width="100" />
                                    </td>
                                    <td>{{ enroll.user.full_name }}</td>
                                    <td>{{ enroll.user.phone }}</td>
                                    <td>{{ enroll.user.email }}</td>
                                    <td>{{ enroll.course.title }}</td>
                                    <td style="text-transform: capitalize">{{ enroll.course.type }}</td>
                                    <td>
                                        <button type="button" @click="enrollDelete(enroll.id)" class="btn btn-sm btn-danger" style="margin-left: 15px;"><i class="mdi mdi-delete"></i></button>
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
    enrolls: {
        type: Object,
        default: () => ({})
    }
});
const form = useForm({});
function enrollDelete(id) {
    if (confirm("Are you sure you want to Delete")) {
        form.delete(route('delete.enroll', id));
    }
}
</script>

<style scoped>

</style>
