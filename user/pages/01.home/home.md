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
    # 01 02 05 06 09 11 needs a bit work 12
    url: 'header_home-1600x1024.webp'
    # headline: 'solstice'
    position: 'center center'
    # follower:
      # (values) bold | italic | uppercase | normal-case | small | skew
      # ... opacity-dark | opacity-light
      # class: 'uppercase'
      # text: 'Redux'
    blurb:
      class: 'uppercase'
      # text: 'a performant theme for Grav CMS'

hook:
    teaser: "Look, It's Kittyfish from Mars."
    byline:
        In posuere eleifend odio. Quisque <a href="#">semper augue mattis</a> wisi. Maecenas ligula. Pellentesque viverra vulputate enim. Donec pulvinar ullamcorper metus.
        Quisque semper augue mattis. In augue quaestor est.
    button:
        text: 'Button'
        url: '#'

cta:
    headline: Curio vitae metus semper
    class: color-link-secondary
    copy:
       Pellentesque pede. <a href="#">Donec pulvinar</a> ullamcorper metus. In eu odio at lectus pulvinar mollis.  Vestibulum sem magna, elementum vestibulum arcu.
    button:
        text: Button
        url: '#'

# Notices: these will be rendered in a 3-column grid, confiurable by SCSS
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
          icon: fa-volume-up color-primary
          url: '#'

        - heading: 'Fusce ultrices fringilla'
          point: 'Maecenas pede nisl, elementum eu, ornare ac, malesuada at, erat. Gravida orci... <a href="#">read more</a>'
          url: '#'
          icon: fa-cogs color-primary
        - heading: 'Nulla luctus eleifend'
          point: 'In posuere eleifend odio. Quisque semper augue mattis wisi. Maecenas ligula pellentesque.'
          icon: fa-shield color-primary
          url: '#'
        - heading: 'Etiam posuere augue'
          point: 'Maecenas ligula. Pellentesque viverra vulputate enim. Aliquam erat volutpat liguala.'
          # icon: lightbulb-o color-warning
          icon: fa-map-marker color-danger        
          # url: '#'

        - heading: 'Nulla luctus eleifend'
          point: 'In posuere eleifend odio. Quisque semper augue mattis wisi. Maecenas ligula pellentesque.'
          icon: fa-check-circle color-success
          # url: '#'
        - heading: 'Fusce ultrices fringilla'
          point: 'Maecenas pede nisl, elementum eu, ornare ac, malesuada at, erat. Proin gravida orci porttitor.'
          icon: fa-exclamation-triangle color-warning
          # url: '#'
        - heading: 'Etiam posuere augue'
          point: 'Maecenas ligula. Pellentesque viverra vulputate enim. Aliquam erat volutpat liguala.'
          icon: fa-times-circle color-danger
          # url: '#'

portals: # could be used for: key staff, testimonials, service previews, ...
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
          heading: 'Joan Q Public'
          alt: 'Joan Q Public'
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

### Libre Software for GRAV CMS

Donec leo. Vivamus fermentum nibh in augue. <a href="#">Praesent a lacus</a> at urna congue rutrum. Nulla enim eros, porttitor eu, tempus id, varius non, nibh. Vestibulum imperdiet, magna nec eleifend semper.