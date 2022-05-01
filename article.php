<?php

include('config/config.php');
include('common.php');


$id=$_REQUEST["article_id"];
$query="SELECT *FROM blogs WHERE blogid=?";
$values=array($id);
$content='';
$blog_title = '';

$blog_technology = '';
$database=new DatabaseManager();
$rows=$database->safeRetrieve($query,$values);
$total_rows=count($rows);
for($k=0;$k<$total_rows;$k++)
{
	$blog_title=$rows[$k]['blog_title'];
	$blog_detail=$rows[$k]['blog_detail'];
	$blog_author=$rows[$k]['blog_author'];
	$blog_technology=$rows[$k]['blog_technology'];
	$published_date=$rows[$k]['published_date'];
	$blog_author=$rows[$k]['blog_author'];
	$blog_image=$rows[$k]['blog_image'];

	$blog_title_url=strtolower(replace_spaces($blog_title));

	$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]";
	$image_link = $actual_link. "/data-center/data?src=".$blog_image;
							
	$content.='<h1 class="title">'.$blog_title.'</h1>';
	$content.='<p><img class="img-responsive" src="'.$image_link.'" alt="'.$blog_title.'" /></p>';
	$content.=' '.$blog_detail.' ';
}

$queryDistinct="SELECT *
				FROM blogs WHERE blog_technology = '$blog_technology' ";
$rowDistinct=$database->safeRetrieve($queryDistinct,$values);
$total_rowsDistinct=count($rowDistinct);

$database->close();


$title = $blog_title;
$header_data = '<link rel="stylesheet" href="css/article.css">';
include('header.php');

?>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.10&appId=274177303067170";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<section class="post-writer-section">
<div class="container-fluid" style="margin-top:80px;"> 
		<div class="row">

			<div class="col-md-3 ">
					<div class="sidebar">
					<ul class="technology-box">
						<li>⚡ <?=$blog_technology?></li>
						<ul class="tech-topic-list">
							<?php
							for($k=0;$k<$total_rowsDistinct;$k++)
								{
									$blogid = $rowDistinct[$k]['blogid'];
									$blog_title = $rowDistinct[$k]['blog_title'];
									$technology = strtolower($blog_technology);
									$url = strtolower(replace_spaces($blog_title));
									$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]";
									$href="article/$technology/$url/$blogid";
							?>
								<li><a href='<?=$href?>'><?=$blog_title?></a></li>
							<?php } ?>
						</ul>
					</ul>
				</div>
			</div>


            <div class="col-md-6 ">
                <div class="article">

                    <?=$content?>
                    <p>&nbsp;</p>
                </div>
            </div>
			<div class="col-md-3 ">
                <div class="article">
					Something awesome will come here..
				</div>
            </div>				
        </div>
</div>
	 



<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>



 
   		 

<?php  

 include('footer.php');

 ?>