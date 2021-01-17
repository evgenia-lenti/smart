<template>
    <div class="flex flex-col text-right mt-8">
        <div class="">
            <div v-if="data.status === true" class="justify-end text-green-700">{{ data.message }}</div>
            <div v-else class="justify-end text-red-700">{{ data.message }}</div>
            <label for="location" class="block text-sm font-medium text-gray-700 my-4">Προσθήκη μαθημάτων στην τάξη</label>
            <select v-model="courseSelected" @change="courseSelectedAttach" id="location" name="location"
                    class="mt-1 w-72 pl-3 pr-10 py-2 text-base border-gray-300
                focus:outline-none focus:ring-gray-500 focus:border-gray-500 sm:text-sm rounded-md">
                <option v-for="(course, index) in courses" :key="index" v-bind:value="course.id">{{ course.name }}</option>
            </select>
            <input type="hidden" name="selected" :value="courseSelected">
        </div>
    </div>
</template>

<script>
export default {
    name: "CoursesAttachComponent",

    data() {
        return {
            courseSelected: '',
            data: ''
        }
    },

    methods: {
        courseSelectedAttach() {

            axios.post(`/classroom/courses/${this.courseSelected}/create`, {
                course_id: this.courseSelected,
                classroom_id: this.classroom.id
            })
                .then((response) => {
                    let data = response.data;
                    this.data = data
                    //console.log(data)
                })
                .catch((error) => {
                });
        }
    },

    props: {
        courses: {
            type: Array
        },

        classroom: {
            type: Object
        }
    }
}
</script>

