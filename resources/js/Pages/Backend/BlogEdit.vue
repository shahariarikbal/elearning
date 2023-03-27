<template>
    <Head title="Dashboard" />
    <AuthenticatedLayout>
        <div class="container-fluid page-body-wrapper">
            <Sidebar />

            <div class="main-panel">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Blog Edit</h4>
                            <NavLink :href="route('blog-list')" class="btn btn-sm btn-primary float-end" style="margin-top: -35px;">Blog List</NavLink>
                            <div class="row">
                                <div class="col-md-3"></div>
                                <div class="col-md-6">
                                    <form action="" @submit.prevent="submit" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="title">Title</label>
                                            <input type="text" name="title" v-model="form.title" class="form-control" placeholder="Enter service title" />

                                            <div
                                                v-if="form.errors.title"
                                                class="text-sm text-red-600"
                                            >
                                                {{ form.errors.title }}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="short_description">Short Description</label>
                                            <textarea class="form-control" rows="8" v-model="form.short_description" name="short_description" placeholder="Enter Short description"></textarea>

                                            <div
                                                v-if="form.errors.short_description"
                                                class="text-sm text-red-600"
                                            >
                                                {{ form.errors.short_description }}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="long_description">Long Description</label>
                                            <textarea class="form-control" rows="20" v-model="form.long_description" name="description" placeholder="Enter Long description"></textarea>

                                            <div
                                                v-if="form.errors.long_description"
                                                class="text-sm text-red-600"
                                            >
                                                {{ form.errors.long_description }}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="image">Image</label>
                                            <input type="file" name="image" class="form-control"
                                              @input="form.image = $event.target.files[0]"
                                            />
                                            <img :src="'/blog/' + form.image" style="height: 80px; width: 80px;"
                                                 alt="blog image" />
                                            <div
                                                v-if="form.errors.image"
                                                class="text-sm text-red-600"
                                            >
                                                {{ form.errors.image }}
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
    blog: {
        type: Object,
        default: () => ({})
    }
});

const form = useForm({
    id: props.blog.id,
    title: props.blog.title,
    short_description: props.blog.short_description,
    long_description: props.blog.long_description,
    image: props.blog.image,
});

const submit = () => {
    form.post(route("update.blog", props.blog.id), {
        forceFormData: true,
    });
};
</script>

<style scoped>

</style>
