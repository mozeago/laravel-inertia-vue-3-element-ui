<template>
    <!--html code held in templete-->
    <h1>Home Component
        <Link :href="route('herbs.create')">Add Herb</Link>
    </h1>
    <div class="flex">
        <span v-if="$page.props.flash.message">{{ $page.props.flash.message }}</span>
        <ul v-for="herb in herbs" :key="herb.id">
            <li>
                <Link :href="'/herbs/' + herb.id">
                {{ herb.herb_name }}
                </Link>
            </li>
            <ul>
                <li>{{ herb.herb_used_for }}</li>
                <li>{{ herb.herb_common_location_found }}</li>
                <li>{{ herb.herb_description }}</li>
                <li>
                    <Link :href="route('herbs.edit', herb.id)">Edit</Link>
                </li>
                <li>
                    <button @click="destroy(herb.id)">Delete</button>
                </li>
            </ul>
        </ul>
    </div>
    <div style="margin: 20px">
        <p>Upload a Herb Detail</p>

    </div>
</template>
<script setup>
import { Link, router } from '@inertiajs/vue3';
import { ElButton } from 'element-plus';
//Javascript logic is written here
defineProps({
    herbs: Object,
});
const destroy = (id) => {
    if (confirm("Are you sure you want to destroy")) {
        router.delete(route('herbs.destroy', id));
    }
}
</script>
<style>
/* this holds the styling for the HTML*/
</style>