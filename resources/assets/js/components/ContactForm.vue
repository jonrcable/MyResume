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

                    <div v-if="errors && errors.lead" class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fa fa-user text-danger"></i></div>
                            </div>
                            <input type="text" class="form-control is-invalid" id="lead" name="lead" placeholder="Link to lead (if available)" v-model="fields.lead">
                            <div class="invalid-feedback small">{{ errors.lead[0] }}</div>
                        </div>
                    </div>
                    <div v-else class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fa fa-user text-dark"></i></div>
                            </div>
                            <input class="form-control" type="text" id="lead" name="lead" placeholder="Link to lead (if available)" v-model="fields.lead">
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
                        <vue-recaptcha
                            ref="recaptcha"
                            @verify="onVerify"
                            sitekey="{{ config('services.recaptcha.key') }}"></vue-recaptcha>
                        <div v-if="errors && errors.recaptcha">
                            <div class="small text-danger">{{ errors.recaptcha[0] }} </div>
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
    import VueRecaptcha from 'vue-recaptcha';

    export default {
        components: { VueRecaptcha },
        data() {
            return {
                post: {
                    title: '',
                    body: '',
                    recaptcha: '',
                },
                errors: [],
                fields: {},
                success: false,
                loaded: true,
                action: '/incoming',
                rcapt_id: 1
            }
        },
        props: ['captchaData'],
        methods: {

            submit() {
              if (this.loaded) {
                this.loaded = false;
                this.success = false;
                this.errors = {};
                g_recaptcha_response = window.grecaptcha.getResponse(this.rcapt_id);
                console.log(g_recaptcha_response);
                console.log(this.fields);
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
            onVerify(response) {
               this.post.recaptcha = response;
            },
            addPost()
            {
                 axios
                    .post(this.action, this.post, {
                    headers:{
                        'Content-Type':'application/json',
                        'Accept':'application/json'
                    }
                })
                .then(({data: {post}}) => {
                    $("#addPost").modal("hide");
                    this.errors = [];
                    this.$refs.recaptcha.reset();
                })
                .catch(error => {
                    if(error)
                    {
                        this.errors = error.response.data.errors;
                    }
                });
            }

        },
        mounted: function() {

            console.log(this.captchaData);

        }

    }

</script>