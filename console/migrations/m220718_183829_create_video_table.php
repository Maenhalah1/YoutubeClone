<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%video}}`.
 */
class m220718_183829_create_video_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%video}}', [
            'id' => $this->string(16),
            'title' => $this->string(512),
            'description' => $this->text(),
            'path' => $this->string(512),
            'has_thumbnail' => $this->boolean(),
            'status' => $this->integer(1),
            'tags' => $this->string(512),
            'created_by' => $this->integer(11),
            'created_at' => $this->integer(11)
        ]);

        $this->addPrimaryKey("{{%video_PK_id}}", "{{%video}}", "id");

        $this->createIndex("{{%index-video-created_by}}","{{%video}}", "created_by");
        $this->addForeignKey("{{%fk-video-created_by}}", "{{%video}}", "created_by", "{{%user}}", "id", "CASCADE", "CASCADE");

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropPrimaryKey("{{%video_PK_id}}", "{{%video}}");
        $this->dropForeignKey("{{%fk-video-created_by}}","{{%video}}");
        $this->dropIndex("{{%index-video-created_by}}","{{%video}}");
        $this->dropTable('{{%video}}');
    }
}
