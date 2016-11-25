<div class="flowBox">
    <h6><span>商品列表</span></h6>
        <form id="formCart" name="formCart" method="post" action="flow.php">
           <table width="99%" cellspacing="1" cellpadding="5" border="0" bgcolor="#dddddd" align="center">
            <tbody><tr>
              <th bgcolor="#ffffff">商品名称</th>
                    <th bgcolor="#ffffff">属性</th>
                                          <th bgcolor="#ffffff">市场价</th>
                            <th bgcolor="#ffffff">本店价</th>
              <th bgcolor="#ffffff">购买数量</th>
              <th bgcolor="#ffffff">小计</th>
              <th bgcolor="#ffffff">操作</th>
            </tr>
                        <tr>
              <td style="width:300px;" bgcolor="#ffffff" align="center">
                                                      <a href="goods.php?id=19" target="_blank"><img style="width:120px; height:120px;" src="images/200905/thumb_img/19_thumb_G_1241970175208.jpg" title="三星SGH-F258" border="0"></a><br>
                    <a href="goods.php?id=19" target="_blank" class="f6">三星SGH-F258</a>
                                                                                    </td>
                            <td bgcolor="#ffffff" align="center">颜色:黑色 <br>
</td>
                                          <td bgcolor="#ffffff" align="center">￥1029.60元</td>
                            <td bgcolor="#ffffff" align="center">￥858.00元</td>
              <td bgcolor="#ffffff" align="center">
                                <input name="goods_number[43]" id="goods_number_43" value="1" size="4" class="inputBg" style="text-align:center " onkeydown="showdiv(this)" type="text">
                              </td>
              <td bgcolor="#ffffff" align="center">￥858.00元</td>
              <td bgcolor="#ffffff" align="center">
                <a href="javascript:if (confirm('您确实要把该商品移出购物车吗？')) location.href='flow.php?step=drop_goods&amp;id=43'; " class="f6">删除</a>
                            </td>
            </tr>
                      </tbody></table>
          <table style="margin:10px 0;" width="99%" cellspacing="0" cellpadding="5" border="0" bgcolor="#dddddd" align="center">
            <tbody><tr>
              <td bgcolor="#ffffff">
                            购物金额小计 ￥858.00元，比市场价 ￥1029.60元 节省了 ￥171.60元 (17%)              </td>
              <td bgcolor="#ffffff" align="right">
                <input value="清空购物车" class="bnt_blue_1" onclick="location.href='flow.php?step=clear'" type="button">
                <input name="submit" class="bnt_blue_1" value="更新购物车" type="submit">
              </td>
            </tr>
          </tbody></table>
          <input name="step" value="update_cart" type="hidden">
        </form>
        <table width="99%" cellspacing="0" cellpadding="5" border="0" bgcolor="#dddddd" align="center">
          <tbody><tr>
            <td bgcolor="#ffffff"><a href="./"><img src="themes/oppo/images/continue.gif" alt="continue"></a></td>
            <td bgcolor="#ffffff" align="right"><a href="flow.php?step=checkout"><img src="themes/oppo/images/checkout.gif" alt="checkout"></a></td>
          </tr>
        </tbody></table>
       </div>