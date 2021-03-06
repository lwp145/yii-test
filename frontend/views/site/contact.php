<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\widgets\Breadcrumbs;
/* @var $this yii\web\View */
/* @var $model common\models\Page */

$this->title ='联系我们  －上海品途品牌管理有限公司';
//$this->title = $model->title;
//$this->registerMetaTag(['name' => 'keywords', 'content' =>$model->keywords ]);
//$this->registerMetaTag(['name' => 'description', 'content' =>$model->description ]);
//$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Pages'), 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?><script src="/js/map.js"></script>
		<!--banner star-->
		<div id="myCarousel" class="carousel slide " data-ride="carousel">
			<!-- 轮播（Carousel）项目 -->
			<div class="carousel-inner">
				<div class="item active">
					<img src="/images/ban4.jpg" alt="First slide">
				</div>
			</div>
			<!-- 轮播（Carousel）导航 -->
		</div>
		<!--banner end-->
		<div class="contact zoomInLeft animated">
			<div class="container ">
				<div class="row">
					<div class="col-md-12 con-grids ">
						<img src="/images/con1.png" class="center-block  img-responsive">
						<h1>上海品途品牌管理有限公司</h1>
						<p>电话：15021627588</p>
						<p>E-mail：pintu@pintupp.com</p>
						<p>地址：上海市普陀区中江路118弄22号海亮大厦1004室</p>
					</div>
					<div class="col-md-12 con-grids ">
						<img src="/images/con2.png" class="center-block  img-responsive">
						<h1>企业服务咨询</h1>
						<p>咨询热线：15021627588</p>
						<p>咨询范围：营销咨询规划、渠道建设、产品销售、托管运营、招商加盟、新农村电商、企业转型升级等方面的服务</p>
					</div>
					<div class="col-md-12 con-grids " style="border: none;">
						<img src="/images/con3.png" class="center-block  img-responsive">
						<h1>投资创业者咨询</h1>
						<p>咨询热线：15021627588</p>
						<p>咨询范围：创业找项目、生意合伙、寻找好项目、赚钱工具、小额试销等</p>
					</div>
				</div>
			</div>
		</div>

		<!--	contact end-->
		<div class="mail">
			<!-- container -->
			<div class="container">
				<div class="col-md-10 col-lg-offset-1 contact-form  bounceIn animated">
					<h1>留言申请合作</h1>
					<?= $this->render('@app/views/book/_formbrand', [
						'model' => $model,
					]) ?>
				<!--	<form>
						<input type="text" placeholder="请输入姓名" required>
						<input type="text" placeholder="请输入手机号" required>
						<input type="text" placeholder="请输入公司名字" required>
						<textarea placeholder="产品/项目说明"></textarea>
						<input type="submit" value="提交申请">
					</form>-->
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="container-fluid hidden-xs" style="position: relative; padding: 0;">
				<div style="width:100%;height:500px;border:#ccc solid 1px;" id="dituContent"></div>
				<script type="text/javascript">
					//创建和初始化地图函数：
					function initMap() {
						createMap(); //创建地图
						setMapEvent(); //设置地图事件
						addMapControl(); //向地图添加控件
					}

					//创建地图函数：
					function createMap() {
						var map = new BMap.Map("dituContent"); //在百度地图容器中创建一个地图
						var point = new BMap.Point(121.39959, 31.22781); //定义一个中心点坐标
						map.centerAndZoom(point, 17); //设定地图的中心点和坐标并将地图显示在地图容器中
						window.map = map; //将map变量存储在全局
					}

					//地图事件设置函数：
					function setMapEvent() {
						map.enableDragging(); //启用地图拖拽事件，默认启用(可不写)
						map.enableScrollWheelZoom(); //启用地图滚轮放大缩小
						map.enableDoubleClickZoom(); //启用鼠标双击放大，默认启用(可不写)
						map.enableKeyboard(); //启用键盘上下左右键移动地图
					}

					//地图控件添加函数：
					function addMapControl() {
						//向地图中添加缩放控件
						var ctrl_nav = new BMap.NavigationControl({
							anchor: BMAP_ANCHOR_TOP_LEFT,
							type: BMAP_NAVIGATION_CONTROL_LARGE
						});
						map.addControl(ctrl_nav);
						//向地图中添加缩略图控件
						var ctrl_ove = new BMap.OverviewMapControl({
							anchor: BMAP_ANCHOR_BOTTOM_RIGHT,
							isOpen: 1
						});
						map.addControl(ctrl_ove);
						//向地图中添加比例尺控件
						var ctrl_sca = new BMap.ScaleControl({
							anchor: BMAP_ANCHOR_BOTTOM_LEFT
						});
						map.addControl(ctrl_sca);
					}

					initMap(); //创建和初始化地图
				</script>
				<div class="db"></div>
			</div>
		</div>
	 