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
    <title>Interpersonal Relationship</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" type="text/css" href="interpersonal.css"> -->
    <style>
          .heading{
    border-radius: 2%;
    height: 50%;
    padding-left: 20px;
    margin-top: 20px;
    border: solid rgb(226, 226, 226) 1px;
    background-color: rgb(226, 226, 226);
}
.form{
    margin: 50px;
}
.btn-block{
    margin-top: 40px;
}
.form-control{
    margin: 40px;
}
.bun{
    float: right;
    margin-top: 20px;
}
#clickMe{
    margin: 20px;
}
.clr{
    /* background-color: #9d2503; */
    color: #9d2503;
}

    </style>
    <script type="text/javascript">
        var i=4;
        var j=4;
        function add1()
            {   
                var name='achievement_'+j;
                var txtNewInputBox = document.createElement('input');        
                txtNewInputBox.setAttribute("type", "text");		
                txtNewInputBox.setAttribute("placeholder", "enter your achivement");
                txtNewInputBox.setAttribute("class", "form-control form-control-lg");
                txtNewInputBox.setAttribute("name", `${name}`);     
                document.getElementById("newElementId2").appendChild(txtNewInputBox);
                j++;
            }

            function add()
            {   
                var name='skill_'+i;
                var txtNewInputBox = document.createElement('input');        
                txtNewInputBox.setAttribute("type", "text");		
                txtNewInputBox.setAttribute("placeholder", "enter your skill");
                txtNewInputBox.setAttribute("class", "form-control form-control-lg");
                txtNewInputBox.setAttribute("name", `${name}`);     
                document.getElementById("newElementId1").appendChild(txtNewInputBox);
                i++;
            }
    </script>
</head>
<body>
    <div class="container">   
        <form action="<?php echo base_url('dash/post_interpersonal');?>" method="POST">
            <div class="col-xs-6">
                <p><h3 class="clr" style="margin-left: 60px">Add your Interpersonal skills</h3></p>
                <input class="form-control form-control-lg" type="text" placeholder="enter your skill" name="skill_1">
                <input class="form-control form-control-lg" type="text" placeholder="enter your skill" name="skill_2">
                <input class="form-control form-control-lg" type="text" placeholder="enter your skill" name="skill_3">
                <div id="newElementId1"></div>
                <button type="button" class="btn btn-primary btn-sm btn-block" style="margin-left: 30px;" onclick="add()">Add More Skills</button>
                
            </div>

            <div class="col-xs-6">
                <p><h3 class="clr" style="margin-left: 60px">Add your Achivements</h3></p>
                <input class="form-control form-control-lg" type="text" placeholder="enter your achivement" name="achievement_1">
                <input class="form-control form-control-lg" type="text" placeholder="enter your achivement" name="achievement_2">
                <input class="form-control form-control-lg" type="text" placeholder="enter your achivement" name="achievement_3">
                <div id="newElementId2"></div>
                <button style="margin-left: 40px" type="button" class="btn btn-primary btn-sm btn-block" onclick="add1()">Add More Achivements</button>
                
            </div>
            
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