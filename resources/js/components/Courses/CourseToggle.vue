<template>
    <div>
<!--        <div class="flex items-start">
            <div class="flex items-center h-5">
                <input id="{{ $course->slug }}" name="courses[]" value="{{ $course->id }}" type="checkbox"
                       class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
            </div>
            <div class="ml-3 text-sm">
                <label for="active" class="font-medium text-gray-700">{{ $course->name }}</label>
                <p class="text-gray-500">{{ $course->description }}</p>
            </div>
        </div>-->


        <div class="flex items-center justify-between py-4">
              <span class="flex-grow flex flex-col" id="toggleLabel">
                <span class="text-sm font-medium text-gray-900">{{ course.name }}</span>
                <span class="text-sm leading-normal text-gray-500 mr-1">{{ course.description }}</span>
              </span>
                <!-- On: "bg-indigo-600", Off: "bg-gray-200" -->
              <button type="button" aria-pressed="false" aria-labelledby="toggleLabel" class="bg-gray-200 relative inline-flex flex-shrink-0 h-6 w-11 border-2 border-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    <span class="sr-only">Use setting</span>
                     <!-- On: "translate-x-5", Off: "translate-x-0" -->
                    <span aria-hidden="true" class="translate-x-0 inline-block h-5 w-5 rounded-full bg-white shadow transform ring-0 transition ease-in-out duration-200"></span>
              </button>
        </div>
    </div>
</template>

<script>
export default {
    name: "CourseToggle",

    data() {
        return {

        }
    },

    props: {
        course: {
            type: Object
        }
    }
}
</script>

<style scoped>

</style>
