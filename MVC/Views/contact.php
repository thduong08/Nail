<!DOCTYPE html>
<html lang="en">

<head>  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../MVC/views/css/contact.css">
    <!--boosstrap 5 icon-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
     <title>Document</title>
     <style type="text/css">
        .btn{
            background-color: #dca8a8;
            cursor: pointer;
            text-decoration: none;
            border: 2px solid #dca8a8;
        }
        .btn:hover{
            
            background-color: #dca8a8;
            border: 2px solid #dca8a8;
        }
        .btn:active{
            background-color: #ad4040 !important;
            border: 2px solid #ad4040 !important;
        }
        *{
            padding: 0;
             margin: 0;
            box-sizing: border-box;
        }
        .header-contact{
            text-align: center;

        }

        .main{
            width: 500px;
            padding: 45px;
            left: 50%;
            margin: 0 auto;
            border-radius: 10px;
            box-shadow: 0 0 1px 0;
        }
        .col-md-5{
            line-height: 60px;
        }
        .contactus{
            font-family: Vanitas-Extrabold;
        }


     </style>
</head>

<body>


    <!-- body -->
     <div class="container1">
        <div class="row">
            <div class="header-contact" style="font-family: Vanitas-Extrabold;">
                <h1>CONTACT</h1>
                <p>Thank you for your interest in Nanomart. We want to hear from you, if you have questions, comments or answers. Please contact us using the following information.</p>
            </div>
        </div>
    </div>
    <BR></BR>

    <div class ="container d-flex">
            
        <div class="row2">
            <div class="col-md-7">
                <form class="main">
                    <h2 class="text-center">Your Feedback?</h2>
                    <p class="text-center">We're here to help. Send us a note below and we'll get back to you.</p>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">First name *</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="First name">
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">last name *</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="last name">
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Your Email">
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Message</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>

                </form>
            </div>
        </div>

        <div class="row ms-5">
                <div>
                    <h1 style="font-family: Vanitas-Extrabold;" class="text-center">CONTACT US</h1>
                </div>
                <div class="d-flex">
                <div class="me-4"><h4>Nail Spa</h4></div>
                <div>
                <select class="form-select form-control" aria-label="Default select example">
                    <option selected>Monday</option>
                    <option value="1">Tuesday</option>
                    <option value="2">Wednesday</option>
                    <option value="3">Thursday</option>
                    <option value="4">Friday</option>
                    <option value="5">Saturday</option>
                    <option value="6">Sunday</option>
                </select>
                </div>
                </div>
                <div><h5>Opening hours are from Monday to Sunday</h5></div>
                <div>
                    <div>
                        <h5>SHOP AND SHIPPING INQUIRIES</h5>
                        <p>For shipping, product and other order inquiries, please contact: <a href="#">customerservice@miniluxe.com</a></p>
                    </div>
                    <div>
                        <h5>WHOLESALE</h5>
                        <p>For inquiries regarding wholesale purchases or opening a wholesale account to retail our products, please contact: <a href="#">wholesale@miniluxe.com</a></p>
                     </div>
                <br><br> <br><br><br>
                <div>
                    <p style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">19 Lê Thanh nghị<br>
                    SDT:01325323561<br>
                    Email: Contact@nailspa.com<br>
                    </p>
                </div>
                </div>  
                </div> 
            </div>
        </div>
    </div>  
</div>
 
</body>

</html>