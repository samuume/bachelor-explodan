<template>
  <div class="about-wrapper" id="top">
    <a href="#" class="return-top" v-scroll-to="'#top'">Top</a>
    <div class="top-wrapper-content">
      <div class="overlay-white">
        <div class="first-container">
          <div class="container first-content">
            <h1>{{ firstHeadline }}</h1>
            <p>{{ infoOne }}</p>
            <button v-scroll-to="{el: '#one', duration: 500}">
              <i class="fa fa-chevron-circle-down fa-3x" aria-hidden="true"></i>
            </button>
          </div>
        </div>
      </div>
      <div class="overlay-dark">
        <div class="second-container" id="one">
          <div class="container second-content">
            <h2 class="h1">{{ secondHeadline }}</h2>
            <p>{{ infoTwo }}</p>
            <button v-scroll-to="{el: '#two', duration: 500}">
              <i class="fa fa-chevron-circle-down fa-3x" aria-hidden="true"></i>
            </button>
          </div>
        </div>
      </div>
    </div>
    <div class="bottom-wrapper-content container" id="two">
      <div class="row third-content">
        <div class="col-sm-12 col-md-6 col-lg-6 third-content-left">
          <h2 class="h1">{{ thirdHeadline }}</h2>
          <p>{{ infoThree }}</p>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-6 third-content-right">
          <span class="quote">{{ quote }}</span>
          <span class="quote">{{ quoteFrom }}</span>
        </div>
      </div>
    </div>
  </div>
</template>

<script>

export default {
  data () {
    return {
      firstHeadline: 'The Story of Explodan',
      secondHeadline: 'What do Explodan do',
      thirdHeadline: 'Why Explodan',
      infoOne: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt.',
      infoTwo: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.',
      infoThree: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
      quote: 'You must go on adventures to find out where you truly belong.',
      quoteFrom: '- Sue Fitzmaurice',
    }
  }
};
</script>

<style lang="sass">
    @import '../../sass/aboutpage';
</style>
