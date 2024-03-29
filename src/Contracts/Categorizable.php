<?php

namespace Tshafer\Categorizable\Contracts;

use Illuminate\Database\Eloquent\Model;

    /**
     * Interface Categorizable.
     */
    interface Categorizable
    {
        /**
         * @return \Illuminate\Database\Eloquent\Relations\MorphMany
         */
        public function categories();

        /**
         * @return mixed
         */
        public function categoriesList();

        /**
         * @param $categories
         *
         * @return mixed
         */
        public function categorize($categories);

        /**
         * @param $categories
         *
         * @return mixed
         */
        public function uncategorize($categories);

        /**
         * @param $categories
         *
         * @return mixed
         */
        public function recategorize($categories);

        /**
         * @param Model $category
         *
         * @return mixed
         */
        public function addCategory(Model $category);

        /**
         * @param Model $category
         *
         * @return mixed
         */
        public function removeCategory(Model $category);
    }
