<template>

    <div>

        <div class="row small text-black-50 mt-2 mb-2">

            <div class="col-12 text-center" id="animated-history" animation="jackInTheBox" >
                <span v-html="date"></span>
                <br>
                <span v-html="company"></span>
                <br>
                <span v-html="title"></span>
                <br>
                <span v-html="industry" class="ml-2"></span>
                <br>
                <a v-on:click="gotocompany()" id="link-history" class="btn btn-outline-secondary btn-sm mt-2 mb-1">More Info</a>

            </div>

        </div>

        <div class="row small text-black-50 text-center mb-4">

            <div class="col-2 text-center shake" >
                <a v-on:click="gotimeline('Agellus Engineering', 'Software Architect', 'Nov \'15 – Present', 'Industrial Engineering', 'Austin Texas', 'agellus')">2018</a>
            </div>
            <div class="col-2 text-center shake" >
                <a v-on:click="gotimeline('SPC Direct', 'Technical Consultant', 'Oct \'14 – Nov \'15', 'Digital Marketing ', 'Austin Texas', 'spcdirect')">2014</a>
            </div>
            <div class="col-2 text-center shake" >
                <a v-on:click="gotimeline('SaleAmp', 'Director Development & Design', 'Oct \'13 – Oct \'14', 'Digital Marketing', 'Austin Texas', 'saleamp')">2013</a>
            </div>
            <div class="col-2 text-center shake" >
                <a v-on:click="gotimeline('Photon Factory', 'Technical Director Partner', 'May \'09 – Oct \'13', 'Offshore Engineering', 'Austin Texas', 'photon')">2009</a>
            </div>
            <div class="col-2 text-center shake" >
                <a v-on:click="gotimeline('Publications and Communications', 'Web & Technical Manager', 'May \'04 – May \'09', 'Online Publishing', 'Austin Texas', 'pcinews')">2004</a>
            </div>
            <div class="col-1 text-center ml-1 shake" >
                <a v-on:click="gotimeline('Able Management Company', 'Web & Technical Manager', 'May \'01 – Aug \'02', 'Ecommerce', 'Huntsville Texas', 'ableammo')">2001</a>
            </div>

        </div>

    </div>

</template>

<script>

    export default {

        methods: {
            gotimeline (company, title, date, industry, location, link) {

                this.link = '#' + link;
                this.company = company;
                this.title = title;
                this.date = date;
                this.industry = industry;
                this.location = location;

                var $el = $('#animated-history');
                var animation = $el.attr('animation');

                $el.addClass("animated").addClass(animation);

                $el.on("webkitAnimationEnd mozAnimationEnd oAnimationEnd animationEnd", function(event) {
                    $el.removeClass("animated").removeClass(animation)
                });

            },
            gotocompany: function() {

                this.$scrollTo(this.link, 500);

            }
        },
        data() {
            return {
                company: "Agellus Engineering",
                title: "Software Architect",
                date: "Nov '15 – Present",
                industry: "Industrial Engineering",
                location: "Austin, Texas",
                link: "#agellus"
            }
        },
        mounted(link) {

            console.log('Loaded History Vue')

        }
    }

</script>