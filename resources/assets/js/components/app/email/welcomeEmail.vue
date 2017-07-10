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
                <form name="sentMessage" id="contactForm" novalidate>
                    <!--<div class="row control-group">-->
                        <!--<div class="form-group col-12 floating-label-form-group controls">-->
                            <!--<label>Name</label>-->
                            <!--<input type="text" class="form-control" placeholder="Name" id="name" required data-validation-required-message="Please enter your name.">-->
                            <!--<p class="help-block text-danger"></p>-->
                        <!--</div>-->
                    <!--</div>-->
                    <div class="row control-group">
                        <div class="form-group col-12 floating-label-form-group controls">
                            <label>Email Address</label>
                            <input type="email" class="form-control" placeholder="Email Address" id="email" required data-validation-required-message="Please enter your email address.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <!--<div class="row control-group">-->
                        <!--<div class="form-group col-12 floating-label-form-group controls">-->
                            <!--<label>Phone Number</label>-->
                            <!--<input type="tel" class="form-control" placeholder="Phone Number" id="phone" required data-validation-required-message="Please enter your phone number.">-->
                            <!--<p class="help-block text-danger"></p>-->
                        <!--</div>-->
                    <!--</div>-->
                    <div class="row control-group">
                        <div class="form-group col-12 floating-label-form-group controls">
                            <label>Message</label>
                            <textarea rows="5" class="form-control" placeholder="Message" id="message" required data-validation-required-message="Please enter a message."></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <br>
                    <div id="success"></div>
                    <div class="row">
                        <div class="form-group col-12">
                            <button type="submit" class="btn btn-secondary">Send</button>
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

//    let sweet = require('sweetalert');

    export default {
        data(){
            return{
//                    leads: [],
//                    email: null,
//                    emailError: false
            }
        },
        mounted() {
            console.log('welcome-leads-email Component is  ready.');

//            let self = this;
//
//            // remove error text once user enters email field.
//            $('#email').focus(function(){
//                self.emailError = false;
//                $('#email').css('caret-color', 'red');
//            });
        },
        methods: {
//            formPost: function(e) {
//                e.preventDefault();
//
//                let self = this;
//
//                axios
//                    .post('/welcomeEmail', {
//                        email: self.email,
//                    })
//                    .then(function (response) {
//                        self.email = null;
//                        self.emailError = false;
//                        sweet({
//                            title: "Thanks!",
//                            text: "Email Sent...",
//                            timer: 4000,
//                            showConfirmButton: true
//                        });
//                    })
//                    .catch(function (error) {
//                        if (typeof error.response.data.email !== 'undefined') {
//                            self.emailError = error.response.data.email[0]
//                        } else {
//                            // get sweet alert error.
//                            function getErrorLocation(){
//                                try { throw Error('') } catch(err) { return err; }
//                            }
//                            let local = getErrorLocation();
//                            let msg = local.stack;
////                            sweet(error.message, msg, "error");
//                            sweet(
//                                'Oops...',
//                                'I think that refreshing your browser should fix this...',
//                                'error'
//                            );
//                        }
//                    })
//                ;
//            }
        },
        computed: {

        }
    }
</script>
