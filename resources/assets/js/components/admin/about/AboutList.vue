<template>
    <div>
        <ul>
            <li v-for="about in abouts">
                {{ about.text }}
            </li>
        </ul>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                abouts: null
            }
        },

        created() {
            axios.get(this.getApiUrl('api/1.0/about'))
                .then(response => this.abouts = response.data)
                .catch(({response}) => console.log(response));
        }
    }
</script>