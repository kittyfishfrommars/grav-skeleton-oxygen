---
title: Footer
robots: noindex,nofollow
routable: false
visible: false
expires: 0
sitemap:
   ignore: true
# do not change taxonomy definition
# unique category is an identifier in templates/partials/footer.html.twig
taxonomy:
   tag: 'unique-footer'

# custom fields
social:
  headline: Stay in touch
  byline:
    # (values) bold | italic | uppercase | normal-case | small
    # class: 'normal-case'
    text: In posuere eleifend <span class="nowrap">odio quisque</span> semper.
  button:
    # (values) bold | italic | uppercase | normal-case | small | normal
    text: 'Newsletter'
    class: 'normal icon fa-envelope-o'
    url: 'https://kittyfishfrommars.github.io'
  items:
    -
      title: YouTube
      icon: fa fa-youtube-play
      url: 'https://youtube.com'
    -
      title: Facebook
      icon: fa fa-facebook
      url: 'https://facebook.com'
    -
      title: Tickets
      # icon: fa fa-ticket
      icon: fa fa-tags
      url: 'https://github.com/kittyfishfrommars'
  legal:
    credits:
      title: 'Credits'
      id: '#credits'
    privacy:
      title: 'Privacy Policy'
      id: '#privacy'
    notice:
      title: 'Legal Notice'
    #  id: ''
---