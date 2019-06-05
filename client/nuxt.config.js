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
      {
        rel: 'stylesheet',
        href: 'https://fonts.googleapis.com/css?family=Lato:300&display=swap'
      },
      {rel: 'stylesheet',
      href:'https://fonts.googleapis.com/css?family=Montserrat:300,400&display=swap'
      },
      {rel: 'stylesheet',
      href:'https://fonts.googleapis.com/css?family=Work+Sans:300,400&display=swap'
      },
      {rel: 'stylesheet',
      href:'https://fonts.googleapis.com/css?family=Raleway&display=swap'
      },
      {rel: 'stylesheet',
      href:'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'
      },
      {
        rel:"stylesheet", href:"https://use.fontawesome.com/releases/v5.8.1/css/all.css",
         integrity:"sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf", crossorigin:"anonymous"
      }


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
  loading: { color: "#fa923f", height: "4px", duration: 5000 },
  loadingIndicator: {
    name: "circle",
    color: "#fa923f"
  },

  router: {
    middleware: ['clearValidationErrors'],
    // Dodano za smooth scroll
    
    scrollBehavior: async (to, from, savedPosition) => {
      if (savedPosition) {
        return savedPosition
      }

      const findEl = async (hash, x) => {
        return document.querySelector(hash) ||
          new Promise((resolve, reject) => {
            if (x > 50) {
              return resolve()
            }
            setTimeout(() => { resolve(findEl(hash, ++x || 1)) }, 100)
          })
      }

      if (to.hash) {
        let el = await findEl(to.hash)
        if ('scrollBehavior' in document.documentElement.style) {
          return window.scrollTo({ top: el.offsetTop, behavior: 'smooth' })
        } else {
          return window.scrollTo(0, el.offsetTop)
        }
      }

      return { x: 0, y: 0 }
    }

    //kraj
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

    '@nuxtjs/auth',

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
