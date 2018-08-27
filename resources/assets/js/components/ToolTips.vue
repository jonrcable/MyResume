<template>

<b-container fluid>
  <b-row>
    <b-col md="4" class="py-4">
      <b-btn id="exButton1" variant="outline-success">Live chat</b-btn>
    </b-col>
  </b-row>

  <!-- Tooltip title specified via prop title -->
  <b-tooltip target="exButton1" title="Online!" placement="bottom"></b-tooltip>

</b-container>

</template>

<script>
    console.log('tooltips.');
    export default {
        mounted() {
            $(document).ready(function(){
                $('[data-toggle="tooltip"]').tooltip();
            });
        }
    }
</script>