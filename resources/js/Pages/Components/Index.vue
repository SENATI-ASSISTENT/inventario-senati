<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import { Link, router } from "@inertiajs/vue3";

const props = defineProps({
    components: {
        type: Array,
        required: true,
    },
});

const deleteMachine = (machine) => {
    router.delete(route("machines.destroy", machine), {
        onSuccess: () => {
            alert("Máquina eliminada exitosamente");
        },
        onError: (errors) => {
            console.error("Error al eliminar la máquina:", errors);
            alert("Hubo un error al eliminar la máquina");
        },
    });
};
</script>

<template>
    <AppLayout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Componentes
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg" v-for="component in components" :key="component.id">
                    <div
                        class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-neutral-900 dark:border-neutral-700 dark:shadow-neutral-700/70"
                    >
                        <img
                            class="w-full h-auto rounded-t-xl"
                            src="https://images.unsplash.com/photo-1680868543815-b8666dba60f7?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=320&q=80"
                            alt="Card Image"
                        />
                        <div class="p-4 md:p-5">
                            <h3
                                class="text-lg font-bold text-gray-800 dark:text-white"
                            >
                                Card title
                            </h3>
                            <p class="mt-1 text-gray-500 dark:text-neutral-400">
                                Some quick example text to build on the card
                                title and make up the bulk of the card's
                                content.
                            </p>
                            <a
                                class="mt-2 py-2 px-3 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none"
                                href="#"
                            >
                                Go somewhere
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
