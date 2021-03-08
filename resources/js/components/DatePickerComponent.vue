<template>
    <div>
        <div class="flex max-w-xl mx-auto px-4 sm:px-6 lg:max-w-7xl lg:px-8">
            <DraggableCal :days="365" :years="1" :accentColor="'#f6ad55'"
                          @dateSelected="openDay($event)">
            </DraggableCal>
        </div>

        <div v-if="openDayEvents" v-on-clickaway="openDay" tabindex="-1"
             class="bg-primary-500 overflow-hidden shadow rounded-lg max-w-screen-sm m-auto mb-20">
            <div class="px-4 py-5 sm:px-6 text-white">
                {{ selectedDate  }}
                <!-- We use less vertical padding on card headers on desktop than on body sections -->
            </div>
            <div v-if="periods.length > 0" class="divide-y divide-white ">
                <div v-for="(period, index) in periods" :key="index">
                    <div class="px-4 py-5 sm:p-6">
                        {{ period.starts_at}} - {{ period.ends_at}}
                    </div>
                    <div class="px-4 py-4 sm:px-6">
                        Content goes here
                        <!-- We use less vertical padding on card footers at all sizes than on headers or body sections -->
                    </div>
                </div>
            </div>
        </div>
    </div>

</template>

<script>
import DraggableCal from 'vue-draggable-cal';
import { directive as onClickaway } from 'vue-clickaway';
import moment from 'moment'
import 'moment/locale/el'
moment.locale('el')


export default {
    name: "DatePickerComponent",

    data(){
        return {
            openDayEvents: true,
            selectedDate: '',
            periods: ''
        }
    },

    methods: {
        openDay(event) {
            this.openDayEvents = !this.openDayEvents
            this.selectedDate = moment(event).format("DD MMMM YYYY")

            axios.post(`/periods/${this.selectedDate}`, {
                starts_at: this.selectedDate,
            })
                .then((response) => {

                    console.log(response.data)
                })
                .catch((error) => {
                });
        }
    },

    components: {
        DraggableCal
    },

    directives: {
        onClickaway: onClickaway,
    },
}
</script>

<style scoped>

</style>
