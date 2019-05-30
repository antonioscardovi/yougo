import pkg from './package'

export default {
  mode: 'universal',

  /*
   ** Headers of the page
   */
  head: {
    title: pkg.name,
    meta: [
      { charset: 'utf-8' },
      { name: 'viewport', content: 'width=device-width, initial-scale=1' },
      { hid: 'description', name: 'description', content: pkg.description }
    ],
    link: [
      { rel: 'icon', type: 'image/x-icon', href: '/favicon.ico' },
      {
        rel: 'stylesheet',
        href: 'https://fonts.googleapis.com/css?family=Roboto'
      },
      {rel: 'stylesheet', href: "https://use.fontawesome.com/releases/v5.8.2/css/all.css", integrity:"sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay", crossorigin:"anonymous"}
    ],
    script: [
      {
        src: 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'
      }
    ]
  },

  /*
   ** Customize the progress-bar color
   */
  loading: { color: '#0054db', height: '4px', duration: 5000 },

  router: {
    middleware: ['clearValidationErrors']
  },

  /*
   ** Global CSS
   */
  css: [],

  /*
   ** Plugins to load before mounting the App
   */
  plugins: ['./plugins/mixins/validation', './plugins/mixins/user'],

  auth: {
    strategies: {
      local: {
        endpoints: {
          login: {
            url: '/auth/login',
            method: 'post',
            propertyName: 'token'
          },
          user: {
            url: 'customers',
            method: 'get',
            propertyName: 'data'
          },
          logout: 'auth/loguout',
          method: 'get'
          // url:'auth/logout',method:'get'
          // url:'auth/logout',
          // method:'get'
        }
      }
    },
    redirect: {
      login: '/auth/login',
      home: '/'
    }
  },

  /*
   ** Nuxt.js modules
   */
  modules: [
    // Doc: https://axios.nuxtjs.org/usage
    '@nuxtjs/axios',

    // '@nuxtjs/bootstrap-vue',

    '@nuxtjs/auth'
  ],
  /*
   ** Axios module configuration
   */
  axios: {
    // See https://github.com/nuxt-community/axios-module#options
    baseURL: 'http://localhost/api'
  },

  /*
   ** Build configuration
   */
  build: {
    /*
     ** You can extend webpack config here
     */
    // extractCSS: true,
    extend(config, ctx) {}
  }
}
