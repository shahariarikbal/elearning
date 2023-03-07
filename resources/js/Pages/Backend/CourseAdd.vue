<template>
    <Head title="Dashboard" />
    <AuthenticatedLayout>
        <div class="container-fluid page-body-wrapper">
            <Sidebar />

            <div class="main-panel">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Service Create</h4>
                            <NavLink :href="route('course-list')" class="btn btn-sm btn-primary float-end"
                                style="margin-top: -35px;">Courses</NavLink>
                            <div class="row">
                                <div class="col-md-3"></div>
                                <div class="col-md-6">
                                    <form action="" @submit.prevent="submit" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="title">Title</label>
                                            <input type="text" name="title" v-model="form.title" class="form-control"
                                                placeholder="Enter course title" />

                                            <div v-if="form.errors.title" class="text-sm text-red-600">
                                                {{ form.errors.title }}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="short_description">Short Description</label>
                                            <textarea class="form-control" rows="8" v-model="form.short_description"
                                                name="short_description"
                                                placeholder="Enter Short Description"></textarea>

                                            <div v-if="form.errors.short_description" class="text-sm text-red-600">
                                                {{ form.errors.short_description }}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="long_description">Long Description</label>
                                            <textarea class="form-control" rows="8" v-model="form.long_description"
                                                    name="long_description"
                                                    placeholder="Enter Long Description"></textarea>

                                            <div v-if="form.errors.long_description" class="text-sm text-red-600">
                                                {{ form.errors.long_description }}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="type">Course Type</label>
                                            <select class="form-control" v-model="form.type" name="type">
                                                <option value="online">Online</option>
                                                <option value="offline">Offline</option>
                                                <option value="record">Record</option>
                                                <option value="free">Free</option>
                                            </select>

                                            <div v-if="form.errors.type" class="text-sm text-red-600">
                                                {{ form.errors.type }}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="real_price">Real Price</label>
                                            <input type="number" name="real_price" v-model="form.real_price" class="form-control"
                                                placeholder="Enter course real_price" />

                                            <div v-if="form.errors.real_price" class="text-sm text-red-600">
                                                {{ form.errors.real_price }}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="discount_price">Discount Price</label>
                                            <input type="number" name="discount_price" v-model="form.discount_price" class="form-control"
                                                placeholder="Enter course discount_price" />

                                            <div v-if="form.errors.discount_price" class="text-sm text-red-600">
                                                {{ form.errors.discount_price }}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="lesson">Number of Lesson</label>
                                            <input type="number" name="lesson" v-model="form.lesson" class="form-control"
                                                placeholder="Enter course lesson" />

                                            <div v-if="form.errors.lesson" class="text-sm text-red-600">
                                                {{ form.errors.lesson }}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="image">Image</label>
                                            <input type="file" name="image" class="form-control"
                                                @input="form.image = $event.target.files[0]" />

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

const form = useForm({
    title: "",
    short_description: "",
    long_description: "",
    type: "",
    real_price: "",
    discount_price: "",
    lesson: "",
    image: "",
});

const submit = () => {
    form.post(route("store.courses"), {
        forceFormData: true,
    });
};
</script>

<style scoped></style>
