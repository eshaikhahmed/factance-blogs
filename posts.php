<?php 
$title = "Learning takes efforts and hard work";
$header_data = '<link rel="stylesheet" href="css/blog.css">';
include('header.php');

include('config/config.php');
include('common.php'); 


$technology = $_REQUEST["technology"];
echo $technology;
$query="SELECT blogid,blog_title,blog_shortdetails,blog_technology ,blog_image,blog_author,published_date
				FROM blogs WHERE LOWER(blog_technology) = '$technology'";
$values=null;
$content='';
$blog_technology  = "";
$database=new DatabaseManager();
$rows=$database->safeRetrieve($query,$values);
$total_rows=count($rows);

$queryDistinct="SELECT DISTINCT blog_technology
				FROM blogs";
$rowDistinct=$database->safeRetrieve($queryDistinct,$values);
$total_rowsDistinct=count($rowDistinct);

$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]";
?>

<section class="post-writer-section">
<div class="container-fluid" style="margin-top:80px;"> 
		<div class="row">

			<div class="col-md-2 sidebar">
					<ul class="technology-box">
						<?php 
							for($k=0;$k<$total_rowsDistinct;$k++)
							{
								$blog_technology = $rowDistinct[$k]['blog_technology'];
                                $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]";
                                $href=strtolower($blog_technology)."/all";
						?>
							    <li><a href="<?=$href?>"><?=$blog_technology?></a></li>
						<?php } ?>
					</ul>
			</div>


		<div class="col-md-9">
			<div class="flex-container">
			<?php 
			for($k=0;$k<$total_rows;$k++)
			{
				$blogid=$rows[$k]['blogid'];
				$blog_title=getDotsAfter($rows[$k]['blog_title'],30);
				$title_show=$rows[$k]['blog_title'];
				$blog_shortdetails=getDotsAfter($rows[$k]['blog_shortdetails'],110);
				$blog_technology=strtolower($rows[$k]['blog_technology']);
				$blog_image=($rows[$k]['blog_image']);
				$blog_author=($rows[$k]['blog_author']);
				$publish_date=($rows[$k]['published_date']);
				$publish_date = date("d M Y", strtotime($publish_date));
				// $publish_date = strtoupper($publish_date);
				$url = strtolower(replace_spaces($rows[$k]['blog_title']));
			
				$image_link = $actual_link. "/data-center/data?src=".$blog_image;
			?>
				<div class="post">
					<div class="image-section">
						<a href="article/<?=$blog_technology?>/<?= $url?>/<?=$blogid?>">
							<img class="img-responsive" src="<?= $image_link?> " alt="<?=$rows[$k]['blog_title']?>">
						</a>
					</div>
					<div class="title-section">
						<a href="article/<?=$blog_technology?>/<?= $url?>/<?=$blogid?>">
							<h2 class="new-index-h2"> <?= $blog_title ?></h2>
							<p >
								<?= $blog_shortdetails ?>
							</p>
						</a>
					</div>
					<div class="author-section">
						Ejaz Shaikh | <?=$publish_date?>
					</div>
				</div>
			<?php } ?>

			</div>
		</div>	 



	   
  

 	


</div> 	<!-- Row End -->

</div>
</section>

<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>

<?php include('footer.php'); ?>