<template>

    <div class="relative bg-gray-50 border-b border-gray-200 shadow-sm pt-6 pb-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">
            <nav class="relative flex items-center justify-between sm:h-10 md:justify-center" aria-label="Global">
                <div class="flex items-center flex-1 md:absolute md:inset-y-0 md:left-0">
                    <div class="flex items-center justify-between w-full md:w-auto">
                        <a href="/">
                            <span class="sr-only">Workflow</span>
                            <img class="h-14 w-auto sm:h-16" src="/images/logo.png" alt="smart logo image">
                        </a>
                        <div class="-mr-2 flex items-center md:hidden">
                            <button @click="isOpen = !isOpen" type="button"
                                    class="bg-gray-50 rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500"
                                    id="main-menu" aria-haspopup="true">
                                <span class="sr-only">Open main menu</span>
                                <!-- Heroicon name: menu -->
                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M4 6h16M4 12h16M4 18h16"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="hidden md:flex md:space-x-10">
                    <a href="/" class="font-medium text-gray-500 hover:text-gray-900">Αρχική</a>

                    <a href="/about-smart" class="font-medium text-gray-500 hover:text-gray-900">Σχετικά με τη Smart</a>

                    <a href="/contact/create" class="font-medium text-gray-500 hover:text-gray-900">Επικοινωνία</a>
                </div>

                <div class="hidden md:absolute md:flex md:items-center md:justify-end md:inset-y-0 md:right-0">
                    <div v-if="!user" class="inline-flex rounded-md">
                        <a href="/login"
                           class="inline-flex items-center px-4 py-2 mr-1.5 border border-gray-200 text-base font-medium rounded-md text-yellow-400 bg-white shadow hover:text-gray-800">
                            Σύνδεση
                        </a>
                        <a href="/register"
                           class="inline-flex items-center px-4 py-2 border border-gray-200 text-base font-medium rounded-md text-yellow-400 bg-white shadow hover:text-gray-800">
                            Εγγραφή
                        </a>
                    </div>

                    <div v-if="user" class="relative inline-block text-left">
                        <div>
                            <button @click="isOpenProfile = !isOpenProfile" type="button" class="inline-flex justify-center w-full rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-indigo-500" id="options-menu" aria-haspopup="true" aria-expanded="true">
                                <img src="/images/avatar.svg" class="-mr-1 h-8 w-8">
                            </button>
                        </div>

                        <div v-if="isOpenProfile" class="origin-top-right absolute right-0 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5">
                            <div class="py-1" role="menu" aria-orientation="vertical" aria-labelledby="options-menu">
                                <a href="/foo" class="block px-5 py-2 rounded-md text-base font-medium text-gray-700 hover:bg-gray-100 hover:text-gray-900" role="menuitem">Προφίλ</a>
                                <a href="/foo" class="block px-5 py-2 rounded-md text-base font-medium text-gray-700 hover:bg-gray-100 hover:text-gray-900" role="menuitem">Τάξεις</a>
                                <a href="/foo" class="block px-5 py-2 rounded-md text-base font-medium text-gray-700 hover:bg-gray-100 hover:text-gray-900" role="menuitem">Μαθήματα</a>
                                <a href="/logout">
                                    <button type="submit" class="block w-full px-5 py-3 text-center font-medium text-yellow-400 bg-gray-50 hover:bg-gray-100 hover:text-indigo-700" role="menuitem">
                                        Log out
                                    </button>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </nav>
        </div>

        <!--
            Mobile menu, show/hide based on menu open state.

            Entering: "duration-150 ease-out"
            From: "opacity-0 scale-95"
            To: "opacity-100 scale-100"
            Leaving: "duration-100 ease-in"
            From: "opacity-100 scale-100"
            To: "opacity-0 scale-95"
        -->
        <div v-if="isOpen" class="absolute top-0 z-30 inset-x-0 p-2 transition transform origin-top-right md:hidden">
            <div class="rounded-lg shadow-md bg-white ring-1 ring-black ring-opacity-5 overflow-hidden">
                <div class="px-5 pt-4 flex items-center justify-between">
                    <div>
                        <img class="h-14 w-auto" src="/images/logo.png" alt="smart logo image">
                    </div>
                    <div class="-mr-2">
                        <button @click="isOpen = !isOpen" type="button"
                                class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                            <span class="sr-only">Close main menu</span>
                            <!-- Heroicon name: x -->
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M6 18L18 6M6 6l12 12"/>
                            </svg>
                        </button>
                    </div>
                </div>
                <div role="menu" aria-orientation="vertical" aria-labelledby="main-menu">
                    <div class="px-2 pt-2 pb-3 space-y-1" role="none">
                        <a href="/"
                           class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50"
                           role="menuitem">Αρχική</a>

                        <a href="/about-smart"
                           class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50"
                           role="menuitem">Σχετικά με τη Smart</a>

                        <a href="/contact/create"
                           class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50"
                           role="menuitem">Επικοινωνία</a>
                    </div>
                    <div role="none">
                        <a v-if="!user" href="/login"
                           class="block w-full px-5 py-3 text-center font-medium text-yellow-400 bg-gray-50 hover:bg-gray-100 hover:text-indigo-700"
                           role="menuitem">
                            Log in
                        </a>
                    </div>
                    <div v-if="user" class="border border-top pt-5">
                        <img src="/images/avatar.svg" class="ml-5 h-5 w-5">
                        <div class="py-1" role="menu" aria-orientation="vertical" aria-labelledby="options-menu">
                            <a href="#" class="block px-5 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50" role="menuitem">Προφίλ</a>
                            <a href="#" class="block px-5 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50" role="menuitem">Τάξεις</a>
                            <a href="#" class="block px-5 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50" role="menuitem">Μαθήματα</a>
                            <a href="/logout">
                                <button type="submit" class="block w-full px-5 py-3 text-center font-medium text-yellow-400 bg-gray-50 hover:bg-gray-100 hover:text-indigo-700" role="menuitem">
                                    Log out
                                </button>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>


    </div>

</template>

<script>
export default {
    name: "NavBar",

    data() {
        return {
            user: window.smart.user,
            isOpen: false,
            isOpenProfile: false
        }
    }
}
</script>
