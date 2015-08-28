<?php

<<<<<<< c7503b1e158db16eef4a34a3064a444c4492f5dd
<<<<<<< f3547faadd50e0f5cec13ac30661fc2d6421f68e
    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;

    /**
     * Class CreateCategoriesTable.
     */
    class CreateCategoriesTable extends Migration
    {

        public function up()
        {
            Schema::create( 'categories', function ( Blueprint $table ) {
                $table->increments( 'id' );
                $table->string( 'name' );
                $table->text( 'description' )->nullable();
                $table->string( 'slug' );
                NestedSet::columns( $table );
                $table->timestamps();
            } );

            Schema::create( 'categories_relations', function ( Blueprint $table ) {
                $table->integer( 'category_id' );
                $table->morphs( 'categorizable' );
                $table->timestamps();
            } );
        }

        public function down()
        {
            Schema::dropIfExists( 'categories' );
            Schema::dropIfExists( 'categories_relations' );
        }
    }
=======
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
=======
    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
>>>>>>> Fixes

    /**
     * Class CreateCategoriesTable.
     */
    class CreateCategoriesTable extends Migration
    {

        public function up()
        {
            Schema::create( 'categories', function ( Blueprint $table ) {
                $table->increments( 'id' );
                $table->string( 'name' );
                $table->text( 'description' )->nullable();
                $table->string( 'slug' );
                NestedSet::columns( $table );
                $table->timestamps();
            } );

            Schema::create( 'categories_relations', function ( Blueprint $table ) {
                $table->integer( 'category_id' );
                $table->morphs( 'categorizable' );
                $table->timestamps();
            } );
        }

        public function down()
        {
            Schema::dropIfExists( 'categories' );
            Schema::dropIfExists( 'categories_relations' );
        }
    }
<<<<<<< c7503b1e158db16eef4a34a3064a444c4492f5dd
}
>>>>>>> Initial
=======
>>>>>>> Fixes
