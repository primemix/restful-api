<?php

use yii\db\Migration;

/**
 * Handles the creation of table `movie`.
 */
class m171118_191740_create_movie_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('movie', [
            'id' => $this->primaryKey(),
            'title' => $this->string(),
            'title_original' => $this->string(),
            'descriptions' => $this->text(),
            'premiere_date' => $this->string(),
            'date' => $this->string(),
            'image' => $this->string(),
            'add_date' => $this->date(),
            'viewed' => $this->integer(),
            'status' => $this->integer()
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('movie');
    }
}
