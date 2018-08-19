<template>
    <div id="adminPanel">
        <nav-bar v-show="showNavigation"></nav-bar>

        <transition name="slide">
                <router-view></router-view>
        </transition>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                showNavigation: false
            }
        },

        updated() {
            this.showNavigation = !!this.$auth.getToken();
        }
    }
</script>

<style scoped>
    .slide-enter { transform: translateX(250%) }
    .slide-enter-to { transform: translateX(0) }
    .slide-enter-active { position: absolute }

    .slide-leave { transform: translateX(0) }
    .slide-leave-to { transform: translateX(-250%) }
    .slide-leave-active { position: absolute }

    .slide-enter-active { transition-delay: 300ms; }

    .slide-enter-active,
    .slide-leave-active {
        transition-property: all;
        transition-duration: 750ms;
        transition-timing-function: ease-in-out;
    }
</style>