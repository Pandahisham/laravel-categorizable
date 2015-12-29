<?php

namespace Tshafer\Categorizable\Models;

    use Cviebrock\EloquentSluggable\SluggableInterface;
    use Cviebrock\EloquentSluggable\SluggableTrait;
    use Kalnoy\Nestedset\Node;

    /**
     * Class Category.
     */
    class Category extends Node implements SluggableInterface
    {
        use SluggableTrait;

        /**
         * @var array
         */
        protected $sluggable = ['build_from' => 'name'];

        /**
         * @var array
         */
        protected $guarded = ['id', 'created_at', 'updated_at'];

        /**
         * @return \Illuminate\Database\Eloquent\Relations\MorphTo
         */
        public function categorizable()
        {
            return $this->morphTo();
        }

        /**
         * @param $class
         *
         * @return \Illuminate\Database\Eloquent\Relations\MorphToMany
         */
        public function entries($class)
        {
            return $this->morphedByMany($class, 'categorizable', 'categories_relations');
        }

        /**
         * @return array
         */
        public static function tree()
        {
            return static::get()->toTree()->toArray();
        }
    }
