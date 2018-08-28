<template>

       <form @submit.prevent="submit">
            <div class="card rounded-0">
                <div class="card-header p-0">
                    <div class="bg-secondary text-white-50 text-center py-2">
                        <h6>Do you want to chat about an opportunity?</h6>
                    </div>
                </div>
                <div class="card-body p-3">

                    <div v-if="success" class="alert alert-success text-center">
                        Thank you for contacting me. <br > I will be in touch soon!
                    </div>

                    <div v-if="errors && errors.name" class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fa fa-user text-danger"></i></div>
                            </div>
                            <input type="text" class="form-control is-invalid" id="name" name="name" placeholder="Name" v-model="fields.name">
                            <div class="invalid-feedback small">{{ errors.name[0] }}</div>
                        </div>
                    </div>
                    <div v-else class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fa fa-user text-dark"></i></div>
                            </div>
                            <input class="form-control" type="text" id="name" name="name" placeholder="Name" v-model="fields.name">
                        </div>
                    </div>

                    <div v-if="errors && errors.email" class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fa fa-envelope text-danger"></i></div>
                            </div>
                            <input class="form-control is-invalid" type="email" id="email" name="email" placeholder="sample@joncable.com" v-model="fields.email">
                            <div class="invalid-feedback small">{{ errors.email[0] }}</div>
                        </div>
                    </div>
                    <div v-else class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fa fa-envelope text-dark"></i></div>
                            </div>
                            <input class="form-control" type="email" id="email" name="email" placeholder="sample@joncable.com" v-model="fields.email">
                        </div>
                    </div>

                    <div v-if="errors && errors.message" class="form-group has-danger">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fa fa-comment text-danger"></i></div>
                            </div>
                            <textarea class="form-control is-invalid" name="message" id="message" placeholder="Message..." v-model="fields.message"></textarea>
                            <div class="invalid-feedback small">{{ errors.message[0] }}</div>
                        </div>
                    </div>
                    <div v-else class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fa fa-comment text-dark"></i></div>
                            </div>
                            <textarea class="form-control" name="message" id="message" placeholder="Message..." v-model="fields.message"></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="g-recaptcha" :data-sitekey="captchaData"></div>
                        <div v-if="errors && errors.message">
                            <div class="invalid-feedback small">{{ errors.message[0] }}</div>
                        </div>
                    </div>

                    <div class="text-center">
                        <input type="submit" value="Contact Me" class="btn btn-outline-secondary btn-block rounded-0 py-2">
                    </div>
                </div>

            </div>
        </form>
        <!--Form with header-->

</template>

<script>
    console.log('Webpacked Assets.');
    export default {
        data() {
            return {
              fields: {},
              errors: {},
              success: false,
              loaded: true,
              action: '/incoming'
            }
        },
        props: ['captchaData'],
        methods: {
            submit() {
              if (this.loaded) {
                this.loaded = false;
                this.success = false;
                this.errors = {};
                axios.post(this.action, this.fields).then(response => {
                  this.fields = {}; //Clear input fields.
                  this.loaded = true;
                  this.success = true;
                }).catch(error => {
                  this.loaded = true;
                  if (error.response.status === 422) {
                    this.errors = error.response.data || {};
                    console.log(this.errors);
                  }
                });
              }
            },
        },
        mounted() {
            console.log('Form Component Mounted.');
        }
    }
</script>
