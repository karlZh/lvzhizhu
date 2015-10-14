<?php
/**
 * Created by PhpStorm.
 * User: lijie-pd
 * Date: 2015/9/28
 * Time: 15:24
 */

class ProductController extends Controller{
    const PAGE_SIZE = 10;
    const PRODUCT_PIC_PATH = "./assets/uploads/products/";

    public function actionAdd(){
        $model = new Product;
        if(!empty($_POST['Product'])){
            $model->attributes = $_POST['Product'];
            $model->cover = CUploadedFile::getInstance($model, "cover");
            if($model->validate()){
                $pic = uniqid().".".$model->cover->getExtensionName();
                $model->cover->saveAs(self::PRODUCT_PIC_PATH.$pic);
                $model->cover = $pic;
                $model->adminid = Yii::app()->session['admin']['adminid'];
                $model->createtime = time();
                $primary = 0;
                if($model->save(false)){
                    $primary = $model->getPrimaryKey();
                    $property = array();
                    foreach($_POST['propertyid'] as $k=>$v){
                        $property[] = array(
                            'value'=>$v,
                            'productid'=>$primary,
                            'propertyid'=>$k,
                            'isshow'=>'1',
                            'ischoice'=>'1'
                        );
                    }
                    $command = Yii::app()->db->createCommand();
                    $command->insertSeveral('{{product_property}}', $property);
                    Yii::app()->user->setFlash('info','添加成功');
                }else{
                    Yii::log('添加商品失败,params:'.json_encode($_REQUEST),CLogger::LEVEL_ERROR);
                    Yii::app()->user->setFlash('info','添加失败');
                }
            }
        }
        $pcates = Category::model()->findAll();
        $cates = array();
        foreach($pcates as $cate){
            $cates[$cate->id] = $cate->name;
        }
        $brand = Brand::model()->findAll();
        $brands = array('无品牌');
        foreach($brand as $b){
            $brands[$b->id] = $b->name;
        }
        if(!empty($primary)) {
            $properties = array();

        }
        $this->render('productadd',array('model'=>$model,'categories'=>$cates,'brands'=>$brands));
    }

    public function actionIndex(){
        $criteria = new CDbCriteria;
        $model = Property::model();
        $total = $model->count($criteria);
        $pages = new CPagination($total);
        $pages->pageSize = self::PAGE_SIZE;
        $pages->applyLimit($criteria);
        $properties = $model->findAll($criteria);

        $this->render(
            'propertylist',
            array(
                'pager'=>$pages,
                'properties'=>$properties
            )
        );
    }

    public function actionDel(){
        $id = $_GET['id'];
        if(empty($id)){
            $this->error('error_params','id参数为空',false);
        }
        $model = Property::model();
        if($model->deletebypk($id)){
            Yii::app()->user->setFlash('info','删除成功');
        }else{
            Yii::log('删除属性失败,params:'.json_encode($_GET),Constants::ERROR_DELETE);
            Yii::app()->user->setFlash('info','删除失败');
        }
        $this->redirect(array('property/index'));
    }

    public function actionMod(){
        $id = $_GET['id'];
        if(empty($id)){
            $this->error('error_params','id参数为空',false);
        }
        $model = Property::model();
        $currCate = $model->findbypk($id);
        if(!empty($_POST['Property'])){
            $currCate->attributes = $_POST['Property'];
            if($currCate->updateAll(
                array(
                    'fieldname'=>$_POST['Property']['fieldname'],
                    'fieldtype'=>$_POST['Property']['fieldtype'],
                    'categoryid'=>$_POST['Property']['categoryid'],
                ),
                'id=:id',
                array(':id'=>$id)
            )){
                Yii::app()->user->setFlash('info','更新成功');
            }else{
                Yii::log('更新品牌分类失败,params:'.json_encode($_REQUEST),Constants::ERROR_UPDATE);
                Yii::app()->user->setFlash('info','更新失败');
            }
        }
        $pcates = Category::model()->findAll();
        $Propertycates = array();
        foreach($pcates as $cate){
            $Propertycates[$cate->id] = $cate->name;
        }
        $this->render('propertymod',array('model'=>$currCate,'propertycates'=>$Propertycates));
    }



}