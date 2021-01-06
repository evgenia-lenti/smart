<template>
    <div>
        <div class="flex items-center justify-between">
            <span class="flex-grow flex flex-col" id="toggle Label">
                <span class="text-sm font-medium text-gray-900">Visible</span>
                <span class="text-sm leading-normal text-gray-500">Επιλέξτε αν η τάξη θα είναι ορατή</span>
            </span>
            <!-- On: "bg-indigo-600", Off: "bg-gray-200" -->
            <button @click="toggledVisible"
                    :class="[isOnVisible ? 'bg-primary-500' : 'bg-gray-200']" type="button" aria-pressed="false" aria-labelledby="toggleLabel"
                    class="relative inline-flex flex-shrink-0 h-6 w-11 border-2 border-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
                <span class="sr-only">Use setting</span>
                <!-- On: "translate-x-5", Off: "translate-x-0" -->
                <span :class="[isOnVisible ? 'translate-x-5' : 'translate-x-0']"
                      aria-hidden="true" class="inline-block h-5 w-5 rounded-full bg-white shadow transform ring-0 transition ease-in-out duration-200"></span>
            </button>
            <input type="hidden" name="visible" :value="isOnVisible">
        </div>
    </div>
</template>

<script>
export default {
name: "VisibleToggleComponent",

    data() {
        return {
            isOnVisible: this.isOnVisible
        }
    },

    methods: {

        toggledVisible(value) {
            this.isOnVisible = !this.isOnVisible;
            console.log(value)
            return value
            /*? this.insert() : this.delete();*/
        },

        /*insert() {
            axios.post(`/api/classrooms/${this.classroom.id}/create`, {
                classroom_id: this.classroom_id
            })
                .then((response) => {

                    console.log('entered')

                })
                .catch((error) => {
                });
*/
        //},

    },

    props: {
        classrooms: {
            type: Array
        }
    }
}
</script>

<style scoped>

</style>
