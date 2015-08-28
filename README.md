# Laravel Categorizable

## Installation

First, pull in the package through Composer.

```js
<<<<<<< c7503b1e158db16eef4a34a3064a444c4492f5dd
<<<<<<< f3547faadd50e0f5cec13ac30661fc2d6421f68e
composer require tshafer/laravel-categorizable:v1.0.0
=======
composer require tshafer/laravel-categorizable
>>>>>>> Initial
=======
composer require tshafer/laravel-categorizable:dev-master
>>>>>>> Fixes
```

And then include the service provider within `app/config/app.php`.

```php
'providers' => [
<<<<<<< c7503b1e158db16eef4a34a3064a444c4492f5dd
<<<<<<< f3547faadd50e0f5cec13ac30661fc2d6421f68e
    Tshafer\Categorizable\ServiceProvider::class
=======
    DraperStudio\Categorizable\ServiceProvider::class
>>>>>>> Initial
=======
    Tshafer\Categorizable\ServiceProvider::class
>>>>>>> Fixes
];
```

At last you need to publish and run the migration.

```
php artisan vendor:publish --provider="Tshafer\Categorizable\ServiceProvider" && php artisan migrate
```

## Nested Sets

Check [lazychaser/laravel-nestedset](https://github.com/lazychaser/laravel-nestedset) to learn how to create, update, delete, etc. categories.

## Setup a Model
```php
<?php

namespace App;

<<<<<<< c7503b1e158db16eef4a34a3064a444c4492f5dd
<<<<<<< f3547faadd50e0f5cec13ac30661fc2d6421f68e
use Tshafer\Catagorizable\Contracts\Catagorizable;
use Tshafer\Catagorizable\Traits\Catagorizable as CatagorizableTrait;
use Illuminate\Database\Eloquent\Model;

class Post extends Model implements Catagorizable
=======
use DraperStudio\Questionable\Contracts\Questionable;
use DraperStudio\Questionable\Traits\Questionable as QuestionableTrait;
=======
use DraperTshaferStudio\Questionable\Contracts\Questionable;
use Tshafer\Questionable\Traits\Questionable as QuestionableTrait;
>>>>>>> Fixes
use Illuminate\Database\Eloquent\Model;

class Post extends Model implements Questionable
>>>>>>> Initial
{
    use CategorizableTrait;
}

```

## Examples

### Get an array with ids and names of categories (useful for drop-downs)
```php
$post->categoriesList();
```

### Attach the Post Model these Categories
```php
$post->categorize([Category::find(1), Category::find(2), Category::find(3)]);
```

### Detach the Post Model from these Categories
```php
$post->uncategorize([Category::find(1)]);
```

### Detach the Post Model from all Catgeories and attach it to the new ones
```php
$post->recategorize([Category::find(1), Category::find(3)]);
```

### Attach the Post Model to the given Category
```php
$post->addCategory(Category::find(1));
```

### Detach the Post Model from the given Category
```php
$post->removeCategory(Category::find(1));
```

### Get all Posts that are attached to the given Category
```php
Category::first()->entries(Post::class)->get();
<<<<<<< f3547faadd50e0f5cec13ac30661fc2d6421f68e
```
=======
```



>>>>>>> Initial
