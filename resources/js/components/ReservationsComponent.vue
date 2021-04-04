<template>
    <div class="py-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mb-12">
            <h2 class="text-gray-500 text-xs font-medium uppercase tracking-wide">ΠΡΟΗΓΟΥΜΕΝΕΣ ΚΡΑΤΗΣΕΙΣ</h2>
            <ul class="mt-3 grid grid-cols-1 gap-5 sm:gap-6 sm:grid-cols-2 lg:grid-cols-4">
                <li v-for="(prev,index) in previous" :key="index" class="col-span-1 flex shadow-sm rounded-md">
                    <div class="flex-shrink-0 flex items-center justify-center w-16 bg-pink-600 text-white text-sm font-medium rounded-l-md"></div>
                    <div class="flex-1 flex items-center justify-between border-t border-r border-b border-gray-200 bg-white rounded-r-md truncate">
                        <div class="flex-1 px-4 py-2 text-sm truncate">
                            <a :href="route('reservations.show',{course:prev.course.slug})" class="text-gray-900 font-medium hover:text-gray-600">{{ prev.course.name }}</a>
                            <p class="text-gray-500">{{ prev.period.name }}</p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>

        <div class="mb-12">
            <h2 class="text-gray-500 text-xs font-medium uppercase tracking-wide">ΤΡΕΧΟΥΣΕΣ ΚΡΑΤΗΣΕΙΣ</h2>
            <ul class="mt-3 grid grid-cols-1 gap-5 sm:gap-6 sm:grid-cols-2 lg:grid-cols-4">
                <li v-for="(curr,index) in current" :key="index" class="col-span-1 flex shadow-sm rounded-md">
                    <div class="flex-shrink-0 flex items-center justify-center w-16 bg-purple-600 text-white text-sm font-medium rounded-l-md"></div>
                    <div class="flex-1 flex items-center justify-between border-t border-r border-b border-gray-200 bg-white rounded-r-md truncate">
                        <div class="flex-1 px-4 py-2 text-sm truncate">
                            <a :href="route('reservations.show',{course:curr.course.slug})" class="text-gray-900 font-medium hover:text-gray-600">{{ curr.course.name }}</a>
                            <p class="text-gray-500">{{ curr.period.name }}</p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>

        <div class="mb-12">
            <h2 class="text-gray-500 text-xs font-medium uppercase tracking-wide">ΕΠΕΡΧΟΜΕΝΕΣ ΚΡΑΤΗΣΕΙΣ</h2>
            <ul class="mt-3 grid grid-cols-1 gap-5 sm:gap-6 sm:grid-cols-2 lg:grid-cols-4">
                <li v-for="(nex,index) in next" :key="index" class="col-span-1 flex shadow-sm rounded-md">
                    <div class="flex-shrink-0 flex items-center justify-center w-16 bg-yellow-500 text-white text-sm font-medium rounded-l-md"></div>
                    <div class="flex-1 flex items-center justify-between border-t border-r border-b border-gray-200 bg-white rounded-r-md truncate">
                        <div class="flex-1 px-4 py-2 text-sm truncate">
                            <a :href="route('reservations.show',{course:nex.course.slug})" class="text-gray-900 font-medium hover:text-gray-600">{{ nex.course.name }}</a>
                            <p class="text-gray-500">{{ nex.period.name }}</p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</template>

<script>
export default {
name: "ReservationsComponent",

    props: {
        previous: Array,
        current: Array,
        next: Array
    }
}
</script>

