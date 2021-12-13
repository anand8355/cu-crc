<!-- // Team Mentor->Mr. Anand kumar 
// Team Name->Harroxx
// Team Members->
// 1-Harsh Tyagi (CSE)
// 2-Kanak goel
// 3-Vaibhav
// 4-Ruchi
// 5-Shreya

// Technology Used->
// Bootstrap 4,Html ,CSS ,CodeIgniter,Javascript  -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Co/Extra Credentials</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="training_certification.css">
    <script type="text/javascript">
        var i=4;
            function add()
            {   
                var name='co_curricular_activity_'+i;
                var txtNewInputBox = document.createElement('input');        
                txtNewInputBox.setAttribute("type", "text");		
                txtNewInputBox.setAttribute("placeholder", "enter your credentials");
                txtNewInputBox.setAttribute("class", "form-control form-control-lg");
                txtNewInputBox.setAttribute("name", `${name}`);     
                document.getElementById("newElementId").appendChild(txtNewInputBox);
                i++;
            }
    </script>
</head>
<body>
    <div class="container">
        <div class="form">
            <p><h3 style="color: #9d2503">Co-Curricular or Extra Credentials</h3></p>
        <form action="<?php echo base_url('dash/post_cocurricular');?>" method="POST">
                <input class="form-control form-control-lg" type="text" placeholder="enter your credentials" name="co_curricular_activity_1 ">
                <input class="form-control form-control-lg" type="text" placeholder="enter your credentials" name="co_curricular_activity_2">
                <input class="form-control form-control-lg" type="text" placeholder="enter your credentials" name="co_curricular_activity_3">
                <div id="newElementId"></div>
                <button style="margin-left: 40px" type="button" class="btn btn-primary btn-sm btn-block" onclick="add()">Add More Credentials</button>


                <div class="form-group row"></div>            
                <div class="form-group row"></div>
                <div class="form-group row"></div>
                <div class="form-group row"></div>
                <div class="form-group row"></div>
                <div class="buttons col-md-12">    
                    <button type="submit" class="btn btn-success " style="float: right" onclick="validate()">SAVE & NEXT &rarr;</button>   
                </div>
            </form>
        </div>
    </div>
</body>
</html>
<!-- // Team Mentor->Mr. Anand kumar 
// Team Name->Harroxx
// Team Members->
// 1-Harsh Tyagi (CSE)
// 2-Kanak goel
// 3-Vaibhav
// 4-Ruchi
// 5-Shreya

// Technology Used->
// Bootstrap 4,Html ,CSS ,CodeIgniter,Javascript  -->