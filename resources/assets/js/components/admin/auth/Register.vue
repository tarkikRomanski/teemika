<template>
    <b-card class="col-md-8 offset-md-2">
        <form id="loginForm" @submit.prevent="register">
            <h1>Registration</h1>
            <b-form-group label="Your name" label-for="user_name">
                <b-form-input id="user_name" type="text" v-model.trim="user.name"></b-form-input>
            </b-form-group>

            <b-form-group label="Your email" label-for="user_email">
                <b-form-input id="user_email" type="email" v-model.trim="user.email"></b-form-input>
            </b-form-group>

            <b-form-group label="Your password" label-for="user_password">
                <b-form-input id="user_password" type="password" v-model.trim="user.password"></b-form-input>
            </b-form-group>

            <b-button type="submit" variant="success">Registration</b-button>
        </form>
    </b-card>
</template>

<script>
    export default {
        data() {
            return {
                user: {
                    name: null,
                    email: null,
                    password: null
                }
            }
        },

        methods: {
            register() {
                axios.post('api/1.0/register', this.user)
                    .then(response => {
                        console.log(response);
                    })
                    .catch(response => {
                        console.log(response);
                    });
            }
        }
    }
</script>

<style scoped>

</style>