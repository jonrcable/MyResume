<template>
    <vue-typer :type-delay='25' :erase-delay='40' :text="['Hi, my name is Jon.','I am a Developer...','..an Engineer...','..a Maker.','I love to build...','...design..','...and create.', 'Explore my world...','Thanks for visiting!']"></vue-typer>
</template>

<script>

    export default {
        mounted() {

            console.log('Typer Mounted.');

        }
    }

</script>
