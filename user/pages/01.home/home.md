---
title: 'Home'
menu: Home
body_classes: homepage
# grav-plugin-sitemap overrides
sitemap:
  changefreq: weekly
  priority: !!float 1

banner:
    url: 'user/themes/solstice/images/header_forest-1680x600.jpg'
    headline: 'solstice'
    # follower:
      # (values) bold | italic | uppercase | normal-case | small | skew
      # ... opacity-dark | opacity-light
      # class: 'uppercase'
      # text: 'Redux'
    blurb:
      class: 'uppercase'
      text: 'a performant theme for Grav CMS'

hook:
    teaser: 'Pellentesque viverra vulputate enim. Aliquam volutpat quintesse.'
    byline:
        In posuere eleifend odio. Quisque <a href="#">semper augue mattis</a> wisi. Maecenas ligula. Pellentesque viverra vulputate enim. Donec pulvinar ullamcorper metus.
        Quisque semper augue mattis.
    button:
        text: 'Nulla aluctus'
        target: '#'

cta:
    headline: Cras vitae metus aliNuam
    class: color-link-secondary
    copy:
       Pellentesque pede. <a href="#">Donec pulvinar</a> ullamcorper metus. In eu odio at lectus pulvinar mollis.  Vestibulum sem magna, elementum vestibulum arcu.
    button:
        text: Nulla eleifend
        target: '#'

# Quilt/Notices: these will be rendered in a 3-column grid
notices:
    heading: 'Cras vitae metus'
    byline: 'pulvinar mollis. Vestibulum sem magna, elementum vestibulum arcu.'
    items:
        # first row
        - icon: fa-info color-info
          target: '#'
          heading: 'Nulla luctus eleifend'
          point: 'In posuere eleifend odio. Quisque semper augue. Maecenas ligula... <a href="#">read more</a>'
        - icon: fa-shield color-info
          # target: '#'
          heading: 'Etiam posuere augue'
          point: 'Maecenas ligula. Pellentesque viverra vulputate enim. Aliquam erat volutpat... <a href="#">read more</a>'
        - icon: fa-gavel color-info
          # target: '#'
          heading: 'Fusce ultrices fringilla'
          point: 'Maecenas pede nisl, elementum eu, ornare ac, malesuada at, erat. Proin orci... <a href="#">read more</a>'

        # second row
        - icon: fa-exclamation color-primary
          # target: '#'
          heading: 'Fusce ultrices fringilla'
          point: 'Maecenas pede nisl, elementum eu, ornare ac, malesuada at, erat. Gravida orci... <a href="#">read more</a>'
        - icon: fa-phone color-primary
          # target: '#'
          heading: 'Nulla luctus eleifend'
          point: 'In posuere eleifend odio. Quisque semper augue mattis wisi. Maecenas ligula pellentesque.'
        - icon: fa-map-marker color-danger        
          # icon: lightbulb-o color-warning
          # target: '#'
          heading: 'Etiam posuere augue'
          point: 'Maecenas ligula. Pellentesque viverra vulputate enim. Aliquam erat volutpat liguala.'

          # third row
        - icon: fa-check-circle color-success
          # icon: check color-success
          # target: '#'
          heading: 'Nulla luctus eleifend'
          point: 'In posuere eleifend odio. Quisque semper augue mattis wisi. Maecenas ligula pellentesque.'
        - icon: fa-exclamation-triangle color-warning
          # target: '#'
          heading: 'Fusce ultrices fringilla'
          point: 'Maecenas pede nisl, elementum eu, ornare ac, malesuada at, erat. Proin gravida orci porttitor.'
        - icon: fa-times-circle color-danger
          # icon: times color-danger
          # target: '#'
          heading: 'Etiam posuere augue'
          point: 'Maecenas ligula. Pellentesque viverra vulputate enim. Aliquam erat volutpat liguala.'

portals: # could be used for: key staff, testimonials, service previews, ...
    heading: Cras vitae metus alinuam
    byline:
        # (values) uppercase | normal-case | small | align-left-md
        class: 'color-link-secondary'
        text: 'Pulvinar mollis. Vestibulum <a href="#">sem magna</a>, elementum vestibulum arcus.'
    items:
        - thumbnail: person.png
          alt: 'Molly Millions'
          target: '#'
          heading: 'Molly Millions'
          teaser: 'In posuere eleifend odio quisque semper augue wisi ligula.'
        - thumbnail: person.png
          alt: 'Henry Dorsett Case'
          target: '#'
          heading: 'Henry Dorsett Case'
          teaser: 'In posuere eleifend odio quisque semper augue wisi ligula.'
        - thumbnail: person.png
          alt: 'Willis Corto'
          target: '#'
          heading: 'Willis Corto'
          teaser: 'In posuere eleifend odio quisque semper augue wisi ligula.'
        - thumbnail: person.png
          alt: 'Linda Lee'
          target: '#'
          heading: 'Linda Lee'
          teaser: 'In posuere eleifend odio quisque semper augue wisi ligula.'

---

### Suspendisse dictum porta

Donec leo. Vivamus fermentum nibh in augue. <a href="#">Praesent a lacus</a> at urna congue rutrum. Nulla enim eros, porttitor eu, tempus id, varius non, nibh. Vestibulum imperdiet, magna nec eleifend semper augue mattis wisi maecenas ligula nunc lectus vestibulum euismod lacinia quam nisl.