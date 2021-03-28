<template>
    <div>
        <VueCal :time-from="9 * 60"
                :time-to="18 * 60"
                locale="el"
                :disable-views="['years', 'year']"
                today-button
                :events="events"
                :on-event-click="openBookingModal">
        </VueCal>

        <BookingModal v-if="showBookingModal" :selected="selectedEvent" :events="events" @closeModal="closeModal"></BookingModal>
    </div>

</template>

<script>
import VueCal from 'vue-cal'
import 'vue-cal/dist/vuecal.css'
import 'vue-cal/dist/i18n/el.js'
import BookingModal from "./BookingModal";


export default {
    name: "DatePickerComponent",

    data(){
        return {
            events: [],
            showBookingModal: false,
            selectedEvent: ''
        }
    },

    methods: {
        openBookingModal(event, e) {
            this.selectedEvent = event
            this.showBookingModal = true
        },

        closeModal() {
            return this.showBookingModal = false
        }
    },

    mounted() {
        axios.get('api/periods')
            .then(response => {
                this.events = response.data

                this.events.forEach( event => {
                    event.id = event.course.id
                    event.start = event.starts
                    event.end = event.ends
                    event.title = event.course.name
                    event.content = event.course.description
                })

                return events;
            })
            .catch(error => {
                console.log(error)
            })
    },

    components: {
        BookingModal,
        VueCal
    }
}
</script>

