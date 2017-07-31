<div class='img' style='background: url("public/images/taniec5.jpg") center/cover no-repeat; '></div>
        
        
		<section class="section">
			<div class="container">
				<div class="box">
					<div class="square">
                                            
						<div class="image">
							<img src='public/images/wprawki.png'  style="height:140px ;width:140px; margin-top: 15px;"/>
						</div>	
                                         
						<h3>Wprawki</h3>
                                                <span>
                                                    Wprawki to zajęcia dodatkowe nieobowiązkowe. Odbywają się w PIĄTKI od 19.00 do 21.00 Przychodzi się na nie by sobie poćwiczyć to co instruktor uczył na zajęciach obowiązkowych.
                                                </span>
                                             <a href="<?php echo URL; ?>exercises">
                                             <div class="more">
                                                Więcej 
                                            </div>
                                             </a>
					</div>
                                        
					<div class="square">
                                            
						<div class="image">
							<img  src="public/images/instruktorzy.png" style="height:140px; width:140px; margin-top: 15px;"/>
						</div>	
						<h3>Instruktorzy</h3>
						<span>
                                                    Nasi instruktorzy podchodzą z ogromną pasją i zapałem. Nasze nauczanie jest poparte ugruntowaną wiedzą oraz doświadczeniem. Każdy instruktor stawiał swoje pierwsze kroki w Skarlecie.
						</span>
                                                <a href="<?php echo URL; ?>instructors">
                                                <div class="more">
                                                    Więcej 
                                                 </div>
                                                </a>
					</div>
                                    
                                    
                                    
                                     <div class="square">
                                            
                                                    <div class="image">
							<i class="icon-camera" style="width: 100px;
							height: 160px;"></i>
                                                    </div>
                                           
						<h3>Galeria</h3>
						<span>
							Tutaj możesz zobaczyć zdjęcia z zajęć oraz imprez zoorganizowanych przez Skarlet. Jeżeli chodziłeś na nasze zajęcia, sprawdź czy nie znalazłeś się na jednym ze zdjęć:)
						</span>
                                                <div class="more">
                                                    Więcej 
                                                </div>
                                                
					</div>
						
					<div class="square">
                                           
                                                    <div class="image">
							<i class="icon-music" style="width: 100px;
							height: 160px;"></i>
                                                    </div>
						<h3>Muzyka</h3>
                                                <span>
                                                    Tutaj można znaleźć muzykę, którą puszczamy na zajęciach. Dla osób, które chcą poćwiczyć w domu, lub osłuchać się z muzyką. Muzyka jest posortowana w zależności od tańca.
						</span>
                                                <a href="<?php echo URL; ?>music">
                                                <div class="more">
                                                    Więcej 
                                                </div>
                                                </a>
					</div>						
					
					<div style="clear:both;"></div>
				</div>    
			</div>
		</section>
            

<section class="section">
<h2>Aktualności</h2>
<?php

$data = $this->data;

foreach($data as $row){
    echo '<div class="container">';
    echo '<div class="message">';
    echo '<h3 style="color:white; text-align:left;">'.$row['name'].'</h3>';
    echo '<p style="color:white; text-align:left;font-size: 15px;margin: 0px; padding: 0px;">'.$row['date'].'</p>';
    echo '<p>'.$row['content'].'</p>';
    echo '</div>';
    echo '</div>';
}
?>
</section>

<section class="section">
			<div class="container">
				<h2>Skarlet w liczbach</h2>
				
				<div class="box">
					<div class="square">
						<div class="image2">
							<i class="icon-location-1"></i>
						</div>	
						<h4>2</h4>
						
						<h5>Sale taneczne</h5>
					</div>
					
					<div class="square">
						<div class="image2">
							<i class="icon-child"></i>
						</div>	
						<h4>5</h4>
						<h5>Instruktorów</h5>

					</div>
					
					<div class="square">
						<div class="image2">
							<i class="icon-note" ></i>
						</div>
						<h4>10</h4>
						<h5>Rodzajów tańca</h5>

					</div>
						
					<div class="square">
						<div class="image2">
							<i class="icon-heart" ></i>
						</div>
						<h4>25</h4>
						<h5>Lat działalności</h5>
					</div>
					<div style="clear:both;"></div>
				</div>
			</div>
		</section>
		
		
