<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>医生介绍</title>
	<link rel="stylesheet" href="__PUBLIC__/doctor-page.css">
</head>
<body>
	<div class="container">
		<nav>
			<input type="radio" name="radio-set" checked="checked" id="nav-1">
			<a href="#pannel-1">基本信息</a>
			<input type="radio" name="radio-set" id="nav-2">
			<a href="#pannel-2">临床技能信息</a>
			<input type="radio" name="radio-set" id="nav-3">
			<a href="#pannel-3">诊所基本信息</a>
			<input type="radio" name="radio-set" id="nav-4">
			<a href="#pannel-4">患者评价</a>
			<div class="scroll">
				<section class="panel" id="pannel-1">
					<div class="content-1">
						<form action="<?php echo U('Index/handle_pannel1');?>" method='post' name='pannel1'>
							<div class="tableRow">
								<p><img src="__PUBLIC__/images/form-img.png" alt="img"></p>
								<p id="button-photo"><input type="button" value="更改照片"></p>
							</div>
							<div class="tableRow">
								<p>姓名</p>
								<p><input type="text" name="name" placeholder=" 输入框"></p>
							</div>
							<div class="tableRow">
								<p>性别</p>
								<p><input type="text" name="sex" placeholder=" 输入框"></p>
							</div>
							<div class="tableRow">
								<p>年龄</p>
								<p><input type="text" name="age" placeholder=" 输入框" style="width:150px"></p>
							</div>
							<div class="tableRow">
								<p>当前执业地点</p>
								<p><input type="text" name="current_job_place" placeholder=" 输入框" style="width:300px"></p>
							</div>
							<div class="tableRow">
								<p>联系方式</p>
								<p><input type="text" name="contacts" placeholder=" 请填写电话号码" style="width:350px"></p>
							</div>
							<div class="tableRow">
								<p></p>
								<p id="botton-submit"><input type="submit" class="a" value="提交"></p>
							</div>
						</form>
					</div>
				</section>
				<section class="panel" id="pannel-2">
					<div class="content-2">
					<fieldset>
						<legend>临床技能汇总表</legend>
						<form action="<?php echo U('Index/handle_pannel2');?>" method='post' name='pannel2'>
							<div class="tableRow">
								<p>学历</p>
								<p><input type="text" name="edu" placeholder=" 专科、本科、硕士、博士"></p>
							</div>
							<div class="tableRow">
								<p>受教育经历</p>
								<p><input type="text" name="edu_exp" placeholder=" 注明各学历何时何地取得"></p>
							</div>
							<div class="tableRow">
								<p>再教育经历</p>
								<p><input type="text" name="re-edu_exp"placeholder="面授培训班/远程教育/国家级继续医学教育基地项目，项目名，学分数" ></p>
							</div>
							<div class="tableRow">
								<p>从业时间</p>
								<p><input type="text" name="working_time"placeholder=" 输入框" ></p>
							</div>
							<div class="tableRow">
								<p>从业经历</p>
								<p><input type="text" name="working_exp"placeholder=" 执业地点更换经历" ></p>
							</div>
							<div class="tableRow">
								<p>最高职称</p>
								<p><input type="text" name="highest_title"placeholder=" 输入框" ></p>
							</div>
							<div class="tableRow">
								<p>最高职务</p>
								<p><input type="text" name="highest_pos"placeholder=" 输入框" ></p>
							</div>
							<div class="tableRow">
								<p>获得最高职称的所在单位</p>
								<p><input type="text" name="highest_title place"placeholder=" 输入框" ></p>
							</div>
							<div class="tableRow">
								<p>获得最高职称的所在单位</p>
								<p><input type="text" name="highest_pos_place"placeholder=" 输入框" ></p>
							</div>
							<div class="tableRow">
								<p></p>
								<p id="botton-submit"><input type="submit" class="a" value="提交"></p>
							</div>
						</form>
					</fieldset>
					</div>
				</section>
				<section class="panel" id="pannel-3">
					<div class="content-3">
						<fieldset>
						<legend>诊所信息汇总表</legend>
						<form action="<?php echo U('Index/handle_pannel3');?>" method='post' name='pannel3'>
							<div class="tableRow">
								<p>面积</p>
								<p><input type="text" name="area" placeholder=" 输入框"></p>
							</div>
							<div class="tableRow">
								<p>硬件投资（一般）</p>
								<p><input type="text" name="hardware_inv" placeholder=" 输入框"></p>
							</div>
							<div class="tableRow">
								<p>硬件投资（专科）</p>
								<p><input type="text" name="hardware_inv2" placeholder=" 输入框" ></p>
							</div>
							<div class="tableRow">
								<p>营业额</p>
								<p><input type="text" name="sales" placeholder=" 输入框" ></p>
							</div>
							<div class="tableRow">
								<p>就诊量</p>
								<p><input type="text" name="medical_quantity" placeholder=" 输入框" ></p>
							</div>
							<div class="tableRow">
								<p>人员配比</p>
								<p><input type="text" name="staff_ratio" placeholder=" 输入框" ></p>
							</div>
							<!-- <div class="tableRow">
								<p>服务评价</p>
								<p><input type="text" name="service_evaluation" placeholder=" 输入框" ></p>
							</div> -->
							<!-- <div class="tableRow">
								<p>其它</p>
								<p><input type="text" placeholder=" 输入框" ></p>
							</div> -->
							<div class="tableRow">
								<p></p>
								<p id="botton-submit"><input type="submit" class="a" value="提交"></p>
							</div>
						</form>
					</fieldset>
					</div>
				</section>
				<section class="panel" id="pannel-4">
					<div class="content-4">
						<table>
							<tr>
								<th>患者编号</th>
								<th>评价</th>	
							</tr>
							<tr>
								<td>2013220601037</td>
								<td>很好</td>
							</tr>
							<tr>
								<td>2013220701002</td>
								<td>好的很</td>
							</tr>
						</table>
					</div>
				</section>
			</div>		
		</nav>
	</div>
</body>
</html>