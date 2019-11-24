### Features

- The basis of the PHP site, working with the database, rendering the page

# PHP-Framework

![](https://github.com/mrdenysu/PHP-Framework/raw/master/php_icon.png)

![](https://img.shields.io/github/license/mrdenysu/PHP-Framework) ![](https://img.shields.io/github/forks/mrdenysu/PHP-Framework) ![](https://img.shields.io/github/stars/mrdenysu/PHP-Framework) ![](https://img.shields.io/github/issues/mrdenysu/PHP-Framework) ![](https://img.shields.io/github/v/release/mrdenysu/PHP-Framework) ![](https://img.shields.io/github/v/release/mrdenysu/PHP-Framework?include_prereleases)


**Info about project**

[TOCM]

---

## Install

`$ git clone https://github.com/mrdenysu/PHP-Framework.git`

---
### PHP code

```php
require_once('pfw/core/ApplicationClass.php');

class Application extends ApplicationClass
{
  public function run()
  {
    echo $this->address;
  }
}

$app = new Application();
$app->run();
```