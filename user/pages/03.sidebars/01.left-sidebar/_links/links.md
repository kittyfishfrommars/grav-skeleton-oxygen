---
title: Link Collection
routable: false
taxonomy:
  tag: 'links'
items:
  - title: 'list-none'
    # (values) list-none | list-disc | list-decimal
    class: 'list-none'
    description: >
        This is an optional description text above a collection of a links.
    links:
      - url: '/sidebars/left-sidebar#iamahash'
        text: 'Left Sidebar'
        description: >
          Left sidebar sits above content on mobile
      - url: '/sidebars/right-sidebar'
        text: 'Right Sidebar'
        description: >
          Right sidebar sits below content on mobile
      - url: '/sidebars/no-sidebar#headline-3'
        text: 'No Sidebar (default)'
        description: >
          Link to an #anchor
      - url: https://kittyfishfrommars.github.io
        text: 'kittyfishfrommars.github.io'
        description: >
          External link to developer site
      - # url: '#'
        text: 'An entry without a link'
        description: >
          Just in case you need the sidebar for something else

  - title: list-disc
    # (values) list-none | list-disc | list-decimal
    class: 'list-disc'
    links:
      - url: '#'
        text: 'First Pellentesque lectus gravida blandit'
        description: >
          Maecenas vitae  congue pharetra ipsum
      - url: '#'
        text: 'Second ipsum'
        description: >
          Maecenas vitae orci feugiat pharetra 
      - url: '#'
        text: 'Third Phasellus nibh congue'
        description: >
          Maecenas vitae orci feugiat pharetra

  - title: list-decimal
    # (values) list-none | list-disc | list-decimal
    class: 'list-decimal'
    links:
      - url: '#'
        text: 'First Pellentesque lectus gravida blandit'
        description: >
          Maecenas vitae  congue pharetra ipsum
      - url: '#'
        text: 'Second ipsum'
        description: >
          Maecenas vitae orci feugiat pharetra 
      - url: '#'
        text: 'Third Phasellus nibh congue'
        description: >
          Maecenas vitae orci feugiat pharetra
---