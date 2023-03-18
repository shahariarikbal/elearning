<template>
    <Head title="Dashboard" />
    <AuthenticatedLayout>
        <div class="container-fluid page-body-wrapper">
            <Sidebar />

            <div class="main-panel">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Trainer Create</h4>
                            <NavLink :href="route('trainer-list')" class="btn btn-sm btn-primary float-end"
                                style="margin-top: -35px;">Trainers</NavLink>
                            <div class="row">
                                <div class="col-md-3"></div>
                                <div class="col-md-6">
                                    <form action="" @submit.prevent="submit" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            <input type="text" name="name" v-model="form.name" class="form-control"
                                                placeholder="Enter course name" />

                                            <div v-if="form.errors.name" class="text-sm text-red-600">
                                                {{ form.errors.name }}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" name="email" v-model="form.email" class="form-control"
                                                placeholder="Enter Trainer's Email" />

                                            <div v-if="form.errors.email" class="text-sm text-red-600">
                                                {{ form.errors.email }}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="phone">Phone</label>
                                            <input type="text" name="phone" v-model="form.phone" class="form-control"
                                                placeholder="Enter Trainer's Phone" />

                                            <div v-if="form.errors.phone" class="text-sm text-red-600">
                                                {{ form.errors.phone }}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="designation_expertise">Designation | Expertise</label>
                                            <input type="text" name="designation_expertise" v-model="form.designation_expertise" class="form-control"
                                                placeholder="Enter Trainer's Designation or Expertise" />

                                            <div v-if="form.errors.designation_expertise" class="text-sm text-red-600">
                                                {{ form.errors.designation_expertise }}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="avatar">Image</label>
                                            <input type="file" name="avatar" class="form-control"
                                                @input="form.avatar = $event.target.files[0]" />

                                            <div v-if="form.errors.avatar" class="text-sm text-red-600">
                                                {{ form.errors.avatar }}
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-success" :disabled="form.processing"
                                            :class="{ 'opacity-25': form.processing }">Submit</button>
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

const form = useForm({
    name: "",
    email: "",
    phone: "",
    designation_expertise: "",
    avatar: "",
});

const submit = () => {
    form.post(route("store.trainers"), {
        forceFormData: true,
    });
};
</script>

<style scoped></style>
