import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { ZiggyVue } from '../../vendor/tightenco/ziggy';

// Obtém o nome do aplicativo do ambiente
const appName = import.meta.env.VITE_APP_NAME || 'Laravel';

// Cria a aplicação Inertia
createInertiaApp({
    // Configuração do título da página
    title: (title) => `${title} - ${appName}`,
    // Resolução de componentes de página
    resolve: (name) => resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue')),
    // Configuração da aplicação
    setup({ el, App, props, plugin }) {
        // Cria a aplicação Vue
        return createApp({ render: () => h(App, props) })
            // Usa o plugin Inertia
            .use(plugin)
            // Usa o plugin ZiggyVue para rotas
            .use(ZiggyVue)
            // Monta a aplicação no elemento especificado
            .mount(el);
    },
    // Configuração da barra de progresso
    progress: {
        color: '#4B5563',
    },
});
