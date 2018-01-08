<template>

  <ais-index :search-store="searchStore"
  :class-names="{
    'ais-index': 'col-sm-12 col-md-12 col-lg-12'
    }">
    <div class="hero-container">
      <h1><span>{{ headlineTag1 }}</span><span>{{ headlineTag2 }}</span></h1>
    </div>
    <ais-search-box>
      <div class="input-group search-box">
        <ais-input
        placeholder="Enter your next destination..."
        :class-names="{
          'ais-input': 'search-field col-xs-12 col-md-7 col-lg-7'
          }"
        ></ais-input>
        <a href="browse" class="advance-search">Advanced Search</a>
      </div>

    </ais-search-box>

    <ais-results
      :class-names="{ 'ais-results': 'result-panel col-sm-10 col-md-10 col-lg-10' }"
      v-show="searchStore.query.length > 0">
      <template slot-scope="{ result }">
          <div class="d-flex flex-column">
            <a :href="result.slug">
                <ais-highlight :result="result" attribute-name="title"></ais-highlight>
                <span>{{ result.location.city }}, {{ result.location.country }}</span>
                <p class="gray-text">By {{ result.user.name }}</p>
            </a>
            <img :src="result.image">
          </div>
        </template>
    </ais-results>
    <ais-no-results>
        <template slot-scope="props">
            No results found for <em>{{ props.query }}</em>.
        </template>
    </ais-no-results>
  </ais-index>
</template>

<script>

import { createFromAlgoliaCredentials } from 'vue-instantsearch';
const searchStore = createFromAlgoliaCredentials(window.algolia.app_id, window.algolia.search_key);
searchStore.indexName = 'posts_frontpage';

export default {
  data() {
    return {
      headlineTag1: "Dont know where to go?",
      headlineTag2: "We may have the best ideas for you.",
      searchStore,
    }
  },
};
</script>

<style lang="sass">
    @import '../../sass/frontpage';
</style>
