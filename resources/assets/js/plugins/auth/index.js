const Auth = {
    install(Vue, options) {
        Vue.mixin({
            mounted() {
                let middleware = this.$route.meta.middleware.type;
                let redirect = this.$route.meta.middleware.redirect;
                let target = '';

                    switch (middleware) {
                    case 'auth':
                        target = redirect ? redirect : 'login';

                        if(!Vue.auth.isAuthenticated()) {
                            this.$router.push({name: target});
                        }
                        break;
                    case 'visitor':
                        target = redirect ? redirect : 'dashboard';
                        if(Vue.auth.isAuthenticated()) {
                            this.$router.push({name: target});
                        }
                        break;
                }


            }
        });

        Vue.auth = {
            setToken(token, expiration) {
                localStorage.setItem('token', token);
                localStorage.setItem('expiration', expiration);

                window.axios.defaults.headers.common['Authorization'] = 'Bearer ' + this.getToken();
            },

            getToken() {
                let token = localStorage.getItem('token');
                let expiration = localStorage.getItem('expiration');

                if (!token || !expiration) {
                    return null;
                }

                if (Date.now() > parseInt(expiration)) {
                    this.destroyToken();
                    return null;
                }

                return token;
            },

            destroyToken() {
                localStorage.removeItem('token');
                localStorage.removeItem('expiration');
            },

            isAuthenticated() {
                return this.getToken() ? true : false;
            }
        };


        Object.defineProperties(Vue.prototype, {
            $auth: {
                get() {
                    return Vue.auth;
                }
            }
        });
    }
};

export default Auth;