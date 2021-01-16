<template>
    <div>
        <div v-if="user">
            <div class="py-10 max-w-7xl mx-auto px-4">
                <div class="flex flex-col lg:flex-row lg:justify-between">
                    <header class="lg:self-center">
                        <div class="">
                            <h1 class="text-3xl font-bold leading-tight text-gray-900">
                                {{ course.name}}
                            </h1>
                        </div>
                    </header>
                    <div v-if="(user.role_id === 1 || user.role_id === 2)">
                        <a :href="route('courses.edit', {course})"
                           class="w-56 mt-8 lg:mt-0 text-center inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-primary-500 hover:text-primary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
                            Επεξεργασία Μαθήματος
                        </a>
                    </div>

                </div>
            </div>

            <div class="h-screen grid md:flex overflow-hidden bg-white">
                <div class="flex flex-col min-w-0 flex-1 overflow-hidden">
                    <div class="flex-1 relative z-0 flex overflow-hidden">
                        <main class="flex-1 relative z-0 overflow-y-auto focus:outline-none" tabindex="0">
                            <div class="absolute inset-0 pt-4 md:py-6 px-4">
                                <div class="h-full border-4 border-gray-200 border-dashed rounded-lg">
                                    Θεωρία

                                    <div v-for="(theory, index) in course.theories" :key="index">
                                        <div>{{ theory.name }}</div>
                                    </div>

                                </div>
                            </div>
                        </main>
                        <!--                    &lt;!&ndash;                second dashboard column&ndash;&gt;
                                            <aside class="hidden relative md:flex md:flex-col flex-shrink-0 w-96 border-l border-gray-200">
                                                <div class="absolute inset-0 py-6 px-4 sm:px-6 lg:px-8">
                                                    <div class="h-full border-4 border-gray-200 border-dashed rounded-lg">
                                                        Ασκήσεις
                                                    </div>
                                                </div>
                                            </aside>-->
                    </div>
                </div>

                <div class="flex flex-col min-w-0 flex-1 overflow-hidden">
                    <div class="flex-1 relative z-0 flex overflow-hidden">
                        <main class="flex-1 relative z-0 overflow-y-auto focus:outline-none" tabindex="0">
                            <div class="absolute inset-0 pb-4 md:py-6 p-4 md:pr-4">
                                <div class="h-full border-4 border-gray-200 border-dashed rounded-lg">
                                    Ασκήσεις

                                    <div v-for="(assignment, index) in course.assignments" :key="index">
                                        <div>{{ assignment.name }}</div>
                                    </div>

                                </div>
                            </div>
                        </main>
                        <!--                    &lt;!&ndash;                second dashboard column&ndash;&gt;
                                            <aside class="hidden relative md:flex md:flex-col flex-shrink-0 w-96 border-l border-gray-200">
                                                <div class="absolute inset-0 py-6 px-4 sm:px-6 lg:px-8">
                                                    <div class="h-full border-4 border-gray-200 border-dashed rounded-lg">
                                                        Ασκήσεις
                                                    </div>
                                                </div>
                                            </aside>-->
                    </div>
                </div>

            </div>
        </div>
        <div v-else class="h-screen mb-10 mt-32 px-8">
            <div class="text-xl font-bold leading-tight text-gray-900">
                Πρέπει να είσαι εγγεγραμμένος χρήστης για να δεις τα μαθήματα!
            </div>

            <a :href="route('register')"
               class="w-64 mt-8 lg:mt-0 text-center inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-primary-500 hover:text-primary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
                Εγγραφή
            </a>
        </div>

    </div>

</template>

<script>
export default {
name: "CourseComponent",

    data() {
        return {

        }
    },

    props: {
        course: {
            type: Object
        },

        user: {
            type: Object,
            required: true
        }
    }
}
</script>

<style scoped>

</style>
