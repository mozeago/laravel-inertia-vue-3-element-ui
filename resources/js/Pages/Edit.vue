<template>
    <h1>Edit</h1>
    <div>
        <form @submit.prevent="submit">
            <div>
                <input type="hidden" v-model="form.id" />
            </div>
            <div>
                <input type="text" v-model="form.herb_name" />
            </div>
            <div>
                <input type="text" v-model="form.herb_used_for" />

            </div>
            <div>
                <input type="text" v-model="form.herb_description" />
            </div>
            <div>
                <input type="text" v-model="form.herb_common_location_found" />
            </div>
            <button type="submit">
                update
            </button>
        </form>
    </div>
</template>
<script setup>
import { useForm } from '@inertiajs/vue3';
const props = defineProps({
    herb: Object

});
const form = useForm({
    id: props.herb.id,
    herb_name: props.herb.herb_name,
    herb_used_for: props.herb.herb_used_for,
    herb_description: props.herb.herb_description,
    herb_common_location_found: props.herb.herb_common_location_found
});

const submit = () => {
    form.put(route('herbs.update', props.herb.id));
}
</script>