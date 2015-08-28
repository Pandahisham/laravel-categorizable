# Laravel Categorizable

## Installation

First, pull in the package through Composer.

```js
composer require tshafer/laravel-categorizable:v1.0.0
```

And then include the service provider within `app/config/app.php`.

```php
'providers' => [
    Tshafer\Categorizable\ServiceProvider::class
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

use Tshafer\Catagorizable\Contracts\Catagorizable;
use Tshafer\Catagorizable\Traits\Catagorizable as CatagorizableTrait;
use Illuminate\Database\Eloquent\Model;

class Post extends Model implements Catagorizable
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
```