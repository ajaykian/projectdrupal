# Hops

## Introduction

A Drupal 8 starter theme focused on fast coding with sass and gulp.

It provide the proper structure to follow Drupal guidelines on [css architecture](https://www.drupal.org/node/1887918) using the [SMACSS system](https://smacss.com/).

It encourages [BEM](https://en.bem.info/methodology/quick-start/) methodology for a reusable component-based approach.

Hops is coupled with Fractal to provide themers an interface for styleguide driven development.
It provides a default configuration file and an example of component for [UI Patterns](https://www.drupal.org/project/ui_patterns) module.

To be quickly effective, SASS settings are included for fonts, colors, layout, etc.
 with [mappy-breakpoints](https://github.com/zellwk/mappy-breakpoints).

It uses [Bourbon](http://bourbon.io/), [mappy-breakpoints](https://github.com/zellwk/mappy-breakpoints) and SASS settings are included for fonts, colors, layout, etc. to be quickly effective.

As for 🍻 , Hops delivers the vital ingredient you need to brew your product according to your taste.

### Dependencies

- [Gulp](http://gruntjs.com/)
- [Bourbon](http://bourbon.io/) & [Neat](http://neat.bourbon.io/)
- [Fractal component library & styleguide](http://fractal.build/)

### Features

- [Drush] Easy generation of a new base theme
- Include Typekit fonts via the theme settings
- Predefined breakpoints.yml file
- Apple favicons (72, 114, 144, 180)
- [Gulp] Livereload with your [favorite browser extension](https://chrome.google.com/webstore/detail/livereload/jnihajbhpnppcggbcgedagnkighmdlei)
- [Gulp] New components‘ sass files globbing
- [Gulp] Images compression
- [Gulp] Sprite generation
- [Gulp] Dynamic Styleguide and publishing on gitHub pages + path available in the theme settings

### Gulp tasks

- `$ gulp` : Default task watches sass files and styleguide (livereload with the [extension](https://chrome.google.com/webstore/detail/livereload/jnihajbhpnppcggbcgedagnkighmdlei) enabled).
- `$ gulp watch` : Default task (same as above).
- `$ gulp sass:build` : Compiles production css.
- `$ gulp images` : Compress png, jpg, svg. Images are overridden so you may want to keep a backup before compressing.
- `$ gulp fractal:start` : Start the Fractal server. [See](http://fractal.build/guide/integration/build-tools).
- `$ gulp fractal:build` : Run a static export of the project web UI.
- `$ gulp deploy` : Deploy styleguide on [GitHub pages](https://pages.github.com/) (Watch out, this automatically publish on a gh-pages branch).

## Recommended modules

### Drupal Styleguide

It's recommended using [Drupal Styleguide](https://www.drupal.org/project/styleguide) for Drupal core markup styling and eventually html elements.

### [Component Libraries](https://www.drupal.org/project/components) & [UI Patterns](https://www.drupal.org/project/ui_patterns)

Both modules combined makes integrates very well with Fractal to use custom components as Drupal plugins. Unfortunately we have to duplicate templates for the moment since [Fractal's Twig](https://github.com/frctl/fractal/issues/126) adapter does not support `.html.twig` extension (only `.twig`). As a result, you have to create your styleguide component first, then include it in a template stored in `templates/` folder for UI Pattern module to read it. Have a look at the basic setting file `hops.ui_patterns.yml` and example component.

## Installation

### With drush

Hops gives you a clean starting point for your theme and it's meant to be fully duplicated.
The provided drush install (based on [Basic](https://www.drupal.org/project/basic)) will automated this task for you and prepare a clean new theme. Just follow theses steps:

1. Donwload or clone this repository in the `theme/custom` directory.
2. `$ drush en hops -y` : install hops.
3. Be sure the temporary files directory has the correct permissions to be writable.
4. `$ drush hops-install` : then follow the process to define your theme options.
5. `$ drush pmu hops -y` to uninstall hops, then delete it.
6. `$ npm install` : install node dependencies from your theme directory.
7. Enable your theme.
