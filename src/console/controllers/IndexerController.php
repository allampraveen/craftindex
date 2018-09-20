<?php
/**
 * Update Indexes plugin for Craft CMS 3.x
 *
 * Update Asset Indexes
 *
 * @link      smsglobal.com
 * @copyright Copyright (c) 2018 Praveen
 */

namespace smsg\updateindexes\console\controllers;

use smsg\updateindexes\UpdateIndexes;

use Craft;
use yii\console\Controller;
use yii\helpers\Console;

/**
 * Indexer Command
 *
 * @author    Praveen
 * @package   UpdateIndexes
 * @since     1.0.0
 */
class IndexerController extends Controller
{
    // Public Methods
    // =========================================================================

    /**
     * Handle update-indexes/indexer console commands
     *
     * @return mixed
     */
    public function actionIndex()
    {

       Craft::$app->getDb()->createCommand()->delete('{{%assetindexdata}}')->execute();
       Craft::$app->getDb()->createCommand()->delete('{{%assettransformindex}}')->execute();
       print "Indexes Updated";
            

    }

    /**
     * Handle update-indexes/indexer/do-something console commands
     *
     * @return mixed
     */
    public function actionDoSomething()
    {
        $result = 'something';

        echo "Welcome to the console IndexerController actionDoSomething() method\n";

        return $result;
    }
}
