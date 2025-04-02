<?php
 include('data.php');



//  header 
function headermain($contacts, $header_logo, $header, $logins, $login_icon){
    echo '<header class="header_section">';
     echo '<div class="header_top">';
       echo '<div class="container">';
           echo '<div class="contact_nav">';
           foreach($contacts as $contact){
            echo '<a href="'.$contact['link'].'"> '.$contact['icon'].' <span> '.$contact['title'].' </span> </a>';
           };
        echo '</div>';
       echo  '</div>';
      echo '</div>';
       
       echo '<div class="header_bottom">';
       echo '<div class="container-fluid">';
          echo '<nav class="navbar navbar-expand-lg custom_nav-container ">';
           echo  '<a class="navbar-brand" href="index.php">';
               echo '<img src="'.$header_logo.'" alt="">';
            echo '</a>';
           

             echo '<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class=""> </span>
            </button>';

            echo '<div class="collapse navbar-collapse" id="navbarSupportedContent">';
            echo'<div class="d-flex mr-auto flex-column flex-lg-row align-items-center">';
               echo '<ul class="navbar-nav  ">';
               foreach ($header as $nav){
                echo '<li class="nav-item">';
                echo '<a class="'.$nav['class'].'" href="'.$nav['link'].'">'.$nav['title'].' <span class="sr-only">(current)</span></a>';
                echo '</li>';
            }
            
                  
               echo '</ul>';
              echo  '</div>';
             echo '<div class="quote_btn-container">';
             foreach($logins as $login){
                echo  '<a href="'.$login['link'].'"> '.$login['icon'].' <span> '.$login['title'].' </span></a>';
             }
              echo  '<form class="form-inline">';
              echo '<button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"> '.$login_icon.' </button>';

               echo '</form>';
              echo '</div>';
           echo  '</div>';
          echo '</nav>';
         echo '</div>';
       echo '</div>';
    echo '</header>';
};



function contactSection ($contact_form){
  echo '<div class="container">';
    echo '<div class="heading_container">';
      echo '<h2>';
        echo 'Get In Touch';
      echo '</h2>';
    echo '</div>';
    echo '<div class="row">';
      echo '<div class="col-md-7">';
        echo '<div class="form_container">';
          echo '<form action="index.php" method="POST">';
            echo '<div>';
              echo '<input name="form_type" type="hidden" value="contact">';
            echo '</div>';
            foreach ($contact_form as $form) 
            {
              echo '<div>';
                echo '<input name="'. $form ['name'] .'" type="'. $form ['type'] .'" class=" '. $form ['class'] .' " placeholder=" '.$form ['placeholder']  .' "/>';
              echo '</div>';
            }     
            echo '<div class="btn_box">';
              echo '<button>';
                echo 'SEND';
              echo '</button>';
            echo '</div>';
          echo '</form>';
        echo '</div>';
      echo '</div>';
      echo '<div class="col-md-5">';
        echo '<div class="img-box">';
          echo '<img src="images/contact-img.jpg" alt="">';
        echo '</div>';
      echo '</div>';
    echo '</div>';
  echo '</div>';
};
?>


<!-- slider section -->

<?php

   function slider($slider_sections) {
      echo '<section class="slider_section">';
      echo '<div class="dot_design">';
      echo '<img src="'.$slider_sections[0]['background_img'].'" alt="">';
      echo '</div>';
      echo '<div id="customCarousel1" class="carousel slide" data-ride="carousel">';
      echo '<ol class="carousel-indicators">';
      foreach ($slider_sections as $index => $slider_section) {
          echo '<li data-target="#customCarousel1" data-slide-to="'.$index.'" '.($index === 0 ? 'class="active"' : '').'></li>';
      }
      echo '</ol>';
      echo '<div class="carousel-inner">';
      foreach ($slider_sections as $index => $slider_section) {
          echo '<div class="carousel-item '.($index === 0 ? 'active' : '').'">';
          echo '<div class="container">';
          echo '<div class="row">';
          echo '<div class="col-md-6">';
          echo '<div class="detail-box">';
          echo '<div class="play_btn">';
          echo '<button> '.$slider_section['icon'].' </button>';
          echo '</div>';
          echo '<h1>'.$slider_section['name'].'<br> <span>'.$slider_section['span'].' </span> </h1>';
          echo '<p> '.$slider_section['text'].'</p>';
          echo '<a href="'.$slider_section['link'].'"> '.$slider_section['title'].' </a>';
          echo '</div>';
          echo '</div>';
          echo '<div class="col-md-6">';
          echo '<div class="img-box">';
          echo '<img src="'.$slider_section['slider_img'].'" alt="">';
          echo '</div>';
          echo '</div>';
          echo '</div>';
          echo '</div>';
          echo '</div>';
      }
      echo '</div>'; 
  
     
      echo '<a class="carousel-control-prev" href="#customCarousel1" role="button" data-slide="prev">';
      echo '<span class="carousel-control-prev-icon" aria-hidden="true"></span>';
      echo '<span class="sr-only">Previous</span>';
      echo '</a>';
      echo '<a class="carousel-control-next" href="#customCarousel1" role="button" data-slide="next">';
      echo '<span class="carousel-control-next-icon" aria-hidden="true"></span>';
      echo '<span class="sr-only">Next</span>';
      echo '</a>';
      echo '</div>'; 
      echo '</section>';
  };

?>

<!-- slider section ends -->


<!-- book section -->
 <?php
function bookSection ($departments, $visit_doctors){
  echo '<div class="container">';
  echo '<div class="row">';
    echo '<div class="col">';
      echo '<form action="index.php" method="POST">';
        echo '<h4>';
          echo 'BOOK <span>APPOINTMENT</span>';
        echo '</h4>';
        echo '<div class="form-row ">';
          echo '<input type="hidden" name="form_type" value="appointment">';
          echo '<div class="form-group col-lg-4">';
            echo '<label for="inputPatientName">Patient Name </label>';
            echo '<input type="text" class="form-control" id="inputPatientName" name="inputPatientName" placeholder="" required>';
          echo '</div>';
          echo '<div class="form-group col-lg-4">';
            echo "<label for='inputDoctorName'>Doctor's Name</label>";
            echo '<select name="inputDoctorName" class="form-control wide" id="inputDoctorName" required>';
              echo '<option value="normal distribution">normal distribution</option>';
              foreach ($visit_doctors as $visit) 
              {
                echo '<option value="'.$visit['value'].'" data-department="'.$visit['data-department'].'">'.$visit['name'].'</option>';
              }
            echo '</select>';
          echo '</div>';
          echo '<div class="form-group col-lg-4">';
            echo "<label for='inputDepartmentName'>Department's Name</label>";
            echo '<select name="inputDepartmentName" class="form-control wide" id="inputDepartmentName" required>';
              echo '<option value="normal distribution">normal distribution</option>';
              foreach ($departments as $department) 
              {
                echo '<option value="'.$department['value'].'">'.$department['name'].'</option>';
              }
            echo '</select>';
          echo '</div>';
        echo '</div>';
        echo '<div class="form-row ">';
          echo '<div class="form-group col-lg-4">';
            echo '<label for="inputPhone">Phone Number</label>';
            echo '<input type="number" class="form-control" id="inputPhone" name="inputPhone" placeholder="XXXXXXXXXX" required>';
          echo '</div>';
          echo '<div class="form-group col-lg-4">';
            echo '<label for="inputSymptoms">Symptoms</label>';
            echo '<input type="text" class="form-control" id="inputSymptoms" name="inputSymptoms" placeholder="" required>';
          echo '</div>';
          echo '<div class="form-group col-lg-4">';
            echo '<label for="inputDate">Choose Date </label>';
            echo '<div class="input-group date" id="inputDate" data-date-format="mm-dd-yyyy">';
              echo '<input type="text" class="form-control" readonly name="inputDate" required>';
              echo '<span class="input-group-addon date_icon">';
                echo '<i class="fa fa-calendar" aria-hidden="true"></i>';
              echo '</span>';
            echo '</div>';
          echo '</div>';
        echo '</div>';
        echo '<div class="btn-box">';
          echo '<button type="submit" class="btn ">Submit Now</button>';
        echo '</div>';
      echo '</form>';
    echo '</div>';
  echo '</div>';
echo '</div>';
};



// <!-- about section -->

function about($about_img,$about_h2,$about_span,$about_p,$about_button){
 echo '<section class="about_section">';
    echo '<div class="container  ">';
      echo '<div class="row">';
        echo' <div class="col-md-6 ">';
         echo  '<div class="img-box">';
            echo '<img src="'.$about_img.'" alt="">';
           echo '</div>';
        echo '</div>';
        echo  '<div class="col-md-6">';
         echo '<div class="detail-box">';
            echo '<div class="heading_container">';
              echo '<h2> '.$about_h2.' <span>'.$about_span.'</span></h2>';
             echo '</div>';
             echo '<p> '.$about_p.' </p>';
           echo '<a href="'.$about_button['link'].'"> '.$about_button['title'].'</a>';
         echo '</div>';
        echo' </div>';
     echo '</div>';
    echo '</div>';
  echo '</section>';
};
?>

<!-- about section ends -->

<!-- get treatment section -->
<?php
function getTreatmentSection() {
   global $treatments;
   echo '
   <section class="treatment_section layout_padding">
       <div class="side_img">
           <img src="images/treatment-side-img.jpg" alt="">
       </div>
       <div class="container">
           <div class="heading_container heading_center">
               <h2>Hospital <span>Treatment</span></h2>
           </div>
           <div class="row">';
   
   foreach ($treatments as $treatment) {
       echo '
       <div class="col-md-6 col-lg-3">
           <div class="box">
               <div class="img-box">
                   <img src="' . $treatment["image"] . '" alt="">
               </div>
               <div class="detail-box">
                   <h4>' . $treatment["title"] . '</h4>
                   <p>' . $treatment["description"] . '</p>
                   <a href="">Read More</a>
               </div>
           </div>
       </div>';
   }

   echo '</div></div></section>';
};
?>

<!-- get treatment section ends -->


<!-- team section -->
<?php
function doctors ($doctors, $icons){
  echo '<div class="container">';
  echo '<div class="heading_container heading_center">';
  echo '<h2> Our <span>Doctors</span> </h2>';
  echo  '</div>';
  echo '<div class="carousel-wrap ">';
  echo '<div class="owl-carousel team_carousel">';
    foreach($doctors as $doctor)
  {
  echo '<div class="item">';
  echo '<div class="box">';
  echo '<div class="img-box">';
  echo '<img src="'.$doctor['img'].'" alt="" />';
  echo  '</div>';
  echo '<div class="detail-box">';
  echo'<h5> '.$doctor['name'].'</h5>';
  echo '<h6>  '.$doctor['title'].'</h6>';
  echo '<div class="social_box">';
  foreach($icons as $icon){
  echo '<a href=""> '.$icon.'</a>';
  };
  echo'</div>';
  echo '</div>';
  echo '</div>';
echo '</div>';
  };
  echo'</div>';
  echo '</div>';
  echo '</div>';
  };

?>


<!-- team section ends -->  

   
      
      
        
      
            
              
                    
                  
                 


<!-- client section -->
<?php

function client($clients, $heading) {
    echo '<section class="client_section layout_padding">';
    echo '<div class="container">';
    echo '<div class="heading_container">';
    echo '<h2><span>' . $heading . '</span></h2>';
    echo '</div>';
    echo '</div>';

    echo '<div class="container px-0">';
    echo '<div id="customCarousel2" class="carousel carousel-fade" data-ride="carousel">';
    echo '<div class="carousel-inner">';


    $first = true;
    foreach ($clients as $client) {
        echo '<div class="carousel-item' . ($first ? ' active' : '') . '">'; 
        echo '<div class="box">';
        echo '<div class="client_info">';
        echo '<div class="client_name">';
        echo '<h5>' . $client['name'] . '</h5>';
        echo '<h6>' . $client['title'] . '</h6>';
        echo '</div>';
        echo '<i class="fa fa-quote-left" aria-hidden="true"></i>';
        echo '</div>';
        echo '<p>' . $client['text'] . '</p>';
        echo '</div>';
        echo '</div>';
        $first = false; 
    }

    echo '</div>'; 

   
    echo '<a class="carousel-control-prev" href="#customCarousel2" role="button" data-slide="prev">';
    echo '<span class="carousel-control-prev-icon" aria-hidden="true"></span>';
    echo '<span class="sr-only">Previous</span>';
    echo '</a>';

    echo '<a class="carousel-control-next" href="#customCarousel2" role="button" data-slide="next">';
    echo '<span class="carousel-control-next-icon" aria-hidden="true"></span>';
    echo '<span class="sr-only">Next</span>';
    echo '</a>';

    echo '</div>'; 
    echo '</div>'; 
    echo '</section>'; 
};
// ?>

 <!-- client section ends -->












<!-- info section -->
 <?php



function infoSection ($header_logo_link, $footer_address, $footer_social_netw, $footer_useful_links, $footer_end) {
  echo '<div class="container">';
    echo '<div class="info_top">';
      echo '<div class="info_logo">';
        echo '<a href="">';
          echo '<img src="' . $header_logo_link .'" alt="">';
        echo '</a>';
      echo '</div>';
      echo '<div class="info_form">';
        echo '<form action="">';
          echo '<input type="email" placeholder="Your email">';
          echo '<button>';
            echo 'Subscribe';
          echo '</button>';
        echo '</form>';
      echo '</div>';
    echo '</div>';
    echo '<div class="info_bottom layout_padding2">';
      echo '<div class="row info_main_row">';
        echo '<div class="col-md-6 col-lg-3">';
          echo '<h5>';
            echo 'Address';
          echo '</h5>';
          echo '<div class="info_contact">';
            foreach ($footer_address as $address)
            {
              echo '<a href=" ' . $address ['link']. '">';
                echo '<i class="' . $address ['class']. '" aria-hidden="' . $address ['aria-hidden']. '"></i>';
                echo '<span>
                  ' . $address ['title']. '
                </span>';
              echo '</a>';
            }
          echo '</div>';
          echo '<div class="social_box">';
            foreach ($footer_social_netw as $netw)
            {
              echo '<a href="'. $netw ['link']. '">';
                echo '<i class="'. $netw ['class']. '" aria-hidden="true"></i>';
              echo '</a>';
            }
          echo '</div>';
        echo '</div>';
        echo '<div class="col-md-6 col-lg-3">';
          echo '<div class="info_links">';
            echo '<h5>';
              echo 'Useful link';
            echo '</h5>';
            echo '<div class="info_links_menu">';
              foreach ($footer_useful_links as $links) {
                echo '<a class="' . $links['class'] . '" href="' . $links['link'] . '">';
                  echo '' . $links['title'] . '' ;
                echo '</a>';
              }
            echo '</div>';
          echo '</div>';
        echo '</div>';
        foreach ($footer_end as $end)
        {
          echo '<div class="col-md-6 col-lg-3">';
            echo '<div class="info_post">';
              echo '<h5>';
                echo ''. $end ['title'] .'';
              echo '</h5>';
              foreach ($end ['mini-box'] as $end_mini) {
                echo '<div class="post_box">';
                echo '<div class="img-box">';
                  echo '<img src="' . $end_mini ['img'] . '" alt="">';
                echo '</div>';
                echo '<p>';
                  echo '' . $end_mini ['inner-title'] . '';
                echo '</p>';
              echo '</div>';
              }
            echo '</div>';
          echo '</div>';
        }
      echo '</div>';
    echo '</div>';
  echo '</div>';
};


function footer() {
  echo '<div class="container">';
    echo '<p>';
      echo '&copy; <span id="displayYear"></span> All Rights Reserved By';
      echo '<a href="https://html.design/">Free Html Templates</a>';
    echo '</p>';
  echo '</div>';
};


function AppointmentConfirmation ($appointment)
{
    echo '<div class="form-container">';
        echo '<h2>Appointment Confirmation</h2>';
        echo "<p>Thank you, <strong>" . htmlspecialchars($appointment['patientName']) . "</strong>. Your appointment has been successfully booked!</p>";
        echo "<p><strong>Doctor's Name:</strong>" . ' ' . htmlspecialchars($appointment['doctorName']) . "</p>";
        echo "<p><strong>Department:</strong>" . ' ' . htmlspecialchars($appointment['departmentName']) ."</p>";
        echo "<p><strong>Phone Number:</strong>" . ' ' . htmlspecialchars($appointment['phone']) ."</p>";
        echo "<p><strong>Symptoms:</strong>" . ' ' . htmlspecialchars($appointment['symptoms'])."</p>";
        echo "<p><strong>Appointment Date:</strong>" . ' ' . htmlspecialchars($appointment['appointmentDate'])."</p>";
        echo "<p>We will contact you shortly to give further information. Thank you!</p>";
    echo '</div>';
};




// contact function


function contact ($contact){
    echo '<div class="form-container">';
        echo '<h2>Contact Confirmation</h2>';
        echo '<p>Your form has been successfully submitted!</p>';
        echo '<p>Thank you for getting in touch. We will respond to your query soon.</p>';  
    echo '</div>';
};









?>
