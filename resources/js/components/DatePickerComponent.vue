<template>
<!--    <div>
        <div class="flex max-w-xl mx-auto px-4 sm:px-6 lg:max-w-7xl lg:px-8">
            <DraggableCal :days="365" :years="1" :accentColor="'#f6ad55'"
                          @dateSelected="openDay($event)">
            </DraggableCal>
        </div>

        <div v-if="openDayEvents" v-on-clickaway="openDay" tabindex="-1"
             class="bg-primary-500 overflow-hidden shadow rounded-lg max-w-screen-sm m-auto mb-20">
            <div class="px-4 py-5 sm:px-6 text-white">
                {{ selectedDate  }}
            </div>
            <div v-if="periods.length > 0" class="divide-y divide-white ">
                <div v-for="(period, index) in periods" :key="index">
                    <div class="px-4 py-5 sm:p-6">
                        {{ period.starts_at}} - {{ period.ends_at}}
                    </div>
                    <div class="px-4 py-4 sm:px-6">
                        Content goes here
                        &lt;!&ndash; We use less vertical padding on card footers at all sizes than on headers or body sections &ndash;&gt;
                    </div>
                </div>
            </div>
        </div>
    </div>-->
    <VueCal :time-from="9 * 60"
            :time-to="21 * 60"
            locale="el"
            :disable-views="['years', 'year']"
            today-button
            :events="events"
            :on-event-click="openReservationModal">
    </VueCal>
</template>

<script>
/*import DraggableCal from 'vue-draggable-cal';*/
import { directive as onClickaway } from 'vue-clickaway';
import moment from 'moment'
import 'moment/locale/el'
moment.locale('el')
import VueCal from 'vue-cal'
import 'vue-cal/dist/vuecal.css'
import 'vue-cal/dist/i18n/el.js'


export default {
    name: "DatePickerComponent",

    data(){
        return {
            /*openDayEvents: true,
            selectedDate: '',
            periods: ''*/
            events: []
        }
    },

    props: {
      periods: Array
    },

    methods: {
        /*openDay(event) {

            this.selectedDate = event

            console.log(event)
            axios.get(`/periods/${this.selectedDate}`)
                .then((response) => {

                    this.openDayEvents = !this.openDayEvents
                    console.log(response.data)
                })
                .catch((error) => {
                });
        }*/

        openReservationModal(event, e) {
            console.log(event)
        }
    },

    mounted() {
        /*this.selectedDate = moment(event).format("DD MMMM YYYY")*/

        axios.get('api/periods')
            .then(response => {
                this.events = response
                //this.products = response.data
                //console.log(response.data)
            })
            .catch(error => {
                console.log(error)
            })
    },

    components: {
        VueCal
    },

    directives: {
        onClickaway: onClickaway,
    },
}
</script>

<style scoped>

</style>
