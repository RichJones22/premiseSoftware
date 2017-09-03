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
                            <input v-model="email" type="email" class="form-control" placeholder="Email Address" id="email">
                        </div>
                    </div>
                    <div v-if="emailError" v-bind="emailError">
                        <ul>
                            <li id="emailError" class="alert alert-danger mt-error">{{emailError}}</li>
                        </ul>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-12 floating-label-form-group controls">
                            <label>Message</label>
                            <textarea v-model="message" rows="5" class="form-control" placeholder="Message" id="message"></textarea>
                        </div>
                    </div>
                    <div v-if="messageError" v-bind="messageError">
                        <ul>
                            <li id="messageError" class="alert alert-danger mt-error">{{messageError}}</li>
                        </ul>
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
                emailError: false,
                messageError: false
            }
        },
        mounted() {
            console.log('enter -- contact-us-email.vue component');

            let self = this;

            // remove error text once user enters email or message fields.
            $('#email, #message').focus(function(){
                self.emailError = false;
                self.messageError = false;
                $('#email, #message').css('caret-color', 'red');
            });

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

                        // clear email address and message hints after the 4.001 seconds... this allows for the
                        // sweet alerts dialog to finish if the user does not click the okay button.
                        setTimeout(function() {
                            location.reload();
                        }, 4001);
                    })
                    .catch(function (error) {
                        if (self.isDefined(error.response.data.errors.email)) {
                            self.emailError = error.response.data.errors.email[0];
                        } else if (self.isDefined(error.response.data.errors.message)) {
                            self.messageError = error.response.data.errors.message[0];
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
