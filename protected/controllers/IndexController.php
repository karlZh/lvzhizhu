<?php
    /*
     * 前台控制器
     * @author lamplijie<www.lamplijie.com>
     * @date 2015-9-10
     * @time 10:30
     * @since v1.0
     */
	class IndexController extends Controller{

        /*
         * actionIndex
         * 前台首页渲染操作
         * @author lamplijie<www.lamplijie.com>
         * @date 2015-9-10
         * @time 10:30
         * @since v1.0
         */
		public function actionIndex(){
			$this->render('index');
		}
	}
