<template>
    <div class="row about-frontpage">
      <h2 class="h1 text-center">{{ headline }}</h2>
      <div class="row-fluid">
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 about-item-box">
          <img :src="iconOneUrl" alt="Free and Trusted icon">
          <h2>{{ subhead1 }}</h2>
          <hr>
          <p>{{ infoContent }}</p>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 about-item-box">
          <img :src="iconTwoUrl" alt="Free and TrustedCo-Creation icon">
          <h2>{{ subhead2 }}</h2>
          <hr>
          <p>{{ infoContent }}</p>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 about-item-box">
          <img :src="iconThreeUrl" alt="subhead3 icon">
          <h2>{{ subhead3 }}</h2>
          <hr>
          <p>{{ infoContent }}</p>
        </div>
      </div>
    </div>
</template>

<script>

export default {
  data () {
    return {
      headline: 'About Explodan',
      iconOneUrl: 'https://s3.eu-central-1.amazonaws.com/elasticbeanstalk-eu-central-1-250224882508/Icons/verified-protection.png',
      iconTwoUrl: 'https://s3.eu-central-1.amazonaws.com/elasticbeanstalk-eu-central-1-250224882508/Icons/neurons.png',
      iconThreeUrl: 'https://s3.eu-central-1.amazonaws.com/elasticbeanstalk-eu-central-1-250224882508/Icons/map.png',
      subhead1: 'Free and Trusted',
      subhead2: 'Co-Creation',
      subhead3: 'Adventures',
      infoContent: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.',
    }
  }
};
</script>

<style lang="sass">
    @import '../../sass/frontpage';
</style>
