<?php if(!defined('KIRBY')) exit ?>

title: Member
pages: false
files: true
fields:
  title:
    label: Name
    type:  text
  text:
    label: Text
    type:  textarea
  user_image:
    label: Image
    type: select
    options: query
    query: 
      fetch: images
      value: '{{filename}}'
      text: '{{filename}}'
  website:
    label: Webseite
    type:  text
  tags:
    label: Tags
    type: tags
    separator: /
  info:
    label: Info
    type: info
    text: >
      Die nachfolgenden Felder werden zur Zeit nicht eingebunden. Ihr könnt diese trotzdem gerne ausfüllen wenn es euch beruhigt. Ist quasi das dev/null für eure Daten. 

      Mit ein bisschen Glück können wir sie ja auch verkaufen. 

      MfG
      Eure Datenkrake HI&OOC
  mail:
    label: E-Mail
    type:  text
    width: 1/2
  twitter:
    label: Twitter
    type:  text
    width: 1/2
  dribbble:
    label: Dribbble
    type:  text
    width: 1/2
  github:
    label: Github
    type:  text
    width: 1/2
  xing:
    label: Xing
    type:  text
    width: 1/2
  linkedin:
    label: LinkedIn
    type:  text
    width: 1/2
  instagram:
    label: Instagram
    type:  text
    width: 1/2
  facebook:
    label: Facebook
    type:  text
    width: 1/2
