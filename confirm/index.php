<?php
	session_start();
	$accept=$_SESSION['pass'];
		if($accept==''){
			?>
	<script language=javascript>
		alert("���¼");
		window.location.href="http://211.71.149.243/~n152127/12/web/login.php";
	</script>
	<?php
         }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />

	<link href="bootstrap/css/bootstrap.css" rel="stylesheet">
	<style type="text/css">
	.span2{
		background-color: #eeefff;
		height:1000px;
	}
	.span10{
		background-color:#FFE384;
		height:1000px;
	}
	.nav-sidebar{
        margin: 10px 0 0;
        padding: 0;
        background-color: #fff;
        -webkit-border-radius: 6px;
        -moz-border-radius: 6px;
        border-radius: 6px;
        -webkit-box-shadow: 0 1px 4px rgba(0,0,0,.065);
        -moz-box-shadow: 0 1px 4px rgba(0,0,0,.065);
        box-shadow: 0 1px 4px rgba(0,0,0,.065);
    }
    .nav-sidebar >li:first-child >a{
        -webkit-border-radius: 6px 6px 0 0;
        -moz-border-radius: 6px 6px 0 0;
        border-radius: 6px 6px 0 0;
    }
    .nav-sidebar >li>a{
        display: block;
        width: 190px \9;
        margin: 0 0 -1px;
        padding: 8px 14px;
        border: 1px solid #e5e5e5;
    }
	</style>
	<script src="jquery/jquery.min.js" type="text/javascript"></script>
	<script src="jquery/jquery.js" type="text/javascript"></script>
	<script src="bootstrap/js/bootstrap.js" type="text/javascript"></script>
	</head>
	<body>	
	<div class="contianer-fluid">
		<div class="row-fluid">
			<div class="span2">
				<!--Sidebar content-->
			 <ul class="nav nav-sidebar">
                        <li class="active"><a href="#one" class="nav-header menu-first collapsed" data-toggle="collapse">
                            <i class="fa fa-user"></i>&nbsp; ��һ����ҵ <span class="sr-only">(current)</span></a>
                        </li> 
                        <!-- �����˵� -->
                        <!-- ע��һ���˵���<a>��ǩ�ڵ�href="#����"���������Ҫ������˵���<ul>��ǩ�ڵ�id="����"���������һ�� -->
                        <ul id="one" class="nav nav-list collapse menu-second">
                            <li><a href="###" onclick="showAtRight('1.html')"><i class="fa fa-users"></i>չʾ </a></li>
                        </ul>
                         
                        <li><a href="#two" class="nav-header menu-first collapsed" data-toggle="collapse">
                            <i class="fa fa-globe"></i>&nbsp; �ڶ�����ҵ <span class="sr-only">(current)</span></a>
                        </li> 
                        <ul id="two" class="nav nav-list collapse menu-second">
                            <li><a href="###" onclick="showAtRight('3.php')"><i class="fa fa-list-alt"></i> չʾ</a></li>
                        </ul>
                        
                        <li><a href="#three" class="nav-header menu-first collapsed" data-toggle="collapse">
                            <i class="fa fa-file-text"></i>&nbsp; ��������ҵ <span class="sr-only">(current)</span></a>
                        </li> 
                        <ul id="three" class="nav nav-list collapse menu-second">
                            <li><a href="###" ><i class="fa fa-list"></i>......</a></li>
                        </ul>
						 <li><a href="#four" class="nav-header menu-first collapsed" data-toggle="collapse">
                            <i class="fa fa-file-text"></i>&nbsp; ����..... <span class="sr-only">(current)</span></a>
                        </li> 
                        <ul id="four" class="nav nav-list collapse menu-second">
                            <li><a href="###" ><i class="fa fa-list"></i>......</a></li>
                        </ul>
                            
                    </ul>
				</ul>
			</div>
			<div class="span10">
				<!--Body content-->
                    <h1 class="page-header"><i class="fa fa-cog fa-spin"></i>&nbsp;&nbsp;&nbsp;homework<small>&nbsp;&nbsp;&nbsp;��ӭ!!</small></h1>
                        
                        <!-- �������˵�ָ���jsp����html�ȣ�ҳ������ -->
                          <div id="content">
               
                               <h4>                    
                                   <strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ʹ��ָ�ϣ�</strong><br>
                                   <br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ĭ��ҳ�����ݡ���
                               </h4>                                 
                              
                          </div>  
                </div> 
        	</div>
	</div>
        
        <script type="text/javascript">
        
        /*
         * ��ѡ�еı�ǩ����active״̬������ǰ����active״̬��֮��δ��ѡ�еı�ǩȡ��active
         * ��ʵ�����˵��еı�ǩ������ɫ��Ч����
         */
        $(document).ready(function () {
            $('ul.nav > li').click(function (e) {
                //e.preventDefault();    ��������򵼺���<a>��ǩ��ʧЧ
                $('ul.nav > li').removeClass('active');
                $(this).addClass('active');
            });
        });
        
        /*
         * ���ajax���ص�ҳ���к���javascript�İ취��
         * ��xmlHttp.responseText�еĽű�����ȡ����������AJAX���ص�HTML�������ٸ��ű��飬���Ƕ��ҳ����Ľű��鶼����eval����ִ��������
         */
        function executeScript(html)
        {
            
            var reg = /<script[^>]*>([^\x00]+)$/i;
            //������HTMLƬ�ΰ�<\/script>���
            var htmlBlock = html.split("<\/script>");
            for (var i in htmlBlock) 
            {
                var blocks;//ƥ���������ʽ���������飬blocks[1]����������һ�νű����ݣ���Ϊǰ��reg���������������Ž����˲������
                if (blocks = htmlBlock[i].match(reg)) 
                {
                    //������ܴ��ڵ�ע�ͱ�ǣ�����ע�ͽ�β-->���Ժ��Դ�����evalһ������������
                    var code = blocks[1].replace(/<!--/, '');
                    try 
                    {
                        eval(code) //ִ�нű�
                    } 
                    catch (e) 
                    {
                    }
                }
            }
        }
        
        /*
         * ����divʵ����ߵ���ұ���ʾ��Ч������id="content"��div��������չʾ��
         * ע�⣺
         *   �٣�js��ȡ��ҳ�ĵ�ַ���Ǹ��ݵ�ǰ��ҳ����Ի�ȡ�ģ�����ʶ���Ŀ¼��
         *   �ڣ�����ұ߼��ص�������ʾҳ������css�����������ҳ�������е�index.jsp����������
         *   ���������������ҳ��֮��include����ҳ���css��js����ҳ���ǿ���ִ�еġ� ��ҳ��Ҳ���Ե�����ҳ���js������ʱҪ����ҳ����js����Ⱦ���Ⱥ�˳�� ��
        */
        function showAtRight(url) {
            var xmlHttp;
            
            if (window.XMLHttpRequest) {
                // code for IE7+, Firefox, Chrome, Opera, Safari
                xmlHttp=new XMLHttpRequest();    //���� XMLHttpRequest����
            }
            else {
                // code for IE6, IE5
                xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
            }
        
            xmlHttp.onreadystatechange=function() {        
                //onreadystatechange �� ��readystate�仯ʱ���ú���ķ���
                
                if (xmlHttp.readyState == 4) {
                    //xmlHttp.readyState == 4    ����    finished downloading response
                    
                    if (xmlHttp.status == 200) {
                        //xmlHttp.status == 200        ����    ��������������            
                        
                        document.getElementById("content").innerHTML=xmlHttp.responseText;    //����ҳ����id="content"��div�������
                        executeScript(xmlHttp.responseText);    //ִ�дӷ��������ص�ҳ�������������JavaScript����
                    }
                    //����״̬����
                    else if (xmlHttp.status == 404){
                        alert("������?   ��������룺404 Not Found����������"); 
                        /* ��404�Ĵ��� */
                        return;
                    }
                    else if (xmlHttp.status == 403) {  
                        alert("������?   ��������룺403 Forbidden��������"); 
                        /* ��403�Ĵ���  */ 
                        return;
                    }
                    else {
                        alert("������?   ��������룺" + request.status + "��������"); 
                        /* �Գ������������������ʾ����Ĵ���   */
                        return;
                    }   
                } 
                    
              }
            
            //�������͵��������ϵ�ָ���ļ���urlָ����ļ������д���
            xmlHttp.open("GET", url, true);        //true��ʾ�첽����
            xmlHttp.send();
        }        
        </script>

	</body>
	</html>