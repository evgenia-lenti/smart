<template>
    <div class="h-screen grid md:flex overflow-hidden bg-white">

            <div class="flex flex-col min-w-0 flex-1 overflow-hidden">
                <div class="flex-1 relative z-0 flex overflow-hidden">
                    <main class="flex-1 relative z-0 overflow-y-auto focus:outline-none" tabindex="0">
                        <div class="absolute inset-0 pt-4 md:py-6 px-4">
                            <div class="h-full border-4 border-gray-200 border-dashed rounded-lg">
                                Θεωρία
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
        }
    }
}
</script>

<style scoped>

</style>
