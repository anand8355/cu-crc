<style>
  

a,a:hover{
    decoration:none;
    color:black
}
.active{
    color: red;
}
</style>


        <div class="col-md-3 h-100" style="margin-top:80px">
            <section class="list" style="background-color:white">
                <ul class="nav-list">
                    <a href="<?php echo base_url('dash/index');?>">
                        <li class = "list-group-item list-group-item-info" height="10px"> 
                            Personal Information
                        </li>
                    </a>
                    <a href="<?php echo base_url('dash/qualfication');?>" >
                         <li class = "list-group-item list-group-item-info">
                            Qualifications Details (10th & 12th)
                         </li>
                    </a>
                    <a href="<?php echo base_url('dash/academic1');?>">
                        <li class = "list-group-item list-group-item-success">
                            Diploma/Graduation Details
                        </li>
                    </a>
                    <a href="<?php echo base_url('dash/academic2');?>">
                        <li class = "list-group-item list-group-item-success">
                            Post Gradulation/Other Details
                        </li>
                    </a>
                    <a href="<?php echo base_url('dash/amcat');?>">
                        <li class = "list-group-item list-group-item-success">
                            AMCAT Details
                        </li>
                    </a>
                   
                    
                </ul>
                </section>	
        </div>
<!-- <script>
     $('.nav-list li').click(function() {
    $('.nav-list li.active').parent().removeClass('active');
    $(this).addClass('active');
});
</script> -->


