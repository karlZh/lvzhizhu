<?php
/**
 * Created by PhpStorm.
 * User: 捷
 * Date: 2015/9/20
 * Time: 16:54
 */

class CategoryController extends CController{

    /*
     * actionIndex
     * 分类页渲染操作
     * @author lamplijie<www.lamplijie.com>
     * @date 2015-9-10
     * @time 10:30
     * @since v1.0
     */
    public function actionIndex(){
        $this->render('categories');
    }

} 