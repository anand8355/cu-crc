<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Resume Format</title>
    <!-- <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"> -->
    <!-- <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets/css/resume.css">
   
     <link rel="stylesheet" media="screen" type="text/css" href="<?php echo base_url();?>assets/css/resume.css" /><br />
     <link rel="stylesheet" media="print" type="text/css" href="<?php echo base_url();?>assets/css/resume.css" /><br /> -->
	<style>
<!-- /*This project is Designed and Developed by Team AKH in 2020 at ABES ENgineering College.
Team Name -> AKH
Mentor -> Mr. Anand Kumar Srivastava (Asst. Professor)
Members -> 1. Harsh Tyagi(CSE, 2017-2021)     
           2. Kanak Goel (CSE, 2017-2021)   
           3. Vaibhav Ojha(CSE, 2017-2021)
 Technologies Used -> 
 1. HTML5
 2. CSS3
 3. PHP 7
 4. Javascript
 5. Bootstrap 3.5
 6. Codeigniter*/  -->

.resume{
    padding-top: 20px;
}
.info{
    width: 50%;
    border: solid black 1px;
    padding-left: 10px;
}
.career{
    border-radius: 2%;
    height: 50%;
    padding-top:0px;
    padding-bottom:0px;
    padding-left: 20px;
    margin-top: 20px;
    border: solid rgb(226, 226, 226) 1px;
    background-color: rgb(226, 226, 226);
    /* background-color: red; */
}
h3{
    margin:0;
}
h2{
    margin:5px;
}
h4{
    margin:5px;
}
.list{
    font-size: 1.3em;
    padding-left: 50px;
    list-style-type: georgian;
}
p{
    font-size: 1.2em;
}


td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}
.btn{
    background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  cursor:pointer;
}
@media Print{
    .btn{
        display:none;
    }
}
.container{
    
    margin-left:25px;
    margin-right:25px
}
p{
    text-align: justify;
    
}

body{
    
	-webkit-print-color-adjust: exact;
}
	</style>
</head>
<body>
    <div class="container">
    <!-- echo"<pre>";
    <?php print_r($personal)?>
    <?php print_r($skills)?>
    <?php print_r($academic)?>
    <?php print_r($academic2)?>
    <?php print_r($training)?>
    <?php print_r($interpersonal)?>
    <?php print_r($co_curricular)?>
    <?php print_r($reference)?> -->
        <div class="resume ">
            <div class="info">
                <h2><?php echo $personal['name']?></h2>
                <h3><?php echo $academic['course_name']?>,<?php echo $academic['course_branch']?></h3>
                <h4>contact no.-<?php echo $personal['mobile_no']?></h4>
                <h4>Email:-<?php echo $personal['email_id']?></h4>
                <h4>LinkedIn:-<?php echo $personal['linkedin']?></h4>
            </div>
            <div class="career">
                <h3 >CAREER OBJECTIVE</h3>
            </div>
            <p class="text-justify"><?php echo $skills['career_objective_description']?></p>
            <div class="career">
                <h3>ACADEMIC CREDENTIALS</h3>
            </div>
            <div class="table">
                <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th scope="col">Qualification</th>
                        <th scope="col">Board/University</th>
                        <th scope="col">Year</th>
                        <th scope="col">Percentage</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row"><?php echo $academic['course_name']?></th>
                        <td><?php echo $academic['course_board']?></td>
                        <td><?php echo $academic['course_passing_year']?></td>
                        <td><?php echo $academic['course_percentage']?></td>
                      </tr>
                      <tr>
                        <th scope="row">Intermediate</th>
                        <td><?php echo $academic['12_board']?></td>
                        <td><?php echo $academic['12_passing_year']?></td>
                        <td><?php echo $academic['12_percentage']?></td>
                      </tr>
                      <tr>
                        <th scope="row">High School</th>
                        <td><?php echo $academic['10_board']?></td>
                        <td><?php echo $academic['10_passing_year']?></td>
                        <td><?php echo $academic['10_percentage']?></td>
                      </tr>
                    </tbody>
                  </table>


               
            </div>
            <div class="career">
                <h3>TECHNICAL PROFICIENCIES</h3>
            </div>
            <div class="list">
                <ul>
                    <li><?php echo $skills['skill_1']?></li>
                    <li><?php echo $skills['skill_2']?></li>
                    
                </ul>
            </div>
            <div class="career">
                <h3>EXPERIRNTIAL LEARNING (SUMMER INTERNSHIP PROGRAM)</h3>
            </div>
            <div class="list">
                <ul>
                    <li>Company Name &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:-<?php echo $training['company_name']?></li>
                    <li>Project Title &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:-<?php echo $training['project_title']?></li>
                    <li>Duration &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:-<?php echo $training['duration']?></li>
                </ul>
            </div>
            <div class="career">
                <h3> TRAINING & CERTIFICATION </h3>
            </div>
            <div class="list">
                <ul>
                    <li>Abcdefghijklmn</li>
                    <li>Abcdefghijklmn</li>
                </ul>
            </div>
            <div class="career">
                <h3>PROJECT REPORT </h3>
            </div>
            <div class="list">
                <ul>
                    <li><?php echo $training['project_description']?></li>
                </ul>
            </div>
            <div class="career">
                <h3>INTERPERSONAL SKILL</h3>
            </div>
            <div class="list">
                <ul>
                    <li><?php echo $interpersonal['skill_1']?></li>
                    <li><?php echo $interpersonal['skill_2']?></li>
                </ul>
            </div>
            <div class="career">
                <h3>ACHIEVEMENTS</h3>
            </div>
            <div class="list">
                <ul>
                    <li><?php echo $interpersonal['achievement_1']?></li>
                    <li><?php echo $interpersonal['achievement_2']?></li>
                </ul>
            </div>
            <div class="career">
                <h3>CO-/EXTRA/CURRICULAR ACTIVITIES</h3>
            </div>
            <div class="list">
                <ul>
                    <li>Abcdefghijklmn</li>
                    <li>Abcdefghijklmn</li>
                </ul>
            </div>
            <div class="career">
                <h3>REFERENCES</h3>
            </div>
            <p class="text-justify"> The standard chunk of Lorem Ipsum used since the 1500s is 
                reproduced below for those interested. Sections 1.10.32 
                and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero 
                are also reproduced in their exact original form, accompanied 
                by English versions from the 1914 translation by H. Rackham.</p>
        </div>
        <p>Place:________________</p>
        <p>Date:</p>
    </div>
    <div class="container">
    <center><button onclick="CallPrint()" class="btn btn-primary my-2 " >Print</button></center>
    </div>
    <script>
  function CallPrint() {
         window.print();
        }
</script>
</body>

</html>
<!-- /*This project is Designed and Developed by Team AKH in 2020 at ABES ENgineering College.
Team Name -> AKH
Mentor -> Mr. Anand Kumar Srivastava (Asst. Professor)
Members -> 1. Harsh Tyagi(CSE, 2017-2021)     
           2. Kanak Goel (CSE, 2017-2021)   
           3. Vaibhav Ojha(CSE, 2017-2021)
 Technologies Used -> 
 1. HTML5
 2. CSS3
 3. PHP 7
 4. Javascript
 5. Bootstrap 3.5
 6. Codeigniter*/  -->
