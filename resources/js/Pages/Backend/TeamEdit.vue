<template>
    <Head title="Dashboard" />
    <AuthenticatedLayout>
        <div class="container-fluid page-body-wrapper">
            <Sidebar />

            <div class="main-panel">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Team Edit</h4>
                            <NavLink :href="route('team-list')" class="btn btn-sm btn-primary float-end" style="margin-top: -35px;">Team List</NavLink>
                            <div class="row">
                                <div class="col-md-3"></div>
                                <div class="col-md-6">
                                    <form action="" @submit.prevent="submit" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            <input type="text" name="name" v-model="form.name" class="form-control" placeholder="Enter name" />

                                            <div
                                                v-if="form.errors.name"
                                                class="text-sm text-red-600"
                                            >
                                                {{ form.errors.name }}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="designation">Designation</label>
                                            <input type="text" name="designation" v-model="form.designation" class="form-control" placeholder="Enter designation" />

                                            <div
                                                v-if="form.errors.designation"
                                                class="text-sm text-red-600"
                                            >
                                                {{ form.errors.designation }}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="image">Image</label>
                                            <input type="file" name="avatar" class="form-control"
                                              @input="form.avatar = $event.target.files[0]"
                                            />
                                            <img :src="'/team/' + form.avatar" style="height: 80px; width: 80px;"
                                                 alt="team image" />
                                            <div
                                                v-if="form.errors.avatar"
                                                class="text-sm text-red-600"
                                            >
                                                {{ form.errors.avatar }}
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-success" :disabled="form.processing" :class="{ 'opacity-25': form.processing }">Submit</button>
                                    </form>
                                </div>
                                <div class="col-md-3"></div>
                            </div>
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
import Layout from "@/Shared/Layout.vue";
import { useForm } from "@inertiajs/vue3";

const props = defineProps({
    team: {
        type: Object,
        default: () => ({})
    }
});

const form = useForm({
    id: props.team.id,
    name: props.team.name,
    designation: props.team.designation,
    avatar: props.team.avatar,
});

const submit = () => {
    form.post(route("update.team", props.team.id), {
        forceFormData: true,
    });
};
</script>

<style scoped>

</style>
