<template>
    <div class="fixed z-10 inset-0 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
        <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>

            <!-- This element is to trick the browser into centering the modal contents. -->
            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

            <div class="inline-block align-bottom bg-white rounded-lg px-4 pt-5 pb-4 text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full sm:p-6">
                <div>
                    <div class="mt-3 text-center sm:mt-5">
                        <h4 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">
                            {{ selected.course.name }}
                        </h4>
                        <h4 class="text-lg leading-6 font-medium text-gray-900" >
                            {{ selected.name }}
                        </h4>
                        <h4 class="text-lg leading-6 font-medium text-gray-900" >
                            Από {{ startDate }} Μέχρι {{ endDate }}
                        </h4>
                        <div class="mt-2">
                            <p class="text-sm text-gray-500">
                                {{ selected.course.description }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="mt-5 sm:mt-6 sm:grid sm:grid-cols-2 sm:gap-3 sm:grid-flow-row-dense">
                    <button type="button" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4
                    py-2 text-base font-medium text-white bg-primary-500
                     hover:bg-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-gray-500 sm:col-start-2 sm:text-sm">
                        Κράτηση
                    </button>
                    <button @click="$emit('closeModal')" type="button" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm
                            px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:col-start-1 sm:text-sm">
                        Ακύρωση
                    </button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import moment from 'moment'
import 'moment/locale/el'
moment.locale('el')

export default {
name: "BookingModal",

    data() {
        return {

        }
    },

    props: {
        selected: Object
    },

    computed: {
        startDate() {
            return this.selected.starts = moment(this.selected.starts).format("d-MM-YYYY")
        },

        endDate() {
            return this.selected.ends = moment(this.selected.ends).format("d-MM-YYYY")
        }
    },

    methods: {
        //axios call to a booking controller
    }
}
</script>

