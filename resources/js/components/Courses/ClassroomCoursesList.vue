<template>
    <div>
        <div v-if="classroom.classroom_type_id === 1" class="grid grid-cols-1 gap-4 sm:grid-cols-2 px-8 mb-20 mt-4">
            <div v-for="(course, index) in classroom.courses" :key="index">
                <div class="relative rounded-lg border border-gray-300 bg-white px-6 py-5 shadow-sm flex items-center space-x-3 hover:border-gray-400 focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-gray-500">
                    <div class="flex-shrink-0">
                        <div class="h-10 w-10 rounded-full bg-primary-500"></div>
                        <!--                    <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">-->
                    </div>
                    <div class="flex-1 min-w-0">
                        <a :href="course.path" class="focus:outline-none">
                            <span class="absolute inset-0" aria-hidden="true"></span>
                            <p class="text-sm font-medium text-gray-900">
                                {{ course.name }}
                            </p>
                            <p class="text-sm text-gray-500 truncate">
                                {{ course.description }}
                            </p>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div v-else class="px-8 mb-20 mt-4">
            <div v-for="(course, index) in classroom.courses" :key="index" class="my-3">
                <div class="relative rounded-lg border border-gray-300 bg-white px-6 py-5 shadow-sm flex items-center space-x-3 hover:border-gray-400 focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-gray-500">
                    <div class="flex-shrink-0">
                        <div class="h-10 w-10 rounded-full bg-primary-500"></div>
                        <!--                    <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">-->
                    </div>
                    <div class="flex-1 min-w-0">
                        <a :href="course.path" class="focus:outline-none">
                            <span class="absolute inset-0" aria-hidden="true"></span>
                            <p class="text-sm font-medium text-gray-900">
                                {{ course.name }}
                            </p>
                            <p class="text-sm text-gray-500 truncate">
                                {{ course.description }}
                            </p>
                        </a>
                    </div>
                </div>
<!--                <div v-if="course.id === 1">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/u-Q0eMizPsI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                </div>
                <div v-if="course.id === 2">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/MaN668Rtyqs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                </div>
                <div v-if="course.id === 3">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/uymnKkbUPLM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                </div>
                <div v-if="course.id === 4">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/Rkc7EDkcIkc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                </div>
                <div v-if="course.id === 5">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/PZgtOnuHJWE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>-->
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "ClassroomCoursesList",

    props: {
        classroom: {
            type: Object
        },
    }
}
</script>


