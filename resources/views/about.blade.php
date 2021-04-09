@extends('layouts.app')

@section('content')

    <div class="py-16 bg-gray-50 overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 space-y-8 sm:px-6 lg:px-8">
            <div class="text-base max-w-prose mx-auto lg:max-w-none">
                <h2 class="text-base text-primary-500 font-semibold tracking-wide uppercase">Smart</h2>
                <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">Σε τι διαφέρουμε</p>
            </div>
            <div class="relative z-10 text-base max-w-prose mx-auto lg:max-w-5xl lg:mx-0 lg:pr-72">
                <p class="text-lg text-gray-500">Το Smart είναι το ηλεκτρονικό φροντιστήριο στο οποίο όλα τα μαθήματα διδάσκονται
                    διαδικτυακά. Σύγχρονο, ευχάριστο και αποδοτικό, προσφέρει στους μαθητές όλα τα εκπαιδευτικά εργαλεία που χρειάζονται,
                    προκειμένου να χτίσουν γερές βάσεις και να ανταπεξέλθουν με επιτυχία στις απαιτήσεις του σχολείου στο πεδίο των
                    μαθηματικών. Και όλα αυτά, με τον πιο διασκεδαστικό και αποτελεσματικό τρόπο!</p>
            </div>
            <div class="lg:grid lg:grid-cols-2 lg:gap-8 lg:items-start">
                <div class="relative z-10">
                    <div class="prose prose-indigo text-gray-500 mx-auto lg:max-w-none">
                        <p>Προσφέρουμε καινοτόμα εκπαιδευτικά εργαλεία τα οποία εξατομικεύουν το μάθημα σε κάθε εκπαιδευόμενο
                             και το κάνουν πιο εύκολο και απολαυστικό. Μέσα από
                            online παρουσιάσεις της θεωρίας, διαδραστικές ασκήσεις, διαγωνίσματα, αλλά και άμεση πρόσβαση στην διδακτέα
                            ύλη, καλύπτεις την ύλη της τάξης σου, όπου και αν βρίσκεσαι, γρήγορα και αποτελεσματικά. </p>
                        <ul>
                            <li>Καινοτόμα εκπαιδευτικά εργαλεία που κάνουν κάθε μάθημα πιο εύκολο και αποτελεσματικό!</li>
                            <li>Όλα τα μαθήματα μαθηματικών του σχολείου σε ένα μέρος με τη βοήθεια της τεχνητής νοημοσύνης!</li>
                            <li>Online παρουσίαση θεωρίας, ασκήσεις, για την ύλη της τάξης σου από οποιαδήποτε συσκευή!</li>
                        </ul>
                        <p>Εγγράψου εύκολα και γρήγορα στην τάξη που θέλεις και απέκτησε αμέσως πρόσβαση στα courses μαθηματικών που
                            χρειάζεσαι. Στην ειδική καρτέλα θα βρεις όλη την θεωρία αλλά και τις ασκήσεις που χρειάζεσαι.</p>
                        <h3>Μάθε έξυπνα</h3>
                        <p>Με την εγγραφή σου στο ηλεκτρονικό φροντιστήριο Smart έχεις όλη την ύλη της τάξης σου, στην οθόνη του υπολογιστή
                            σου. Εδώ, μπορείς να μπαίνεις όποια ώρα θες, όσο συχνά θες και να επιλέγεις τα μαθήματα μαθηματικών που σε
                            ενδιαφέρουν. Η δύναμη της ολοκληρωμένης εκπαίδευσης είναι στο χέρι σου!</p>
                    </div>
                    <div class="mt-10 flex text-base max-w-prose mx-auto lg:max-w-none">
                        <div class="rounded-md shadow">
                            <a href="/contacts/create"
                               class="w-full flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-primary-500 hover:bg-gray-500">
                                Επικοινωνία
                            </a>
                        </div>
                    </div>
                </div>
                <div class="mt-12 relative text-base max-w-prose mx-auto lg:mt-0 lg:max-w-none">
                    <blockquote class="relative bg-white rounded-lg shadow-lg">
                        <div class="rounded-t-lg px-6 py-8 sm:px-10 sm:pt-10 sm:pb-8">
                            <div class="flex">
                                <img class="h-14" src="/images/logo.png" alt="smart logo image">
                                <span class="mt-3.5 text-primary-500 text-2xl ml-10">Smart</span>
                            </div>

                            <div class="relative text-lg text-gray-700 font-medium mt-8">
                                <svg
                                    class="absolute top-0 left-0 transform -translate-x-3 -translate-y-2 h-8 w-8 text-gray-200"
                                    fill="currentColor" viewBox="0 0 32 32" aria-hidden="true">
                                    <path
                                        d="M9.352 4C4.456 7.456 1 13.12 1 19.36c0 5.088 3.072 8.064 6.624 8.064 3.36 0 5.856-2.688 5.856-5.856 0-3.168-2.208-5.472-5.088-5.472-.576 0-1.344.096-1.536.192.48-3.264 3.552-7.104 6.624-9.024L9.352 4zm16.512 0c-4.8 3.456-8.256 9.12-8.256 15.36 0 5.088 3.072 8.064 6.624 8.064 3.264 0 5.856-2.688 5.856-5.856 0-3.168-2.304-5.472-5.184-5.472-.576 0-1.248.096-1.44.192.48-3.264 3.456-7.104 6.528-9.024L25.864 4z"/>
                                </svg>
                                <p class="relative">Η τεχνητή νοημοσύνη εξατομικεύει το μάθημα σύμφωνα με τις ανάγκες σου. Κάθε εκπαιδεύομενος
                                παρακολουθεί ένα μοναδικό μάθημα το οποίο δημιουργείται ειδικά για εκείνον με τα πιο σύγχρονα
                                εργαλεία!</p>
                            </div>
                        </div>
                        <cite
                            class="relative flex items-center sm:items-start bg-gray-200 rounded-b-lg not-italic py-5 px-6 sm:py-5 sm:pl-12 sm:pr-10 sm:mt-10">
                            <div
                                class="relative rounded-full border-2 border-white sm:absolute sm:top-0 sm:transform sm:-translate-y-1/2">
                                <img src="/images/avatar.svg" class="w-12 h-12 sm:w-20 sm:h-20 rounded-full bg-indigo-300" alt="smart logo image">
                            </div>
                            <div class="flex relative ml-4 text-primary-700 font-semibold leading-6 sm:ml-24 sm:pl-1">
                                <div class="flex flex-col">
                                    <p class="font-semibold sm:inline">Ευγενία Λεντή</p>
                                    <p class="font-semibold sm:inline">Δημήτρης Σιούλας</p>
                                    <p class="sm:inline">CEOs at Smart</p>
                                </div>

                            </div>
                        </cite>
                    </blockquote>
                </div>
            </div>
        </div>
    </div>


@endsection

