<?php

namespace app\controllers;

use app\models\Espacios;
use app\models\EspaciosSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * EspaciosController implements the CRUD actions for Espacios model.
 */
class EspaciosController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Espacios models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new EspaciosSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Espacios model.
     * @param int $IDEspacio Id Espacio
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($IDEspacio)
    {
        return $this->render('view', [
            'model' => $this->findModel($IDEspacio),
        ]);
    }

    /**
     * Creates a new Espacios model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Espacios();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'IDEspacio' => $model->IDEspacio]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Espacios model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $IDEspacio Id Espacio
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($IDEspacio)
    {
        $model = $this->findModel($IDEspacio);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'IDEspacio' => $model->IDEspacio]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Espacios model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $IDEspacio Id Espacio
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($IDEspacio)
    {
        $this->findModel($IDEspacio)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Espacios model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $IDEspacio Id Espacio
     * @return Espacios the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($IDEspacio)
    {
        if (($model = Espacios::findOne(['IDEspacio' => $IDEspacio])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
