<template>
  <div class="create-frontpage">
    <div class="create-overlay">
      <div class="create-content container">
        <div class="text-center">
          <h2 class="h1">{{ headline1 }}</h2>
          <h2>{{ headline2}}</h2>
          <a class="h4" href="contact">{{ btnText }}</a>
        </div>
      </div>
    </div>
  </div>
</template>

<script>

export default {
  data () {
    return {
      headline1: 'Got a extrodinary experience?',
      headline2: 'You can send us your special trip with complete details',
      btnText: 'Contact us',
    }
  }
};
</script>

<style lang="sass">
    @import '../../sass/frontpage';
</style>
