<template>
    <div id="dashboard">
        <h1>Dashboard</h1>
        <router-link :to="{name: 'logout'}">LogOut</router-link>
        <router-link :to="{name: 'about.list'}">About list</router-link>
    </div>
</template>