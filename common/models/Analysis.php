<?php
/**
 * Created by PhpStorm.
 * User: wangjulong
 * Date: 2015/12/31
 * Time: 9:09
 */

namespace common\models;

/**
 * Class Analysis 分析类
 * @package common\models
 * 控制分析过程的流程
 */

class Analysis
{
    /**
     * 分析的整个流程控制函数
     * @param $entireNum   Analysis 整个分析过程用到的所有号码期数
     * @param $analysisNum Analysis 具体分析的期数
     * @param $chartNum    Analysis 走势图中显示的期数
     *
     * 步骤：
     * 1 从数据库中取出数据
     *
     */
    public function entire($entireNum, $analysisNum, $chartNum)
    {
        // 1 从 AnalysisData 取出数据
        $entireData = AnalysisData::getEntireData($entireNum);

        var_dump($entireData);

    }
}