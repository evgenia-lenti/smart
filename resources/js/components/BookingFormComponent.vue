<template>
    <div>
        <div class="px-4 pt-8 m-auto max-w-2xl">
            <div>
                <h3 class="text-lg leading-6 font-medium text-gray-900">
                    Στοιχεία κράτησης
                </h3>
                <p class="mt-1 text-sm text-gray-500">
                    Παρακαλώ εισάγετε τα στοιχεία της κράτησης.
                </p>
                <div v-if="successMessage" class="mt-3 text-green-900 bg-green-100 rounded-lg p-2 border border-green-200">
                    <p>{{ successMessage }}</p>
                </div>
                <div v-if="failureMessage" class="mt-3 text-red-900 bg-red-100 rounded-lg p-2 border border-red-200">
                    <p>{{ failureMessage }}</p>
                </div>
            </div>
<!--            <div>
                <div class="mt-6">
                    <label for="spots" class="block text-sm font-medium text-gray-700">
                        Σύνολο θέσεων κράτησης
                    </label>
                    <div class="mt-1">
                        <input v-model="spots" type="text" name="spots" id="spots" class="shadow-sm focus:ring-gray-700 focus:border-gray-700 block w-full sm:text-sm border-gray-300 rounded-md">
                    </div>
                </div>
            </div>-->
            <form @submit.prevent="submit" method="POST" ref="form">
                <div  class="mt-6 space-y-6">
                    <div class="">
                        <label for="first_name" class="block text-sm font-medium text-gray-700">
                            Όνομα
                        </label>
                        <div class="mt-1">
                            <input v-model="form.first_name" type="text" name="first_name" id="first_name" autocomplete="given-name" class="shadow-sm focus:ring-gray-700 focus:border-gray-700 block w-full sm:text-sm border-gray-300 rounded-md">
                        </div>
                    </div>

                    <div class="">
                        <label for="last_name" class="block text-sm font-medium text-gray-700">
                            Επώνυμο
                        </label>
                        <div class="mt-1">
                            <input v-model="form.last_name" type="text" name="last_name" id="last_name" autocomplete="family-name" class="shadow-sm focus:ring-gray-700 focus:border-gray-700 block w-full sm:text-sm border-gray-300 rounded-md">
                        </div>
                    </div>

                    <div class="">
                        <label for="email" class="block text-sm font-medium text-gray-700">
                            Email
                        </label>
                        <div class="mt-1">
                            <input v-model="form.email" id="email" name="email" type="email" autocomplete="email" class="shadow-sm focus:ring-gray-700 focus:border-gray-700 block w-full sm:text-sm border-gray-300 rounded-md">
                        </div>
                    </div>

                    <div class="">
                        <label for="telephone" class="block text-sm font-medium text-gray-700">
                            Τηλέφωνο
                        </label>
                        <div class="mt-1">
                            <input v-model="form.telephone" id="telephone" name="telephone" type="tel" autocomplete="tel" class="shadow-sm focus:ring-gray-700 focus:border-gray-700 block w-full sm:text-sm border-gray-300 rounded-md">
                        </div>
                    </div>
                </div>
                <div class="my-10">
                    <div class="my-4">
                        <button type="submit" class="block w-full inline-flex justify-center py-3 px-6 border border-transparent shadow-sm text-base font-medium
                                rounded-md text-white bg-gray-200
                                hover:bg-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-gray-500 sm:col-start-1 sm:text-sm">
                            Ακύρωση
                        </button>
                    </div>
                    <div class="my-4">
                        <button type="submit" class="block w-full inline-flex justify-center py-3 px-6 border border-transparent shadow-sm text-base font-medium
                                rounded-md text-white bg-primary-500
                                hover:bg-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-gray-500 sm:col-start-2 sm:text-sm">
                            Κράτηση
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</template>

<script>
import { bus } from '../app'

export default {
    name: "BookingFormComponent",

    data() {
        return {
            successMessage: '',
            failureMessage: '',
            selected: null,
            spots: 0,
            user: window.smart.user,
            form: {
                first_name: null,
                last_name: null,
                email: null,
                telephone: null
            }
        }
    },

    methods: {
        submit() {
            //this.spots = 1

            axios.post('/api/booking', {
                form: this.form,
                user: window.smart.user,
                selected_course: this.selected
            })
                .then((response) => {

                    if (response.data.status) {

                        //this.spots = 0
                        this.failureMessage = ''
                        this.successMessage = 'Η κράτησή σας πραγματοποιήθηκε με επιτυχία.'

                    } else {
                        this.successMessage = ''
                        this.failureMessage = 'Δυστυχώς η κράτηση δεν πραγματοποιήθηκε. Παρακαλώ δοκιμάστε ξανά.'

                    }
                })
                .catch((error) => {
                    console.log(error)
                });
        }
    },

    created() {
        new URL(location.href).searchParams.get('selected')
        const params = new URL(location.href).searchParams;
        this.selected = params.get('selected');
    }
}
</script>

