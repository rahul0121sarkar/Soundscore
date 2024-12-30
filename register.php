<!DOCTYPE html>
<html lang="en">
<?php
include("include/header.php");
?>
  
  <?php
if (isset($_REQUEST['success'])) {
    echo "<script>
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    color:'primary',
                    title: 'we recieved your message!!!',
                    showConfirmButton: false,
                    timer: 1500
                })
                </script>";
}
?>



            <div class="container">
                <div class="sec">

             
                <div class="card-header">
                    <div class="card-header">Inquiry Form</div>
                    <div class="card-body">
                    <form action="insert.php" method="post" enctype="multipart/form-data">
            

           
            <div class="row">
    
                <div class="col-md-6">
                    <label for="name">Name</label>
                    <input type="text" name="name"  id="name" class="form-control" placeholder="Enter your name">
                </div>
        

                <div class="col-md-6">
                    <label for="contact">Contact</label>
                    <input type="text" name="contact"  id="name" placeholder="Enter your mobile number " class="form-control">
                </div>
                
               
            </div>
    
            <br>
            <div class="row">
    
                 <div class="col-md-6">
                    <label for="product">Product</label>
                    <select name="product" id="product" class="form-control">
                        <option value="">Select Product</option>
                        <option value="bash 1">Base 1</option>
                        <option value="bash 1 pro">Bash 1 pro</option>
                       
                    </select>
                </div>



                <div class="col-md-6">
                    <label for="email">Email</label>
                    <input type="text" name="email"  id="name" placeholder="Enter your Email " class="form-control">
                </div>

               
            </div>
            

            <div class="row">
            <div class="col-md-12">
                    <label for="message">message</label>
                    <textarea name="message" id="" cols="30" rows="10" placeholder="your message write here..." class="form-control"></textarea>
                </div>
            </div>
            </div>

                    </div>

                <div class="card-footer">
                <button type="submit" class="reg">Submit</button>
               <button type="reset" class="regre">Reset</button>
               </form>
                </div>    
                </div>


            </div>

          
<?php
include("include/footer.php");
?>
</body>
</html>