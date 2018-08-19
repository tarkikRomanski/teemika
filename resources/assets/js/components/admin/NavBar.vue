<template>
    <b-navbar toggleable>
        <b-navbar-toggle target="nav_dropdown_collapse"></b-navbar-toggle>
        <b-collapse is-nav id="nav_dropdown_collapse">
            <b-navbar-nav>
                <b-nav-item-dropdown text="About" left>
                    <router-link :to="{name: 'about.list'}" class="dropdown-item">About list</router-link>
                    <router-link :to="{name: 'about.create'}" class="dropdown-item">About create</router-link>
                </b-nav-item-dropdown>

                <router-link :to="{name: 'logout'}" class="nav-link">LogOut</router-link>
            </b-navbar-nav>
        </b-collapse>
    </b-navbar>
</template>