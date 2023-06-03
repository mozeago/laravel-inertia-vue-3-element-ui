<template>
    <h1>Create</h1>
    <div>
        <form @submit.prevent="form.post(route('herbs.store'))">
            <input placeholder="herb name" type="text" name="herb_name" v-model="form.herb_name" />
            <input placeholder="herb used for" type="text" name="herb_used_for" v-model="form.herb_used_for" />
            <input placeholder="herb description" type="text" name="herb_description" v-model="form.herb_description" />
            <input placeholder="herb common location found" type="text" name="herb_common_location_found"
                v-model="form.herb_common_location_found" />
            <button type="submit">
                Save
            </button>
        </form>
    </div>
</template>
<script setup>
import { useForm } from '@inertiajs/vue3';
const form = useForm({
    herb_name: '',
    herb_used_for: '',
    herb_description: '',
    herb_common_location_found: ''
})
const submit = () => {
    form.post('herbs.store', form);
}
</script>