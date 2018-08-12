<template>
    <b-card class="col-md-8 offset-md-2">
        <form id="loginForm" @submit.prevent="login">
            <h1>Login</h1>
            <b-form-group label="Your email" label-for="user_email">
                <b-form-input id="user_email" type="email" v-model.trim="user.email"></b-form-input>
            </b-form-group>

            <b-form-group label="Your password" label-for="user_password">
                <b-form-input id="user_password" type="password" v-model.trim="user.password"></b-form-input>
            </b-form-group>

            <b-button type="submit" variant="success">Login</b-button>
        </form>
    </b-card>
</template>

<script>
    export default {
        data() {
            return {
                user: {
                    email: null,
                    password: null
                }
            }
        },

        methods: {
            login() {
                let data = {
                    client_id: 2,
                    client_secret: 'fMjPMcNMci427jF9e2AIvIFWHnKp36ycjCx99m6i',
                    grant_type: 'password',
                    username: this.user.email,
                    password: this.user.password
                };

                axios.post(this.getApiUrl('oauth/token'), data)
                    .then(response => {
                        this.$auth.setToken(response.data.access_token, response.data.expires_in + Date.now());
                    })
                    .catch(response => {
                        this.$swal(
                            'Authentication error!',
                            'You are have a problem with authentication data',
                            'error'
                        );
                    });
            }
        }
    }
</script>