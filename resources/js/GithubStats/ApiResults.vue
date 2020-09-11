<template>

    <div>
        <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
            <div class="mt-8 text-2xl">
                This is all we know
            </div>

            <div class="mt-6 text-gray-500">
                <p>You searched for {{ $page.github_username }}</p>

            </div>
        </div>
    </div>
</template>

<script>
import Label from "../Jetstream/Label";
import JetApplicationLogo from '../Jetstream/ApplicationLogo';

export default {
name: "ApiResults",
    components: {Label, JetApplicationLogo},
   }
</script>
