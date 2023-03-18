<template>
    <Head title="Dashboard" />
    <AuthenticatedLayout>
        <div class="container-fluid page-body-wrapper">
            <Sidebar />

            <div class="main-panel">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Setting Edit</h4>
                            <NavLink :href="route('setting-show')" class="btn btn-sm btn-primary float-end"
                                style="margin-top: -35px;">Setting</NavLink>
                            <div class="row">
                                <div class="col-md-3"></div>
                                <div class="col-md-6">
                                    <form action="" @submit.prevent="submit" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="logo">logo</label>
                                            <input type="file" name="logo" class="form-control"
                                                @input="form.logo = $event.target.files[0]" />
                                            <img :src="'/setting/' + form.logo" style="height: 80px; width: 150px;"
                                                alt="logo" />
                                            <div v-if="form.errors.logo" class="text-sm text-red-600">
                                                {{ form.errors.logo }}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="phone">Phone</label>
                                            <input type="text" name="phone" v-model="form.phone" class="form-control"
                                                placeholder="Enter phone" />

                                            <div v-if="form.errors.phone" class="text-sm text-red-600">
                                                {{ form.errors.phone }}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" name="email" v-model="form.email" class="form-control"
                                                placeholder="Enter email" />

                                            <div v-if="form.errors.email" class="text-sm text-red-600">
                                                {{ form.errors.email }}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="youtube">YouTube Channel Link</label>
                                            <input type="text" name="youtube" v-model="form.youtube" class="form-control"
                                                placeholder="Enter youtube channel link" />

                                            <div v-if="form.errors.youtube" class="text-sm text-red-600">
                                                {{ form.errors.youtube }}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="facebook">Facebook page Link</label>
                                            <input type="text" name="facebook" v-model="form.facebook" class="form-control"
                                                placeholder="Enter Facebook page link" />

                                            <div v-if="form.errors.facebook" class="text-sm text-red-600">
                                                {{ form.errors.facebook }}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="twitter">Twitter Link</label>
                                            <input type="text" name="twitter" v-model="form.twitter" class="form-control"
                                                placeholder="Enter twitter page link" />

                                            <div v-if="form.errors.twitter" class="text-sm text-red-600">
                                                {{ form.errors.twitter }}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="instagram">Instagram Link</label>
                                            <input type="text" name="instagram" v-model="form.instagram" class="form-control"
                                                placeholder="Enter instagram page link" />

                                            <div v-if="form.errors.instagram" class="text-sm text-red-600">
                                                {{ form.errors.instagram }}
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

const props = defineProps({
    setting: {
        type: Object,
        default: () => ({})
    }
});

const form = useForm({
    logo: props.setting.logo,
    phone: props.setting.phone,
    email: props.setting.email,
    youtube: props.setting.youtube,
    facebook: props.setting.facebook,
    twitter: props.setting.twitter,
    instagram: props.setting.instagram,
});

const submit = () => {
    form.post(route("update.setting", props.setting.id), {
        forceFormData: true,
    });
};
</script>

<style scoped></style>
