import { createApp, h } from "vue";
import { createInertiaApp } from "@inertiajs/vue3";
import ElementPlus from "element-plus";
import "element-plus/dist/index.css"; //css is very important
import * as ElementPlusIconsVue from "@element-plus/icons-vue";
createInertiaApp({
    resolve: (name) => {
        const pages = import.meta.glob("./Pages/**/*.vue", { eager: true });
        return pages[`./Pages/${name}.vue`];
    },
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            //adding elementPlus to Vue
            .use(ElementPlus, { size: "small", zIndex: 3000 })
            .mixin({ methods: { route } })
            .mount(el);
    },
});
