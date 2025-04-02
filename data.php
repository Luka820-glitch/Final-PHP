<?php
// header//
$contacts=[
[
'link'=> '#',
'icon'=> '<i class="fa fa-phone" aria-hidden="true"></i>',
'title' => 'Call : +01 123455678990',
'class' => 'contact_nav'

],
[
    'link'=> '#',
    'icon'=> '<i class="fa fa-envelope" aria-hidden="true"></i>',
    'title' => '      Email : demo@gmail.com',
    'class' => 'contact_nav'
    
    ],
    [
        'link'=> '#',
        'icon'=> '<i class="fa fa-map-marker" aria-hidden="true"></i>',
        'title' => '      Location',
        'class' => 'contact_nav'
        
        ],
];

$header_logo= 'images/logo.png';




$header=[


    [
'class'=> 'nav-link',
'link' => 'index.php',
'title' => 'Home'
    ],
    [
     'class'=> 'nav-link',
     'link' => 'About.php',
      'title' => 'About'
            ],

     [
       'class'=> 'nav-link',
     'link' => 'Treatment.php',
     'title' => 'Treatment'
                    ],

     [
         'class'=> 'nav-link',
          'link' => 'Doctor.php',
           'title' => 'Doctors'
                            ],

     [
      'class'=> 'nav-link',
          'link' => 'Testimonial.php',
         'title' => 'Testimonial'
                                    ],

      [
          'class'=> 'nav-link',
          'link' => 'Contact.php',
            'title' => 'Contact Us'
                                            ],

                            ];      
                            
                            
    $logins=[
        [
            'title' => 'login',
            'icon'=> '<i class="fa fa-user" aria-hidden="true"></i>',
            'link' => '#'
        ],
        [
            'title' => 'Sign up',
            'icon'=> '<i class="fa fa-user" aria-hidden="true"></i>',
            'link' => '#'
        ],
    ];

    $login_icon = ' <i class="fa fa-search" aria-hidden="true"></i>';
?>



<!-- header end -->





<!-- slicer section -->
 <?php

$slider_sections=[
[
'background_img'=> 'images/dots.png',
'icon'=> '<i class="fa fa-play" aria-hidden="true"></i>',
'name' => 'Mico',
'span'=> 'hospital',
'slider_img' => 'images/slider-img.jpg',
 'text'=>'when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to',
 'link'=> '#',
 'title'=>'Contact us'
],


[
    'background_img'=> 'images/dots.png',
    'icon'=> '<i class="fa fa-play" aria-hidden="true"></i>',
    'name' => 'Mico',
    'span'=> 'hospital',
    'slider_img' => 'images/slider-img.jpg',
     'text'=>'when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to',
     'link'=> '#',
     'title'=>'Contact us'
    ],
];
?>
<!-- slider section ends -->







<!-- book section -->
     <?php                 
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST['form_type'])) {
        $formType = $_POST['form_type'];

        if ($formType === 'appointment') {
            $patientName = $_POST['inputPatientName'];
            $doctorName = $_POST['inputDoctorName'];
            $departmentName = $_POST['inputDepartmentName'];
            $phone = $_POST['inputPhone'];
            $symptoms = $_POST['inputSymptoms'];
            $appointmentDate = $_POST['inputDate'];

            
            if (($departmentName === 'surgeon' && $doctorName !== 'hennry') ||
                ($departmentName === 'Cardiology' && $doctorName !== 'jenni') ||
                ($departmentName === 'Pediatrician' && $doctorName !== '')){
                    if ($departmentName === 'surgeon') {
                        $doctorName = 'hennry';
                    } elseif ($departmentName === 'Cardiology') {
                        $doctorName = 'jenni';       
                    } elseif ($departmentName === 'Pediatrician') {
                        $doctorName = 'morco';
                    }
        }
   
            $_SESSION['appointment'] = [
                'patientName' => $patientName,
                'doctorName' => $doctorName,
                'departmentName' => $departmentName,
                'phone' => $phone,
                'symptoms' => $symptoms,
                'appointmentDate' => $appointmentDate
            ];

    
            header('Location: confirmation.php');
            exit();


        } elseif ($formType === 'contact') {
    
            $fullName = htmlspecialchars($_POST['FullName']);
            $email = htmlspecialchars($_POST['Email']);
            $phoneNumber = htmlspecialchars($_POST['PhoneNumber']);
            $message = htmlspecialchars($_POST['Message']);

    
            $_SESSION['contact'] = [
                'fullName' => $fullName,
                'email' => $email,
                'phoneNumber' => $phoneNumber,
                'message' => $message
            ];

       
            header('Location: patient.php');
            exit();
        }
    }
};




// === book section ===

$visit_doctors = [
    [
        'value' => 'hennry',
        'data-department' => 'surgeon',
        'name' => 'hennry'
    ],
    [
        'value' => 'jenni',
        'data-department' => 'Cardiology',
        'name' => 'jenni'
    ],
    [
        'value' => 'morco',
        'data-department' => 'Pediatrician',
        'name' => 'morco'
    ],
];
$departments = [
    [
        'value' => 'Stomatology',
        'name' => 'Stomatology'
    ],
    [
        'value' => 'Cardiology',
        'name' => 'Cardiology'
    ],
    [
        'value' => 'Neurology',
        'name' => 'Neurology'
    ],
];
//  contact section ===
$contact_form =[
       [
        'name' => 'FullName',
        'type' => 'text',
        'class' => ' ',
        'placeholder' => 'Full Name'
    ],
    [
        'name' => 'Email',
        'type' => 'email',
        'class' => ' ',
        'placeholder' => 'Email'
    ],
    [
        'name' => 'PhoneNumber',
        'type' => 'number',
        'class' => ' ',
        'placeholder' => 'Phone Number'
    ],
    [
        'name' => 'Message',
        'type' => 'text',
        'class' => 'message-box',
        'placeholder' => 'Message'
    ],
];











$about_img='images/about-img.jpg';
$about_h2 ='About';
$about_span ='Hospital';
$about_p ='has a more-or-less normal distribution of letters, as opposed to using "Content here, content here", making it look like readable English. Many desktop publishing packages and web page editors has a more-or-less normal distribution of letters, as opposed to using "Content here, content here", making it look like readable English. Many desktop publishing packages and web page editors';
$about_button=[
    'title'=> ' Read More',
    'link'=> 'about.php'
];
?>

<!-- about section end -->

<!-- get treatment -->


<?php
$treatments = [
    [
        "image" => "images/t1.png",
        "title" => "Nephrologist Care",
        "description" => "Alteration in some form, by injected humour, or randomised words which don't look even slightly.",
    ],
    [
        "image" => "images/t2.png",
        "title" => "Eye Care",
        "description" => "Alteration in some form, by injected humour, or randomised words which don't look even slightly.",
    ],
    [
        "image" => "images/t3.png",
        "title" => "Pediatrician Clinic",
        "description" => "Alteration in some form, by injected humour, or randomised words which don't look even slightly.",
    ],
    [
        "image" => "images/t4.png",
        "title" => "Parental Care",
        "description" => "Alteration in some form, by injected humour, or randomised words which don't look even slightly.",
    ]
];
?>

<!-- get treatment ends -->






<!-- team section -->
<?php



$doctors=[
[
    'name'=> 'Hennry',
    'title'=> 'Pediatrician',
    'img' =>  'images/team1.jpg'
],


[
    'name'=> 'jenni',
    'title'=> 'Surgeon',
    'img' =>  'images/team2.jpg'
],

[
  'name'=> 'morco',
  'title'=> 'Cardiologist',
  'img' =>  'images/team3.jpg'
]

];



$icons = [
  'icon1'=> '<i class="fa fa-facebook" aria-hidden="true"></i>',
  'icon2'=> '<i class="fa fa-twitter" aria-hidden="true"></i>',
  'icon4'=> '<i class="fa fa-linkedin" aria-hidden="true"></i>',
  'icon3'=> '<i class="fa fa-instagram" aria-hidden="true"></i>'

];

?>

<!-- team section ends -->

<!-- client section -->

<?php
$heading= 'Testimonial';

$clients =[
['name'=> 'Morijorch',
'title'=> 'Default model text',
'text' => 'editors now use Lorem Ipsum as their default model text, and a search for "lorem ipsum" will uncover many web sites still in their infancy. Variouseditors now use Lorem Ipsum as their default model text, and a search for "lorem ipsum" will uncover many web sites still in their infancy. Variouseditors now use Lorem Ipsum as their default model text, and a search for "lorem ipsum" will uncover many web sites still in their infancy. Various'


],


['name'=> 'Rochak',
'title'=> 'Default model text',
'text' => ' Variouseditors now use Lorem Ipsum as their default model text, and a search for "lorem ipsum" will uncover many web sites still in their infancy. Variouseditors now use Lorem Ipsum as their default model text, and a search for "lorem ipsum" will uncover many web sites still in their infancy. editors now use Lorem Ipsum as their default model text, and a search for "lorem ipsum" will uncover many web sites still in their infancy.'


],

['name'=> ' Brad Johns',
'title'=> 'Default model text',
'text' => ' Variouseditors now use Lorem Ipsum as their default model text, and a search for "lorem ipsum" will uncover many web sites still in their infancy. Variouseditors now use Lorem Ipsum as their default model text, and a search for "lorem ipsum" will uncover many web sites still in their infancy. editors now use Lorem Ipsum as their default model text, and a search for "lorem ipsum" will uncover many web sites still in their infancy.'

],
];
?>

<!-- client section ends -->


<!-- info section -->
<?php
$footer_address=[
    [
        'link' => ' ',
        'class' => 'fa fa-map-marker',
        'aria-hidden' => 'true',
        'title' => 'Location'
    ],
    [
        'link' => ' ',
        'class' => 'fa fa-phone',
        'aria-hidden' => 'true',
        'title' => 'Call +01 1234567890'
    ],
    [
        'link' => ' ',
        'class' => 'fa fa-envelope',
        'aria-hidden' => ' ',
        'title' => 'demo@gmail.com'
    ],
];
$footer_social_netw = [
    [
        'link' => ' ',
        'class' => 'fa fa-facebook'
    ],
    [
        'link' => ' ',
        'class' => 'fa fa-twitter'
    ],
    [
        'link' => ' ',
        'class' => 'fa fa-linkedin'
    ],
    [
        'link' => ' ',
        'class' => 'fa fa-instagram'
    ],
];
$footer_useful_links = [
    [
        'class' => 'active',
        'link' => 'index.php',
        'title' => 'Home'
    ],
    [
        'class' => ' ',
        'link' => 'about.php',
        'title' => 'About'
    ],
    [
        'class' => ' ',
        'link' => 'treatment.php',
        'title' => 'Treatment'
    ],
    [
        'class' => ' ',
        'link' => 'doctor.php',
        'title' => 'Doctors'
    ],
    [
        'class' => ' ',
        'link' => 'testimonial.php',
        'title' => 'Testimonial'
    ],
    [
        'class' => ' ',
        'link' => 'contact.php',
        'title' => 'Contact us'
    ],
];

$header_logo_link='images/logo.png';
$footer_end =[
    [
        'title'=> 'LATEST POSTS',
        'mini-box' => [
            [
                'img' => 'images/post1.jpg',
                "inner-title" => 'Normal distribution'
            ],
            [
                'img' => 'images/post2.jpg',
                "inner-title" => 'Normal distribution'
            ],
        ],
    ],
    [
        'title'=> 'News',
        'mini-box' => [
            [
                'img' => 'images/post3.jpg',
                "inner-title" => 'Normal distribution'
            ],
            [
                'img' => 'images/post4.png',
                "inner-title" => 'Normal distribution'
            ],
        ],
    ],
];
?>
<!-- info section end -->