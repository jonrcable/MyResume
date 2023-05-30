<template></template>

<script>

    export default {
        mounted() {

            console.log('Animated Hover Mounted.');
            // send a css animation on hover
            $('.animated-hover').each(function () {

                var $el = $(this);
                var animation = $el.attr('animation');

                $el.mouseenter(function(event) {
                    $el.addClass("animate__animated").addClass(animation);
                });

                $el.on("webkitAnimationEnd mozAnimationEnd oAnimationEnd animationEnd", function(event) {
                    setTimeout(function(event) {
                        $el.removeClass("animate__animated").removeClass(animation)
                    }, 1000);
                });
            });

        }
    }

</script>