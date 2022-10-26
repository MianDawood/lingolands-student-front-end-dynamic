<?php  
	include('connection.php');
if(!empty($_POST['radioid'])){
	$radioId = $_POST['radioid'];
	
	$sqlResult	=	mysqli_query($link, "select w.id wid,w.image,w.audio,w.countryId,w.status,w.deleted,wd.* from radio_station w LEFT JOIN  radio_station_details wd on w.id=wd.radio_stationId where w.deleted=0 and wd.languageId='1' and  w.id='".$radioId."' ");
	
	while( $row = mysqli_fetch_assoc($sqlResult) ){
		if(!empty($row)){?>
			<div id="radio">
				<div class="" id="radio-track">
					<div class="left-box">
						<div class="img-box">
							<img id="radio-logo" src="<?php  echo 'https://lingolands.com/admin/assets/uploads/radio_station/'.$row['image']  ;?>" alt="<?php echo $row['title'];?>" importance="high" width="96" height="66">
						</div>
						<div class="text-box">
							<strong class="title" id="radio-title"><?php echo $row['title'];?></strong>
							<div class="signal" id="radio-signal" itemprop="broadcastFrequency" itemscope="" itemtype="http://schema.org/BroadcastFrequencySpecification">
							<?php echo $row['content'];?>
							</div>
						</div>
					</div>
				</div>

				<div class="radio-player">
				   
					<audio controls preload="none">
						<source src="<?php echo $row['audio'];?>" type="audio/ogg">
						<source src="<?php echo $row['audio'];?>" type="audio/mpeg">
						<source src="<?php echo $row['audio'];?>" type="audio/wav">
					</audio> 
				</div>
				
			
			
			<?php
			
		}
		
		
	}
	
}