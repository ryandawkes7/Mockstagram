<template>
    <div>
        <button class="btn btn-primary ml-4" @click="followUser" v-text="buttonText"></button>
    </div>
</template>

<script>
    export default {
        props: ['userId', 'follows'],

        mounted() {
            console.log('Component mounted.')
        },

        // Detect if user has pressed button
        data: function () {
            return{
                status: this.follows
            }
        },

        methods: {
            followUser() {
                axios.post('/follow/' + this.userId)
                    .then(response => {
                        // Flip following status
                        this.status = !this.status
                        console.log(response)
                    })
                    .catch(errors => {
                        // Redirect to login page
                        if(errors.response.status == 401) {
                            window.location = '/login';
                        }
                    })
            }
        },

        // Change button text to follow/unfollow accordingly
        computed: {
            buttonText() {
                return (this.status) ? 'Unfollow' : 'Follow';
            }
        }

    }
</script>
