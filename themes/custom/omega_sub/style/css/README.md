# `style/css` Directory
The `style/css` directory contains all compiled CSS for your theme. 
This is where the actual styles live that are loaded when this theme is used to render a Drupal page.
Note the relevant portion of `omega_sub.libraries.yml`:

```
omega_sub:
  js:
    js/omega_sub.js: {}
  css:
    theme:
      style/css/omega_sub.css: {}
```
