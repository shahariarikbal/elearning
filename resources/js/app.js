import './bootstrap';
import '../css/app.css';
import '../assets/fonts/fontawesome/css/all.css';
import '../assets/css/animate.css';
import '../assets/plugins/slick-slider/slick.min.css';
import '../assets/plugins/owl-carousel/owl.carousel.min.css';
import '../assets/css/style.css';
import '../assets/css/responsive.css';
import '../assets/plugins/slick-slider/slick.min';
import '../assets/plugins/owl-carousel/owl.carousel.min';
// import '../assets/js/wow.min';
import '../assets/js/main';



import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { ZiggyVue } from '../../vendor/tightenco/ziggy/dist/vue.m';

const appName = window.document.getElementsByTagName('title')[0]?.innerText || 'Laravel';

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) => resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue')),
    setup({ el, App, props, plugin }) {
        return createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(ZiggyVue, Ziggy)
            .mount(el);
    },
    progress: {
        // during navigation, in milliseconds.
        delay: 250,

        // The color of the progress bar.
        color: 'red',

        // Whether to include the default NProgress styles.
        includeCSS: true,

        // Whether the NProgress spinner will be shown.
        showSpinner: true,
    },
});
