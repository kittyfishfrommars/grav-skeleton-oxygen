---
title: 'Home'
menu: Home
body_classes: homepage
# grav-plugin-sitemap overrides
sitemap:
  changefreq: weekly
  priority: !!float 1

banner:
    # leave url empty to disable banner
    url: 'header_home-1500x960_q82.webp'
    # headline: 'oxygen'
    position: '30% 42.5%'
    # follower:
      # (values) bold | italic | uppercase | normal-case | small | skew
      # ... opacity-dark | opacity-light
      # class: 'uppercase'
      # text: 'Redux'
    blurb:
      class: 'uppercase'
      # comment-out line below to disable blurb
      # text: 'a performant theme for Grav CMS'

hook:
    teaser: "Look, It's Kittyfish from Mars."
    byline:
        This theme is crazy fast, accessible and GDPR-compliant out of the box. The source code is available at <a href="https://github.com/kittyfishfrommars" target="_blank">github.com/kittyfishfrommars</a>. Provided as-is and free for personal and commercial use. No strings attached. Have fun!
    button:
      # comment-out line below to disable button
      text: 'Button'
      url: '#'

cta:
    headline: Curio vitae metus semper
    class: color-link-secondary
    copy:
       Pellentesque pede. Donec pulvinar ullamcorper metus. In eu odio at lectus pulvinar mollis.  Vestibulum sem magna, elementum vestibulum arcu.
    button:
        text: Button
        url: '#'

# rendered in a 3-column grid, confiurable by SCSS
notices:
    heading: 'Curio vitae metus semper'
    byline: 'pulvinar mollis. Vestibulum sem magna, elementum vestibulum arcu.'
    items:
        - heading: 'Nulla luctus eleifend'
          point: 'In posuere eleifend odio. Quisque semper augue. Maecenas ligula... <a href="#">read more</a>'
          url: '#'
          icon: fa-info color-primary
        - heading: 'Etiam posuere augue'
          point: 'Maecenas ligula. Pellentesque viverra vulputate enim. Aliquam erat volutpat... <a href="#">read more</a>'
          icon: fa-phone color-primary
          url: '#'
        - heading: 'Fusce ultrices fringilla'
          point: 'Maecenas pede nisl, elementum eu, ornare ac, malesuada at, erat. Proin orci... <a href="#">read more</a>'
          icon: fa-comments-o color-primary
          url: '#'

        - heading: 'Fusce ultrices fringilla'
          point: 'Maecenas pede nisl, elementum eu, ornare ac, malesuada at, erat. Gravida orci.'
          url: '#'
          icon: fa-volume-up color-primary
        - heading: 'Nulla luctus eleifend'
          point: 'In posuere eleifend odio. Quisque semper augue mattis wisi. Maecenas ligula pellentesque.'
          # icon: fa-shield color-primary
          icon: fa-star-half-o color-primary
          url: '#'
        - heading: 'Etiam posuere augue'
          point: 'Maecenas ligula. Pellentesque viverra vulputate enim. Aliquam erat volutpat liguala.'
          # icon: lightbulb-o color-warning
          icon: fa-map-marker color-danger        
          # url: '#'

        - heading: 'Nulla luctus eleifend'
          point: 'In posuere eleifend odio. Quisque semper augue mattis wisi. Maecenas ligula pellentesque.'
          # icon: fa-exclamation-triangle color-warning
          icon: fa-bolt color-warning
          # url: '#'
        - heading: 'Fusce ultrices fringilla'
          point: 'Maecenas pede nisl, elementum eu, ornare ac, malesuada at, erat. Proin gravida orci porttitor.'
          icon: fa-check-circle-o color-success
          # url: '#'
        - heading: 'Etiam posuere augue'
          point: 'Maecenas ligula. Pellentesque viverra vulputate enim. Aliquam erat volutpat liguala.'
          icon: fa-times-circle-o color-danger
          # url: '#'

portals:
    heading:
      # (values) uppercase | normal-case | small | align-left-md
      # class: 'align-left-md'
      text: Curio vitae metus semper
    byline:
        # (values) uppercase | normal-case | small | align-left-md
        class: 'color-link-secondary'
        text: 'Pulvinar mollis. Vestibulum <a href="#">sem magna</a>, elementum vestibulum arcus.'
    items:
        - thumbnail: person.png
          heading: 'Joan Q. Public'
          alt: 'Joan Q. Public'
          url: '#'
          teaser: 'In posuere eleifend odio quisque semper augue wisi ligula.'
        - thumbnail: person.png
          heading: 'Julie Citizen'
          alt: 'Julie Citizen'
          url: '#'
          teaser: 'In posuere eleifend odio quisque semper augue wisi ligula.'
        - thumbnail: person.png
          heading: 'Dr. Zarah Quinn'
          alt: 'Dr. Zarah Quinn'
          url: '#'
          teaser: 'In posuere eleifend odio quisque semper augue wisi ligula.'
        - thumbnail: person.png
          heading: 'Ming the Merciless'
          alt: 'Emperor Ming, Ruler of the Universe'
          url: '#'
          teaser: 'In posuere eleifend odio quisque semper augue wisi ligula.'

---

### Curio vitae metus semper

Donec leo. Vivamus fermentum nibh in augue. <a href="#">Praesent a lacus</a> at urna congue rutrum. Nulla enim eros, porttitor eu, tempus id, varius non, nibh. Vestibulum imperdiet, magna nec eleifend semper. Vestibulum elementum.