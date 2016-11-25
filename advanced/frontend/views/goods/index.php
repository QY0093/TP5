<?php
use yii\helpers\Url;
?>
<div class="content_top">
	<div class="back-links">
		<p>
			<a href="index.html">主页</a> &gt;&gt;&gt;&gt; <a href="#"><?php echo $itemInfo->goods_name;?></a>
		</p>
	</div>
	<div class="clear"></div>
</div>
<div class="product-details">
	<div class="grid images_3_of_2">
		<div id="container">
			<div id="products_example">
				<div id="products">
					<div class="slides_container"
						style="overflow: hidden; position: relative; display: block;">
						<div class="slides_control"
							style="position: relative; width: 1098px; height: 274px; left: -366px;">
							
							<a href="#" target="_blank"
								style="position: absolute; top: 0px; left: 366px; z-index: 5;"><img
								src="<?php echo $row[0]['goods_img'];?>" alt=" "></a>
						
						</div>
					</div>
					<ul class="pagination">
					<?php foreach ($query as $key=>$val):?>
									<li class="current"><a href="<?php echo $val['img_url']?>"><img src="<?php echo $val['thumb_url'];?>" alt=" "></a></li>					
									<?php endforeach;?>
								</ul>
						
				</div>
			</div>
		</div>
	</div>
	
	<div class="desc span_3_of_2">
					<h2><?php echo $row[0]['goods_name'];?></h2>
					<p><?php echo $row[0]['keywords'];?></p>					
					<div class="price">
						<p>本店售价: <span>￥<?php echo $row[0]['shop_price'];?></span></p>
					</div>
					<div class="item">
						<p>商品货号:<span><?php echo $row[0]['goods_sn'];?></span>
						商品库存:<span><?php echo $row[0]['goods_number'];?></span></p>
						<p>商品点击数:<span><?php echo $row[0]['click_count']?></span></p>
					</div>
					<div class="available">
						<p>注册用户 :<span>￥<?php echo $row[0]['shop_price'];?></span>
						<span>vip:</span>
						<span>￥<?php $init = $row[0]['shop_price']; $discount = ceil($init * 0.95); echo $discount;?></span>
						</p>
					<ul>
						<li>颜色:
							<input name="price" value="黑色" checked="" type="radio">黑色[￥0.00]
							<input name="price" value="白色" type="radio">白色[￥10.00]
						</li>
					</ul>
					
					</div>
				<div class="share-desc">
					<div class="share">
						<p>分享 :</p>
						<ul>
					    	<li><a href="#"><img src="images/facebook.png" alt=""></a></li>
					    	<li><a href="#"><img src="images/twitter.png" alt=""></a></li>					    
			    		</ul>
					</div>
					<div class="button"><span><a href="<?php echo Url::to(['/cart/index']);?>">加入购物车</a></span></div>					
					<div class="clear"></div>
				</div>
			</div>
	<div class="clear"></div>
</div>
<div class="product_desc">	
			<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
				<ul class="resp-tabs-list">
					<li class="resp-tab-item resp-tab-active" aria-controls="tab_item-0" role="tab">商品详情</li>
					<li class="resp-tab-item" aria-controls="tab_item-1" role="tab">商品参数</li>
					<li class="resp-tab-item" aria-controls="tab_item-2" role="tab">相关评论</li>
					<div class="clear"></div>
				</ul>
				<div class="resp-tabs-container">
					<h2 class="resp-accordion resp-tab-active" role="tab" aria-controls="tab_item-0"><span class="resp-arrow"></span>商品详情</h2>
					<div class="product-desc resp-tab-content resp-tab-content-active" style="display:block" aria-labelledby="tab_item-0">
						<p><?php echo $row[0]['goods_desc'];?></p>				
					</div>

				 <h2 class="resp-accordion" role="tab" aria-controls="tab_item-1"><span class="resp-arrow"></span>商品参数</h2><div class="product-tags resp-tab-content" aria-labelledby="tab_item-1">
						 <p>关键字 : <span><?php echo $row[0]['keywords'];?></span></p>
						 <p>上市时间 : <?php echo date("Y年m月d日", $row[0]['add_time']);?></p>
						 
					<h4>添加关键字:</h4>
					<div class="input-box">
						<input value="" type="text">
					</div>
					<div class="button"><span><a href="#">添加</a></span></div>
			    </div>	

				<h2 class="resp-accordion" role="tab" aria-controls="tab_item-2"><span class="resp-arrow"></span>相关评论</h2><div class="review resp-tab-content" aria-labelledby="tab_item-2">

				  <div class="your-review">
				  	 <h3>How Do You Rate This Product?</h3>
				  	  <p>Write Your Own Review?</p>
				  	  <form>
					    	<div>
						    	<span><label>昵称<span class="red">*</span></label></span>
						    	<span><input value="" type="text"></span>
						    </div>
						    <div><span><label>综述<span class="red">*</span></label></span>
						    	<span><input value="" type="text"></span>
						    </div>						
						    <div>
						    	<span><label>建议<span class="red">*</span></label></span>
						    	<span><textarea> </textarea></span>
						    </div>
						   <div>
						   		<span><input value="SUBMIT REVIEW" type="submit"></span>
						  </div>
					    </form>
				  	 </div>				
				</div>
			</div>
		 </div>
	 </div>
