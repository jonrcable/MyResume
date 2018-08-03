<template>
  <div>
    <b-carousel id="carousel1"
                style="text-shadow: 2px 2px 3px #000; font-size: 12px;"
                controls
                indicators
                background="#ababab"
                :interval="3500"
                img-width="1024"
                img-height="300"
                v-model="slide"
                @sliding-start="onSlideStart"
                @sliding-end="onSlideEnd"
    >

      <!-- Slide with blank fluid image to maintain slide aspect ratio -->
      <b-carousel-slide text="Designing ARM based embedded applications for photogrammetry."
                        img-src="/media/sliderhome_survey.png">
      </b-carousel-slide>
      <b-carousel-slide text="Using technology in creative ways helps explore whats possible."
                        img-src="/media/sliderhome_flowers.png">
      </b-carousel-slide>
      <b-carousel-slide text="Building App and API architecture to solve industry challenges."
                        img-src="/media/sliderhome_web.png">
      </b-carousel-slide>
      <b-carousel-slide text="Exploring robotics and sensor integration with ARM, ROS and Python."
                        img-src="/media/sliderhome_ros.png">
      </b-carousel-slide>
      <b-carousel-slide text="Anything is possible when you have the right people to support you."
                        img-src="/media/sliderhome_chuley.png">
      </b-carousel-slide>

    </b-carousel>

  </div>
</template>

<script>
export default {
  data () {
    return {
      slide: 0,
      sliding: null
    }
  },
  methods: {
    onSlideStart (slide) {
      this.sliding = true
    },
    onSlideEnd (slide) {
      this.sliding = false
    }
  }
}
</script>
<!-- carousel-1.vue -->