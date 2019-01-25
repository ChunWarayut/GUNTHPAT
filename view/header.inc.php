<meta http-equiv="X-UA-Compatible" content="IE=edge">   
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<title><?PHP if($lng == "TH"){ echo $page['page_title_th']; }else{ echo $page['page_title_en'];} ?></title>
<link rel="icon" href="img_upload/setting/<?PHP if($setting['setting_logo'] != ""){ echo $setting['setting_logo']; }else{ echo "default-logo.png"; } ?>" type="image/png">
<meta name="Keywords" content="<?PHP if($lng == "TH"){ echo $page['page_tag_th']; }else{ echo $page['page_tag_en'];} ?>">
<meta name="Description" content="<?PHP if($lng == "TH"){ echo $page['page_description_th']; }else{ echo $page['page_description_en']; } ?>">

<!-- Custom Fonts -->
<link rel="stylesheet" href="template/frontend/font/BebasNeue/font.css">
<link rel="stylesheet" href="template/frontend/font/gothic/font.css">
<link href="https://fonts.googleapis.com/css?family=Bree+Serif" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Muli:400,600,700" rel="stylesheet"> 

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

<!-- Bootstrap Core CSS -->
<link rel="stylesheet" href="template/frontend/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="template/frontend/slick/slick.css">
<link rel="stylesheet" href="template/frontend/css/sidenav.css">
<link rel="stylesheet" href="template/frontend/css/style.css">

<!-- <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"> -->

<script src="template/frontend/js/jquery.min.js"></script>
<script src="template/frontend/js/bootstrap.min.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-131153901-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-131153901-1');
</script>