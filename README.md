# sage_alpha-4

```shell
themes/your-theme-name/   # → Root of your Sage based theme
├── assets                # → Front-end assets
│   ├── config.json       # → Settings for compiled assets
│   ├── build/            # → Webpack and ESLint config
│   ├── fonts/            # → Theme fonts
│   ├── images/           # → Theme images
│   ├── scripts/          # → Theme JS
│   └── styles/           # → Theme stylesheets
├── composer.json         # → Autoloading for `src/` files
├── composer.lock         # → Composer lock file (never edit)
├── dist/                 # → Built theme assets (never edit)
├── functions.php         # → Composer autoloader, theme includes
├── index.php             # → Never manually edit
├── node_modules/         # → Node.js packages (never edit)
├── package.json          # → Node.js dependencies and scripts
├── screenshot.png        # → Theme screenshot for WP admin
├── src/                  # → Theme PHP
│   ├── lib/Sage/         # → Theme wrapper, asset manifest
│   ├── admin.php         # → Theme customizer setup
│   ├── filters.php       # → Theme filters
│   ├── helpers.php       # → Helper functions
│   └── setup.php         # → Theme setup
├── style.css             # → Theme meta information
├── templates/            # → Theme templates
│   ├── layouts/          # → Base templates
│   └── partials/         # → Partial templates
└── vendor/               # → Composer packages (never edit)
```

Roots -Sage 9.0.0-alpha.4 に bootstrap4 でデザインして woo commerce のテーマを搭載。

## wordpress、woo commerce プレーンテーマ

Sage 9.0.0-alpha.4  
bootstrap v4.0  
slick carousel  
font awesome  
[animate css](https://github.com/tgdev/animate-sass)  
fr·ctures

https://ja.wordpress.org/  
https://roots.io/sage/  
https://getbootstrap.com/  
http://kenwheeler.github.io/slick/  
https://fontawesome.com/  
https://daneden.github.io/animate.css/

`$ composer create-project roots/sage your-theme-name 9.0.0-alpha.4`  
`$ yarn add bootstrap -v 4.0.0`  
`$ yarn add slick-carousel`  
`$ yarn add animate-sass --dev`  
`$ yarn add --dev @fortawesome/fontawesome-free`  
`$ yarn add fractures`

`$ yarn add node-sass`  
`$ yarn add resolve-url-loader --dev`

`$ yarn add popper.js`
`$ yarn add jquery.cookie`

### ビルドする

`$ yarn run start` — Compile assets when file changes are made, start Browsersync session  
`$ yarn run build` — Compile and optimize the files in your assets directory  
`$ yarn run build:production` — Compile assets for production

# sage_alpha4

# sage_alpha4

# sage_alpha4
