<?php

namespace Tshafer\Categorizable\Traits;

use Tshafer\Categorizable\Models\Category;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Categorizable.
 */
trait Categorizable
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany
     */
    public function categories()
    {
        return $this->morphToMany(Category::class, 'categorizable', 'categories_relations');
    }

    /**
     * @return mixed
     */
    public function categoriesList()
    {
        return $this->categories()
                    ->lists('name', 'id')
                    ->toArray();
    }

    /**
     * @param $categories
     */
    public function categorize($categories)
    {
        foreach ($categories as $category) {
            $this->addCategory($category);
        }
    }

    /**
     * @param $categories
     */
    public function uncategorize($categories)
    {
        foreach ($categories as $category) {
            $this->removeCategory($category);
        }
    }

    /**
     * @param $categories
     */
    public function recategorize($categories)
    {
        $this->categories()->sync([]);

        $this->categorize($categories);
    }

    /**
     * @param Model $category
     */
    public function addCategory(Model $category)
    {
        if (!$this->categories->contains($category->getKey())) {
            $this->categories()->attach($category);
        }
    }

    /**
     * @param Model $category
     */
    public function removeCategory(Model $category)
    {
        $this->categories()->detach($category);
    }
}
