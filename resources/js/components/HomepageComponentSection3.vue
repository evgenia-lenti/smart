<template>
    <div class="bg-white">
        <div>
            <DatePickerComponent></DatePickerComponent>
        </div>

        <div class="max-w-xl mx-auto mt-20 px-4 sm:px-6 lg:max-w-7xl lg:px-8">
            <h2 class="sr-only"></h2>
            <dl class="space-y-10 lg:space-y-0 lg:grid lg:grid-cols-3 lg:gap-8">
                <div>
                    <div class="flex items-center justify-center h-12 w-12 rounded-md bg-primary-500 text-white">
                        <svg class="flex-shrink-0 h-6 w-6 text-white bg-primary-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                    </div>
                    <div class="mt-5">
                        <dt class="text-lg leading-6 font-medium text-gray-900">
                            Μάθηση με αποτέλεσμα
                        </dt>
                        <dd class="mt-2 text-base text-gray-500">
                            Καινοτόμα εκπαιδευτικά εργαλεία που κάνουν κάθε μάθημα πιο εύκολο και αποτελεσματικό!
                        </dd>
                    </div>
                </div>

                <div>
                    <div class="flex items-center justify-center h-12 w-12 rounded-md bg-primary-500 text-white">

                        <svg class="flex-shrink-0 h-6 w-6 text-white bg-primary-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                    </div>
                    <div class="mt-5">
                        <dt class="text-lg leading-6 font-medium text-gray-900">
                            Διδασκαλία ολόκληρης της ύλης
                        </dt>
                        <dd class="mt-2 text-base text-gray-500">
                            Όλα τα μαθήματα μαθηματικών του σχολείου σε ένα μέρος με τη βοήθεια της τεχνητής νοημοσύνης!
                        </dd>
                    </div>
                </div>

                <div>
                    <div class="flex items-center justify-center h-12 w-12 rounded-md bg-primary-500 text-white">

                        <svg class="flex-shrink-0 h-6 w-6 text-white bg-primary-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                    </div>
                    <div class="mt-5">
                        <dt class="text-lg leading-6 font-medium text-gray-900">
                            Μάθηση από όλες τις συσκευές
                        </dt>
                        <dd class="mt-2 text-base text-gray-500">
                            Online παρουσίαση θεωρίας, ασκήσεις, για την ύλη της τάξης σου από οποιαδήποτε συσκευή!
                        </dd>
                    </div>
                </div>
            </dl>
        </div>

        <div class="bg-primary-500 mt-24">
            <div class="max-w-7xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:px-8">
                <h2 class="text-center text-white text-2xl font-semibold uppercase tracking-wide">
                    ΤΟ ΜΑΘΗΜΑ ΔΕΝ ΗΤΑΝ ΠΟΤΕ ΠΡΙΝ ΤΟΣΟ ΕΞΥΠΝΟ ΚΑΙ ΑΠΟΤΕΛΕΣΜΑΤΙΚΟ
                </h2>
            </div>
        </div>
    </div>
</template>

<script>
import DatePickerComponent from "./DatePickerComponent";

export default {
name: "HomepageComponentSection3",

    components: {
        DatePickerComponent
    },
}
</script>

