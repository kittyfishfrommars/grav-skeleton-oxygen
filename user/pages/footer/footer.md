---
title: Footer
robots: noindex,nofollow
routable: false
visible: false
expires: 0
sitemap:
   ignore: true

# custom fields
social:
  title: Connect with us
  byline:
    # (values) bold | italic | uppercase | normal-case | small
    # class: 'normal-case'
    text: In posuere eleifend <span class="nowrap">odio quisque</span> semper.
  button:
    # (values) bold | italic | uppercase | normal-case | small | normal
    class: 'normal icon fa-envelope-o'
    text: 'Newsletter'
    url: '#'
  items:
    -
      title: YouTube
      icon: fa fa-youtube-play
      url: '#'
    -
      title: Facebook
      icon: fa fa-facebook
      url: '#'
    -
      title: Tickets
      # icon: fa fa-ticket
      icon: fa fa-tags
      url: '#'
  legal:
    credits:
      title: 'Credits'
      id: '#libre'
    privacy:
      title: 'Privacy Policy'
      id: '#privacy'
    notice:
      title: 'Legal Notice'
    #  id: ''

# do not change taxonomy definition
# unique category is an identifier in templates/partials/footer.html.twig
taxonomy:
   tag: 'unique-footer'
---

This is my footer text