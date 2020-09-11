<template>

    <div>
        <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
            <div class="mt-6 text-gray-500">
                <p>You searched for <span class="text-red-900 uppercase">{{ $page.github_username }}</span></p>
                <hr>
            </div>

            <div class="mt-2">
                <p>Number of followers: {{ followers}}<span ></span></p>
            </div>
        </div>
    </div>
</template>

<script>
import Label from "../Jetstream/Label";
import JetApplicationLogo from '../Jetstream/ApplicationLogo'

export default {
name: "ApiResults",
    components: {Label, JetApplicationLogo},
    data() {
        return {
            url: 'https://api.github.com/users/GabrielFemi',
            followers:  0,
        }
    },
    mounted() {
        axios.get(this.url).then(response => {
            this.followers = response.data.followers
        }).catch(error =>  {
            this.followers = error.response.data.message
        })
    }
}
</script>
