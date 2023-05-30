<template>

    <div class="jumbotron">

        <div class="row small text-white text-center mb-4">

            <div class="col-4 col-lg-2 col-md-2 col-sm-2 text-center">
                <a v-on:click="gotimeline('Agellus Engineering', 'Software Architect', 'Nov \'15 – Present', 'Industrial Engineering', 'Austin Texas', 'agellus')">2018</a>
            </div>
            <div class="col-4 col-lg-2 col-md-2 col-sm-2 text-center" >
                <a v-on:click="gotimeline('SPC Direct', 'Technical Consultant', 'Oct \'14 – Nov \'15', 'Digital Marketing ', 'Austin Texas', 'spcdirect')">2014</a>
            </div>
            <div class="col-4 col-lg-2 col-md-2 col-sm-2 text-center" >
                <a v-on:click="gotimeline('SaleAmp', 'Director Development & Design', 'Oct \'13 – Oct \'14', 'Digital Marketing', 'Austin Texas', 'saleamp')">2013</a>
            </div>
            <div class="col-4 col-lg-2 col-md-2 col-sm-2 text-center" >
                <a v-on:click="gotimeline('Photon Factory', 'Technical Director Partner', 'May \'09 – Oct \'13', 'Offshore Engineering', 'Austin Texas', 'photon')">2009</a>
            </div>
            <div class="col-4 col-lg-2 col-md-2 col-sm-2 text-center" >
                <a v-on:click="gotimeline('Publications and Communications', 'Web & Technical Manager', 'May \'04 – May \'09', 'Online Publishing', 'Austin Texas', 'pcinews')">2004</a>
            </div>
            <div class="col-4 col-lg-2 col-md-2 col-sm-2 text-center" >
                <a v-on:click="gotimeline('Able Management Company', 'Web & Technical Manager', 'May \'01 – Aug \'02', 'Ecommerce', 'Huntsville Texas', 'ableammo')">2001</a>
            </div>

        </div>

        <div class="card text-center text-black-50">
            <div class="card-body">

                <div class="row">

                    <div class="col-lg-3 col-md-2 col-sm-1"></div>

                    <div class="col-12 col-lg-3 col-md-4 col-sm-5">
                        <div>
                            <span v-html="company" class="font-weight-bold"></span>
                        </div>
                        <span v-html="title" class="small"></span>
                    </div>

                    <div class="col-12 col-lg-3 col-md-4 col-sm-5">
                        <span v-html="date" class="small font-italic"></span>
                        <br>
                        <span v-html="industry" class="small"></span>
                    </div>

                    <div class="col-lg-3 col-md-2 col-sm-1"></div>

                </div>

            </div>
            <div class="card-footer text-muted">

                <div class="row">
                    <div class="col-12 text-center">
                        <a v-on:click="gotocompany()" id="link-history" class="btn btn-light btn-sm">More Info</a>
                    </div>
                </div>

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