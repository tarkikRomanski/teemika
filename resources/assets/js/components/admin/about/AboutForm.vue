<template>
    <b-row>
        <h1>{{ update ? 'Update about item' : 'Create about item' }}</h1>
        <b-col cols="12">
            <b-form @submit.prevent="sendData">
                <froala :tag="'textarea'" :config="config" v-model="about.text"></froala>

                <b-button type="submit" variant="primary">{{ update ? 'Update' : 'Save' }}</b-button>
            </b-form>
        </b-col>
    </b-row>
</template>

<script>
    import {AboutResource} from '../../../resources/AboutResource';

    export default {
        data() {
            return {
                about: {
                    text: null
                },
                aboutResource: new AboutResource,
                data: new FormData,
                config: {
                    vueIgnoreAttrs: ['class', 'id']
                },
            }
        },

        props: {
            update: {
                type: [String, Boolean],
                default: false
            }
        },

        created() {
            this.fetch();
        },

        methods: {
            fetch() {
                if (this.update !== false) {
                    this.aboutResource.show(this.update)
                        .then(response => this.about = response.data)
                        .catch(({response}) => console.log(response));
                }
            },

            updateData() {
                this.aboutResource.update(this.update, this.data)
                    .then(response => {
                        console.log(response);

                        this.$swal(
                            'Successful!',
                            'About has been saved!',
                            'success'
                        );
                    })
                    .catch(({response}) => console.log(response));
            },

            createData() {
                this.aboutResource.create(this.data)
                    .then(response => {
                        this.$swal(
                            'Successful!',
                            'About has been created!',
                            'success'
                        ).then(() => {
                            router.push({ name: 'about' });
                        });
                    })
                    .catch(({response}) => console.log(response));
            },

            prepareData() {
                this.data.append('text', this.about.text);
                if(this.update) {
                    this.data.append('_method', 'put');
                }
            },

            sendData() {
                this.prepareData();
                if(this.update !== false) {
                    this.updateData();
                } else {
                    this.createData();
                }
            }
        }
    }
</script>