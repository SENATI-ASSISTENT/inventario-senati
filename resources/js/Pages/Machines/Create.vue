<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import { useForm } from "@inertiajs/vue3";

const form = useForm({
    name: "",
    description: "",
});

const submitForm = () => {
    form.post(route("machines.store"), {
        onStart: () => (form.processing = true), 
        onFinish: () => (form.processing = false),
        onSuccess: () => {
            alert("Máquina creada exitosamente");
        },
        onError: (errors) => {
            console.error("Error al crear la máquina:", errors);
            alert("Hubo un error al crear la máquina");
        },
    });
};
</script>

<template>
    <AppLayout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Crea una nueva máquina
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div
                    class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6"
                >
                   
                    <form @submit.prevent="submitForm">
                        <div class="mb-4">
                            <label
                                for="name"
                                class="block text-sm font-medium text-gray-700"
                                >Nombre de la máquina</label
                            >
                            <input
                                id="name"
                                type="text"
                                v-model="form.name"
                                class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                required
                            />
                        </div>

                        <div class="mb-4">
                            <label
                                for="description"
                                class="block text-sm font-medium text-gray-700"
                                >Descripción</label
                            >
                            <textarea
                                id="description"
                                v-model="form.description"
                                class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                rows="4"
                            ></textarea>
                        </div>

                        <div class="flex items-center justify-between">
                            <button
                                type="submit"
                                :disabled="form.processing"
                                class="inline-flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                            >
                                <span v-if="form.processing">Cargando...</span>
                                <span v-else>Crear máquina</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
