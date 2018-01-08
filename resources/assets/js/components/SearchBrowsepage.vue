<template>
    <div id="app" class="container-fluid">
        <ais-index
          app-id="H5RWVEAHD6"
          api-key="fe9fd023add3a69d02fb5109ebf68e21"
          index-name="posts"
          :query-parameters="{'page': page}"
        >
          <div class="col-xs-9 col-md-9 col-lg-9 col-sm-offset-2 col-md-offset-2">
            <h1 class="browsepage-title animated fadeInDown">{{ title }}</h1>
          </div>
          <div class="row">
            <div class="col-md-2 col-sm-3">
            </div>
            <div class="col-md-9 col-sm-9 col-md-offset-3">
              <ais-search-box>
                <div class="input-group browsepage-searchbox animated fadeInDown">
                  <ais-input
                  placeholder="Enter any keyword..."
                  :class-names="{
                    'ais-input': 'form-control'
                    }"
                  ></ais-input>

                  <span class="input-group-btn">
                    <ais-clear :class-names="{'ais-clear': 'btn btn-default'}">
                      <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                    </ais-clear>
                    <button class="btn btn-default" type="submit">
                      <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                    </button>
                  </span>
                </div><!-- /input-group -->

              </ais-search-box>
            </div>
          </div>

          <div class="row">
            <div class="col-md-3 col-sm-3 animated fadeInLeft">
              <ais-price-range attribute-name="price" :class-names="{
                'ais-price-range__input': 'form-control'
                }">
                <h3 slot="header">Price</h3>
              </ais-price-range>

              <div class="space-2"></div>
             
             <ais-rating class="align-badge" attribute-name="stars" :class-names="{
               'ais-rating__count': 'badge'
               }">
               <h3 slot="header">Rating</h3>
             </ais-rating>

            <div class="space-2"></div>
            
              <ais-refinement-list class="align-badge" attribute-name="categories.name" :class-names="{
               'ais-refinement-list__count': 'badge',
               'ais-refinement-list__item': 'checkbox'
               }">
                <h3 slot="header">Categories</h3>
              </ais-refinement-list>

              <div class="space-2"></div>

             <ais-refinement-list class="align-badge" attribute-name="location.country" :class-names="{
               'ais-refinement-list__count': 'badge',
               'ais-refinement-list__item': 'checkbox'
               }">
               <h3 slot="header">Country</h3>
             </ais-refinement-list>

            <div class="space-2"></div>

             <ais-refinement-list class="align-badge" attribute-name="location.city" :class-names="{
               'ais-refinement-list__count': 'badge',
               'ais-refinement-list__item': 'checkbox'
               }">
               <h3 slot="header">City</h3>
             </ais-refinement-list>
            </div>

            <div class="col-md-9 col-sm-9">
              <ais-results :stack="true" class="animated fadeIn">
                <template slot-scope="{ result }">
                  <div class="search-result">
                    <img class="result__image img-responsive" :src="result.image">

                    <div class="result__info">
                      <h2 class="result__name">
                        <ais-highlight :result="result" attribute-name="title"></ais-highlight>
                      </h2>
                      <div class="result__type">
                        <ais-highlight :result="result" attribute-name="title"></ais-highlight>
                      </div>
                      <div class="result__rating">
                        <template v-for="n in 5">
                          <span v-if="n <= result.stars" class="result__star"></span>
                          <span v-else class="result__star--empty"></span>
                        </template>
                      </div>
                      <div class="result__price">Ca. {{result.price}}></div>
                    </div>
                  </div>
                </template>
                <template slot-scope="{ result }">
                  <div class="col-md-6 col-lg-6">
                    <a :href="result.slug" class="result">
                      <div class="post-content animated fadeIn">
                        <div class="post-image" :style="{ 'background-image': 'url(' + result.image + ')' }">
                          <img class="author-image animated fadeInDown" :src="result.author_image" />
                        </div>
                        <div class="post-body">
                          <ais-highlight :result="result" attribute-name="title" class="browsepage-result-title"></ais-highlight>
                          <p>{{ result.excerpt.slice(0, 75) }}...</p>
                          <div class="result__rating">
                            <template v-for="n in 5">
                              <span v-if="n <= result.stars" class="result__star"></span>
                              <span v-else class="result__star--empty"></span>
                            </template>
                          </div>
                          <div class="result__price">Approx. {{result.price}}</div>
                        </div>
                        <div class="location-readmore">
                          <div class="post-location">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            <p>{{result.location.city}}, {{result.location.country}}</p>
                          </div>
                          <div class="readmore">
                            <a href="">Read more</a>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                </template>
              </ais-results>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-9 col-md-9 col-lg-9 col-sm-offset-2 col-md-offset-2">
              <div v-observe-visibility="loadMore" class="load-more-results animated pulse">
                <ais-no-results></ais-no-results>
                <beat-loader :loading="loading" :color="color" :size="size"></beat-loader>
              </div>
            </div>
          </div>
        </ais-index>
      </div>
</template>

<script>
import BeatLoader from 'vue-spinner/src/BeatLoader.vue'

export default {

  name: 'searchbrowsepage',
  data () {
    return {
      title: 'Find your perfect destination',
      page: 1
    }
  },
  methods: {
      loadMore: function(isVisible) {
        if(isVisible) {
          this.page++;
        }
      }
    },
    components: {
      BeatLoader
    }
};
</script>

<style lang="sass">
    @import '../../sass/browsepage';
</style>
