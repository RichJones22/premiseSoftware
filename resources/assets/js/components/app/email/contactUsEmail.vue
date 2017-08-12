<template>
    <!-- Contact Section -->
    <div class="container wow fadeIn">
        <div class="text-center">
            <h2>Send an email</h2>
            <hr class="colored">
            <p>Please reach out and say hello...</p>
        </div>
        <div class="row mt-4">
            <div class="col-lg-8 offset-lg-2">
                <form name="sentMessage" id="contactForm">
                    <div class="row control-group">
                        <div class="form-group col-12 floating-label-form-group controls">
                            <label>Email Address</label>
                            <input v-model="email" type="email" class="form-control" placeholder="Email Address" id="email" required data-validation-required-message="Please enter your email address.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-12 floating-label-form-group controls">
                            <label>Message</label>
                            <textarea v-model="message" rows="5" class="form-control" placeholder="Message" id="message" required data-validation-required-message="Please enter a message."></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <br>
                    <div id="success"></div>
                    <div class="row">
                        <div class="form-group col-12">
                            <button @click="formPost" type="submit" class="btn btn-secondary">Send</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>
<style>
    .mt-error {
        margin-top: 2rem;
    }
</style>
<script>

    let sweet = require('sweetalert2');

    export default {
        data(){
            return{
                leads: [],
                email: null,
                message: null,
                emailError: false
            }
        },
        mounted() {
            console.log('enter -- contact-us-email.vue component');

            console.log('exit -- contact-us-email.vue component');
        },
        methods: {
            formPost: function(e) {
                e.preventDefault();

                let self = this;

                axios
                    .post('/contactUsEmail', {
                        email: self.email,
                        message: self.message
                    })
                    .then(function (response) {
                        self.email = null;
                        self.message = null;
                        self.emailError = false;
                        sweet({
                            title: "Thanks!",
                            text: "Email Sent...",
                            timer: 4000,
                            showConfirmButton: true
                        });
                    })
                    .catch(function (error) {
                        if (this.isDefined(error.response.data.email)) {
                            self.emailError = error.response.data.email[0]
                        } else {
                            sweet(
                                'Oops...',
                                'I think that refreshing your browser should fix this...',
                                'error'
                            );
                        }
                    })
                ;
            },
            isDefined: function(value) {
                return psNS.ps.utils.isDefined(value);
            }
        },
        computed: {

        }
    }
</script>
