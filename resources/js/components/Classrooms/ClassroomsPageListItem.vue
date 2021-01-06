<template>
    <div class="min-h-screen bg-gray-100">
        <div class="py-10 max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row lg:justify-between">
                <div>
                    <header>
                        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                            <h1 class="text-3xl font-bold leading-tight text-gray-900">
                                Μαθήματα {{ classroom.name}}
                            </h1>
                        </div>
                    </header>
                </div>

                <div>
                    <a :href="route('classrooms.edit', {classroom})"
                       class="w-40 mt-8 lg:mt-0 ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-primary-500 hover:text-primary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
                        Επεξεργασία
                    </a>
                </div>

            </div>

            <main>
                <div class="">
                    <!-- Replace with your content -->
                    <div class="px-4 py-8 sm:px-0">
                        <div class="border-4 border-dashed border-gray-200 rounded-lg ">
                            <CourseList :classroom="classroom"></CourseList>
                        </div>
                    </div>
                    <!-- /End replace -->
                </div>
            </main>
        </div>
    </div>

</template>

<script>

import CourseList from "../Courses/CoursesList";

export default {
    name: "ClassroomsPageListItem",

    components: {CourseList},

    data() {
        return {

        }
    },

    props: {
        classroom: {
            type: Object
        },
    }

}
</script>

