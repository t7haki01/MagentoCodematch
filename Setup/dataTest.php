<?php

// namespace Survey\SurveyPage\Setup;

// use \Magento\Framework\Setup\UpgradeDataInterface;
// use \Magento\Framework\Setup\ModuleContextInterface;
// use \Magento\Framework\Setup\ModuleDataSetupInterface;

// /**
//  * Class UpgradeData
//  *
//  * @package Survey\SurveyPage\Setup
//  */
// class dataTest implements UpgradeDataInterface
// {

//     /**
//      * Creates sample blog posts
//      *
//      * @param ModuleDataSetupInterface $setup
//      * @param ModuleContextInterface $context
//      * @return void
//      */
//     public function upgrade(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
//     {
//         $setup->startSetup();

//         if ($context->getVersion()
//             && version_compare($context->getVersion(), '0.1.1') < 0
//         ) {

//             $tableName = $setup->getTable('survey_answer');

//             $data = [
//                 [
//                     'answer_id' => 1,
//                     'question2' => 'test2'
//                 ],
//                 [
//                     'answer_id' => 2,
//                     'question2' => 'test2'
//                 ],
//             ];

//             $setup
//                 ->getConnection()
//                 ->insertMultiple($tableName, $data);
//         }
        

//         $setup->endSetup();
//     }
// }