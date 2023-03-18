<template>
    <Head title="Dashboard" />
    <AuthenticatedLayout>
        <div class="container-fluid page-body-wrapper">
            <Sidebar />

            <div class="main-panel">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Slider Edit</h4>
                            <NavLink :href="route('slider-show')" class="btn btn-sm btn-primary float-end"
                                style="margin-top: -35px;">Slider</NavLink>
                            <div class="row">
                                <div class="col-md-3"></div>
                                <div class="col-md-6">
                                    <form action="" @submit.prevent="submit" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="title">Title</label>
                                            <textarea class="form-control" rows="8" v-model="form.title"
                                                name="title" placeholder="Enter Short Description"></textarea>

                                            <div v-if="form.errors.title" class="text-sm text-red-600">
                                                {{ form.errors.title }}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="sub_title">Sub Title</label>
                                            <textarea class="form-control" rows="8" v-model="form.sub_title"
                                                name="sub_title" placeholder="Enter Long Description"></textarea>

                                            <div v-if="form.errors.sub_title" class="text-sm text-red-600">
                                                {{ form.errors.sub_title }}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="image">Image</label>
                                            <input type="file" name="image" class="form-control"
                                                @input="form.image = $event.target.files[0]" />
                                            <img :src="'/slider/' + form.image" style="height: 200px; width: 400px;"
                                                alt="slider image" />
                                            <div v-if="form.errors.image" class="text-sm text-red-600">
                                                {{ form.errors.image }}
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
    slider: {
        type: Object,
        default: () => ({})
    }
});

const form = useForm({
    title: props.slider.title,
    sub_title: props.slider.sub_title,
    image: props.slider.image,
});

const submit = () => {
    form.post(route("update.slider", props.slider.id), {
        forceFormData: true,
    });
};
</script>

<style scoped></style>
