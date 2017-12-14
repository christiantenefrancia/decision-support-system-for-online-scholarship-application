<!DOCTYPE html>
<html> 
    <head>
        <link rel="stylesheet" href="css/responsiveslides.css">
        <link rel="stylesheet" href="css/demo.css">
        <script src="js/responsiveslides.min.js"></script>
        <script src="js/responsiveslides.js"></script>
        <link rel="stylesheet" type="text/css" href="css/semantic.css">
		<script type="text/javascript" src="js/semantic.js"></script>
        
        <script>
    // You can also use "$(window).load(function() {"
    $(function () {
      $("#slider4").responsiveSlides({
        auto: true,
        pager: false,
        nav: true,
        speed: 500,
        namespace: "callbacks"
      });
    });
            
  </script>
    </head>   
<body> 
    
     <div id="wrapper">
    <div class="callbacks_container">
      <ul class="rslides" id="slider4">
          
          <?php
                $query = mysql_query("select name, details from scholarship");
                while($row = mysql_fetch_array($query)){
            ?>
                <li>
                    <div class="ui raised segment" style="height: 18%; background: white;">
                        <h3 style="padding-left: 6%; padding-right: 6%;"><?php echo $row['details']; ?>
                        </h3>
                    </div>
                    <br>
                    <br>
                  <p class="caption"><?php echo $row['name']; ?></p>
                </li>   
                
            <?php   }

            ?>
          
<!--
        <li>
          <div class="ui floating message" style="height: 22%; background: white;"><h3 style="padding-left: 6%; padding-right: 6%;">One of the top 20 research-led universities in the country, Mindanao State University is renowned for the relevance of its work, driven by society's need for solutions to real-life issues.</h3></div>
            <br>
            <br>
          <p class="caption">College Bound Program</p>
        </li>
          
           <li>
          <div class="ui floating message" style="height: 22%; background: white;"><h3 style="padding-left: 6%; padding-right: 6%;">One of the top 20 research-led universities in the country, Mindanao State University is renowned for the relevance of its work, driven by society's need for solutions to real-life issues.</h3></div>
            <br>
            <br>
          <p class="caption">CHED Student Financial Assistance Program (STUFAP)</p>
        </li>
           <li>
          <div class="ui floating message" style="height: 22%; background: white;"><h3 style="padding-left: 6%; padding-right: 6%;">One of the top 20 research-led universities in the country, Mindanao State University is renowned for the relevance of its work, driven by society's need for solutions to real-life issues.</h3></div>
            <br>
            <br>
          <p class="caption">Coco Foundation Scholarship</p>
        </li>
           <li>
          <div class="ui floating message" style="height: 22%; background: white;"><h3 style="padding-left: 6%; padding-right: 6%;">One of the top 20 research-led universities in the country, Mindanao State University is renowned for the relevance of its work, driven by society's need for solutions to real-life issues.</h3></div>
            <br>
            <br>
          <p class="caption">Cultural Community Grant (CCG)</p>
        </li>
           <li>
          <div class="ui floating message" style="height: 22%; background: white;"><h3 style="padding-left: 6%; padding-right: 6%;">One of the top 20 research-led universities in the country, Mindanao State University is renowned for the relevance of its work, driven by society's need for solutions to real-life issues.</h3></div>
            <br>
            <br>
          <p class="caption">Darangen Cultural Troupe</p>
        </li>
           <li>
          <div class="ui floating message" style="height: 22%; background: white;"><h3 style="padding-left: 6%; padding-right: 6%;">One of the top 20 research-led universities in the country, Mindanao State University is renowned for the relevance of its work, driven by society's need for solutions to real-life issues.</h3></div>
            <br>
            <br>
          <p class="caption">Dean's List/Chancellor's List/President's List</p>
        </li>
           <li>
          <div class="ui floating message" style="height: 22%; background: white;"><h3 style="padding-left: 6%; padding-right: 6%;">One of the top 20 research-led universities in the country, Mindanao State University is renowned for the relevance of its work, driven by society's need for solutions to real-life issues.</h3></div>
            <br>
            <br>
          <p class="caption">Department of Science and Technology (DOST)</p>
        </li>
           <li>
          <div class="ui floating message" style="height: 22%; background: white;"><h3 style="padding-left: 6%; padding-right: 6%;">One of the top 20 research-led universities in the country, Mindanao State University is renowned for the relevance of its work, driven by society's need for solutions to real-life issues.</h3></div>
            <br>
            <br>
          <p class="caption">Expanded Student's Grants-in-Aid Program for Poverty Alleviation</p>
        </li>
           <li>
          <div class="ui floating message" style="height: 22%; background: white;"><h3 style="padding-left: 6%; padding-right: 6%;">One of the top 20 research-led universities in the country, Mindanao State University is renowned for the relevance of its work, driven by society's need for solutions to real-life issues.</h3></div>
            <br>
            <br>
          <p class="caption">Priority Program Scholarship (PPS)</p>
        </li>
           <li>
          <div class="ui floating message" style="height: 22%; background: white;"><h3 style="padding-left: 6%; padding-right: 6%;">One of the top 20 research-led universities in the country, Mindanao State University is renowned for the relevance of its work, driven by society's need for solutions to real-life issues.</h3></div>
            <br>
            <br>
          <p class="caption">Sajahatra Bangsamoro Study Grant</p>
        </li>
           <li>
          <div class="ui floating message" style="height: 22%; background: white;"><h3 style="padding-left: 6%; padding-right: 6%;">One of the top 20 research-led universities in the country, Mindanao State University is renowned for the relevance of its work, driven by society's need for solutions to real-life issues.</h3></div>
            <br>
            <br>
          <p class="caption">Sining Kambayoka Grant</p>
        </li>
           <li>
          <div class="ui floating message" style="height: 22%; background: white;"><h3 style="padding-left: 6%; padding-right: 6%;">One of the top 20 research-led universities in the country, Mindanao State University is renowned for the relevance of its work, driven by society's need for solutions to real-life issues.</h3></div>
            <br>
            <br>
          <p class="caption">Sining Pananadem Grant</p>
        </li>
           <li>
          <div class="ui floating message" style="height: 22%; background: white;"><h3 style="padding-left: 6%; padding-right: 6%;">One of the top 20 research-led universities in the country, Mindanao State University is renowned for the relevance of its work, driven by society's need for solutions to real-life issues.</h3></div>
            <br>
            <br>
          <p class="caption">Special Muslim Study Grant (SPL)</p>
        </li>
           <li>
          <div class="ui floating message" style="height: 22%; background: white;"><h3 style="padding-left: 6%; padding-right: 6%;">One of the top 20 research-led universities in the country, Mindanao State University is renowned for the relevance of its work, driven by society's need for solutions to real-life issues.</h3></div>
            <br>
            <br>
          <p class="caption">Sports Development Study Grant</p>
        </li>
           <li>
          <div class="ui floating message" style="height: 22%; background: white;"><h3 style="padding-left: 6%; padding-right: 6%;">One of the top 20 research-led universities in the country, Mindanao State University is renowned for the relevance of its work, driven by society's need for solutions to real-life issues.</h3></div>
            <br>
            <br>
          <p class="caption">Students Welfare Assistance Program (SWAP)</p>
        </li>
           <li>
          <div class="ui floating message" style="height: 22%; background: white;"><h3 style="padding-left: 6%; padding-right: 6%;">One of the top 20 research-led universities in the country, Mindanao State University is renowned for the relevance of its work, driven by society's need for solutions to real-life issues.</h3></div>
            <br>
            <br>
          <p class="caption">Valedictorian/Salutatorian Entrance Scholarship</p>
        </li>
-->
      </ul>
    </div>
    </div>
</body> 
</html>