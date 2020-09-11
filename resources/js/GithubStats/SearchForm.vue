<template>

    <div>
        <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
            <div class="bg-blue-100 border-t border-b border-blue-500 text-blue-700 px-4 py-3" role="alert">
                <p class="font-bold">Brief Information</p>
                <p class="text-sm">Kindly note that your results are not stored permanently... They'll be deleted after some time.</p>
            </div>

            <div class="mt-8 text-2xl">
                Supply Github username
            </div>

            <div class="mt-6 text-gray-500">
                <form @submit.prevent="submit" action = "/search" method="post">
                    <input v-model="form.github_username" class="py-5 bg-white focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 block w-full appearance-none leading-normal" type="text" placeholder="GabrielFemi" id = "github-username">
                    <div class="text-red-700" v-if="$page.errors.github_username">{{ $page.errors.github_username[0] }}</div>
                    <input type = "submit"  class = " bg-blue-500 hover:bg-blue-700 text-white pt-2 mt-3 font-bold py-2 px-4 rounded" value = "Search">
                </form>

            </div>



        </div>

    </div>
</template>

<script>
import Label from "../Jetstream/Label";
import JetApplicationLogo from '../Jetstream/ApplicationLogo';

export default {
name: "SearchForm",
    components: {Label, JetApplicationLogo},
    data() {
    return {
form: {
    github_username: null,
}
    }
    },
    methods: {
    submit() {
        this.$inertia.post('/search', this.form)
    },
    }
}
</script>

<style scoped>

</style>
