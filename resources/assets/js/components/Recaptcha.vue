<template>
  <div
  id="g-recaptcha"
  class="g-recaptcha"
  :data-sitekey="captchaData">
  </div>
</template>

<script>
export default {
  data () {
    return {
      widgetId: 0
    }
  },
  props: ['captchaData'],
  methods: {
        onSubmit: function () {
          this.$refs.invisibleRecaptcha.execute()
        },
        onVerify: function (response) {
          console.log('Verify: ' + response)
        },
        onExpired: function () {
          console.log('Expired')
        },
        resetRecaptcha () {
          this.$refs.recaptcha.reset() // Direct call reset method
        }
  },
  mounted () {
    // render the recaptcha widget when the component is mounted
    this.render()
  }
}
</script>