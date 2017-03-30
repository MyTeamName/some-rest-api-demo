# RESTful APIs

Here are some dumb examples of making RESTful API requests.

## Acronym

Ready to go.

## Weather

Needs `appid`

## Facebook

Install [composer][3].

Install dependencies:

    composer install

Or you can just download [the source code][4]
because it doesn't use any other dependencies anyway.

https://developers.facebook.com/docs/php/gettingstarted

https://developers.facebook.com/tools/access_token/

https://developers.facebook.com/tools/explorer/

https://developers.facebook.com/apps/

[Must request specific fields][1] in which you're interested from [the `public_profile`][2].

    /me?fields=id,cover,name,first_name,last_name,age_range,link,gender,locale,picture,timezone

```php
object(Facebook\GraphNodes\GraphUser)[17]
  protected 'items' => 
    array (size=13)
      'id' => string '1215510688568297' (length=16)
      'cover' => 
        object(Facebook\GraphNodes\GraphNode)[14]
          protected 'items' => 
            array (size=3)
              ...
      'name' => string 'Jeff Puckett' (length=12)
      'first_name' => string 'Jeff' (length=4)
      'last_name' => string 'Puckett' (length=7)
      'age_range' => 
        object(Facebook\GraphNodes\GraphNode)[15]
          protected 'items' => 
            array (size=1)
              ...
      'link' => string 'https://www.facebook.com/app_scoped_user_id/1215510688568297/' (length=61)
      'gender' => string 'male' (length=4)
      'locale' => string 'en_US' (length=5)
      'picture' => 
        object(Facebook\GraphNodes\GraphPicture)[16]
          protected 'items' => 
            array (size=2)
              ...
      'timezone' => int 0
      'updated_time' => 
        object(DateTime)[18]
          public 'date' => string '2017-02-26 23:58:37.000000' (length=26)
          public 'timezone_type' => int 1
          public 'timezone' => string '+00:00' (length=6)
      'verified' => boolean true
```

[1]:http://stackoverflow.com/a/31637255/4233593
[2]:https://developers.facebook.com/docs/facebook-login/permissions#reference-public_profile
[3]:https://getcomposer.org/download/
[4]:https://github.com/facebook/php-graph-sdk
