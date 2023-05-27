import { createApp, h } from "vue";
import { createInertiaApp } from "@inertiajs/vue3";
import ElementPlus from "element-plus";
createInertiaApp({
    resolve: (name) => {
        const pages = import.meta.glob("./Pages/**/*.vue", { eager: true });
        return pages[`./Pages/${name}.vue`];
    },
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(ElementPlus, { size: "small", zIndex: 3000 })
            .mount(el);
    },
});
