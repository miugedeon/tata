<?php include_once("inc/head.php")?>
<?php include_once("inc/top.php")?>

<!--------------------------------------------------->
<?php
	$p_id="";
	if(isset($_GET["p_id"]))
	{
		$p_id=$_GET["p_id"];
	}
	else
	{
		$sql="select * from p_type where p_bigtype=1 and language='cn' order by p_id asc limit 0,1";
		$query=$d->Query($sql);
		while($row=mysql_fetch_array($query))
		{
			$p_id=$row["p_id"];
		}
	}
	
?>
<!--------------------------------------------------->
<table width="1001" cellpadding="0" cellspacing="0" style="background:#fff; margin:0 auto;">
	<tr>
    	<td>
        	<div id="middle">
				<?php include_once("inc/nav.php")?>
                <div class="width_926">
                    <div class="left">
                    	<?php include_once("inc/left.php")?>
                        <?php include_once("inc/left_about.php")?>
                    </div>
                    <div class="right" id="right1">
                        <div id="right">
                            <div><img src="images/about.jpg" /></div>
                            <div style="height:66px; vertical-align:text-bottom;">
                                <div style="float:left;"><img src="images/right_about.jpg" /></div>
                                <div style="float:left; padding-top:49px; color:#C5A157; font-family:����; padding-left:30px;">���ʵ��γɳ���ǿ���Ƽ��ĵ����г��У���֤���й�����ҵ��Ѹ�ͷ�չ��</div>
                            </div>
                            <div style="height:20px;"></div>
                            <div style="font-family:'����'; line-height:200%; color:#5D5A55; clear:both;">
                                ���ʵ��δ�����1993�꣬����ռ�����14��ƽ���ף��Ǽ��ִ���ˮ����ŷʽ�ȸ������õƾߵ��з������������۵����͹��ʻ����μ�����ҵ��
            ���ʵ��μ��Ű������ʵ��γ����޹�˾���麣�����������޹�˾��������ֹ�˾��Ӣ���ֹ�˾������˹�ֹ�˾����ɽ����ҵ�������صȾ�
            ��ʵ�塣 ��ƷԶ��ȫ��70������Һ͵������ڱ������Ϻ��ȹ���80������г���������210���ר���ꡣ���ʵ������в�Ʒ��ۡ�ʵ����
            �ͼ�����ר��197�ʡ����ҵ�������ģ����м����̼������ĸ�һ�������������˵¹�����������������Ʒ������ģ�Ƹ��ŷ�޶������ʦ
            ��������ܼ࣬�Ǹ��з��ͼ����˲�200������Ա��3000���ˡ�
               ��2006�ꡢ2007�ꡢ2008�ꡢ2009�������ʵ��β������ϣ����ʲ�Ʒ�����Ľ�ͬʱ��á���չ��Ʒ���𽱺�������
               2010��1�£����ʳ�ΪӢ�����������ʵ���չ��ʷ�ϵ�һ��ͬʱ��á���ѹ̶�ʽ�ƾ���ƴ󽱡�����Ӣ���ƾ������ȴ󽱡������
            �ĵ�����ҵ��<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </td>
    </tr>
    <tr>
    	<td><?php include_once("inc/foot.php")?></td>
    </tr>
</table>
</body>
</html>
