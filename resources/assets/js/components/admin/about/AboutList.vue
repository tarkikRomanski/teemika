<template>
    <div class="row">
        <router-link :to="{ name: 'about.create' }"
                     class="btn btn-success w-100 mb-3">
            Create new
        </router-link>

        <b-card v-for="about in abouts"
                v-bind:key="about.id"
        >
            <div slot="footer">
                <b-button-group>
                    <router-link :to="{ name: 'about.edit', params: { update: about.id }}"
                                 class="btn btn-success">
                        Edit
                    </router-link>
                    <b-button variant="danger" @click="deleteItem(about.id)">Delete</b-button>
                </b-button-group>
            </div>
            <froalaView v-model="about.text"></froalaView>
        </b-card>
    </div>
</template>

<script>
    import {AboutResource} from '../../../resources/AboutResource';

    export default {
        data() {
            return {
                abouts: null,
                aboutResource: new AboutResource
            }
        },

        created() {
            this.aboutResource.list()
                .then(response => this.abouts = response.data)
                .catch(({response}) => console.log(response));
        },

        methods: {
            deleteItem(id) {
                this.$swal({
                        title: 'Deleting!',
                        content: '<strong>Do you sure, that want delete this item?</strong>',
                        type: 'error',
                        showCancelButton: true,
                        focusConfirm: false,
                        confirmButtonText: 'Yes Delete it!',
                        cancelButtonText: 'No, Keep it!'
                    }).then((result) => {
                            if(result.value) {
                                this.aboutResource.delete(id)
                                    .then(
                                        response => {
                                            this.deleteItemFromArray(id);
                                            this.$swal('Deleted', 'You successfully deleted this file', 'success')
                                        });
                            }
                        });
                //
            },

            deleteItemFromArray(id) {
                this.abouts.forEach(about => {
                    if (about.id === id) {
                        let index = this.abouts.indexOf(about);
                        this.abouts.splice(index, 1);
                    }
                });
            }
        }
    }
</script>