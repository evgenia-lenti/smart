<template>

    <div>
        <label for="location" class="block text-sm font-medium text-gray-700 my-4">Προσθήκη μαθημάτων στην τάξη</label>
        <select v-model="courseSelected" @change="courseSelectedAttach" id="location" name="location" class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-gray-500 focus:border-gray-500 sm:text-sm rounded-md">
            <option v-for="(course, index) in courses" :key="index" v-bind:value="course.id">{{ course.name }}</option>
        </select>
        <input type="hidden" name="selected" :value="courseSelected">
    </div>


</template>

<script>
export default {
    name: "CoursesAttachComponent",

    data() {
        return {
            courseSelected: ''
        }
    },

    methods: {
        courseSelectedAttach() {

            console.log(this.courseSelected, this.classroom.id)

            axios.post(`/classroom/courses/${this.courseSelected}/create`, {
                course_id: this.courseSelected,
                classroom_id: this.classroom
            })
                .then((response) => {
                    let data = response.data;
                    console.log(data)
                })
                .catch((error) => {
                });

            /*axios.post(`/api/user/courses/${this.course.id}/create`, {
                course_id: this.course_id
            })
                .then((response) => {
                    let data = response.data;

                    this.$emit('messageReceived', {
                        message: data.message,
                        status: data.status
                    });
                })
                .catch((error) => {
                });*/
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

